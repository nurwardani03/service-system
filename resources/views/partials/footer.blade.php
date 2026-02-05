<footer class="bg-gray-200 font-[Inter] text-gray-800">
  <div class="max-w-7xl mx-auto px-8 py-8
              grid grid-cols-[180px_220px_1fr] gap-12 items-start">

    {{-- LOGO --}}
    <div class="flex justify-center items-center h-full">
      <img src="{{ asset('images/navbar/logo.png') }}"
           class="h-36"
           alt="Logo PT Mega Sejahtera Perkasa">
    </div>

    {{-- AREA & KONTAK --}}
    <div class="text-sm leading-relaxed space-y-4">

      <div>
        <h4 class="text-base font-semibold tracking-wide text-[#18204A] mb-1">
          Area Layanan
        </h4>
        <ul class="list-disc list-inside space-y-1 text-[#18204A]">
          <li>Kemayoran, JKT</li>
          <li>Pondok Betung, TNG</li>
        </ul>
      </div>

      <div>
        <h4 class="text-base font-semibold tracking-wide text-[#18204A] mb-1">
          Hubungi Kami
        </h4>
        <ul class="list-disc list-inside space-y-2 text-[#18204A]">
          <li>
            <span class="font-medium">Pertanyaan Umum & Karier</span>
            <div class="ml-5">(021) 22737753</div>
          </li>
          <li>
            <span class="font-medium">Penjualan & Layanan</span>
            <div class="ml-5">(021) 22737753</div>
          </li>
        </ul>
      </div>

    </div>

    {{-- MISI & SOSIAL --}}
    <div class="text-sm leading-relaxed space-y-3">

      <div>
        <h4 class="text-base font-semibold tracking-wide text-[#18204A] mb-1">
          Misi
        </h4>
        <p class="text-[#18204A] text-justify">
          Misi Mega Sejahtera Perkasa berupaya menjadi perusahaan yang menghormati
          nilai-nilai ketuhanan dan unggul dalam memberikan layanan fasilitas dengan
          aman untuk memenuhi kebutuhan pelanggan, menyediakan peluang pengembangan
          bagi karyawan, serta berkontribusi pada masyarakat.
        </p>
      </div>

      <div>
        <h4 class="text-base font-semibold tracking-wide text-[#18204A] mb-2">
          Ikuti Kami
        </h4>
        <div class="flex items-center gap-4">

          {{-- FACEBOOK --}}
          <a href="https://www.facebook.com/people/Megasejahteraperkasa/61584679580042/"
             target="_blank"
             class="text-[#18204A] hover:text-[#0f1633] transition">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22 12a10 10 0 10-11.5 9.9v-7H8v-3h2.5V9.5
                c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.3
                c-1.3 0-1.7.8-1.7 1.6V11H16l-.5 3h-2v7A10 10 0 0022 12z"/>
            </svg>
          </a>

          {{-- INSTAGRAM --}}
          <a href="https://www.instagram.com/megasejahteraperkasa/?igsh=MXR0Ym56Z3RnczF4aw%3D%3D#"
             target="_blank"
             class="text-[#18204A] hover:text-[#0f1633] transition">
            <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5"/>
              <circle cx="12" cy="12" r="4"/>
              <circle cx="17.5" cy="6.5" r="0.5"/>
            </svg>
          </a>

        </div>
      </div>

    </div>

  </div>
</footer>
