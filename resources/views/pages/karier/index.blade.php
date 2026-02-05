@extends('layouts.app')
@section('title','Temukan Pekerjaan')

@section('content')

<style>
.input {
  width: 100%;
  border: 1px solid #d1d5db;
  padding: 12px 14px;
  border-radius: 10px;
  font-size: 0.8rem; 
  transition: all .25s ease;
}

.input:focus {
  outline: none;
  border-color: #1e3a8a;
  box-shadow: 0 0 0 4px rgba(30,58,138,.15);
}
</style>

<style>
/* ================= PARALLAX ================= */
[data-parallax]{
  will-change: transform;
  transform: translate3d(0,0,0);
}

/* ================= REVEAL ================= */
.reveal{
  opacity: 0;
  transform: translateY(48px);
  transition: opacity .9s ease, transform .9s ease;
}

.reveal.is-visible{
  opacity: 1;
  transform: translateY(0);
}
</style>

<style>
/* ================= BUTTON INTERACTION ================= */
.btn-interactive {
  cursor: pointer;
  transition: 
    transform .25s ease,
    box-shadow .25s ease,
    background-color .25s ease;
}

.btn-interactive:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 30px rgba(31,43,89,.35);
}

.btn-interactive:active {
  transform: translateY(0);
  box-shadow: 0 8px 18px rgba(31,43,89,.25);
}
</style>


{{-- ================= HERO ================= --}}
<section class="relative mt-[96px]">

  <!-- Gambar banner -->
  <img src="{{ asset('images/karier/hero.jpg') }}"
       class="w-full h-[340px] object-cover data-parallax="0.3">

  <!-- Overlay konten di atas gambar -->
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4 bg-black/30">

    <h1 class="text-2xl md:text-3xl font-bold mb-4 tracking-wide">
      TEMUKAN PEKERJAAN
    </h1>

    <a href="{{ route('karier.posisi') }}"
       class="bg-[#18204A] px-6 py-2 rounded-md text-sm font-semibold hover:bg-[#394272] transition">
      LIHAT POSISI YANG TERBUKA
    </a>

  </div>

</section>



{{-- ================= FORM ================= --}}
<section class="py-16 bg-white relative reveal">
  <div class="max-w-4xl mx-auto px-6">

    <h2 class="text-2xl font-bold mb-7 text-[#18204A] text-center">
      BELUM PERNAH MELAMAR DI TEMPAT<br>
      KAMI? - HUBUNGI KAMI SEKARANG
    </h2>


    <form action="{{ route('karier.kirim') }}" method="POST"
          class="grid md:grid-cols-2 gap-6">
      @csrf

      {{-- NAMA DEPAN --}}
      <div>
        <label class="block text-sm font-semibold mb-2 text-[#18204A]">
          Nama Depan *
        </label>
        <input name="nama_depan" required class="input text-sm">
      </div>

      {{-- NAMA BELAKANG --}}
      <div>
        <label class="block text-sm font-semibold mb-2 text-[#18204A]">
          Nama Belakang *
        </label>
        <input name="nama_belakang" required class="input text-sm">
      </div>

      {{-- EMAIL --}}
      <div>
        <label class="block text-sm font-semibold mb-2 text-[#18204A]">
          Email *
        </label>
        <input name="email" type="email" required class="input text-sm">
      </div>

      {{-- HANDPHONE --}}
      <div>
        <label class="block text-sm font-semibold mb-2 text-[#18204A]">
          Nomor Handphone *
        </label>
        <input name="handphone" required class="input text-sm">
      </div>

      {{-- KOTA --}}
      <div>
        <label class="block text-sm font-semibold mb-2 text-[#18204A]">
          Kota
        </label>
        <input name="kota" class="input text-sm">
      </div>

      {{-- PROVINSI --}}
      <div>
        <label class="block text-sm font-semibold mb-2 text-[#18204A]">
          Provinsi
        </label>
        <input name="provinsi" class="input text-sm">
      </div>

      {{-- BUTTON --}}
      <div class="md:col-span-2 mt-6 flex justify-center">
        <button type="submit"
            class="btn-interactive bg-[#18204A] text-white
                   px-10 py-2.5
                   rounded-lg
                   text-sm font-semibold tracking-wide
                   hover:bg-[#394272]
                   transition shadow-md">
          KIRIM FORMULIR
        </button>
      </div>

    </form>

  </div>
</section>

  {{-- ================= POPUP SUCCESS ================= --}}
  @if(session('success'))
  <div id="successModal"
       class="fixed inset-0 z-50 flex items-center justify-center
              bg-black/50 backdrop-blur-sm">

    <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-10 text-center
                animate-fadeIn">

      <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center
                  rounded-full bg-green-100 text-green-600 text-3xl">
        ✓
      </div>

      <h3 class="text-2xl font-bold text-[#18204A] mb-4">
        Terima Kasih
      </h3>

      <p class="text-[#18204A] leading-relaxed mb-8">
        Terima kasih atas ketertarikan Anda untuk bergabung dengan
        tim <strong>Mega Sejahtera Perkasa</strong>.
        Perwakilan kami akan segera menghubungi Anda.
      </p>

      <button onclick="closeModal()"
        class="btn-interactive bg-blue-900 text-white
               px-8 py-3 rounded-lg
               hover:bg-blue-900/85
               transition font-semibold">
        Tutup
        </button>
    </div>

  </div>
  @endif

</section>


{{-- ================= INFO ================= --}}
<section class="py-20 bg-[#f6f7fb] reveal">
  <div class="max-w-5xl mx-auto px-6 text-center">

    <h2 class="text-2xl font-bold mb-6 text-[#18204A]">
      BERGABUNG DENGAN TIM MEGA SEJAHTERA PERKASA
    </h2>

    <p class="text-[#18204A] leading-relaxed max-w-6xl mx-auto text-center mb-12 md:text-base">
      Mega Sejahtera Perkasa berkomitmen untuk menciptakan lingkungan kerja di mana setiap individu diperlakukan dengan rasa hormat dan martabat. Setiap orang memiliki hak untuk bekerja dalam suasana profesional yang mendorong kesempatan kerja yang setara dan melarang praktik diskriminatif. Jika Anda tertarik untuk meniti karier di Mega Sejahtera Perkasa dan menjadi bagian dari keluarga kami, silakan gunakan tautan di atas untuk melamar secara online hari ini!
    </p>

    <a href="{{ route('karier.posisi') }}"
       class="text-white bg-[#18204A] px-6 py-2 rounded-md text-sm font-semibold hover:bg-[#394272] transition">
      LIHAT POSISI YANG TERBUKA
    </a>

  </div>
</section>

{{-- ================= KOMITMEN KAMI ================= --}}
<section class="py-20 bg-white reveal">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-2 gap-20 items-start">

      {{-- LEFT BLOCK (IMAGE) --}}
      <div class="rounded-lg overflow-hidden shadow-md relative h-[520px]">

        <img src="{{ asset('images/karier/komitmen.jpg') }}"
            alt="Bergabung Bersama Tim Kami"
            class="w-full h-full object-cover">

        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>

      </div>

      {{-- RIGHT CONTENT --}}
      <div>
        <h2 class="text-3xl md:text-2xl font-bold text-[#18204A] mb-8">
          KOMITMEN KAMI KEPADA KARYAWAN
        </h2>

        <div class="space-y-6 text-[#18204A] text-m leading-relaxed text-justify">
          <p>
            Mega Sejahtera Perkasa berkomitmen untuk membangun tim yang hebat dengan
            merekrut dan mempekerjakan individu-individu paling berkualifikasi dan
            berorientasi pada pelayanan untuk memenuhi kebutuhan pelanggan kami.
            Kami meluangkan waktu untuk meninjau setiap lamaran dengan cermat
            untuk memastikan bahwa kami membentuk tim dan lingkungan kerja yang
            mendukung keberagaman perspektif, latar belakang, pengalaman, dan
            keterampilan.
          </p>

          <p>
            Mega Sejahtera Perkasa menghargai dan menghormati setiap individu serta
            menciptakan budaya kerja yang menjunjung tinggi standar etika yang tinggi.
          </p>

          <p>
            Mega Sejahtera Perkasa memberikan kesempatan setara dan menyediakan pekerjaan berdasarkan kapabilitas serta kualifikasi individu tanpa diskriminasi atas dasar suku, ras, dan agama.
          </p>

          <p>
            Mega Sejahtera Perkasa berupaya menjaga lingkungan kerja yang sehat,
            aman, dan bebas kecelakaan. Praktik keselamatan yang baik dan program
            keselamatan yang efektif merupakan kunci keberhasilan perusahaan secara
            keseluruhan. Untuk mendorong budaya ini, kami memiliki komitmen terhadap
            keselamatan mulai dari manajemen puncak hingga seluruh karyawan.
            Kami sangat mendorong karyawan untuk mengomunikasikan setiap isu
            keselamatan kepada manajer, pengawas, dan rekan kerja mereka.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>


<script>
function closeModal() {
  const modal = document.getElementById('successModal');

  if (!modal) return;

  modal.classList.add('opacity-0');

  setTimeout(() => {
    modal.remove();
    window.location.href = "{{ route('karier') }}";
  }, 300);
}
</script>

@endsection

<script>
document.addEventListener('DOMContentLoaded', () => {

  /* ================= PARALLAX ================= */
  const parallaxEls = document.querySelectorAll('[data-parallax]');
  let targetScroll = window.scrollY;
  let currentScroll = targetScroll;
  const ease = 0.08;

  window.addEventListener('scroll', () => {
    targetScroll = window.scrollY;
  }, { passive: true });

  function parallaxLoop(){
    currentScroll += (targetScroll - currentScroll) * ease;

    parallaxEls.forEach(el => {
      const speed = parseFloat(el.dataset.parallax) || 0.2;
      el.style.transform =
        `translate3d(0, ${currentScroll * speed}px, 0)`;
    });

    requestAnimationFrame(parallaxLoop);
  }

  parallaxLoop();


  /* ================= REVEAL ================= */
  const reveals = document.querySelectorAll('.reveal');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('is-visible');
      }
    });
  },{
    threshold: 0.2,
    rootMargin: '0px 0px -100px 0px'
  });

  reveals.forEach(el => observer.observe(el));

});
</script>

