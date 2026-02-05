@extends('layouts.app')
@section('title', $job['title'])

@section('content')

<style>
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

  .checklist svg {
    width: 18px;
    height: 18px;
    color: #22c55e;
    flex-shrink: 0;
    margin-top: 3px;
  }

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
</style>

<style>
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

      <div class="flex items-center gap-3 mb-6">
        <span class="text-sm text-gray-600">
          Diposting: {{ $job['posted'] }}
        </span>
      </div>

      {{-- DESKRIPSI --}}
      <p class="text-gray-700 leading-relaxed text-base mb-8">
        <span class="text-green-600 font-semibold">LOWONGAN</span>:
        Pengemudi Pribadi Profesional<br>
        Mega Sejahtera Perkasa membutuhkan pengemudi pribadi yang berpengalaman,
        beretika, dan memiliki pemahaman rute Jabodetabek dengan baik untuk mendukung
        kebutuhan manajemen dan klien korporat.
      </p>

      {{-- INFORMASI --}}
      <div class="mb-8">
        <div class="section-title">📄 Informasi Singkat</div>
        <div class="grid grid-cols-2 gap-y-2 text-sm text-gray-700">
          <div>Posisi</div><div>: Pengemudi Pribadi</div>
          <div>Lokasi</div><div>: Jakarta Pusat</div>
          <div>Jadwal</div><div>: Senin – Sabtu</div>
          <div>Jam Kerja</div><div>: 07.00 – 17.00 (fleksibel)</div>
          <div>Status</div><div>: Full-Time</div>
          <div>Upah</div><div>: Kompetitif (UMR Jakarta)</div>
        </div>
      </div>

      {{-- KEUNTUNGAN --}}
      <div class="mb-8">
        <div class="section-title">⭐ Keuntungan Bagi Anda</div>
        <ul class="checklist text-sm text-gray-700">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 13l4 4L19 7"/>
            </svg>
            Bekerja bersama manajemen profesional & klien korporat
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 13l4 4L19 7"/>
            </svg>
            Jam kerja stabil dengan potensi lembur
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 13l4 4L19 7"/>
            </svg>
            Tunjangan tambahan sesuai performa
          </li>
        </ul>
      </div>

      {{-- TUGAS --}}
      <div class="mb-8">
        <div class="section-title">🛠️ Tugas Utama</div>
        <ul class="checklist text-sm text-gray-700">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 13l4 4L19 7"/>
            </svg>
            Menjemput dan mengantar klien sesuai jadwal
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 13l4 4L19 7"/>
            </svg>
            Menjaga kebersihan dan performa kendaraan
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 13l4 4L19 7"/>
            </svg>
            Memastikan perjalanan aman dan tepat waktu
          </li>
        </ul>
      </div>

      {{-- SYARAT --}}
      <div class="mb-10">
        <div class="section-title">✅ Persyaratan</div>
        <ul class="checklist text-sm text-gray-700">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 13l4 4L19 7"/>
            </svg>
            SIM A aktif & pengalaman minimal 2 tahun
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 13l4 4L19 7"/>
            </svg>
            Berpenampilan rapi dan komunikatif
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 13l4 4L19 7"/>
            </svg>
            Menguasai rute Jabodetabek
          </li>
        </ul>
      </div>

      <p class="text-sm font-semibold text-gray-700">
        Req# {{ $job['req'] }}
      </p>
    </div>

    {{-- MAP --}}
      <div class="mt-10 rounded-lg overflow-hidden shadow">
        <iframe
          src="https://www.google.com/maps?q=BMKG+Kemayoran+Jakarta&output=embed"
          class="w-full h-[360px]"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>


  </div>
</section>

@endsection
