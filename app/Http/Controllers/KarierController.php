<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KarierController extends Controller
{
    /**
     * Halaman utama karier
     */
    public function index()
    {
        return view('pages.karier.index');
    }

    /**
     * Halaman daftar posisi terbuka
     */
    public function posisi()
    {
        return view('pages.karier.posisi');
    }

    /**
     * Halaman detail posisi (klik loker)
     */
    public function detail($slug)
    {
        $jobs = [
            'petugas-taman' => [
                'title' => 'Petugas Taman – Landscaping Crew',
                'location' => 'Tangerang, Indonesia',
                'posted' => 'Senin, 27 November 2025',
                'req' => 'MSP-001',
            ],

            'pengemudi-pribadi' => [
                'title' => 'Pengemudi Pribadi – Personal Driver',
                'location' => 'Jakarta, Indonesia',
                'posted' => 'Senin, 27 November 2025',
                'req' => 'MSP-002',
            ],

            'teknisi-gedung' => [
                'title' => 'Teknisi Pemeliharaan Gedung – Building Maintenance Technician',
                'location' => 'Tangerang, Indonesia',
                'posted' => 'Senin, 27 November 2025',
                'req' => 'MSP-003',
            ],
        ];

        // jika slug tidak ada → 404
        abort_if(!isset($jobs[$slug]), 404);

        return view(
            'pages.karier.posisi.' . $slug,
            ['job' => $jobs[$slug]]
        );
    }

    /**
     * Kirim form lamaran ke email HRD
     */
    public function kirim(Request $request)
    {
        $request->validate([
            'nama_depan'    => 'required|string',
            'nama_belakang' => 'required|string',
            'email'         => 'required|email',
            'handphone'     => 'required|string',
            'kota'          => 'nullable|string',
            'provinsi'      => 'nullable|string',
        ]);

        Mail::raw(
            "LAMARAN PEKERJAAN BARU\n\n" .
            "Nama      : {$request->nama_depan} {$request->nama_belakang}\n" .
            "Email     : {$request->email}\n" .
            "Handphone : {$request->handphone}\n" .
            "Kota      : {$request->kota}\n" .
            "Provinsi  : {$request->provinsi}\n",
            function ($message) {
                $message->to('megasejahteraperkasa11@gmail.com')
                        ->subject('Lamaran Pekerjaan Baru');
            }
        );

        return back()->with('success', 'Formulir berhasil dikirim.');
    }

    /**
 * Form lamaran dari posisi terbuka
 */
public function lamarPosisi($req)
{
    $jobs = [
        'MSP-001' => [
            'posisi' => 'Petugas Taman – Landscaping Crew',
            'lokasi' => 'Tangerang, Indonesia',
        ],
        'MSP-002' => [
            'posisi' => 'Pengemudi Pribadi – Personal Driver',
            'lokasi' => 'Jakarta, Indonesia',
        ],
        'MSP-003' => [
            'posisi' => 'Teknisi Pemeliharaan Gedung',
            'lokasi' => 'Tangerang, Indonesia',
        ],
    ];

    abort_if(!isset($jobs[$req]), 404);

    return view('pages.karier.posisi.lamar', [
        'req'    => $req,
        'posisi' => $jobs[$req]['posisi'],
        'lokasi' => $jobs[$req]['lokasi'],
    ]);
}

/**
     * KIRIM LAMARAN POSISI TERBUKA
     * ===============================
     */
    public function kirimPosisi(Request $request)
    {
        // ================= VALIDASI =================
        $request->validate([
            'req'    => 'required|string',
            'posisi' => 'required|string',

            // DATA PRIBADI
            'email'         => 'required|email',
            'email_confirm' => 'required|same:email',
            'nama_depan'    => 'required|string|max:100',
            'nama_belakang' => 'required|string|max:100',
            'handphone'     => 'required|string|max:20',

            // FILE
            'cv'               => 'required|file|mimes:pdf,doc,docx|max:5120',
            'surat_lamaran'    => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'dokumen_tambahan' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        // ================= EMAIL BODY (RAPI) =================
            $line = function ($label, $value = '') {
                return str_pad($label, 15, ' ', STR_PAD_RIGHT) . ": {$value}\n";
            };

            $emailBody =
                "LAMARAN POSISI TERBUKA\n\n" .
                $line('Posisi', $request->posisi) .
                $line('Kode Lowongan', $request->req) . "\n" .

                "=== DATA PRIBADI ===\n" .
                $line('Nama', $request->nama_depan . ' ' . $request->nama_belakang) .
                $line('Email', $request->email) .
                $line('LinkedIn', $request->linkedin) .
                $line('Handphone', $request->handphone) .
                $line('Alamat', $request->alamat) .
                $line('Kota', $request->kota) .
                $line('Provinsi', $request->provinsi) .
                $line('Kode Pos', $request->kode_pos) . "\n" .

                "=== RIWAYAT EDUKASI ===\n" .
                $line('Gelar', $request->gelar) .
                $line('Jurusan', $request->jurusan) .
                $line('Sekolah', $request->sekolah) .
                $line('GPA', $request->gpa) .
                $line('Mulai', $request->tgl_mulai) .
                $line('Selesai', $request->tgl_selesai) . "\n" .

                "=== RIWAYAT PEKERJAAN ===\n" .
                $line('Posisi', $request->posisi_kerja) .
                $line('Perusahaan', $request->perusahaan) .
                $line('Divisi', $request->divisi) .
                "Alasan Keluar    :\n{$request->alasan_keluar}\n\n" .
                "Tugas & Tanggung Jawab :\n{$request->tugas}\n";

        // ================= KIRIM EMAIL + ATTACHMENT =================
        Mail::raw($emailBody, function ($message) use ($request) {
            $message->to('megasejahteraperkasa11@gmail.com')
                    ->subject('Lamaran Posisi Terbuka - ' . $request->posisi);

            if ($request->hasFile('cv')) {
                $message->attach(
                    $request->file('cv')->getRealPath(),
                    ['as' => 'CV_' . $request->nama_depan . '.' . $request->file('cv')->getClientOriginalExtension()]
                );
            }

            if ($request->hasFile('surat_lamaran')) {
                $message->attach($request->file('surat_lamaran')->getRealPath());
            }

            if ($request->hasFile('dokumen_tambahan')) {
                $message->attach($request->file('dokumen_tambahan')->getRealPath());
            }
        });

        return response()->json([
            'status'  => 'success',
        ]);
    }
}