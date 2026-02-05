@extends('layouts.app')
@section('title','Layanan Pergantian Lampu dan Ballast')

@section('content')

<style>
/* ===== PARALLAX ===== */
[data-parallax]{
  will-change: transform;
  transform: translate3d(0,0,0);
}

/* ===== FADE REVEAL ===== */
[data-reveal]{
  opacity:0;
  transform:translateY(40px);
  transition:opacity .9s ease, transform .9s ease;
}
[data-reveal].is-visible{
  opacity:1;
  transform:translateY(0);
}
</style>

{{-- ================= HEADER PEMELIHARAAN ================= --}}
<section
  class="relative z-10 mt-[96px]"
  style="background: linear-gradient(
    to right,
    #6FB3B8 0%,
    #5FA6AA 25%,
    #4F8F94 50%,
    #3F777C 75%,
    #2E5F63 100%
  );"
>
  <div class="max-w-7xl mx-auto px-6 py-3">
    <h2 class="text-white text-2xl font-semibold tracking-wide">
      LAYANAN PEMELIHARAAN
    </h2>
  </div>
</section>

{{-- ================= HERO ================= --}}
<section class="relative h-[340px] overflow-hidden">

  {{-- HERO IMAGE --}}
  <img src="{{ asset('images/me/layanan2/hero.jpg') }}"
       class="absolute inset-0 w-full h-[120%] object-cover"
       data-parallax="0.25">

  <div class="absolute inset-0"></div>

  {{-- TEXT--}}
    <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 w-full">
        <!-- Kolom kiri kosong -->
        <div></div>

        <!-- Kolom kanan -->
        <div class="text-white text-center">
        <h1 class="text-3xl md:text-4xl font-bold leading-tight">
            LAYANAN<br>
            PERGANTIAN LAMPU<br>
            DAN BALLAST
        </h1>
        </div>
    </div>
    </div>

</section>

{{-- ================= SECTION 1 ================= --}}
<section class="bg-[#E9FEFF] py-28">
  <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-20 items-center"
       data-reveal>

    {{-- TEXT --}}
    <div>
      <h2 class="text-2xl md:text-3xl font-bold text-[#62A7AA] mb-6">
        Jaga Fasilitas Anda Tetap Terang<br>
        Secara Efisien dan Aman
      </h2>

      <p class="text-[#62A7AA] leading-relaxed mb-4 text-justify text-m">
       Penerangan komersial memiliki peran penting terhadap  efisiensi biaya, dan keselamatan operasional bisnis. Selain menyumbang sekitar sepertiga dari total biaya energi, pencahayaan juga memengaruhi pengalaman pelanggan maupun karyawan. 

       <p class="text-[#62A7AA] leading-relaxed mb-4 text-justify text-m">
       Layanan penggantian lampu dan ballast merupakan bagian dari berbagai layanan pemeliharaan komersial yang ditawarkan oleh Mega Sejahtera Perkasa. Tim profesional kami berkomitmen membantu bisnis mengurangi konsumsi energi, meningkatkan keselamatan kerja, serta memastikan penggunaan pencahayaan yang tepat sesuai kebutuhan spesifik setiap fasilitas.

      <p class="text-[#62A7AA] font-semibold leading-relaxed text-justify text-m">
        Apa Itu Ballast?
      </p>
        <p class="text-[#62A7AA] leading-relaxed text-justify text-m">
            Ballast adalah perangkat elektronik atau elektromagnetik yang berfungsi mengatur keluaran voltase pada jenis lampu tertentu, seperti lampu fluorescent dan high-intensity discharge (HID). Jenis lampu ini membutuhkan arus listrik yang besar sehingga menghasilkan cahaya terang, panas, dan cepat habis. Ballast membatasi penggunaan energi tersebut, membantu bisnis menghemat biaya sekaligus menstabilkan dan memperpanjang umur lampu.
    </div>

    {{-- IMAGE --}}
    <div class="rounded-2xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/me/layanan2/detail1.jpg') }}"
           class="w-full h-[360px] object-cover">
    </div>

  </div>
  {{-- BUTTON --}}
  <div class="mt-16 flex justify-center">
    <a
      href="/permintaan-layanan"
      class="inline-flex items-center gap-2
             bg-[#7AD1D4] text-white
             px-7 py-3 text-sm font-semibold
             rounded-lg
             shadow-sm
             transition-all duration-300 ease-out
             hover:bg-[#63adaf]
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
<section class="bg-[#E9FEFF] py-28">
  <div
    class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-20 items-start"
    data-reveal
  >

    {{-- IMAGE --}}
    <div class="rounded-2xl overflow-hidden shadow-xl aspect-[4/3] self-start">
      <img
        src="{{ asset('images/me/layanan2/detail2.jpg') }}"
        alt="Pencahayaan dan Bohlam"
        class="w-full h-full object-cover"
      >
    </div>

    {{-- TEXT --}}
    <div>
      <h3 class="text-2xl font-bold text-[#62A7AA] mb-6">
        Beragam Jenis Bohlam dan Opsi Pencahayaan
      </h3>

      <p class="text-[#62A7AA] leading-relaxed mb-4 text-m text-justify">
        Setiap bisnis dapat menggunakan berbagai jenis bohlam dengan tingkat efisiensi, kecerahan, dan keluaran panas yang berbeda-beda. Mega Sejahtera Perkasa siap menangani seluruh jenis sistem pencahayaan, termasuk:
      </p>

      <ul class="list-disc list-inside text-[#62A7AA] space-y-2 text-m">
        <li>Bohlam Incandescent</li>
        <li>Lampu Fluorescent</li>
        <li>Bohlam Halogen</li>
        <li>Lampu LED</li>
        <li>Bohlam HID</li>
        <li>Lampu Metal Halide</li>
        <li>...dan banyak lagi!</li>
      </ul>

      <p class="text-[#62A7AA] leading-relaxed mt-4 text-justify text-m">
        Tidak semua jenis pencahayaan membutuhkan ballast (misalnya incandescent dan LED). Namun, beberapa jenis bohlam seperti fluorescent, HID, dan metal halide memerlukan ballast untuk berfungsi optimal dan aman.
      </p>
    </div>

  </div>

  {{-- BUTTON --}}
  <div class="mt-16 flex justify-center">
    <a
      href="/permintaan-layanan"
      class="inline-flex items-center gap-2
             bg-[#7AD1D4] text-white
             px-7 py-3 text-sm font-semibold
             rounded-lg
             shadow-sm
             transition-all duration-300 ease-out
             hover:bg-[#63adaf]
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
<section class="bg-[#E9FEFF] py-28">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-2xl md:text-3xl font-bold text-[#497D7F] mb-16 leading-snug">
      Kami Menawarkan <br> Layanan Pemeliharaan Berikut
    </h2>

    <div class="grid md:grid-cols-3 gap-12">

      @foreach ([
        [
            'img'=>'layanan1.jpg',
            'lines'=>['LAYANAN','PEMELIHARAAN','SISTEM HVAC'],
            'url'=>'/pemeliharaan/hvac'
        ],
        [
            'img'=>'layanan2.jpg',
            'lines'=>['LAYANAN','PERGANTIAN LAMPU','DAN BALLAST'],
            'url'=>'/pemeliharaan/lampu'
        ],
        [
            'img'=>'layanan3.jpg',
            'lines'=>['LAYANAN','PEMELIHARAAN','ELEKTRIKAL'],
            'url'=>'/pemeliharaan/elektrikal'
        ],
      ] as $item)

      <a href="{{ $item['url'] }}"
         class="group block">

        <div
          class="bg-white rounded-2xl overflow-hidden
                 shadow-[0_10px_30px_rgba(0,0,0,0.12)]
                 transition-all duration-500
                 hover:-translate-y-3
                 hover:shadow-[0_25px_60px_rgba(63,111,115,0.35)]">

          {{-- IMAGE --}}
          <div class="relative h-[360px] overflow-hidden">

            <img
              src="{{ asset('images/me/'.$item['img']) }}"
              class="w-full h-full object-cover
                     transition-transform duration-700
                     group-hover:scale-110">

            {{-- FADE EFFECT BAWAH FOTO --}}
            <div
              class="absolute bottom-0 left-0 w-full h-32
                     bg-gradient-to-t
                     from-white via-white/80 to-transparent">
            </div>
          </div>

          {{-- TEXT --}}
          <div class="px-6 py-10 text-center">
            <h3 class="font-semibold text-[#497D7F] leading-snug space-y-1">
              @foreach ($item['lines'] as $line)
                <span class="block text-lg md:text-xl tracking-wide">
                  {{ $line }}
                </span>
              @endforeach
            </h3>
          </div>

        </div>
      </a>

      @endforeach

    </div>

  </div>
</section>

{{-- ================= SECTION 3 ================= --}}
<section class="bg-[#E9FEFF] py-28">
  <div
    class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-20 items-start"
    data-reveal
  >

    {{-- TEXT --}}
    <div>
      <h3 class="text-2xl font-bold text-[#62A7AA] mb-6">
        Mengapa Penggantian Lampu dan Ballast Itu Penting
      </h3>

      <p class="text-[#62A7AA] leading-relaxed mb-4 text-justify text-m">
        Mengganti bohlam dan ballast adalah bagian penting dari pemeliharaan gedung. Sistem pencahayaan modern memang dapat bertahan lama, namun semua bohlam tetap harus diganti seiring waktu. Penggantian ini bukan hanya soal estetika, karena lampu yang berkedip, meredup, atau berubah warna dapat merusak tampilan dan suasana bisnis, tetapi juga soal keselamatan dan efisiensi energi. Menunda penggantian dapat menyebabkan panas berlebih, ledakan, kegagalan listrik, dan risiko lainnya.
      </p>

      <p class="text-[#62A7AA] leading-relaxed mb-4 text-justify text-m">
        Lampu lama juga cenderung menggunakan lebih banyak energi dibanding lampu baru, sehingga meningkatkan biaya operasional. Saat tiba waktunya mengganti bohlam dan ballast, serahkan kepada profesional pemeliharaan pencahayaan. Mega Sejahtera Perkasa dapat melepas, memasang, dan merawat semua jenis sistem pencahayaan dengan tepat.
      </p>

      <p class="text-[#62A7AA] leading-relaxed mb-4 text-justify text-m">
        Di Mega Sejahtera Perkasa, pendekatan kami terhadap pemeliharaan fasilitas bersifat menyeluruh, mencakup seluruh aspek dan komponen yang menjaga bangunan dan bisnis tetap aman serta berfungsi optimal. Termasuk di dalamnya layanan pemeliharaan pencahayaan yang dirancang untuk memaksimalkan usia pakai bohlam, meningkatkan efisiensi energi, serta memastikan keselamatan. Hubungi tim ahli kami hari ini dan wujudkan pencahayaan fasilitas yang lebih efisien.
      </p>
    </div>

    {{-- IMAGE --}}
    <div class="rounded-2xl overflow-hidden shadow-xl aspect-[4/3] self-start">
      <img
        src="{{ asset('images/me/layanan2/detail3.jpg') }}"
        alt="Penggantian Lampu dan Ballast"
        class="w-full h-full object-cover"
      >
    </div>

  </div>
</section>

{{-- ================= BAGAIMANA KAMI BEKERJA ================= --}}
<section class="bg-[#E9FEFF] py-20">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-3xl font-bold text-[#497D7F] mb-10">
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
            src="{{ asset('images/me/'.$item['img']) }}"
            alt="{{ $item['title'] }}"
            class="w-full h-full object-cover">

          <div class="absolute bottom-0 w-full h-24
                      bg-gradient-to-t from-white via-white/80 to-transparent"></div>
        </div>

        {{-- TEXT --}}
        <div class="p-7 flex-1">
          <h3 class="text-center font-bold text-lg md:text-xl text-[#497D7F] mb-4 leading-snug">
            {{ $item['title'] }}
            </h3>

          <p class="text-sm text-[#497D7F] leading-relaxed text-justify">
            {{ $item['desc'] }}
          </p>
        </div>

      </div>

      @endforeach
    </div>

  </div>
</section>

{{-- ================= CTA ================= --}}
<section class="bg-[#E9FEFF] py-16">
  <div class="max-w-3xl mx-auto px-6" data-reveal>

    {{-- CTA CARD --}}
    <div
      class="bg-[#7AD1D4]
             rounded-xl
             px-8 py-10
             text-center
             shadow-lg">

      <h2 class="text-xl font-semibold text-white mb-3">
        Dapatkan Informasi Lebih
      </h2>

      <p class="text-white/90 max-w-2xl mx-auto text-sm leading-relaxed mb-6 text-justify">
        Dengan lebih dari 200 karyawan berdedikasi, Mega Sejahtera Perkasa
        merupakan salah satu perusahaan layanan fasilitas terkemuka,
        yang menyediakan solusi pengemudi, pemeliharaan, dan pertamanan
        dengan dukungan fasilitas berkualitas tinggi kepada pelanggan.
      </p>

      <a href="/informasi"
         class="inline-flex items-center justify-center
                bg-white text-[#7AD1D4] font-semibold text-sm
                px-6 py-2.5 rounded-md
                transition duration-300
                hover:bg-[#3F6F73] hover:text-white">
        DAPATKAN INFORMASI LEBIH
      </a>

    </div>

  </div>
</section>

{{-- ================= SCRIPT ================= --}}
<script>
document.addEventListener('DOMContentLoaded',()=>{

  /* PARALLAX */
  const pItems=document.querySelectorAll('[data-parallax]');
  let sy=window.scrollY;
  window.addEventListener('scroll',()=>sy=window.scrollY,{passive:true});

  function parallax(){
    pItems.forEach(el=>{
      const sp=parseFloat(el.dataset.parallax);
      const r=el.getBoundingClientRect();
      if(r.bottom>-200 && r.top<innerHeight+200){
        el.style.transform=`translate3d(0,${sy*sp}px,0)`;
      }
    });
    requestAnimationFrame(parallax);
  }
  parallax();

  /* FADE */
  const rev=document.querySelectorAll('[data-reveal]');
  const obs=new IntersectionObserver(e=>{
    e.forEach(x=>x.target.classList.toggle('is-visible',x.isIntersecting));
  },{threshold:.25,rootMargin:'0px 0px -120px 0px'});
  rev.forEach(el=>obs.observe(el));
});
</script>

@endsection
