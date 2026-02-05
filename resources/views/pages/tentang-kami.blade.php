@extends('layouts.app')
@section('title','Tentang Kami')

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

<style>
@font-face {
  font-family: 'FuturaMDBT';
  src: url('{{ asset('fonts/FuturaMDBold.woff2') }}') format('woff2'),
       url('{{ asset('fonts/FuturaMDBold.woff') }}') format('woff');
  font-weight: 700;
  font-style: normal;
  font-display: swap;
}

.futura-title {
  font-family: 'FuturaMDBT', sans-serif;
  font-weight: 700;
  font-size: 36px;
}
</style>


{{-- ================= HERO IMAGE ================= --}}
<section class="mt-[96px]">
  <img src="{{ asset('images/tentang/hero.jpg') }}"
       class="w-full h-[340px] object-cover">
</section>

{{-- ================= TENTANG KAMI ================= --}}
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-6 items-stretch reveal">

    {{-- TEXT --}}
    <div class="flex flex-col justify-center">
      <h2 class="futura-title text-[#18204A] tracking-wide">
      TENTANG KAMI
    </h2>


      <p class="text-[#18204A] leading-relaxed text-base text-justify mb-5">
        PT. Mega Sejahtera Perkasa merupakan perusahaan yang bergerak di bidang
        manajemen fasilitas dengan fokus pada penyediaan layanan yang berkualitas,
        inovatif, dan berorientasi pada kepuasan pelanggan.
      </p>

      <p class="text-[#18204A] leading-relaxed text-base text-justify mb-5">
        Dalam menghadapi persaingan global dan perkembangan teknologi yang pesat, PT. Mega Sejahtera Perkasa terus berinovasi dengan menerapkan sistem kerja yang efektif, efisien, dan berbasis teknologi modern. Hal ini dilakukan untuk memastikan setiap layanan yang diberikan mampu memenuhi standar mutu tinggi serta memberikan nilai tambah bagi seluruh pemangku kepentingan.
      </p>

      <p class="text-[#18204A] leading-relaxed text-base text-justify">
        Kami juga berkomitmen untuk berkontribusi terhadap pembangunan ekonomi dan
        sosial melalui praktik bisnis yang bertanggung jawab, transparan,
        dan beretika.
      </p>
    </div>

    {{-- IMAGE --}}
    <div class="flex justify-center">
      <div class="rounded-xl overflow-hidden shadow-xl w-[320px] h-full md:ml-20">
        <img src="{{ asset('images/tentang/detail1.jpg') }}"
             class="w-full h-full object-cover">
      </div>
    </div>

  </div>
</section>



{{-- ================= SEJARAH KAMI ================= --}}
<section class="relative min-h-[520px] py-20 overflow-hidden">

  {{-- BACKGROUND IMAGE --}}
  <img src="{{ asset('images/tentang/sejarah.png') }}"
       class="absolute inset-0 w-full h-full object-cover">

  {{-- OVERLAY --}}
  <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-black/75"></div>

  {{-- CONTENT --}}
  <div class="relative z-10 max-w-4xl mx-auto px-6 text-white reveal">

    {{-- TITLE --}}
    <h2 class="text-3xl md:text-4xl font-bold tracking-wide mb-6 text-center">
      SEJARAH KAMI
    </h2>

    {{-- DIVIDER --}}
    <div class="w-16 h-1 bg-blue-400 mx-auto mb-8 rounded-full"></div>

    {{-- DESCRIPTION --}}
    <div class="space-y-5 text-sm md:text-base leading-relaxed text-white/90 text-center">
      <p>
        PT. Mega Sejahtera Perkasa didirikan pada tahun 2011 oleh KPN BMKG dengan tujuan untuk membangun perusahaan yang mampu bersaing di tingkat nasional. Berawal dari usaha skala kecil, perusahaan ini terus berkembang seiring meningkatnya kepercayaan pelanggan dan mitra bisnis.
Melalui kerja keras, dedikasi, serta strategi bisnis yang tepat, PT. Mega Sejahtera Perkasa berhasil menyediakan layanan dan meningkatkan kapasitas operasionalnya.
      </p>
    </div>

  </div>
</section>


{{-- ================= SCRIPT REVEAL ================= --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      e.target.classList.toggle('is-visible', e.isIntersecting);
    });
  }, { threshold: 0.2, rootMargin: '0px 0px -100px 0px' });

  items.forEach(el => observer.observe(el));
});
</script>

@endsection
