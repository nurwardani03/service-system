@extends('layouts.app')
@section('title','Layanan Topiari Taman Komersial')

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
  transition: opacity .9s ease, transform .9s ease;
}
[data-reveal].is-visible {
  opacity: 1;
  transform: translateY(0);
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

{{-- ================= HERO ================= --}}
<section class="relative h-[340px] overflow-hidden">

  {{-- HERO IMAGE --}}
  <img src="{{ asset('images/taman/layanan3/hero.jpg') }}"
       class="absolute inset-0 w-full h-[120%] object-cover"
       data-parallax="0.25">

  <div class="absolute inset-0 bg-black/45"></div>

  <div class="relative z-10 h-full flex items-center max-w-7xl mx-auto px-10">
    <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight">
      LAYANAN TOPIARI<br>
      TAMAN KOMERSIAL
    </h1>
  </div>
</section>

{{-- ================= SECTION 1 ================= --}}
<section class="bg-[#e6f8e4] py-24" data-reveal>
  <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-20 items-start">

    {{-- TEXT --}}
    <div>
      <h2 class="text-2xl font-bold text-[#367D31] mb-6">
        Instalasi Topiari untuk Setiap Industri<br>
        dan Fasilitas
      </h2>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Ketika karyawan, pelanggan, atau tamu mendekati properti Anda, bentuk
        topiari yang rapi dan kreatif akan langsung mencuri perhatian serta
        menciptakan kesan profesional, artistik, dan berkelas. Inilah mengapa
        instalasi topiari menjadi elemen penting dalam membangun citra properti.
      </p>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Di Mega Sejahtera Perkasa, kami menghadirkan layanan instalasi topiari
        yang sepenuhnya dapat disesuaikan dengan kebutuhan setiap industri,
        baik kawasan perkantoran, fasilitas publik, hingga area komersial.
        Kami menghadirkan topiari yang tidak hanya menarik secara visual,
        tetapi juga fungsional.
      </p>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Instalasi topiari mencakup pemilihan tanaman berkualitas, pembentukan
        dengan teknik pemangkasan presisi, hingga penataan yang sesuai dengan
        konsep lanskap keseluruhan. Selain memperindah tampilan, topiari juga
        menunjang proses perawatan lanskap agar lebih terkontrol, tahan lama,
        serta mudah dikelola.
      </p>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Apa pun bentuk atau konsep topiari yang Anda bayangkan baik minimalis modern, klasik elegan, atau karakter yang mencerminkan perusahaan, Kami siap mewujudkannya dengan standar profesional.
      </p>

    </div>

    {{-- IMAGE --}}
    <div class="rounded-xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/taman/layanan3/detail1.jpg') }}"
           class="w-full h-[360px] object-cover will-change-transform">
    </div>

  </div>

  {{-- BUTTON --}}
  <div class="mt-16 flex justify-center">
    <a href="/permintaan-layanan"
       class="inline-flex items-center gap-2
              bg-[#367D31] text-white
              px-7 py-3 text-sm font-semibold
              rounded-lg
              shadow-sm
              transition-all duration-300 ease-out
              hover:bg-[#285D24] hover:text-white
              hover:shadow-md hover:-translate-y-0.5">

      DAPATKAN INFORMASI LEBIH

      <svg xmlns="http://www.w3.org/2000/svg"
           class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"
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
<section class="bg-[#e6f8e4] py-24" data-reveal>
  <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-20 items-start">

    {{-- IMAGE --}}
    <div class="rounded-xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/taman/layanan2/detail2.jpg') }}"
           class="w-full h-[360px] object-cover">
    </div>

    {{-- TEXT --}}
    <div>
      <h3 class="text-2xl font-bold text-[#367D31] mb-6">
        Instalasi Komersial yang Kami Tawarkan
      </h3>

      <p class="text-m text-[#367D31] leading-relaxed mb-5">
        Kami menyediakan berbagai layanan topiari profesional yang dirancang untuk memperindah dan memperkuat karakter visual area luar bangunan Anda.<br> Layanan kami mencakup
      </p>

      <ul class="list-disc list-inside text-m text-[#367D31] space-y-3">
        <li>Desain topiari khusus sesuai identitas atau tema perusahaan</li>
        <li>Pemilihan tanaman yang tepat untuk kebutuhan topiari jangka panjang</li>
        <li>Perawatan dan pemangkasan rutin untuk mempertahankan bentuk tanaman tetap rapi dan estetis</li>
        <li>Pembentukan tanaman hias dalam berbagai bentuk artistik (bola, spiral, hewan, dan bentuk dekoratif lainnya)</li>
        <li>Instalasi topiary sebagai elemen penanda area, dekorasi pintu masuk, atau focal point lanska</li>
        <li>Integrasi topiary dengan taman, jalur pejalan kaki, atau area komersial lainnya</li>
        <li>...dan masih banyak lagi!</li>
      </ul>
    </div>

  </div>

  {{-- BUTTON --}}
  <div class="mt-16 flex justify-center">
    <a href="/permintaan-layanan"
       class="inline-flex items-center gap-2
              bg-[#367D31] text-white
              px-7 py-3 text-sm font-semibold
              rounded-lg
              shadow-sm
              transition-all duration-300 ease-out
              hover:bg-[#285D24] hover:text-white
              hover:shadow-md hover:-translate-y-0.5">

      DAPATKAN INFORMASI LEBIH

      <svg xmlns="http://www.w3.org/2000/svg"
           class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"
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

{{-- ================= JENIS LAYANAN ================= --}}
<section class="min-h-screen bg-[#e6f8e4] py-28">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-3xl font-bold text-[#367D31] mb-12 leading-snug">
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
            <h3 class="font-semibold text-[#367D31] text-xl leading-snug">
                {{ str_replace(' TAMAN KOMERSIAL','',$item['title']) }}
                <span class="block text-xl font-semibold text-[#367D31] mt-1">
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

{{-- ================= SECTION 3 ================= --}}
<section class="bg-[#e6f8e4] py-24" data-reveal>
  <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-20 items-start">

    {{-- TEXT --}}
    <div>
      <h3 class="text-2xl font-bold text-[#367D31] mb-6">
        Proses Instalasi Topiari Kami
      </h3>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Sebelum memulai instalasi topiari, kami selalu mengawali proses dengan memahami kebutuhan dan visi setiap klien secara mendalam. Kami meninjau gaya lanskap yang ingin dicapai, jenis bentuk topiary yang diinginkan, kondisi lingkungan, serta anggaran yang tersedia. Dengan pendekatan ini, kami dapat menyusun konsep desain topiary yang tepat, estetik, dan selaras dengan karakter ruang luar Anda.
      </p>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Setelah desain disetujui, kami melakukan langkah-langkah persiapan seperti pemilihan tanaman yang ideal untuk dibentuk, pembersihan area tanam, perbaikan media tanam, serta pengecekan sistem irigasi agar tanaman dapat tumbuh optimal. Ketika seluruh persiapan selesai, tim ahli kami memulai proses pembentukan dan pemasangan topiari secara hati-hati dan presisi untuk memastikan setiap detail sesuai standar.
      </p>

      <p class="text-m text-[#367D31] leading-relaxed text-justify">
        Topiari membutuhkan sentuhan seni sekaligus keahlian teknis. Dengan proses instalasi yang tepat, kami membantu menciptakan elemen lanskap yang unik,
        elegan, dan sesuai dengan identitas visual properti Anda, menjadikan 
        area sekeliling bangunan tampil lebih hidup, menarik, dan berkelas.
      </p>
    </div>

    {{-- IMAGE --}}
    <div class="rounded-xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/taman/layanan3/detail3.jpg') }}"
           class="w-full h-[420px] object-cover will-change-transform">
    </div>

  </div>
</section>

{{-- ================= BAGAIMANA KAMI BEKERJA ================= --}}
<section class="bg-[#e6f8e4] py-20">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-3xl font-bold text-[#367D31] mb-10">
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
          <h3 class="text-center font-bold text-lg md:text-xl text-[#367D31] mb-4 leading-snug">
            {{ $item['title'] }}
            </h3>

          <p class="text-sm text-[#367D31] leading-relaxed text-justify">
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

    <div class="bg-[#367D31] text-white rounded-xl px-8 py-10 text-center shadow-lg">

      <h2 class="text-xl font-semibold mb-3">
        Siap Mengubah Lanskap Anda?
      </h2>

      <p class="text-sm leading-relaxed opacity-90 mb-6">
        Tim kami akan menghubungi Anda dalam waktu 24 jam.
        <br>Mari ciptakan sesuatu yang luar biasa bersama</br>
      </p>

      <a href="/permintaan-layanan"
         class="inline-block bg-white text-[#367D31] font-semibold text-sm
                px-6 py-2.5 rounded-md
                transition duration-300
                hover:bg-[#285D24] hover:text-white">
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
  }, { threshold: 0.25, rootMargin: '0px 0px -100px 0px' });

  revealItems.forEach(el => observer.observe(el));
});
</script>

@endsection
