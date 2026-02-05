@extends('layouts.app')
@section('title','Layanan Antar Jemput')

@section('content')

<style>
  .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity .9s ease, transform .9s ease;
  }
  .reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>

{{-- ================= HEADER DRIVER ================= --}}
<section
  class="relative z-10 mt-[96px]"
  style="background: linear-gradient(
    to right,
    #1E2A44 0%,
    #18243B 30%,
    #121C30 55%,
    #0B1324 80%,
    #050914 100%
  );"
>
  <div class="max-w-7xl mx-auto px-6 py-3">
    <h2 class="text-white text-2xl font-semibold tracking-wide">
      LAYANAN PENGEMUDI
    </h2>
  </div>
</section>

{{-- ================= HERO ================= --}}
<section class="relative h-[340px] overflow-hidden">

  {{-- HERO IMAGE --}}
  <img src="{{ asset('images/driver/antarjemput/hero.png') }}"
       class="absolute inset-0 w-full h-[120%] object-cover">

  {{-- OVERLAY --}}
  <div class="absolute inset-0 bg-black/45"></div>

  {{-- CONTENT --}}
  <div class="relative z-10 h-full">
    <div class="max-w-7xl mx-auto px-10 h-full grid grid-cols-2">

      {{-- KOLOM KIRI KOSONG --}}
      <div></div>

      {{-- KOLOM KANAN (CENTER) --}}
      <div class="flex items-center justify-center text-center text-white reveal">
        <h1 class="text-3xl md:text-4xl font-bold leading-tight">
          LAYANAN<br>
          JEMPUTAN
        </h1>
      </div>

    </div>
  </div>

</section>

{{-- ================= SECTION 1 ================= --}}
<section class="bg-[#dbdeec] py-28">
  <div
    class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-16 items-start reveal"
  >

    {{-- TEXT --}}
    <div>
      <h2 class="text-3xl md:text-2xl font-bold text-[#18204A] mb-6">
        Mobilitas Kolektif dengan Layanan Bus Antar Jemput yang Andal
      </h2>

      <p class="text-[#18204A] leading-relaxed mb-5 text-lg text-justify text-m">
       Setiap organisasi membutuhkan sistem transportasi yang efisien untuk memastikan mobilitas karyawan, siswa, maupun tamu agar berjalan tanpa adanya hambatan.
      </p>

      <p class="text-[#18204A] leading-relaxed mb-5 text-lg text-justify text-m">
        Perusahaan mengandalkan armada antar jemput untuk menjaga kedisiplinan dan produktivitas karyawan, institusi pendidikan membutuhkan transportasi yang aman bagi para siswa, sementara area komersial dan hunian memerlukan layanan shuttle untuk memudahkan akses penghuni. Bahkan kegiatan acara atau kunjungan lapangan membutuhkan transportasi kelompok yang terkoordinasi dengan baik untuk memastikan perjalanan berlangsung lancar dan tepat waktu.
      </p>

      <p class="text-[#18204A] leading-relaxed text-lg text-justify text-m">
        Kami menangani berbagai kebutuhan transportasi kelompok mulai dari armada reguler, layanan khusus, hingga perjalanan dengan rute yang disesuaikan. Fokus utama kami adalah menjaga keamanan, ketepatan waktu, serta kenyamanan seluruh penumpang, sekaligus siap memberikan dukungan cepat bila terjadi situasi tak terduga selama operasional berlangsung.
      </p>
    </div>

    {{-- IMAGE --}}
    <div class="rounded-2xl overflow-hidden shadow-xl self-start">
      <img
        src="{{ asset('images/driver/antarjemput/section1.jpg') }}"
        alt="Layanan Bus Antar Jemput"
        class="w-full h-[420px] object-cover"
      >
    </div>

  </div>

  {{-- BUTTON --}}
  <div class="mt-16 flex justify-center">
    <a
      href="/permintaan-layanan"
      class="inline-flex items-center gap-2
             bg-[#18204A] text-white
             px-7 py-3 text-sm font-semibold
             rounded-lg
             shadow-sm
             transition-all duration-300 ease-out
             hover:bg-[#394272]
             hover:shadow-md hover:-translate-y-0.5"
    >
      DAPATKAN INFORMASI LEBIH
      <svg xmlns="http://www.w3.org/2000/svg"
           class="w-4 h-4"
           fill="none"
           viewBox="0 0 24 24"
           stroke="currentColor"
           stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M9 5l7 7-7 7" />
      </svg>
    </a>
  </div>
</section>

{{-- ================= SECTION 2 ================= --}}
<section class="bg-[#dbdeec] py-28">
  <div
    class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-16 items-start reveal"
  >

    {{-- IMAGE --}}
    <div class="rounded-2xl overflow-hidden shadow-xl self-start">
      <img
        src="{{ asset('images/driver/antarjemput/section2.jpg') }}"
        alt="Layanan Bus Antar Jemput"
        class="w-full h-[300px] object-cover"
      >
    </div>

    {{-- TEXT --}}
    <div>
      <h2 class="text-2xl md:text-xl font-bold text-[#18204A] mb-6">
        Mengapa Layanan Bus Antar Jemput Itu Penting?
      </h2>

      <p class="text-[#18204A] text-lg leading-relaxed text-justify text-m">
        Layanan bus antar jemput memegang peranan penting dalam menjaga kelancaran mobilitas kelompok, baik untuk karyawan, siswa, maupun tamu. Meskipun transportasi massal modern menawarkan banyak opsi, keberhasilan operasional tetap bergantung pada layanan antar jemput yang teratur, aman, dan tepat waktu. Layanan yang tidak terkelola dengan baik dapat menimbulkan berbagai masalah seperti keterlambatan kerja, ketidaknyamanan penumpang, hingga risiko keselamatan di perjalanan.
      </p>
    </div>

  </div>

  {{-- BUTTON --}}
  <div class="mt-16 flex justify-center">
    <a
      href="/permintaan-layanan"
      class="inline-flex items-center gap-2
             bg-[#18204A] text-white
             px-7 py-3 text-sm font-semibold
             rounded-lg
             shadow-sm
             transition-all duration-300 ease-out
             hover:bg-[#394272]
             hover:shadow-md hover:-translate-y-0.5"
    >
      DAPATKAN INFORMASI LEBIH
      <svg xmlns="http://www.w3.org/2000/svg"
           class="w-4 h-4"
           fill="none"
           viewBox="0 0 24 24"
           stroke="currentColor"
           stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M9 5l7 7-7 7" />
      </svg>
    </a>
  </div>
</section>

{{-- ================= LAYANAN CARD ================= --}}
<section class="bg-[#dbdeec] py-28">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-4xl md:text-3xl font-bold text-[#18204A] mb-20 text-left">
      Kami Menawarkan <br> Layanan Pengemudi Berikut
    </h2>

    <div class="flex justify-center">
      <div class="grid md:grid-cols-2 gap-14 max-w-2xl w-full">

        @foreach ([
          [
            'img'=>'antarjemput.jpg',
            'title'=>'LAYANAN',
            'sub'=>'ANTAR JEMPUT',
            'url'=>'/driver/antar-jemput'
          ],
          [
            'img'=>'supirpribadi.jpg',
            'title'=>'LAYANAN',
            'sub'=>'SUPIR PRIBADI',
            'url'=>'/driver/supir-pribadi'
          ],
        ] as $item)

        <a href="{{ $item['url'] }}"
           class="group bg-white rounded-lg overflow-hidden
                  shadow-[0_15px_40px_rgba(0,0,0,0.18)]
                  transition-all duration-500
                  hover:-translate-y-3
                  hover:shadow-[0_25px_60px_rgba(31,43,89,0.35)]
                  focus:outline-none">

          {{-- IMAGE --}}
          <div class="relative h-[340px] overflow-hidden">
            <img src="{{ asset('images/driver/'.$item['img']) }}"
                 class="w-full h-full object-cover
                        transition-transform duration-700
                        group-hover:scale-110">

            <div class="absolute bottom-0 left-0 w-full h-32
                        bg-gradient-to-t from-white via-white/80 to-transparent"></div>
          </div>

          {{-- TEXT --}}
          <div class="px-8 py-10 text-center">
            <h3 class="text-xl font-bold text-[#18204A] leading-tight">
              {{ $item['title'] }} <br>
              {{ $item['sub'] }}
            </h3>
          </div>

        </a>
        @endforeach

      </div>
    </div>

  </div>
</section>

{{-- ================= SECTION 3 ================= --}}
<section class="bg-[#dbdeec] py-28">
  <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-16 items-center reveal">

    <div>
      <h2 class="text-3xl md:text-2xl font-bold text-[#1f2b59] mb-6">
        Layanan Bus Antar Jemput: <br> Keunggulan Mega Sejahtera Perkasa
      </h2>

      <p class="text-gray-700 leading-relaxed mb-4 text-justify text-m">
        Di Mega Sejahtera Perkasa, kami melayani berbagai jenis operasi transportasi untuk karyawan, siswa, tamu, maupun kebutuhan mobilitas kelompok lainnya dan setiap organisasi memiliki tuntutan yang berbeda. Karena itu, kami tidak menyediakan layanan bus antar jemput dengan pola yang sama untuk semua klien. Kami menyusun solusi transportasi yang sesuai kebutuhan, mulai dari penjadwalan rute, kapasitas penumpang, pengaturan armada, hingga standar keselamatan dan kenyamanan.
      </p>

      <p class="text-gray-700 leading-relaxed mb-4 text-justify text-m">
        Apakah Anda memerlukan layanan antar jemput karyawan reguler, transportasi sekolah, mobilitas untuk area industri, atau dukungan perjalanan khusus, tim kami siap memberikan solusi yang tepat, aman, dan profesional.
      </p>

      <p class="text-gray-700 leading-relaxed mb-4 text-justify text-m">
        Dengan dukungan pengemudi berpengalaman dan armada yang terkelola dengan baik, kami membantu memastikan perjalanan 
yang lebih teratur, aman, efisien, dan dapat diandalkan setiap hari.
      </p>
      
    </div>

    <div class="rounded-2xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/driver/antarjemput/section3.jpg') }}"
           class="w-full h-[420px] object-cover">
    </div>

  </div>
</section>

{{-- ================= BAGAIMANA KAMI BEKERJA ================= --}}
<section class="bg-[#dbdeec] py-28">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-3xl font-bold text-[#18204A] mb-10">
      BAGAIMANA KAMI BEKERJA
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

      @foreach ([
        [
          'img'=>'kerja1.jpg',
          'title'=>'Melakukan dengan Benar',
          'desc'=>'Filosofi sederhana ini menjadi inti dari janji kami kepada setiap pelanggan yang kami layani. Kami akan memenuhi atau melampaui harapan Anda dalam memberikan solusi dukungan fasilitas berkualitas tinggi.'
        ],
        [
          'img'=>'kerja2.jpg',
          'title'=>'Tepat Waktu, Setiap Saat',
          'desc'=>'Kami akan bekerja sama dengan Anda secara erat untuk memastikan jadwal Anda tetap berjalan lancar, meminimalkan gangguan operasional, dan menyelesaikan setiap tugas secara tepat waktu.'
        ],
        [
          'img'=>'kerja3.jpg',
          'title'=>'Selalu Beradaptasi',
          'desc'=>'Kami berada di garis terdepan dalam menangani berbagai masalah baru dan tak terduga di fasilitas Anda, dengan menawarkan program manajemen fasilitas yang disesuaikan, menyeluruh, dan fleksibel.'
        ],
      ] as $item)

      <div
        class="bg-white rounded-xl overflow-hidden
                shadow-[0_6px_18px_rgba(0,0,0,0.12)]
                hover:shadow-[0_18px_40px_rgba(0,0,0,0.22)]
                transition-shadow duration-300
                transform hover:-translate-y-1
                min-h-[520px] flex flex-col">

        {{-- IMAGE --}}
        <div class="relative h-[300px]">
          <img
            src="{{ asset('images/driver/'.$item['img']) }}"
            alt="{{ $item['title'] }}"
            class="w-full h-full object-cover">

          <div class="absolute bottom-0 w-full h-24
                      bg-gradient-to-t from-white via-white/80 to-transparent"></div>
        </div>

        {{-- TEXT --}}
        <div class="p-7 flex-1">
          <h3 class="text-center font-bold text-lg md:text-xl text-[#18204A] mb-4 leading-snug">
            {{ $item['title'] }}
            </h3>

          <p class="text-sm text-[#18204A] leading-relaxed text-justify">
            {{ $item['desc'] }}
          </p>
        </div>

      </div>

      @endforeach
    </div>

  </div>
</section>

{{-- ================= CTA ================= --}}
<section class="bg-[#dbdeec] py-16">
  <div class="max-w-3xl mx-auto px-6" data-reveal>

    <div class="bg-[#18204A] text-white rounded-xl px-8 py-10 text-center shadow-lg">

      <h2 class="text-xl font-semibold mb-3">
        Dapatkan Informasi Lebih
      </h2>

      <p class="max-w-2xl text-sm text-justify mx-auto text-gray-200 leading-relaxed mb-6">
        Dengan lebih dari 200 karyawan berdedikasi, Mega Sejathera Perkasa merupakan salah satu perusahaan layanan fasilitas terkemuka, yang menyediakan solusi pengemudi, pemeliharaan dan pertamanan dengan dukungan fasilitas berkualitas tinggi kepada pelanggan.
      </p>

      <a href="/permintaan-layanan"
         class="inline-block bg-white text-[#18204A] font-semibold text-sm
                px-6 py-2.5 rounded-md
                hover:bg-gray-900 hover:text-white transition">
        DAPATKAN INFORMASI LEBIH
      </a>

    </div>

  </div>
</section>

{{-- ================= REVEAL SCRIPT ================= --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('.reveal');
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      e.target.classList.toggle('is-visible', e.isIntersecting);
    });
  }, { threshold: 0.25 });

  items.forEach(el => obs.observe(el));
});
</script>

@endsection
