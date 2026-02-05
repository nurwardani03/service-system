@extends('layouts.app')
@section('title','Layanan Perawatan Taman Komersial')

@section('content')

<style>
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
  <img src="{{ asset('images/taman/layanan1/layanan_perawatan.jpg') }}"
     class="absolute inset-0 w-full h-[120%] object-cover object-center will-change-transform"
     data-parallax="0.25">

  <div class="absolute inset-0 bg-black/40"></div>

  <div class="relative z-10 h-full flex items-center max-w-7xl mx-auto px-20">
    <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight">
      LAYANAN PERAWATAN<br>
      TAMAN KOMERSIAL
    </h1>
  </div>

</section>


{{-- ================= SECTION 1 ================= --}}
<section class="bg-[#e6f8e4] py-24" data-reveal>
  <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-16 items-start">

    {{-- TEXT --}}
    <div>
      <h2 class="text-3xl md:text-xl font-bold text-[#367D31] mb-6">
        Tingkatkan Keindahan Area Luar Anda<br>
        dengan Pemeliharaan Lanskap Profesional
      </h2>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Ruang hijau alami menambahkan kesegaran dan estetika pada properti komersial. Namun tanpa perawatan yang tepat, alam dapat mengambil alih area di sekitar bangunan dengan cepat. Lansekap yang tidak terawat memberikan kesan negatif
        bagi karyawan, pelanggan, tamu, maupun pengunjung.
      </p>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Tentu saja, merawat halaman, taman, pepohonan, dan semak-semak secara benar bisa menjadi pekerjaan besar, terutama jika area yang dikelola cukup luas. Di sinilah peran profesional pemeliharaan lanskap komersial dari Mega Sejahtera Perkasa menjadi sangat penting.
      </p>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Pemeliharaan lansekap komersial mencakup berbagai tindakan untuk merawat elemen alami di area luar suatu properti, seperti rumput, tanah, tanaman, sistem irigasi, dan lainnya. Setiap jenis properti memiliki kebutuhan dan tingkat layanan pemeliharaan yang berbeda, tergantung pada ukuran, fungsi, serta kebutuhannya. Sebagai contoh, bagian luar ruang pusat perbelanjaan mungkin hanya memerlukan layanan pemotongan rumput satu hingga dua pekan serta pembersihan sisa tanaman, sementara perumahan mungkin hanya membutuhkan layanan tambahan seperti program perawatan rumput, hingga perawatan tanaman hias ornamental.
      </p>
    </div>

    {{-- IMAGE --}}
    <div class="rounded-xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/taman/layanan1/detail1.jpg') }}"
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
  <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-16 items-center">

    {{-- IMAGE --}}
    <div class="rounded-xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/taman/layanan1/detail2.jpg') }}"
        class="w-full h-[360px] object-cover will-change-transform">
    </div>

    {{-- TEXT --}}
    <div>
      <h3 class="text-2xl font-bold text-[#367D31] mb-4">
        Mengapa Pemeliharaan Lanskap Itu Penting
      </h3>

      <p class="text-m text-[#367D31] leading-relaxed mb-5 text-justify">
        Pemeliharaan lansekap yang tepat sama pentingnya dengan pemeliharaan bangunan dalam menjaga nilai bisnis dan aset Anda. Merawat lansekap dengan baik dapat:
      </p>

      <ul class="list-disc list-inside text-m text-[#367D31] space-y-3">
        <li>
          Meningkatkan citra dan reputasi bisnis Anda
        </li>
        <li>
          Menjaga serta meningkatkan nilai properti
        </li>
        <li>
        Melindungi bangunan dari gangguan dan kerusakan lingkungan (seperti ranting jatuh,
        kelembapan, jamur, pembusukan, dan hama, dan lainnya)
        </li>
        <li>
          Memberikan kesan pertama yang kuat bagi pengunjung
        </li>
        <li>
          ...dan masih banyak lagi!
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
      Berikut
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
  <div class="max-w-7xl mx-auto px-10 grid md:grid-cols-2 gap-16 items-start">

    {{-- TEXT --}}
    <div>
      <h3 class="text-2xl font-bold text-[#367D31] leading-snug mb-6">
        Layanan Pemeliharaan Lanskap Komersial:<br>
        Keunggulan Mega Sejahtera Perkasa
      </h3>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Beberapa kontraktor pemeliharaan lanskap komersial menawarkan solusi
        yang seragam untuk semua klien mereka. Namun tidak demikian dengan
        Mega Sejahtera Perkasa. Kami menyediakan layanan pertamanan yang dapat
        disesuaikan untuk setiap klien, sehingga mereka hanya berinvestasi
        pada layanan yang dibutuhkan dan sesuai dengan anggaran mereka.
      </p>

      <p class="text-m text-[#367D31] leading-relaxed mb-4 text-justify">
        Dengan ribuan meter area yang dikelola oleh tim pemeliharaan lanskap
        kami, para manajer operasional lapangan mampu memberikan pengetahuan
        dan pengalaman terbaik kepada pelanggan, sekaligus menghadirkan
        solusi lanskap yang disesuaikan untuk meningkatkan keindahan dan
        daya tarik setiap properti.
      </p>

      <p class="text-lg font-semibold text-[#367D31] mb-3">
        Layanan pemeliharaan lanskap komersial kami mencakup:
      </p>

      <ul class="list-disc list-inside text-m text-[#367D31] space-y-2">
        <li>Pemeliharaan instalasi komersial</li>
        <li>Pemupukan dan pengendalian hama secara menyeluruh</li>
        <li>Manajemen sistem irigasi</li>
        <li>Pemotongan, pemangkasan, dan perapihan tepi rumput</li>
        <li>Pencegahan kerusakan akibat badai serta pembersihan sisa-sisa puing</li>
        <li>...dan masih banyak lagi!
      </ul>
    </div>

    {{-- IMAGE --}}
    <div class="rounded-xl overflow-hidden shadow-xl">
      <img src="{{ asset('images/taman/layanan1/detail3.png') }}" 
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


<script>
document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('[data-parallax]');
  let latestScrollY = window.scrollY;
  let ticking = false;

  function updateParallax() {
    items.forEach(el => {
      const speed = parseFloat(el.dataset.parallax);
      const rect = el.getBoundingClientRect();

      if (rect.bottom > -200 && rect.top < window.innerHeight + 200) {
        const offset = (latestScrollY - el.offsetTop) * speed;
        el.style.transform = `translate3d(0, ${offset}px, 0)`;
      }
    });
    ticking = false;
  }

  window.addEventListener('scroll', () => {
    latestScrollY = window.scrollY;
    if (!ticking) {
      window.requestAnimationFrame(updateParallax);
      ticking = true;
    }
  }, { passive: true });

  updateParallax();
});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {

  /* =========================
     REVEAL FADE 
     ========================= */
  const revealItems = document.querySelectorAll('[data-reveal]');

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
      threshold: 0.25,
      rootMargin: '0px 0px -100px 0px'
    }
  );

  revealItems.forEach(el => observer.observe(el));

});
</script>

@endsection
