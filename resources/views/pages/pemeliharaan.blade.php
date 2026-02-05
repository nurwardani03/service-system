@extends('layouts.app')
@section('title','Layanan Pemeliharaan')

@section('content')

<style>
/* ================= PARALLAX ================= */
[data-parallax]{
  will-change: transform;
  transform: translate3d(0,0,0);
}

/* ================= FADE REVEAL ================= */
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

{{-- ================= HEADER ================= --}}
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

  <!-- Background Image -->
  <img
    src="{{ asset('images/me/hero.jpg') }}"
    class="absolute inset-0 w-full h-full object-cover"
    data-parallax="0.25"
    alt="Hero Pemeliharaan"
  >

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/15"></div>

  <!-- Hero Content -->
  <div class="relative z-10 h-full flex items-center justify-end max-w-7xl mx-auto px-10">
    <div class="text-white text-center max-w-xl">
      <h1 class="text-3xl md:text-4xl font-extrabold tracking-wide leading-tight mb-3 uppercase">
        LAYANAN<br>
        PEMELIHARAAN
      </h1>
      <p class="text-sm md:text-base opacity-90 leading-relaxed">
        Layanan Pemeliharaan Berkualitas Tinggi untuk Fasilitas Anda
      </p>
    </div>
  </div>

</section>


{{-- ================= PROFIL ================= --}}
<section class="bg-[#E9FEFF] py-28">
  <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-20 items-center" data-reveal>

    {{-- TEXT --}}
    <div>
      <h5 class="text-lg tracking-widest text-[#3ba4ad] mb-4 uppercase">
        Mega Sejahtera Perkasa
      </h5>

      <h2 class="text-3xl font-bold text-[#62A7AA] mb-6">
        Layanan Pemeliharaan
      </h2>

      <p class="text-[#62A7AA] leading-relaxed mb-4 text-justify text-m">
        Mega Sejahtera Perkasa menangani tugas kompleks dalam pengelolaan operasional gedung, yang melibatkan pengaturan berbagai variabel. Kami memberikan perhatian penuh terhadap pemeliharaan fasilitas, memastikan ketelitian dalam setiap detail, serta mengoordinasikan sumber daya penting dengan cermat.
      </p>

      <p class="text-[#62A7AA] leading-relaxed mb-4 text-justify text-m">
        Tim kami terdiri dari individu yang terlatih dan andal, yang bertanggung jawab atas pemeliharaan serta perbaikan sistem. Mereka memiliki pemahaman mendalam tentang pentingnya waktu dan kualitas, dua faktor utama yang krusial bagi keberhasilan bisnis Anda
      </p>

      <p class="text-[#62A7AA] leading-relaxed text-justify text-m">      
        Dengan keahlian kami dalam manajemen fasilitas, kami siap melakukan pemeliharaan, perbaikan, dan peningkatan fasilitas kompleks Anda selama 24 jam sehari, 7 hari seminggu. Teknisi Pemeliharaan kami menjaga standar operasional Anda melalui pemeriksaan internal profesional. Anda dapat mempercayakan kami sebagai penyedia layanan pemeliharaan gedung yang tepercaya.
      </p>
    </div>

    {{-- IMAGE --}}
    <div class="rounded-2xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/me/detail1.jpg') }}"
           class="w-full h-[520px] object-cover">
    </div>

  </div>
</section>

{{-- ================= FULL IMAGE ================= --}}
<section class="relative h-screen overflow-hidden" data-reveal>

  <img src="{{ asset('images/me/full.jpg') }}"
       class="absolute inset-0 w-full h-[120%] object-cover">

  <div class="absolute inset-0"></div>
</section>

{{-- ================= LAYANAN CARD ================= --}}
<section class="bg-[#E9FEFF] py-28">
  <div class="max-w-7xl mx-auto px-10" data-reveal>

    <h2 class="text-2xl md:text-3xl font-bold text-[#497D7F] mb-16 leading-snug">
      Kami Menawarkan<br> Layanan Pemeliharaan Berikut
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

{{-- ================= GALERI ================= --}}
<section class="bg-[#DBFEFF] py-24">
  <div class="max-w-7xl mx-auto px-10">

    <h2 class="text-3xl font-bold text-[#497D7F] mb-16">
      Galeri
    </h2>

    <div class="grid md:grid-cols-3 gap-10">
      @for ($i = 1; $i <= 3; $i++)
        <div class="overflow-hidden rounded-lg shadow-xl
                    h-[320px] md:h-[360px] bg-white">
          <img
            src="{{ asset('images/me/galeri'.$i.'.jpg') }}"
            alt="Galeri {{ $i }}"
            class="w-full h-full object-cover
                   transition-transform duration-700 hover:scale-105">
        </div>
      @endfor
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
