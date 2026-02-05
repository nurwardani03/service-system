<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PermintaanLayananController extends Controller
{
    public function index()
    {
        return view('pages.permintaan-layanan');
    }

    public function kirim(Request $request)
    {
        $data = $request->validate([
            'nama_depan'    => 'required',
            'nama_belakang' => 'required',
            'email'         => 'required|email',
            'handphone'     => 'required',
            'komentar'      => 'required',
        ]);

        $html = "
        <h2 style='color:#1f2b59'>Permintaan Layanan & Penjualan Baru</h2>

        <table cellpadding='8' cellspacing='0' width='100%' style='border-collapse:collapse'>
          <tr>
            <td width='30%'><strong>Nama</strong></td>
            <td>{$data['nama_depan']} {$data['nama_belakang']}</td>
          </tr>
          <tr>
            <td><strong>Email</strong></td>
            <td>{$data['email']}</td>
          </tr>
          <tr>
            <td><strong>No Handphone</strong></td>
            <td>{$data['handphone']}</td>
          </tr>
        </table>

        <hr>

        <p><strong>Komentar:</strong></p>
        <p style='white-space:pre-line'>{$data['komentar']}</p>
        ";

        Mail::html($html, function ($message) use ($data) {
            $message->to('megasejahteraperkasa11@gmail.com')
                    ->subject('Permintaan Layanan & Penjualan')
                    ->replyTo(
                        $data['email'],
                        $data['nama_depan'].' '.$data['nama_belakang']
                    );
        });

        return back()->with('success', 'Permintaan Anda berhasil dikirim.');
    }
}
