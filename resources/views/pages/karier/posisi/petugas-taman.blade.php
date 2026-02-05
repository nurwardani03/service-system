@extends('layouts.app')
@section('title', $job['title'])

@section('content')

<style>
  /* ===== NAVBAR ACTIVE ===== */
  .nav-karier.active,
  .nav-karier:hover {
    color: #1f2b59;
    font-weight: 700;
    position: relative;
  }

  .nav-karier.active::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #1f2b59;
    border-radius: 2px;
  }

  /* ===== BASE ===== */
  .badge {
    background: #1f2b59;
    color: #fff;
    font-size: 12px;
    padding: 4px 10px;
    border-radius: 9999px;
    font-weight: 600;
  }

  .section-title {
    font-weight: 700;
    color: #1f2b59;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 16px;
  }

  .checklist li {
    display: flex;
    gap: 10px;
    margin-bottom: 8px;
  }

  /* ===== ACTION BUTTON ===== */
 .btn-lamar {
    background: #18204A;
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 8px;
    transition: all .2s ease;
  }

  .btn-lamar:hover {
    background: #3E4568;
    transform: translateY(-1px);
  }

  .btn-bookmark {
    width: 34px;
    height: 34px;
    border-radius: 8px;
    border: 1px solid #d1d5db;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #374151;
    transition: all .2s ease;
  }

  .btn-bookmark:hover {
    background: #f3f4f6;
    color: #1f2b59;
    transform: scale(1.05);
  }

  /* ===== BACK BUTTON (BOTTOM) ===== */
  .btn-back-bottom {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 14px 26px;
    border-radius: 14px;
    background: #ffffff;
    border: 2px solid #1f2b59;
    color: #1f2b59;
    font-weight: 700;
    transition: all .3s ease;
  }

  .btn-back-bottom:hover {
    background: #1f2b59;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(31,43,89,.35);
  }
</style>

<section class="mt-[88px] py-20 bg-[#f3f3f3]">
  <div class="max-w-4xl mx-auto px-6">

    {{-- CARD --}}
    <div class="bg-[#e5e5e5] rounded-lg p-8">

      {{-- TITLE --}}
      <h1 class="text-xl md:text-2xl font-bold text-[#1f2b59] mb-1">
        {{ $job['title'] }}
      </h1>

      <p class="text-sm text-gray-600 mb-3">
        {{ $job['location'] }}
      </p>

      {{-- ACTION --}}
      <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('karier.posisi.lamar', $job['req']) }}" class="btn-lamar">
            Lamar
        </a>

        <button class="btn-bookmark" title="Simpan">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path d="M6 3h12a1 1 0 0 1 1 1v17l-7-4-7 4V4a1 1 0 0 1 1-1z"/>
          </svg>
        </button>
      </div>

      <p class="text-sm text-gray-600 mb-6">
        Diposting: {{ $job['posted'] }}
      </p>

      {{-- DESKRIPSI --}}
      <p class="text-gray-700 leading-relaxed text-base mb-8">
        <span class="text-green-700 font-semibold">LOWONGAN SEGERA</span>:
        Petugas Taman (Landscaping Crew)! 🌱✨<br>
        Mega Sejahtera Perkasa membuka kesempatan bagi Anda yang memiliki
        ketertarikan pada dunia pertamanan dan ingin bekerja dalam lingkungan
        luar ruang yang dinamis. Bergabunglah dengan tim kami untuk menjaga
        keindahan, kerapian, dan kesehatan lanskap di area fasilitas klien kami.
      </p>

      {{-- INFORMASI --}}
      <div class="mb-8">
        <div class="section-title">📄 Informasi Singkat</div>
        <div class="grid grid-cols-2 gap-y-2 text-sm text-gray-700">
          <div>Posisi</div><div>: Petugas Taman</div>
          <div>Lokasi</div><div>: Jakarta Pusat</div>
          <div>Jadwal</div><div>: Senin – Sabtu</div>
          <div>Jam Kerja</div><div>: 08.00 – 16.00</div>
          <div>Status</div><div>: Full-Time</div>
          <div>Upah</div><div>: Kompetitif (UMR Jakarta)</div>
        </div>
      </div>

      {{-- MENGAPA --}}
      <div class="mb-8">
        <div class="section-title">⭐ Mengapa Anda Cocok di Posisi Ini</div>
        <ul class="checklist text-sm text-gray-700">
          <li>✔️ Bekerja di lingkungan outdoor yang sehat dan produktif</li>
          <li>✔️ Kesempatan berkembang dalam bidang landscaping profesional</li>
          <li>✔️ Pelatihan dasar akan diberikan untuk kandidat baru</li>
        </ul>
      </div>

      {{-- TUGAS --}}
      <div class="mb-8">
        <div class="section-title">🛠️ Tugas Utama</div>
        <ul class="checklist text-sm text-gray-700">
          <li>✔️ Merawat taman dan area lanskap</li>
          <li>✔️ Penyiraman, pemangkasan, dan penanaman</li>
          <li>✔️ Menjaga kebersihan dan estetika area hijau</li>
        </ul>
      </div>

      {{-- SYARAT --}}
      <div class="mb-10">
        <div class="section-title">✅ Persyaratan</div>
        <ul class="checklist text-sm text-gray-700">
          <li>✔️ Sehat jasmani dan mampu bekerja di luar ruangan</li>
          <li>✔️ Rajin, teliti, dan menyukai pekerjaan fisik</li>
          <li>✔️ Pengalaman landscaping menjadi nilai tambah</li>
        </ul>
      </div>

      <p class="text-sm font-semibold text-gray-700">
        Req# {{ $job['req'] }}
      </p>
    </div>

    {{-- MAP --}}
    <div class="mt-10 rounded-lg overflow-hidden shadow">
      <iframe
        src="https://www.google.com/maps?q=Stasiun+Klimatologi+Tangerang+Selatan+BMKG&output=embed"
        class="w-full h-[360px]"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

  </div>
</section>

@endsection
