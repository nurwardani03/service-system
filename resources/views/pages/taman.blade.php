@extends('layouts.app')
@section('title','Layanan Taman')

@section('content')
<style>
  /* ===== PARALLAX ===== */
  [data-parallax] {
    will-change: transform;
    transform: translate3d(0,0,0);
  }

  /* ===== REVEAL FADE ===== */
  [data-reveal] {
    opacity: 0;
    transform: translateY(40px);
    transition:
      opacity 0.9s ease,
      transform 0.9s ease;
  }

  [data-reveal].is-visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<style>
  .full-parallax {
    top: -10%; /* dorong wrapper ke atas */
    will-change: transform;
  }
</style>

{{-- ================= HEADER TAMAN ================= --}}
<section
  class="relative z-10 mt-[96px]"
  style="background: linear-gradient(
    to right,
    #449C3D 0%,
    #367D31 25%,
    #295E25 50%,
    #1B3E18 75%,
    #10250F 100%
  );"
>
  <div class="max-w-7xl mx-auto px-6 py-3">
    <h2 class="text-white text-2xl font-semibold tracking-wide">
      LAYANAN TAMAN
    </h2>
  </div>
</section>

{{-- ================= HERO TAMAN ================= --}}
<section class="relative h-[340px] overflow-hidden">
  <img
    src="{{ asset('images/taman/hero.png') }}"
    class="absolute inset-0 w-full h-full object-cover"
    alt="Hero Taman"
    >
  <div class="absolute inset-0"></div>

  <div class="relative z-10 h-full flex items-center max-w-7xl mx-auto px-10">
  <div class="text-center">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight">
      MENGGUNAKAN<br>
      STANDAR TINGGI<br>
      DALAM PERTAMANAN
    </h1>

    <p class="mt-4 text-white text-sm md:text-base font-light tracking-wide opacity-90">
      Indah, Lestari, Dirawat dengan Ahli
    </p>
  </div>
</div>

</section>


{{-- ================= PROFIL LAYANAN ================= --}}
<section class="bg-[#e6f8e4] py-20">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-14 px-8 items-start"
       data-reveal>

    {{-- TEXT --}}
<div data-parallax="0.05" class="w-full max-w-2xl flex flex-col text-[#285D24]">

  <h5 class="text-sm tracking-widest text-[#285D24] mb-3 uppercase">
    Mega Sejahtera Perkasa
  </h5>

  <h2 class="text-3xl font-bold text-[#285D24] mb-6 leading-snug">
    LAYANAN PERTAMANAN<br>KOMERSIAL
  </h2>

  <p class="text-base text-[#285D24] leading-relaxed mb-4 text-justify">
    Mega Sejahtera Perkasa telah menjadi mitra terpercaya dalam layanan pertamanan komersial di BMKG. Kami menyediakan perawatan lahan profesional untuk meningkatkan tampilan, keamanan, dan nilai properti Anda mulai dari area perkantoran dan fasilitas kesehatan hingga universitas, kawasan hunian, dan kompleks apartemen.
  </p>

  <p class="text-base text-[#285D24] leading-relaxed mb-5 text-justify">
    Baik Anda memerlukan manajemen taman secara menyeluruh maupun pemeliharaan berbasis rute, tim ahli kami memadukan teknologi dengan layanan langsung di lapangan untuk menghadirkan solusi yang disesuaikan dengan kebutuhan dan anggaran Anda.
  </p>

  <h4 class="text-base font-semibold text-[#285D24] mb-3">
    Pertamanan Cerdas dengan Hasil Terbukti
  </h4>

  <p class="text-base text-[#285D24] leading-relaxed mb-6 text-justify">
    Kami mengelola lanskap dengan ketelitian dan kepedulian, menjaga keindahan dan keberlanjutan tanaman baik di musim hujan ataupun musim kemarau.
  </p>

  {{-- POIN KEUNGGULAN --}}
<div class="space-y-3 text-sm md:text-base text-[#285D24] text-justify">

  <p>
    <span class="font-semibold">Keahlian Terbukti:</span>
    Puluhan tahun pengalaman di berbagai industri lingkungan.
  </p>

  <p>
    <span class="font-semibold">Peralatan berteknologi tinggi:</span>
    Dari mesin pemotong rumput otomatis hingga peralatan taman bertenaga baterai, kami berinvestasi pada solusi yang inovatif dan ramah lingkungan.
  </p>

  <p>
    <span class="font-semibold">Kepemimpinan di Lokasi:</span>
    Manajer lapangan kami memastikan komunikasi langsung dengan penyewa menyeluruh, sehingga tujuan pertamanan Anda tercapai dengan efisien dan efektif.
  </p>

  <p>
    <span class="font-semibold">Rencana yang Disesuaikan:</span>
    Kami mendengarkan segala kebutuhan Anda dan merancang solusi lanskap/taman yang mencerminkan merek, anggaran, dan tujuan Anda.
  </p>

  <p>
    <span class="font-semibold">Komitmen Lokal:</span>
    Dengan hubungan yang kuat terhadap komunitas yang kami layani, kami berinvestasi dalam kesuksesan Anda.
  </p>

</div>
    </div>

    {{-- IMAGE AREA --}}
    <div class="flex flex-col items-end relative">

      {{-- GAMBAR ATAS --}}
      <img src="{{ asset('images/taman/komersial1.jpg') }}"
           class="w-[340px] h-[480px] object-cover rounded-lg shadow-xl relative z-20 mr-[-40px]"
           alt="Layanan Pertamanan Komersial">

      {{-- GAMBAR BAWAH --}}
      <img src="{{ asset('images/taman/komersial2.jpg') }}"
           class="w-[340px] h-[480px] object-cover rounded-lg shadow-xl relative z-10 mt-[40px] mr-[160px]"
           alt="Perawatan Taman Profesional">

    </div>

  </div>
</section>

{{-- ================= FULL IMAGE SECTION ================= --}}
<section class="h-[85vh] relative overflow-hidden " data-reveal>

  <div class="absolute inset-0 full-parallax">
    <img src="{{ asset('images/taman/full.jpg') }}"
         class="w-full h-[110%] object-cover object-top">
  </div>

</section>


{{-- ================= JENIS LAYANAN ================= --}}
<section class="min-h-screen bg-[#e6f8e4] py-28">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-3xl font-bold text-green-900 mb-12 leading-snug">
      Kami Menawarkan <br> Perawatan Taman Berikut
    </h2>

    <div class="grid md:grid-cols-3 gap-12">

      @foreach ([
        [
            'img'=>'layanan1.jpg',
            'title'=>'LAYANAN PERAWATAN TAMAN KOMERSIAL',
            'url'=>'/taman/perawatan'
        ],
        [
            'img'=>'layanan2.jpg',
            'title'=>'LAYANAN INSTALASI TAMAN KOMERSIAL',
            'url'=>'/taman/instalasi'
        ],
        [
            'img'=>'layanan3.jpg',
            'title'=>'LAYANAN TOPIARI TAMAN KOMERSIAL',
            'url'=>'/taman/topiari'
        ],
        ] as $item)

        <a href="{{ $item['url'] }}"
        class="block group">

        <div
            class="bg-white rounded-xl shadow-lg overflow-hidden
                hover:shadow-2xl transition
                transform hover:-translate-y-2
                min-h-[480px] flex flex-col">

            {{-- IMAGE --}}
            <div class="relative overflow-hidden">
            <img src="{{ asset('images/taman/'.$item['img']) }}"
                class="w-full h-[340px] object-cover
                        transition-transform duration-700
                        group-hover:scale-105">

            <div class="absolute bottom-0 w-full h-24
                        bg-gradient-to-t from-white via-white/80 to-transparent"></div>
            </div>

            {{-- TEXT --}}
            <div class="flex-1 px-6 py-6 flex items-center justify-center text-center">
            <h3 class="font-semibold text-[#285D24] text-xl leading-snug">
                {{ str_replace(' TAMAN KOMERSIAL','',$item['title']) }}
                <span class="block text-xl font-semibold text-[#285D24] mt-1">
                TAMAN KOMERSIAL
                </span>
            </h3>
            </div>

        </div>

        </a>
        @endforeach

    </div>

  </div>
</section>

{{-- ================= GALERI ================= --}}
<section class="bg-[#cfeecb] py-16">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-3xl font-bold text-[#285D24] mb-6">
      Galeri
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

      @for ($i = 1; $i <= 6; $i++)
        <div class="overflow-hidden rounded-md shadow-sm bg-white aspect-square">
          <img
            src="{{ asset('images/taman/galeri'.$i.'.jpg') }}"
            alt="Galeri {{ $i }}"
            class="w-full h-full object-cover">
        </div>
      @endfor

    </div>

  </div>
</section>

{{-- ================= BAGAIMANA KAMI BEKERJA ================= --}}
<section class="bg-[#e6f8e4] py-20">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-3xl font-bold text-[#285D24] mb-10">
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
            src="{{ asset('images/taman/'.$item['img']) }}"
            alt="{{ $item['title'] }}"
            class="w-full h-full object-cover">

          <div class="absolute bottom-0 w-full h-24
                      bg-gradient-to-t from-white via-white/80 to-transparent"></div>
        </div>

        {{-- TEXT --}}
        <div class="p-7 flex-1">
          <h3 class="text-center font-bold text-lg md:text-xl text-[#285D24] mb-4 leading-snug">
            {{ $item['title'] }}
            </h3>

          <p class="text-sm text-[#285D24] leading-relaxed text-justify">
            {{ $item['desc'] }}
          </p>
        </div>

      </div>

      @endforeach
    </div>

  </div>
</section>


{{-- ================= CTA ================= --}}
<section class="py-14 flex items-center bg-[#e6f8e4]">
  <div class="max-w-3xl mx-auto px-6 w-full" data-reveal>

    <div class="bg-[#285D24] text-white rounded-xl px-8 py-10 text-center shadow-lg">

      <h2 class="text-xl font-semibold mb-3">
        Siap Mengubah Lanskap Anda?
      </h2>

      <p class="text-sm leading-relaxed opacity-90 mb-6">
        Tim kami akan menghubungi Anda dalam waktu 24 jam.
        <br>Mari ciptakan sesuatu yang luar biasa bersama</br>
      </p>

      <a href="/permintaan-layanan"
         class="inline-block bg-white text-green-800 font-semibold text-sm
                px-6 py-2.5 rounded-md
                transition duration-300
                hover:bg-green-900 hover:text-white">
        DAPATKAN INFORMASI LEBIH
      </a>

    </div>

  </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', () => {

  /* =========================
     PARALLAX
     ========================= */
  const parallaxItems = document.querySelectorAll('[data-parallax]');
  let targetScroll = window.scrollY;
  let currentScroll = targetScroll;
  const ease = 0.08;

  window.addEventListener('scroll', () => {
    targetScroll = window.scrollY;
  }, { passive: true });

  function parallaxAnimate() {
    currentScroll += (targetScroll - currentScroll) * ease;

    parallaxItems.forEach(el => {
  const speed = parseFloat(el.dataset.parallax) || 0.1;
  const rect = el.getBoundingClientRect();

  if (rect.bottom > -200 && rect.top < window.innerHeight + 200) {
    let offset = currentScroll * speed;

    // khusus full image, batasi gerak
    if (el.classList.contains('full-parallax')) {
      offset = Math.min(Math.max(offset, -120), 120);
    }

    el.style.transform =
      `translate3d(0, ${offset}px, 0)`;
  }
});


    requestAnimationFrame(parallaxAnimate);
  }

  parallaxAnimate();

  /* =========================
     REVEAL FADE (BISA BALIK)
     ========================= */
  const revealItems = document.querySelectorAll('[data-reveal]');

  const revealObserver = new IntersectionObserver(
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
      threshold: 0.25,
      rootMargin: '0px 0px -100px 0px'
    }
  );

  revealItems.forEach(el => revealObserver.observe(el));

});
</script>


@endsection
