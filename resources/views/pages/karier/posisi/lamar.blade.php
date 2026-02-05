@extends('layouts.app') 
@section('title','Lamaran - '.$posisi)

@section('content')

<style>
.step{display:none}
.step.active{display:block}

.input{
  width:100%;
  border:1px solid #d1d5db;
  padding:14px 16px;
  border-radius:10px;
}
.input:focus{
  outline:none;
  border-color:#1f2b59;
  box-shadow:0 0 0 3px rgba(31,43,89,.15);
}
.btn-primary{
  background:#1f2b59;
  color:#fff;
  border-radius:8px;
  padding:12px 28px;
  font-weight:600;
  cursor:pointer;
  transition: background-color .25s ease,
              box-shadow .25s ease,
              transform .2s ease;
}

.btn-primary:hover{
  background:#2f3b73; 
  transform:translateY(-1px);
  box-shadow:0 10px 24px rgba(31,43,89,.28);
}

.btn-outline{
  border:1px solid #1f2b59;
  color:#1f2b59;
  border-radius:8px;
  padding:12px 28px;
  font-weight:600;
}
.error{border-color:red}

.btn-loading {
  opacity: 0.7;
  pointer-events: none;
}

.spinner {
  width: 18px;
  height: 18px;
  border: 3px solid rgba(255,255,255,.4);
  border-top-color: #fff;
  border-radius: 50%;
  animation: spin .8s linear infinite;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

</style>
<style>
.file-input {
  position: relative;
}

.file-input input[type="file"] {
  width: 100%;
  padding: 12px 14px 12px 46px;
  border-radius: 10px;
  border: 2px dashed #cbd5e1;
  background: #f8fafc;
  cursor: pointer;
  transition: all .25s ease;
}

.file-input input[type="file"]:hover {
  border-color: #1f2b59;
  background: #eef2ff;
}

.file-input svg {
  position: absolute;
  left: 14px;
  top: 50%;
  transform: translateY(-50%);
  color: #64748b;
  pointer-events: none;
  transition: color .25s ease;
}

.file-input:hover svg {
  color: #1f2b59;
}
.step-node{
  position:absolute;
  top:-9px;
  display:flex;
  flex-direction:column;
  align-items:center;
  text-align:center;
}

.step-node span{
  margin-top:10px;
  font-size:13px;
  color:#000;
  white-space:nowrap;
}

/* posisi presisi */
.step-left{
  left:0;
  transform:translateX(-50%);
}

.step-center{
  left:50%;
  transform:translateX(-50%);
}

.step-right{
  right:0;
  transform:translateX(50%);
}

.step-circle{
  width:18px;
  height:18px;
  border-radius:9999px;
  background:#e5e7eb;
  border:2px solid #e5e7eb;
}

.step-node.active .step-circle{
  background:#fff;
  border-color:#16a34a;
}

.step-node.done .step-circle{
  background:#16a34a;
  border-color:#16a34a;
  position:relative;
}

.step-node.done .step-circle::after{
  content:'✓';
  color:#fff;
  font-size:12px;
  font-weight:700;
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}

</style>


<section class="mt-[96px] py-20 bg-white">
<div class="max-w-4xl mx-auto px-6">

<h1 class="text-2xl font-bold text-[#1f2b59]">{{ $posisi }}</h1>
<p class="text-m text-gray-600 mb-10">{{ $lokasi }}</p>

<form id="lamarForm"
      method="POST"
      enctype="multipart/form-data"
      data-action="{{ route('karier.posisi.kirim') }}">
@csrf

<input type="hidden" name="req" value="{{ $req }}">
<input type="hidden" name="posisi" value="{{ $posisi }}">

{{-- ================= STEP 1 : DATA PRIBADI ================= --}}

<div class="max-w-4xl mx-auto px-6">

  {{-- STEP TRACKER --}}
  <div class="mb-10">
    <div class="relative">

      {{-- BASE LINE --}}
      <div class="h-[2px] bg-gray-300 w-full"></div>
      <div id="stepLine"
           class="absolute top-0 left-0 h-[2px] bg-green-600 transition-all duration-500"
           style="width:0%">
      </div>

      {{-- STEP 1 --}}
      <div class="step-node step-left">
        <div class="step-circle"></div>
        <span>Data Pribadi</span>
      </div>

      {{-- STEP 2 --}}
      <div class="step-node step-center">
        <div class="step-circle"></div>
        <span>Kuisoner</span>
      </div>

      {{-- STEP 3 --}}
      <div class="step-node step-right">
        <div class="step-circle"></div>
        <span>Kirim</span>
      </div>

    </div>
  </div>


</div>

  <hr class="my-10">
  <div class="step active">

  {{-- ================= DATA PRIBADI ================= --}}
  <h2 class="font-semibold text-lg mb-6 text-[#18204A]">Data Pribadi</h2>

  <div class="grid md:grid-cols-2 gap-6 text-[#18204A]">

    <div>
      <label class="text-m font-semibold">Alamat Email <span class="text-red-500">*</span></label>
      <input name="email" required class="input required">
    </div>

    <div>
      <label class="text-m font-semibold">Konfirmasi Alamat Email <span class="text-red-500">*</span></label>
      <input name="email_confirm" required class="input required">
    </div>

    <div>
      <label class="text-m font-semibold">Nama Depan <span class="text-red-500">*</span></label>
      <input name="nama_depan" required class="input required">
    </div>

    <div>
      <label class="text-m font-semibold">Nama Belakang <span class="text-red-500">*</span></label>
      <input name="nama_belakang" required class="input required">
    </div>

    <div>
      <label class="text-m font-semibold">Profil LinkedIn</label>
      <input name="linkedin" class="input">
    </div>

    <div>
      <label class="text-m font-semibold">Nomor Ponsel <span class="text-red-500">*</span></label>
      <input name="handphone" required class="input required">
    </div>

    <div>
      <label class="text-m font-semibold">Kota</label>
      <input name="kota" class="input">
    </div>

    <div>
      <label class="text-m font-semibold">Provinsi</label>
      <input name="provinsi" class="input">
    </div>

    <div class="md:col-span-2">
      <label class="text-m font-semibold">Alamat</label>
      <input name="alamat" class="input">
    </div>

    <div>
      <label class="text-m font-semibold">Kode Pos</label>
      <input name="kode_pos" class="input">
    </div>

  </div>

  <hr class="my-10">

  {{-- ================= RESUME ================= --}}
    <h2 class="font-semibold text-lg mb-6 text-[#18204A]">Resume</h2>

    <div class="space-y-5 text-[#18204A]">

      {{-- CV --}}
      <div>
        <label class="text-m font-semibold">CV/Portfolio <span class="text-red-500">*</span></label>
        <div class="file-input mt-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 16V4m0 0l-4 4m4-4l4 4"/>
            <path d="M4 20h16"/>
          </svg>
          <input type="file" name="cv" required>
        </div>
      </div>

      {{-- SURAT LAMARAN --}}
      <div>
        <label class="text-m font-semibold">Lampiran Surat Lamaran</label>
        <div class="file-input mt-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 16V4m0 0l-4 4m4-4l4 4"/>
            <path d="M4 20h16"/>
          </svg>
          <input type="file" name="surat_lamaran">
        </div>
      </div>

      {{-- DOKUMEN TAMBAHAN --}}
      <div>
        <label class="text-m font-semibold">Dokumen Tambahan</label>
        <div class="file-input mt-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 16V4m0 0l-4 4m4-4l4 4"/>
            <path d="M4 20h16"/>
          </svg>
          <input type="file" name="dokumen_tambahan">
        </div>
      </div>

    </div>

    <hr class="my-10">


  {{-- ================= RIWAYAT EDUKASI ================= --}}
  <h2 class="font-semibold text-lg mb-6 text-[#18204A]">Riwayat Edukasi</h2>

  <div class="grid md:grid-cols-2 gap-6 text-[#18204A]">

    <div>
      <label class="text-m font-semibold">Gelar <span class="text-red-500">*</span></label>
      <input name="gelar" required class="input required">
    </div>

    <div>
      <label class="text-m font-semibold">Jurusan</label>
      <input name="jurusan" class="input">
    </div>

    <div>
      <label class="text-m font-semibold">Tanggal Mulai</label>
      <input type="date" name="tgl_mulai" class="input">
    </div>

    <div>
      <label class="text-m font-semibold">Tanggal Selesai</label>
      <input type="date" name="tgl_selesai" class="input">
    </div>

    <div>
      <label class="text-m font-semibold">Nama Sekolahan</label>
      <input name="sekolah" class="input">
    </div>

    <div>
      <label class="text-m font-semibold">GPA</label>
      <input name="gpa" class="input">
    </div>

  </div>

  <hr class="my-10">

  {{-- ================= RIWAYAT PEKERJAAN ================= --}}
  <h2 class="font-semibold text-lg mb-6 text-[#18204A]">Riwayat Pekerjaan</h2>

  <div class="space-y-5 text-[#18204A]">
    <div>
      <label class="text-m font-semibold">Posisi Pekerjaan <span class="text-red-500">*</span></label>
      <input name="posisi_kerja" required class="input required">
    </div>

    <div>
      <label class="text-m font-semibold">Nama Perusahaan</label>
      <input name="perusahaan" class="input">
    </div>

    <div>
      <label class="text-m font-semibold">Divisi</label>
      <input name="divisi" class="input">
    </div>

    <div>
      <label class="text-m font-semibold">Alasan Keluar?</label>
      <textarea name="alasan_keluar" class="input"></textarea>
    </div>

    <div>
      <label class="text-m font-semibold">Tugas dan Tanggung Jawab Pekerjaan</label>
      <textarea name="tugas" class="input"></textarea>
    </div>
  </div>

  {{-- ================= FOOTER ================= --}}
<div class="mt-12">

  <p class="text-sm text-[#18204A]leading-relaxed mb-6">
    Mega Sejahtera Perkasa memberi kesempatan kerja yang setara bagi individu yang memenuhi syarat dan tidak melakukan diskriminasi berdasarkan usia, suku, ras, dan agama. Mega Sejahtera Perkasa juga melarang pelecehan terhadap pelamar atau karyawan berdasarkan kategori yang dilindungi tersebut.
  </p>

    <hr class="my-10">
    <div class="flex justify-between items-center items-right mt-12">
      <div></div>
    <button type="button" class="btn-primary" onclick="nextStep()">Berikutnya</button>
  </div>
</div>
</div>

{{-- ================= STEP 2 : KUISIONER ================= --}}
<div class="step">

  <h2 class="font-semibold text-lg mb-6">Kuisioner</h2>

  {{-- PERTANYAAN 1 --}}
  <div class="mb-8">
    <p class="text-lg text-[#18204A] mb-3">
      PT. Mega Sejahtera Perkasa mensyaratkan karyawan berusia 18 tahun atau lebih.
      Apakah Anda berusia 18 tahun atau lebih? <span class="text-red-500">*</span>
    </p>

    <label class="flex items-center gap-2 mb-2 text-[#18204A]">
      <input type="radio" name="usia_18" value="Ya" class="required-radio">
      <span>Ya</span>
    </label>

    <label class="flex items-center gap-2 text-[#18204A]">
      <input type="radio" name="usia_18" value="Tidak" class="required-radio">
      <span>Tidak</span>
    </label>
  </div>

  {{-- PERTANYAAN 2 --}}
  <div class="mb-8 text-lg text-[#18204A] leading-relaxed">
    <p class="mb-4">
      Saya dengan ini memberikan persetujuan kepada PT. Mega Sejahtera Perkasa (selanjutnya disebut sebagai "MSP"), serta perwakilan medis mana pun yang mereka tunjuk, untuk melakukan tes obat dan mengirimkan sampel tersebut ke laboratorium untuk dilakukan pengujian yang diperlukan guna mengidentifikasi keberadaan obat-obatan atau alkohol. Saya juga memahami bahwa tes obat secara acak dapat dilakukan kapan saja selama masa kerja saya di MSP.
    </p>

    <p class="mb-4">
      Saya telah diberi informasi bahwa berdasarkan Kebijakan Obat dan Alkohol MSP, hasil tes positif atau penolakan saya untuk memberikan sampel dan memberikan persetujuan untuk pengujian akan menjadi alasan pemutusan hubungan kerja atau penolakan otomatis atas lamaran kerja saya.
    </p>

    <p class="mb-4">
      Saya dengan ini membebaskan Budd dan karyawannya dari segala bentuk klaim dan tanggung jawab yang mungkin timbul akibat pengambilan dan pengujian sampel, pelaporan dan penanganan hasil tes, serta keputusan ketenagakerjaan berdasarkan hasil tes tersebut. Saya juga memberi izin kepada laboratorium yang melakukan tes untuk memberikan hasil tes tersebut kepada perwakilan Budd yang ditunjuk.
    </p>
  </div>

  {{-- PERTANYAAN 3 --}}
  <div class="mb-8">
    <p class="text-lg text-[#18204A] mb-3">
      Apakah Anda menyetujui kebijakan obat & alkohol? <span class="text-red-500">*</span>
    </p>

    <label class="flex items-center gap-2 mb-2 text-[#18204A]">
      <input type="radio" name="narkoba" value="Ya" class="required-radio">
      <span>Ya, saya menyetujui tes obat dan alkohol</span>
    </label>

    <label class="flex items-center gap-2 text-[#18204A]">
      <input type="radio" name="narkoba" value="Tidak" class="required-radio">
      <span>
        Tidak, saya tidak menyetujui. Saya memahami bahwa ini akan membuat saya
        tidak memenuhi syarat untuk bekerja.
      </span>
    </label>
  </div>

  {{-- KLARIFIKASI --}}
  <div class="mb-10 text-[#18204A]">
    <label class="text-lg font-semibold block mb-2">
      Jika Anda menjawab YA, silakan ketik nama lengkap legal Anda di kotak di bawah ini.
      Jika Anda menjawab TIDAK, ketik N/A.
    </label>

    <textarea name="klarifikasi"
              class="input"
              rows="3"
              placeholder="Nama lengkap legal / N/A"></textarea>
  </div>

  {{-- FOOTER --}}
   <div class="mt-12">

    <p class="text-sm text-[#18204A] leading-relaxed mb-6">
      Mega Sejahtera Perkasa memberi kesempatan kerja yang setara bagi individu yang memenuhi syarat dan tidak melakukan diskriminasi berdasarkan usia, suku, ras, dan agama. Mega Sejahtera Perkasa juga melarang pelecehan terhadap pelamar atau karyawan berdasarkan kategori yang dilindungi tersebut.
    </p>

    <hr class="mb-6 border-[#18204A]">

    <div class="flex justify-between mt-12">
      <button type="button" class="btn-outline" onclick="prevStep()">Sebelumnya</button>
      <button type="button" class="btn-primary" onclick="nextStep()">Berikutnya</button>
    </div>

  </div> 
</div>   

{{-- ================= STEP 3 : PENGAKUAN KANDIDAT ================= --}}
<div class="step">
  

  <p class="text-lg text-[#18204A] leading-relaxed mb-6">
    Silakan tinjau Pernyataan Pengakuan Kandidat di bawah ini dan konfirmasikan
    persetujuan Anda menggunakan kotak centang yang tersedia.
    Setelah selesai, klik tombol Submit untuk menyelesaikan aplikasi Anda.
  </p>

  <h2 class="font-semibold text-xl mb-4">Pengakuan Kandidat</h2>

  <p class="text-lg text-[#18204A] mb-4">
    Dengan mengirimkan aplikasi ini, saya menyatakan bahwa informasi yang saya
    berikan adalah benar dan lengkap sesuai dengan pengetahuan saya.
  </p>

  <label class="flex items-start gap-3 mb-10">
    <input type="checkbox"
           class="mt-1 required-checkbox">
    <span class="text-lg text-[#18204A]">
      Saya setuju dengan Pengakuan Kandidat
    </span>
  </label>

  <hr class="mb-6">

  {{-- FOOTER --}}
  <div class="flex justify-between mt-12">
    <button type="button" class="btn-outline" onclick="prevStep()">Sebelumnya</button>
    <button type="submit"
            class="btn-primary flex items-center justify-center gap-3"
            id="submitBtn">

    <span id="submitText">Kirim</span>

    <span id="submitSpinner" class="spinner hidden"></span>
    </button>
  </div>

</div>

</form>
</div>

{{-- ================= SUCCESS STATE ================= --}}
<div id="successPopup"
     class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

  <div class="bg-white rounded-xl p-10 max-w-md w-full text-center">

    <!-- ICON -->
    <div class="mx-auto mb-6 w-24 h-24 rounded-full
                border-4 border-[#18204A]
                flex items-center justify-center">
      <svg class="w-12 h-12 text-[#18204A]"
           fill="none"
           stroke="currentColor"
           stroke-width="3"
           viewBox="0 0 24 24">
        <path d="M5 13l4 4L19 7"/>
      </svg>
    </div>

    <!-- TEXT -->
    <p class="text-lg font-semibold text-[#18204A]">
      Selamat, lamaran Anda telah berhasil dikirim.
    </p>

    <!-- BUTTON -->
    <button onclick="closeSuccessPopup()"
            class="btn-primary mt-8 w-full">
      Tutup
    </button>

  </div>
</div>


</div>
</section>

<script>
let step = 0;
let isSubmitting = false;

const steps = document.querySelectorAll('.step');
const form  = document.getElementById('lamarForm');

/* ================= STEP ================= */
function showStep(i){
  steps.forEach(s => s.classList.remove('active'));
  steps[i].classList.add('active');
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function validateStep(){
  let valid = true;
  const currentStep = steps[step];

  // STEP 1
  if (step === 0) {
    currentStep.querySelectorAll('.required').forEach(el => {
      if (el.type === 'file') {
        if (!el.files.length) {
          el.classList.add('error');
          valid = false;
        } else el.classList.remove('error');
      } else {
        if (!el.value.trim()) {
          el.classList.add('error');
          valid = false;
        } else el.classList.remove('error');
      }
    });
  }

  // STEP 3
  if (step === 2) {
    const agree = currentStep.querySelector('.required-checkbox');
    if (!agree || !agree.checked) valid = false;
  }

  return valid;
}

function nextStep(){
  if (!validateStep()) return;
  if (step < steps.length - 1) {
    step++;
    showStep(step);
  }
}

function prevStep(){
  if (step > 0) {
    step--;
    showStep(step);
  }
}

/* ================= AJAX SUBMIT + LOADING ================= */
form.addEventListener('submit', function(e){
  e.preventDefault();

  if (isSubmitting) return; // anti spam klik
  if (!validateStep()) return;

  isSubmitting = true;

  const btn = document.getElementById('submitBtn');
  const text = document.getElementById('submitText');
  const spinner = document.getElementById('submitSpinner');

  // === loading state ===
  btn.classList.add('btn-loading');
  text.textContent = 'Mengirim...';
  spinner.classList.remove('hidden');

  fetch(form.dataset.action, {
    method: 'POST',
    body: new FormData(form),
    headers: {
      'X-CSRF-TOKEN': document.querySelector('[name=_token]').value
    }
  })
  .then(res => res.json())
  .then(res => {
    if (res.status === 'success') {
      showSuccessPopup();
    } else {
      throw new Error('Gagal');
    }
  })
  .catch(() => {
    alert('Gagal mengirim lamaran. Silakan coba lagi.');
  })
  .finally(() => {
    // reset tombol (kalau popup ditutup user)
    btn.classList.remove('btn-loading');
    text.textContent = 'Kirim';
    spinner.classList.add('hidden');
    isSubmitting = false;
  });
});

/* ================= POPUP ================= */
function showSuccessPopup(){
  const popup = document.getElementById('successPopup');
  popup.classList.remove('hidden');
  popup.classList.add('flex');
}

function closeSuccessPopup(){
  document.getElementById('successPopup').classList.add('hidden');
  form.reset();
  step = 0;
  showStep(0);
}

showStep(0);
</script>
<script>
/* ================= STEP TRACKER ================= */
const stepNodes = document.querySelectorAll('.step-node');
const stepLine  = document.getElementById('stepLine');

function updateTracker(){
  stepNodes.forEach((node, index) => {
    node.classList.remove('active', 'done');

    if (index < step) {
      node.classList.add('done');
    } else if (index === step) {
      node.classList.add('active');
    }
  });

  // panjang garis hijau
  if (step === 0) stepLine.style.width = '0%';
  if (step === 1) stepLine.style.width = '50%';
  if (step === 2) stepLine.style.width = '100%';
}

/* ================= OVERRIDE showStep ================= */
const _showStep = showStep;
showStep = function(i){
  _showStep(i);
  updateTracker();
};

/* INIT */
updateTracker();
</script>

@endsection