@extends('layouts.app')
@section('title','Layanan Supir Pribadi')

@section('content')

<style>
  .reveal{
    opacity:0;
    transform:translateY(40px);
    transition:opacity .9s ease, transform .9s ease;
  }
  .reveal.is-visible{
    opacity:1;
    transform:translateY(0);
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

  {{-- IMAGE --}}
  <img src="{{ asset('images/driver/supirpribadi/hero.png') }}"
       class="absolute inset-0 w-full h-[120%] object-cover">

  <div class="absolute inset-0 bg-black/45"></div>

  {{-- TITLE --}}
  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 w-full">

      <div></div>

      <div class="flex items-center justify-center text-white reveal">
        <h1 class="text-3xl md:text-4xl font-bold leading-tight text-center">
          LAYANAN<br>
          SUPIR PRIBADI
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
        Pastikan Mobilitas Anda Tetap Lancar dan Profesional
      </h2>

      <p class="text-[#18204A] leading-relaxed mb-4 text-m text-justify">
        Setiap individu maupun perusahaan sangat bergantung pada mobilitas yang aman, nyaman, dan tepat waktu. Eksekutif membutuhkan perjalanan yang efisien untuk memenuhi jadwal pertemuan, keluarga memerlukan pengemudi yang andal untuk mendukung aktivitas harian, sementara operasional bisnis membutuhkan transportasi yang konsisten agar layanan tetap berjalan lancar.
      </p>

      <p class="text-[#18204A] leading-relaxed mb-4 text-m text-justify">
        Bahkan kebutuhan perjalanan sederhana tetap memerlukan pengemudi yang terampil untuk memastikan keamanan dan kenyamanan di sepanjang perjalanan.
      </p>

      <p class="text-[#18204A] leading-relaxed text-m text-justify">
        Kami menangani berbagai jenis kebutuhan transportasi, baik pribadi, keluarga, operasional perusahaan, maupun layanan khusus. Fokus utama kami adalah memberikan pengalaman berkendara yang profesional dan preventif terhadap potensi risiko di jalan, sekaligus siap memberikan penanganan cepat serta solusi terbaik bila terjadi situasi tidak terduga selama perjalanan.
      </p>
    </div>

    {{-- IMAGE --}}
    <div class="rounded-2xl overflow-hidden shadow-xl self-start">
      <img
        src="{{ asset('images/driver/supirpribadi/section1.jpg') }}"
        alt="Layanan Pengemudi Profesional"
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
        src="{{ asset('images/driver/supirpribadi/section2.jpg') }}"
        alt="Layanan Pengemudi Pribadi"
        class="w-full h-[300px] object-cover"
      >
    </div>

    {{-- TEXT --}}
    <div>
      <h2 class="text-3xl md:text-2xl font-bold text-[#18204A] mb-6">
        Mengapa Layanan Pengemudi Pribadi Itu Penting
      </h2>

      <p class="text-[#18204A] leading-relaxed text-m text-justify">
        Memiliki pengemudi pribadi adalah bagian penting dari kenyamanan dan efisiensi mobilitas harian. Meskipun kendaraan modern dirancang dengan berbagai sistem canggih, perjalanan tetap bergantung pada sosok pengemudi yang terampil, sigap, dan berpengalaman. Layanan ini bukan hanya soal kenyamanan, tetapi juga tentang keselamatan dan ketepatan waktu. Pengemudi yang kurang terlatih, mudah lelah, atau tidak memahami rute dapat menimbulkan risiko seperti keterlambatan, stres perjalanan, hingga bahaya di jalan.
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
      <h2 class="text-3xl md:text-2xl font-bold text-[#18204A] mb-6">
        Keunggulan Layanan Supir Pribadi Kami
      </h2>

      <p class="text-[#18204A] leading-relaxed mb-4 text-m text-justify">
        Di Mega Sejahtera Perkasa, kami memahami bahwa setiap klien memiliki kebutuhan mobilitas yang unik. Karena itu, kami tidak memberikan layanan pengemudi pribadi yang bersifat umum atau sama untuk semua orang. Sebaliknya, kami merancang layanan yang sesuai dengan pola aktivitas, preferensi perjalanan, tingkat keamanan, serta kebutuhan profesional masing-masing pelanggan. Baik Anda membutuhkan pengemudi pribadi harian, pengemudi untuk agenda bisnis, atau layanan transportasi khusus yang menuntut ketepatan, kenyamanan, dan kerahasiaan, kami siap melayani.
      </p>

      <p class="text-[#18204A] leading-relaxed text-m text-justify">
        Dengan dukungan pengemudi terlatih, beretika, dan berpengalaman, kami membantu menciptakan pengalaman perjalanan yang lebih aman, nyaman, efisien, dan bebas stres bagi Anda.
      </p>
    </div>

    <div class="rounded-2xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/driver/supirpribadi/section3.png') }}"
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
  }, { threshold: 0.25, rootMargin:'0px 0px -120px 0px' });

  items.forEach(el => obs.observe(el));
});
</script>

@endsection
