<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite('resources/css/app.css')

    {{-- GOOGLE FONTS --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- AOS ANIMATION --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="font-['Inter'] text-gray-800">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

{{-- FLASH MESSAGE --}}
</body>
<audio id="bgMusic" loop preload="auto">
  <source src="/audio/bg-music.mp3" type="audio/mpeg">
</audio>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
    duration: 900,
    easing: 'ease-out-cubic',
  });

  // PARALLAX HERO & IMAGE
  window.addEventListener('scroll', () => {
    document.querySelectorAll('[data-parallax]').forEach(el => {
      const speed = el.dataset.parallax;
      el.style.transform = `translateY(${window.scrollY * speed}px)`;
    });
  });
</script>

{{-- BACKGROUND MUSIC --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
  const audio = document.getElementById('bgMusic');
  audio.volume = 0.25; // lembut, profesional

  // jika sebelumnya sudah play, lanjutkan
  if (localStorage.getItem('bgMusic') === 'on') {
    audio.play().catch(()=>{});
  }

  // klik di navbar mana pun
  document.querySelectorAll('nav a, nav button').forEach(el => {
    el.addEventListener('click', () => {
      audio.play().then(() => {
        localStorage.setItem('bgMusic', 'on');
      }).catch(()=>{});
    });
  });
});
</script>
<script>
const audio = document.getElementById('bgMusic');
let vol = 0;
audio.volume = 0;

audio.addEventListener('play', () => {
  const fade = setInterval(() => {
    if (vol < 0.25) {
      vol += 0.01;
      audio.volume = vol;
    } else {
      clearInterval(fade);
    }
  }, 100);
});
</script>

</html>
