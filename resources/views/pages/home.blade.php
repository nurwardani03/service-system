@extends('layouts.app')
@section('title','Home')

@section('content')

<style>
  .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }

  .reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>


{{-- HERO --}}
<section class="relative w-full h-[calc(100vh-96px)] overflow-hidden mt-[96px]">

  {{-- BACKGROUND --}}
  <div class="absolute inset-0 grid grid-cols-3">

    <div class="relative">
      <img src="{{ asset('images/home/hero1.jpg') }}" class="w-full h-full object-cover">
      <div class="absolute top-0 right-0 w-32 h-full bg-gradient-to-r from-transparent to-black/50"></div>
    </div>

    <div class="relative">
      <img src="{{ asset('images/home/hero2.jpg') }}" class="w-full h-full object-cover">
      <div class="absolute top-0 left-0 w-32 h-full bg-gradient-to-l from-transparent to-black/50"></div>
      <div class="absolute top-0 right-0 w-32 h-full bg-gradient-to-r from-transparent to-black/50"></div>
    </div>

    <div class="relative">
      <img src="{{ asset('images/home/hero3.jpg') }}" class="w-full h-full object-cover">
      <div class="absolute top-0 left-0 w-32 h-full bg-gradient-to-l from-transparent to-black/50"></div>
    </div>

  </div>

  {{-- OVERLAY --}}
  <div class="absolute inset-0 bg-black/40"></div>

  {{-- CONTENT --}}
  <div class="relative z-10 max-w-5xl mx-auto h-full flex flex-col justify-center items-center text-center px-6 text-white">

    <h1 class="text-3xl md:text-3xl font-bold leading-tight mb-10">
      PARTNER TERPERCAYA DALAM <br>
      MANAJEMEN FASILITAS PERUSAHAAN ANDA
    </h1>

    <div class="absolute bottom-20">
      <a href="/permintaan-layanan"
        class="bg-blue-900 px-7 py-3 rounded-lg text-base font-semibold
                hover:bg-blue-900/80 transition-all duration-300 shadow-sm">
        PERMINTAAN LAYANAN & PENJUALAN
      </a>
    </div>

  </div>

</section>

{{-- PELAYANAN --}}
<section class="py-14 bg-gray-50">

  <div class="max-w-5xl mx-auto px-6">

    {{-- JUDUL --}}
    <div class="text-center mt-2 mb-10">
      <h2 class="text-3xl font-bold tracking-wide mb-4 text-[#18224d]">
        PELAYANAN
      </h2>
    </div>

    {{-- GRID CARD --}}
    <div class="grid md:grid-cols-3 gap-12">

      {{-- CARD 1 --}}
      <div class="bg-white max-w-sm mx-auto rounded-xl
                  shadow-[0_10px_25px_rgba(0,0,0,0.08)]
                  hover:shadow-[0_20px_40px_rgba(0,0,0,0.18)]
                  transition duration-300 transform hover:-translate-y-3
                  overflow-hidden text-center flex flex-col">

        <div class="relative">
          <img src="{{ asset('images/home/pelayanan/pelayanan1.jpg') }}"
               class="w-full h-[200px] object-cover">
          <div class="absolute bottom-0 left-0 w-full h-24
                      bg-gradient-to-t from-white via-white/70 to-transparent"></div>
        </div>

        <div class="p-6 flex flex-col flex-1">
          <h3 class="font-bold text-lg mb-2">Layanan Taman</h3>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            Mengelola dan meningkatkan lanskap alami dan estetis di area kantor untuk semua ukuran.
          </p>

          <a href="/taman"
             class="btn-sound mt-auto inline-block px-5 py-2 border-2 border-blue-900
                    text-blue-900 font-semibold rounded-lg
                    hover:bg-blue-900 hover:text-white
                    transition duration-300 text-sm"
             data-sound="/sound/taman.mp3">
            LIHAT LAYANAN
          </a>
        </div>
      </div>

      {{-- CARD 2 --}}
      <div class="bg-white max-w-sm mx-auto rounded-xl
                  shadow-[0_10px_25px_rgba(0,0,0,0.08)]
                  hover:shadow-[0_20px_40px_rgba(0,0,0,0.18)]
                  transition duration-300 transform hover:-translate-y-3
                  overflow-hidden text-center flex flex-col">

        <div class="relative">
          <img src="{{ asset('images/home/pelayanan/pelayanan2.jpg') }}"
               class="w-full h-[200px] object-cover">
          <div class="absolute bottom-0 left-0 w-full h-24
                      bg-gradient-to-t from-white via-white/70 to-transparent"></div>
        </div>

        <div class="p-6 flex flex-col flex-1">
          <h3 class="font-bold text-lg mb-2">Layanan Pemeliharaan</h3>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            Lindungi aset Anda sambil memastikan keselamatan fasilitas melalui solusi pemeliharaan profesional.
          </p>

          <a href="/pemeliharaan"
             class="btn-sound mt-auto inline-block px-5 py-2 border-2 border-blue-900
                    text-blue-900 font-semibold rounded-lg
                    hover:bg-blue-900 hover:text-white
                    transition duration-300 text-sm"
             data-sound="/sound/pemeliharaan.mp3">
            LIHAT LAYANAN
          </a>
        </div>
      </div>

      {{-- CARD 3 --}}
      <div class="bg-white max-w-sm mx-auto rounded-xl
                  shadow-[0_10px_25px_rgba(0,0,0,0.08)]
                  hover:shadow-[0_20px_40px_rgba(0,0,0,0.18)]
                  transition duration-300 transform hover:-translate-y-3
                  overflow-hidden text-center flex flex-col">

        <div class="relative">
          <img src="{{ asset('images/home/pelayanan/pelayanan3.jpg') }}"
               class="w-full h-[200px] object-cover">
          <div class="absolute bottom-0 left-0 w-full h-24
                      bg-gradient-to-t from-white via-white/70 to-transparent"></div>
        </div>

        <div class="p-6 flex flex-col flex-1">
          <h3 class="font-bold text-lg mb-2">Layanan Pengemudi</h3>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            Tingkatkan efisiensi operasional dan kenyamanan mobilitas perusahaan Anda melalui layanan pengemudi profesional.
          </p>

          <a href="/driver"
             class="btn-sound mt-auto inline-block px-5 py-2 border-2 border-blue-900
                    text-blue-900 font-semibold rounded-lg
                    hover:bg-blue-900 hover:text-white
                    transition duration-300 text-sm"
             data-sound="/sound/driver.mp3">
            LIHAT LAYANAN
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


{{-- TENTANG KAMI --}}
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 px-6 items-center">

    {{-- IMAGE --}}
    <div class="w-full">
      <img src="{{ asset('images/home/tentangkami1.png') }}"
           alt="Tentang Kami"
           class="w-full h-[360px] object-cover rounded-lg shadow-lg">
    </div>

    {{-- CONTENT --}}
    <div>
      <h2 class="text-3xl font-bold mb-6 tracking-wide">
        TENTANG KAMI
      </h2>

      <p class="text-gray-700 leading-relaxed text-lg text-justify mb-10 max-w-xl">
        Mega Sejahtera Perkasa adalah perusahaan yang berfokus pada kualitas,
        inovasi, dan pelayanan terbaik. Dengan dukungan tim profesional,
        kami berkomitmen menjadi mitra terpercaya yang memberikan solusi
        berdaya saing tinggi bagi pelanggan di tingkat nasional.
      </p>

      <a href="/tentang-kami"
         class="inline-block bg-blue-900 text-white
                px-7 py-3 rounded-lg text-sm font-semibold
                hover:bg-blue-900/85 transition duration-300 shadow-md">
        BACA SELENGKAPNYA
      </a>
    </div>

  </div>
</section>

{{-- BAGAIMANA KAMI BEKERJA --}}
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-3xl font-bold mb-10 tracking-wide">
      BAGAIMANA KAMI BEKERJA
    </h2>

    <div class="grid md:grid-cols-3 gap-10">

      {{-- CARD --}}
      <div
        class="bg-white rounded-xl overflow-hidden
               shadow-md hover:shadow-2xl
               transition-all duration-300
               transform hover:-translate-y-2
               min-h-[520px] flex flex-col">

        {{-- IMAGE --}}
        <div class="relative h-[300px]">
          <img src="{{ asset('images/home/kerja/kerja1.jpg') }}"
               class="w-full h-full object-cover">

          <div class="absolute bottom-0 left-0 w-full h-24
                      bg-gradient-to-t from-white via-white/70 to-transparent"></div>
        </div>

        {{-- CONTENT --}}
        <div class="p-6 text-center flex-1">
          <h3 class="font-bold text-lg mb-3">
            Melakukan dengan Benar
          </h3>

          <p class="text-sm text-justify text-gray-700 leading-relaxed">
            Filosofi sederhana ini menjadi inti dari janji kami
            kepada setiap pelanggan yang kami layani. Kami
            akan memenuhi atau melampaui harapan Anda
            dalam memberikan solusi dukungan fasilitas
            berkualitas tinggi.
          </p>
        </div>
      </div>

      {{-- CARD --}}
      <div
        class="bg-white rounded-xl overflow-hidden
               shadow-md hover:shadow-2xl
               transition-all duration-300
               transform hover:-translate-y-2
               min-h-[520px] flex flex-col">

        <div class="relative h-[300px]">
          <img src="{{ asset('images/home/kerja/kerja2.jpg') }}"
               class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 w-full h-24
                      bg-gradient-to-t from-white via-white/70 to-transparent"></div>
        </div>

        <div class="p-6 text-center flex-1">
          <h3 class="font-bold text-lg mb-3">
            Tepat Waktu, Setiap Saat
          </h3>

          <p class="text-sm text-justify text-gray-700 leading-relaxed">
            Kami bekerja sama secara erat dengan Anda untuk memastikan kepatuhan terhadap jadwal, 
            meminimalkan gangguan operasional, serta menyelesaikan setiap tugas secara tepat waktu.
          </p>
        </div>
      </div>

      {{-- CARD --}}
      <div
        class="bg-white rounded-xl overflow-hidden
               shadow-md hover:shadow-2xl
               transition-all duration-300
               transform hover:-translate-y-2
               min-h-[520px] flex flex-col">

        <div class="relative h-[300px]">
          <img src="{{ asset('images/home/kerja/kerja3.jpg') }}"
               class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 w-full h-24
                      bg-gradient-to-t from-white via-white/70 to-transparent"></div>
        </div>

        <div class="p-6 text-center flex-1">
          <h3 class="font-bold text-lg mb-3">
            Selalu Beradaptasi
          </h3>

          <p class="text-sm text-justify text-gray-700 leading-relaxed">
            Kami berada di garis terdepan dalam menangani
            berbagai masalah baru dan tak terduga di
            fasilitas Anda, dengan menawarkan program
            manajemen fasilitas yang disesuaikan,
            menyeluruh, dan fleksibel.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


{{-- KARIER --}}
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    {{-- HEADER --}}
    <div class="max-w-3xl mb-16">
      <h2 class="text-3xl font-bold mb-6">
        KARIER
      </h2>

      <p class="text-gray-700 text-justify leading-relaxed mb-4">
        Mega Sejahtera Perkasa berkomitmen untuk menciptakan lingkungan kerja
        di mana setiap individu diperlakukan dengan rasa hormat dan bermartabat.
        Setiap individu memiliki hak untuk bekerja dalam lingkungan profesional
        yang mendorong kesetaraan kesempatan kerja dan melarang adanya tindakan
        diskriminatif.
      </p>

      <p class="text-gray-700 text-justify leading-relaxed mb-8">
        Jika Anda tertarik untuk mengembangkan karier bersama Mega Sejahtera
        Perkasa dan menjadi bagian dari keluarga kami, pelajari lebih lanjut
        tentang kami, serta lowongan pekerjaan yang tersedia saat ini.
      </p>

      <a href="/karier"
         class="inline-block bg-blue-900 text-white
                px-5 py-2.5 rounded-lg text-sm font-semibold
                hover:bg-blue-900/85 transition shadow-md">
        CARI PEKERJAAN
      </a>
    </div>

    {{-- CARDS --}}
<div class="grid md:grid-cols-3 gap-10">

  {{-- CARD 1 --}}
  <div
    class="bg-white rounded-xl overflow-hidden
           shadow-md hover:shadow-2xl
           transition-all duration-300
           transform hover:-translate-y-2
           min-h-[520px] flex flex-col">

    <div class="relative h-[300px]">
      <img src="{{ asset('images/home/karier/karier1.jpg') }}"
           class="w-full h-full object-cover">

      <div class="absolute bottom-0 left-0 w-full h-24
                  bg-gradient-to-t from-white via-white/80 to-transparent"></div>
    </div>

    <div class="p-6 text-center flex-1">
      <h3 class="font-semibold text-lg mb-2">
        Pekerjaan Garda Depan
      </h3>

      <p class="text-sm text-justify text-gray-700 leading-relaxed">
        Bergabunglah dengan tim yang beragam dan berpengalaman,
        terdiri dari para pekerja berdedikasi yang berperan
        penting di garda terdepan.
      </p>
    </div>
  </div>

  {{-- CARD 2 --}}
  <div
    class="bg-white rounded-xl overflow-hidden
           shadow-md hover:shadow-2xl
           transition-all duration-300
           transform hover:-translate-y-2
           min-h-[520px] flex flex-col">

    <div class="relative h-[300px]">
      <img src="{{ asset('images/home/karier/karier2.jpg') }}"
           class="w-full h-full object-cover">

      <div class="absolute bottom-0 left-0 w-full h-24
                  bg-gradient-to-t from-white via-white/80 to-transparent"></div>
    </div>

    <div class="p-6 text-center flex-1">
      <h3 class="font-semibold text-lg mb-2">
        Pekerjaan Manajemen
      </h3>

      <p class="text-sm text-justify text-gray-700 leading-relaxed">
        Ambil bagian dalam perencanaan dan pengelolaan operasional,
        yang mendukung keberhasilan layanan di berbagai bidang
        seperti lingkungan, kebersihan, pertamanan, dan lainnya.
      </p>
    </div>
  </div>

  {{-- CARD 3 --}}
  <div
    class="bg-white rounded-xl overflow-hidden
           shadow-md hover:shadow-2xl
           transition-all duration-300
           transform hover:-translate-y-2
           min-h-[520px] flex flex-col">

    <div class="relative h-[300px]">
      <img src="{{ asset('images/home/karier/karier3.jpg') }}"
           class="w-full h-full object-cover">

      <div class="absolute bottom-0 left-0 w-full h-24
                  bg-gradient-to-t from-white via-white/80 to-transparent"></div>
    </div>

    <div class="p-6 text-center flex-1">
      <h3 class="font-semibold text-lg mb-2">
        Mengapa Bekerja di <br> PT Mega Sejahtera Perkasa
      </h3>

      <p class="text-sm text-justify text-gray-700 leading-relaxed">
        PT Mega Sejahtera Perkasa menawarkan peluang pengembangan
        karier yang menarik, lingkungan kerja yang positif,
        serta nilai kebersamaan dan profesionalisme yang kuat.
      </p>
    </div>
  </div>

</div>


</section>


{{-- CTA --}}
<section class="py-14 bg-white">
  <div class="max-w-3xl mx-auto px-6">

    <div
      class="bg-[#18224d] text-white rounded-xl px-8 py-10 text-center shadow-lg">

      <h2 class="text-xl font-semibold mb-3">
        Dapatkan Informasi Lebih
      </h2>

      <p class="text-sm leading-relaxed text-gray-200 mb-6 text-center">
        Dengan lebih dari 200 karyawan berdedikasi, Mega Sejathera Perkasa merupakan salah satu perusahaan layanan manajemen fasilitas terkemuka, yang menyediakan solusi pengemudi, pemeliharaan dan pertamanan dengan dukungan fasilitas berkualitas tinggi kepada pelanggan.
      </p>

      <a href="/permintaan-layanan"
        class="inline-block bg-white text-[#18224d]
                font-semibold text-sm px-6 py-2.5 rounded-md
                transition duration-300
                hover:bg-blue-900 hover:text-white
                border border-blue-900">
          DAPATKAN INFORMASI LEBIH
      </a>


    </div>

  </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', () => {

  /* =========================
     HERO PARALLAX (AMAN)
     ========================= */
  const heroCols = document.querySelectorAll(
    'section:first-of-type .grid > div'
  );

  /* =========================
     REVEAL ELEMENTS (CONTENT)
     ========================= */
  const revealItems = document.querySelectorAll(
    'section:not(:first-of-type) > div'
  );

  let targetScroll = window.scrollY;
  let currentScroll = targetScroll;
  const ease = 0.08;

  window.addEventListener('scroll', () => {
    targetScroll = window.scrollY;
  }, { passive: true });

  function animate() {
    currentScroll += (targetScroll - currentScroll) * ease;

    /* HERO — CINEMATIC */
    heroCols.forEach((col, i) => {
      const speeds = [0.22, 0.36, 0.16];
      col.style.transform =
        `translate3d(0, ${currentScroll * speeds[i]}px, 0)`;
    });

    requestAnimationFrame(animate);
  }

  animate();

  /* =========================
     SCROLL REVEAL (CONTENT)
     ========================= */
    const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
        } else {
          entry.target.classList.remove('is-visible');
        }
      });
    },
    {
      threshold: 0.2,
      rootMargin: '0px 0px -100px 0px'
    }
  );

  revealItems.forEach(el => {
    el.classList.add('reveal');
    observer.observe(el);
  });

});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".btn-sound");
    const bgm = document.getElementById("bgm");

    /* =========================
       PRELOAD SEMUA SOUND
       ========================= */
    const sounds = {
        taman: new Audio("/sound/taman.mp3"),
        pemeliharaan: new Audio("/sound/pemeliharaan.mp3"),
        driver: new Audio("/sound/driver.mp3"),
    };

    Object.values(sounds).forEach(s => {
        s.preload = "auto";
        s.volume = 1.0;
    });

    /* =========================
       FUNCTION PLAY SOUND
       ========================= */
    function playSound(sound) {
        if (!sound) return;

        sound.pause();          // reset dulu
        sound.currentTime = 0;

        return sound.play().catch(err => {
            console.log("Audio blocked:", err);
        });
    }

    /* =========================
       BUTTON CLICK
       ========================= */
    buttons.forEach(btn => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();

            const soundSrc = btn.getAttribute("data-sound");
            const key = soundSrc.split("/").pop().replace(".mp3", "");
            const chosenSound = sounds[key];

            // Turunin BGM dikit
            if (bgm) bgm.volume = 0.3;

            playSound(chosenSound).then(() => {
                setTimeout(() => {
                    if (bgm) bgm.volume = 0.5;
                    window.location.href = btn.href;
                }, 2000);
            });

        });
    });

});
</script>



@endsection
