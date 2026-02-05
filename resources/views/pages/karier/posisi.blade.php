@extends('layouts.app') 
@section('title','Posisi Terbuka')

@section('content')

<style>
  .divider {
    border-top: 1px solid #ffffff;
    margin: 20px 0;
  }

  .bookmark {
    transition: transform .2s ease, color .2s ease;
  }

  .bookmark:hover {
    transform: scale(1.12);
    color: #1f2b59;
  }

  .btn-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    border-radius: 9999px;
    background: #ffffff;
    color: #1f2b59;
    border: 2px solid #1f2b59;
    font-weight: 600;
    cursor: pointer;
    transition: all .25s ease;
  }

  .btn-back:hover {
    background: #1f2b59;
    color: #ffffff;
    border-color: #1f2b59;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(31, 43, 89, .25);
  }
</style>

<section class="mt-[96px] py-14 bg-white">
  <div class="max-w-5xl mx-auto px-5">

    {{-- PANEL --}}
    <div class="bg-[#e5e5e5] rounded-lg p-8 shadow-md">

      {{-- HEADER --}}
      <h1 class="text-xl md:text-2xl font-bold text-[#1f2b59]">
        PEKERJAAN YANG TERBUKA
      </h1>

      <div class="divider"></div>

      {{-- FILTER --}}
      <div class="grid md:grid-cols-2 gap-6 mb-8">

        {{-- SEARCH --}}
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2">
            Cari Pekerjaan Berdasarkan
          </label>
          <div class="relative">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8"/>
                <path d="M21 21l-4.3-4.3"/>
              </svg>
            </span>
            <input id="searchJob" type="text"
                   class="w-full bg-white pl-14 pr-3 py-3 rounded-lg text-base
                          focus:outline-none focus:ring-2 focus:ring-blue-900/30">
          </div>
        </div>

        {{-- LOCATION --}}
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2">
            Lokasi
          </label>
          <div class="relative">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24">
                <path d="M12 21s7-6.1 7-11a7 7 0 1 0-14 0c0 4.9 7 11 7 11z"/>
                <circle cx="12" cy="10" r="3"/>
              </svg>
            </span>
            <input id="searchLocation" type="text"
                   class="w-full bg-white pl-14 pr-3 py-3 rounded-lg text-base
                          focus:outline-none focus:ring-2 focus:ring-blue-900/30">
          </div>
        </div>

      </div>

      {{-- LIST LOKER --}}
      <div id="jobList" class="space-y-8">

        {{-- LOKER 1 --}}
        <div class="relative job-item pr-12"
             data-title="petugas taman landscaping crew"
             data-location="tangerang indonesia">

          <h3 class="font-bold text-[#1f2b59] text-lg mb-1.5">
            <a href="{{ route('karier.detail','petugas-taman') }}"
               class="hover:underline hover:text-blue-900">
              Petugas Taman – Landscaping Crew
            </a>
          </h3>

          <p class="text-xs text-gray-600 mb-2">
            Tangerang, Indonesia · Diposting: Senin, 27 November 2025
          </p>

          <p class="text-sm text-gray-700 leading-relaxed mb-2">
            <span class="text-green-700 font-semibold">LOWONGAN SEGERA</span>:
            Petugas Taman (Landscaping Crew)! 🌱✨<br>
            Mega Sejahtera Perkasa membuka kesempatan bagi Anda yang memiliki ketertarikan pada dunia pertamanan dan ingin bekerja dalam lingkungan luar ruang yang dinamis.
          </p>

          <p class="text-sm font-semibold text-gray-700">
            Req# MSP-001
          </p>
        </div>

        <div class="divider"></div>

        {{-- LOKER 2 --}}
        <div class="relative job-item pr-12"
             data-title="pengemudi pribadi personal driver"
             data-location="jakarta indonesia">

          <h3 class="font-bold text-[#1f2b59] text-lg mb-1.5">
            <a href="{{ route('karier.detail','pengemudi-pribadi') }}"
               class="hover:underline hover:text-blue-900">
              Pengemudi Pribadi – Personal Driver
            </a>
          </h3>

          <p class="text-xs text-gray-600 mb-2">
            Jakarta, Indonesia · Diposting: Senin, 27 November 2025
          </p>

          <p class="text-sm text-gray-700 leading-relaxed mb-2">
            <span class="text-green-700 font-semibold">LOWONGAN</span>:
            Pengemudi Pribadi Profesional<br>
            Mega Sejahtera Perkasa membutuhkan pengemudi pribadi yang berpengalaman.
          </p>

          <p class="text-sm font-semibold text-gray-700">
            Req# MSP-002
          </p>

        </div>

        <div class="divider"></div>

        {{-- LOKER 3 --}}
        <div class="relative job-item pr-12"
             data-title="teknisi pemeliharaan gedung building maintenance"
             data-location="tangerang indonesia">

          <h3 class="font-bold text-[#1f2b59] text-lg mb-1.5">
            <a href="{{ route('karier.detail','teknisi-gedung') }}"
               class="hover:underline hover:text-blue-900">
              Teknisi Pemeliharaan Gedung – Building Maintenance Technician
            </a>
          </h3>

          <p class="text-xs text-gray-600 mb-2">
            Tangerang, Indonesia · Diposting: Senin, 27 November 2025
          </p>

          <p class="text-sm text-gray-700 leading-relaxed mb-2">
            <span class="text-green-700 font-semibold">LOWONGAN SEGERA</span>:
            Teknisi Pemeliharaan Gedung
          </p>

          <p class="text-sm font-semibold text-gray-700">
            Req# MSP-003
          </p>

        </div>

      </div>

      <p id="emptyState" class="hidden text-center text-gray-600 text-base mt-8">
        Lowongan tidak ditemukan.
      </p>

    </div>

  </div>
</section>

{{-- SCRIPT TETAP --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchJob = document.getElementById('searchJob');
  const searchLocation = document.getElementById('searchLocation');
  const jobs = document.querySelectorAll('.job-item');
  const emptyState = document.getElementById('emptyState');

  function filterJobs() {
    const keyword = searchJob.value.toLowerCase();
    const location = searchLocation.value.toLowerCase();
    let visible = 0;

    jobs.forEach(job => {
      const title = job.dataset.title;
      const loc = job.dataset.location;

      if (title.includes(keyword) && loc.includes(location)) {
        job.style.display = 'block';
        visible++;
      } else {
        job.style.display = 'none';
      }
    });

    emptyState.classList.toggle('hidden', visible !== 0);
  }

  searchJob.addEventListener('input', filterJobs);
  searchLocation.addEventListener('input', filterJobs);
});
</script>

@endsection
