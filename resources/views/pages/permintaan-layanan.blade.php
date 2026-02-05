@extends('layouts.app')
@section('title','Permintaan Penjualan & Layanan')

@section('content')

<style>
/* ================= FORM INPUT ================= */
.form-input{
  width:100%;
  border:1px solid #cbd5e1;
  padding:8px 10px;              /* jauh lebih kecil */
  border-radius:6px;
  font-size:.85rem;              /* diperkecil */
  color:#18204A;
  transition:border .2s ease, box-shadow .2s ease;
}
.form-input::placeholder{ color:#94a3b8; }
.form-input:focus{
  outline:none;
  border-color:#18204A;
  box-shadow:0 0 0 2px rgba(24,32,74,.12);
}

/* ================= LABEL ================= */
.form-label{
  display:block;
  font-size:.85rem;
  font-weight:600;
  color:#18204A;
  margin-bottom:5px;
}

/* ================= BUTTON ================= */
.btn-primary{
  background:#18204A;
  color:#fff;
  font-weight:600;
  font-size:.85rem;
  padding:8px 20px;
  border-radius:6px;
  cursor:pointer;
  transition:background .2s ease, transform .15s ease, box-shadow .15s ease;
}
.btn-primary:hover{
  background:#3E4568;
  transform:translateY(-1px);
  box-shadow:0 6px 14px rgba(24,32,74,.2);
}
.btn-primary:active{
  transform:translateY(0);
  box-shadow:0 3px 8px rgba(24,32,74,.15);
}

/* ================= MODAL ================= */
.modal-bg{
  position:fixed;
  inset:0;
  background:rgba(0,0,0,.45);
  backdrop-filter:blur(4px);
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:9999;
}
.modal-card{
  background:#fff;
  border-radius:12px;
  max-width:340px;
  width:100%;
  padding:22px;
  text-align:center;
  box-shadow:0 20px 50px rgba(0,0,0,.25);
  animation:pop .3s ease;
}
@keyframes pop{
  from{transform:scale(.92);opacity:0}
  to{transform:scale(1);opacity:1}
}

/* ====== AREA PERSETUJUAN (PAKSA KECIL) ====== */
.terms-text{
  font-size:10px !important;
  line-height:1.35 !important;
  color:#1e3a8a;
}

.terms-text input[type="checkbox"]{
  width:13px;
  height:13px;
  margin-top:2px;
}

</style>


<section class="mt-[96px] py-12 bg-white mb-16">

  <div class="max-w-3xl mx-auto px-5"> {{-- container diperkecil --}}

    <div class="bg-white rounded-xl shadow-[0_10px_28px_rgba(0,0,0,0.05)] p-6"> {{-- card lebih compact --}}

      <h1 class="text-2xl font-bold text-blue-900 mb-2 text-center">
        Permintaan Penjualan & Layanan
      </h1>

      <p class="text-sm text-blue-900 max-w-3xl mx-auto mb-8 leading-relaxed text-justify">
        Silakan ajukan permintaan penawaran khusus Anda. Hubungi
        <strong>(021) 22737753</strong> atau kirimkan pesan kepada kami di sini.
        Perlu diketahui, kami <strong>TIDAK</strong> menangani pekerjaan residensial.
      </p>

      <form action="{{ route('permintaan-layanan.kirim') }}" method="POST" class="space-y-5">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

          <div>
            <label class="form-label">Nama Depan *</label>
            <input name="nama_depan" required class="form-input" placeholder="Nama Depan">
          </div>

          <div>
            <label class="form-label">Nama Belakang *</label>
            <input name="nama_belakang" required class="form-input" placeholder="Nama Belakang">
          </div>

          <div>
            <label class="form-label">Email *</label>
            <input name="email" type="email" required class="form-input" placeholder="Email">
          </div>

          <div>
            <label class="form-label">Nomor Handphone *</label>
            <input name="handphone" required class="form-input" placeholder="Nomor Handphone">
          </div>

          <div class="md:col-span-2">
            <label class="form-label">Komentar *</label>
            <textarea name="komentar" rows="4" required
              class="form-input resize-none"
              placeholder="Beritahu kami tentang kebutuhan fasilitas anda"></textarea>
          </div>

        </div>

        <label class="terms-text flex items-start gap-2 text-justify">
            <input type="checkbox" required class="shrink-0">
            <span>
                Dengan mencentang kotak ini, saya setuju untuk menerima pemberitahuan layanan pelanggan dan informasi akun melalui SMS dari Mega Sejahtera Perkasa. Pemberitahuan ini dapat berupa pengingat janji temu, informasi lowongan pekerjaan, atau hal lain yang berkaitan dengan akun Anda. Tarif pesan dan data mungkin berlaku. Frekuensi pesan dapat bervariasi. Balas STOP untuk berhenti berlangganan. Balas BANTUAN untuk mendapatkan bantuan. Kunjungi kebijakan privasi kami untuk informasi lebih lanjut.
            </span>
        </label>

        <div class="pt-4 flex justify-center">
          <button type="submit" class="btn-primary">
            DAPATKAN INFORMASI ANDA
          </button>
        </div>

      </form>

    </div>

  </div>
</section>

@if(session('success'))
<div class="modal-bg">
  <div class="modal-card">
    <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center
                rounded-full bg-green-100 text-green-600 text-xl font-bold">
      ✓
    </div>

    <h3 class="text-lg font-bold text-[#18204A] mb-2">
      Berhasil Terkirim
    </h3>

    <p class="text-gray-600 mb-5 leading-relaxed text-sm">
      Terima kasih. Permintaan Anda telah berhasil dikirim.
      Tim kami akan segera menghubungi Anda.
    </p>

    <button onclick="this.closest('.modal-bg').remove()" class="btn-primary">
      Tutup
    </button>
  </div>
</div>
@endif

@endsection
