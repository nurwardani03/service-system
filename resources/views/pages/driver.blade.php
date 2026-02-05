@extends('layouts.app')
@section('title','Layanan Pengemudi')

@section('content')

<style>
/* ===== REVEAL ANIMATION ===== */
[data-reveal]{
  opacity:0;
  transform:translateY(40px);
  transition:opacity .9s ease, transform .9s ease;
}
[data-reveal].is-visible{
  opacity:1;
  transform:translateY(0);
}

/* ===== PARALLAX ===== */
[data-parallax]{
  will-change:transform;
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
  <img src="{{ asset('images/driver/hero.png') }}"
       class="absolute inset-0 w-full h-full object-cover"
       data-parallax="0.2">

  {{-- OVERLAY --}}
  <div class="absolute inset-0 bg-black/45"></div>

  {{-- CONTENT --}}
  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto w-full px-10">

      {{-- RIGHT & CENTER --}}
      <div class="flex justify-end items-center h-full">
        <div class="text-white max-w-xl">

          <h1 class="text-4 xl md:text-5xl font-bold leading-tight mb-4">
            LAYANAN PENGEMUDI
          </h1>

          <p class="text-lg text-center opacity-90 leading-relaxed">
            Layanan Pengemudi Profesional untuk Mobilitas Anda
          </p>

        </div>
      </div>

    </div>
  </div>

</section>

{{-- ================= PROFIL ================= --}}
<section class="bg-[#E6E7EC] py-28">
  <div
    class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-20 items-start"
    data-reveal
  >

    {{-- TEXT --}}
    <div>
      <h5 class="text-xl tracking-widest text-[#18204A] mb-4 uppercase">
        Mega Sejahtera Perkasa
      </h5>

      <h2 class="text-3xl font-bold text-[#18204A] mb-6">
        Layanan Pengemudi
      </h2>

      <p class="text-[#18204A] leading-relaxed mb-4 text-justify text-m">
       Mega Sejahtera Perkasa menyediakan layanan pengemudi profesional yang dirancang untuk mendukung kelancaran mobilitas operasional perusahaan Anda. Mengelola perjalanan dan transportasi perusahaan bukanlah tugas sederhana dibutuhkan ketepatan, keandalan, serta koordinasi yang matang agar setiap perjalanan berlangsung aman, efisien, dan sesuai standar layanan terbaik.

      <p class="text-[#18204A] leading-relaxed mb-4 text-justify text-m">
        Tim pengemudi kami terdiri dari individu yang terlatih, berpengalaman, dan memiliki etika kerja tinggi. Mereka memahami pentingnya ketepatan waktu, keamanan, dan kenyamanan selama perjalanan tiga faktor utama yang berpengaruh langsung terhadap citra dan produktivitas bisnis Anda. Dengan pelatihan berkala, sikap profesional, dan pengetahuan rute yang mumpuni, para pengemudi kami siap mendukung kebutuhan transportasi apa pun, mulai dari antar-jemput eksekutif hingga operasional harian perusahaan.
      </p>

      <p class="text-[#18204A] leading-relaxed text-justify text-m">
        Dengan mengandalkan MEGA SEJAHTERA PERKASA sebagai penyedia layanan pengemudi tepercaya, Anda mendapatkan perpaduan antara profesionalisme, kenyamanan, dan keselamatan demi mendukung kelancaran operasional dan reputasi perusahaan Anda.
      </p>
    </div>

    {{-- IMAGE --}}
    <div class="rounded-2xl overflow-hidden shadow-xl self-start">
      <img
        src="{{ asset('images/driver/detail1.jpg') }}"
        alt="Layanan Pengemudi Profesional"
        class="w-full h-[520px] object-cover"
      >
    </div>

  </div>
</section>

{{-- ================= FULL IMAGE ================= --}}
<section class="relative h-screen overflow-hidden">
  <img src="{{ asset('images/driver/full.png') }}"
       class="absolute inset-0 w-full h-[120%] object-cover">
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

{{-- ================= GALERI ================= --}}
<section class="bg-[#bfc3da] py-24">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-3xl font-bold text-[#18204A] mb-16">
      Galeri
    </h2>

    <div class="grid md:grid-cols-3 gap-10">

      @foreach ([
        'galeri1.jpg',
        'galeri2.png',
        'galeri3.jpg'
      ] as $img)

        <div
          class="group overflow-hidden rounded-lg
                 shadow-xl
                 transition-all duration-500
                 hover:-translate-y-2
                 hover:shadow-[0_18px_35px_rgba(24,32,74,0.35)]
                 h-[320px] md:h-[360px] bg-white">

          <img
            src="{{ asset('images/driver/'.$img) }}"
            class="w-full h-full object-cover
                   transition-transform duration-700
                   group-hover:scale-105"
            alt="Galeri Layanan Pengemudi">

        </div>

      @endforeach

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

{{-- ================= SCRIPT ================= --}}
<script>
document.addEventListener('DOMContentLoaded', () => {

  /* PARALLAX */
  const items = document.querySelectorAll('[data-parallax]');
  let scrollY = window.scrollY;

  window.addEventListener('scroll', () => {
    scrollY = window.scrollY;
  }, { passive: true });

  function parallax() {
    items.forEach(el => {
      const speed = parseFloat(el.dataset.parallax);
      const rect = el.getBoundingClientRect();
      if (rect.bottom > -200 && rect.top < window.innerHeight + 200) {
        el.style.transform = `translate3d(0, ${scrollY * speed}px, 0)`;
      }
    });
    requestAnimationFrame(parallax);
  }
  parallax();

  /* REVEAL */
  const revealItems = document.querySelectorAll('[data-reveal]');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      e.target.classList.toggle('is-visible', e.isIntersecting);
    });
  }, { threshold: 0.25, rootMargin: '0px 0px -120px 0px' });

  revealItems.forEach(el => observer.observe(el));
});
</script>

@endsection
