<nav class="bg-white shadow fixed top-0 w-full z-50 h-[96px]">
  <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-between">

    {{-- LOGO --}}
    <a href="/" class="flex items-center h-full">
      <img src="{{ asset('images/navbar/logo.png') }}"
           class="h-22 object-contain"
           alt="logo">
    </a>

    {{-- MENU --}}
    <ul class="flex items-center gap-10 text-lg font-semibold">

      {{-- TENTANG KAMI --}}
      <li>
        <a href="/tentang-kami"
           class="transition
           {{ request()->is('tentang-kami') ? 'text-blue-900 font-bold border-b-2 border-blue-900 pb-1' : 'text-gray-800 hover:text-blue-900' }}">
          Tentang Kami
        </a>
      </li>

      {{-- LAYANAN --}}
      @php
        $layananActive = request()->is('taman*') || request()->is('pemeliharaan*') || request()->is('driver*');
      @endphp

      <li class="relative group cursor-pointer">
        <span
          class="flex items-center gap-1 transition
          {{ $layananActive ? 'text-blue-900 font-bold' : 'text-gray-800 hover:text-blue-900' }}">
          Layanan
          <svg class="w-5 h-5 mt-1 transition-transform group-hover:rotate-180"
               fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7"/>
          </svg>
        </span>

        {{-- DROPDOWN --}}
        <div class="absolute top-12 left-0 bg-white shadow-2xl rounded-xl w-72
                    opacity-0 invisible group-hover:opacity-100 group-hover:visible
                    transition-all duration-300 overflow-hidden">

          <a href="/taman"
             class="block px-7 py-4 text-lg transition
             {{ request()->is('taman*') ? 'bg-blue-50 text-blue-900 font-semibold' : 'hover:bg-gray-100' }}">
            Layanan Taman
          </a>

          <a href="/pemeliharaan"
             class="block px-7 py-4 text-lg transition
             {{ request()->is('pemeliharaan*') ? 'bg-blue-50 text-blue-900 font-semibold' : 'hover:bg-gray-100' }}">
            Layanan Pemeliharaan
          </a>

          <a href="/driver"
             class="block px-7 py-4 text-lg transition
             {{ request()->is('driver*') ? 'bg-blue-50 text-blue-900 font-semibold' : 'hover:bg-gray-100' }}">
            Layanan Pengemudi
          </a>
        </div>
      </li>

      {{-- KARIER --}}
      <li>
        <a href="/karier"
          class="transition
          {{ request()->is('karier*')
              ? 'text-blue-900 font-bold border-b-2 border-blue-900 pb-1'
              : 'text-gray-800 hover:text-blue-900' }}">
          Temukan Pekerjaan
        </a>
      </li>

      {{-- KONTAK --}}
      <li>
        <a href="/permintaan-layanan"
           class="transition text-gray-800 hover:text-blue-900">
          Kontak
        </a>
      </li>

    </ul>

    {{-- CTA --}}
    <a href="/permintaan-layanan"
       class="bg-[#18204A] text-white text-lg px-6 py-2 rounded-lg
              hover:bg-[#394272] transition-all duration-300
              font-semibold shadow-sm">
      Permintaan Layanan & Penjualan
    </a>

  </div>
</nav>
