SERVICE SYSTEM

Company Profile Website with Integrated Online Recruitment

Service System adalah website company profile profesional yang dilengkapi dengan sistem lamaran kerja online. Platform ini berfungsi sebagai media branding perusahaan sekaligus sarana rekrutmen digital, di mana data pelamar dikirim otomatis ke email perusahaan.

Aplikasi dibangun dengan arsitektur modern, ringan, dan fokus pada proses pengiriman lamaran kerja secara efisien tanpa penyimpanan database.

LICENSE NOTICE

This project is NOT open source.

Source code hanya diperuntukkan untuk:

Kebutuhan internal

Demonstrasi portfolio

Keperluan akademik

Dilarang menyalin, memodifikasi, mendistribusikan, atau menggunakan ulang kode tanpa izin dari pengembang.

SYSTEM OVERVIEW

Website ini menggabungkan dua fungsi utama dalam satu platform:

Company Profile

Menampilkan profil perusahaan secara profesional

Menjelaskan layanan atau bidang usaha

Meningkatkan kredibilitas perusahaan

Online Recruitment

Pelamar mengisi form lamaran langsung dari website

Data pelamar dikirim otomatis ke email perusahaan

Mengurangi proses manual melalui chat atau email terpisah

MAIN FEATURES

Company profile modern & responsif

Halaman informasi perusahaan/layanan

Form lamaran kerja online

Validasi form menggunakan JavaScript

Pengiriman data pelamar langsung ke email perusahaan

Sistem ringan tanpa database

Tanpa sistem login

Struktur siap dikembangkan menjadi sistem HR

USER ROLES
Website Visitor

Melihat profil perusahaan

Mengakses informasi layanan

Mengirim lamaran kerja

Company (Email Admin)

Menerima data pelamar melalui email

Melakukan proses seleksi di luar sistem

TECHNOLOGY STACK
Component	Technology
Backend	Laravel 10+
Language	PHP 8.2+
Frontend	Blade Template
Styling	Tailwind CSS
Client-side Script	JavaScript
Server	Apache / Nginx
SYSTEM ARCHITECTURE
User Browser
     │
     ▼
Web Server (Apache/Nginx)
     │
     ▼
Laravel Application
 - Routing
 - Form Processing
 - Validation
 - Email Handling
     │
     ▼
SMTP Mail Server
     │
     ▼
Company Email Inbox (HR)

APPLICATION LAYERS
Presentation Layer

Menggunakan Blade, Tailwind CSS, dan JavaScript untuk tampilan company profile dan validasi form.

Application Layer

Laravel menangani routing, validasi server-side, pemrosesan form, dan pengiriman email.

Service Layer

SMTP digunakan untuk mengirim data pelamar ke email perusahaan tanpa penyimpanan database.

DATA FLOW (RECRUITMENT PROCESS)
User membuka halaman lamaran
        ↓
User mengisi form
        ↓
Validasi JavaScript berjalan
        ↓
Data dikirim ke server Laravel
        ↓
Validasi server-side
        ↓
Email dikirim ke perusahaan
        ↓
HR menerima data pelamar

SECURITY APPROACH

Validasi input sisi client dan server

Proteksi CSRF bawaan Laravel

Kredensial email disimpan pada file .env

Tidak ada penyimpanan data pelamar di server

SYSTEM LIMITATION

Tidak memiliki sistem login

Tidak menyimpan data pelamar di database

Tidak ada dashboard admin

Seleksi pelamar dilakukan melalui email perusahaan

INSTALLATION GUIDE
1. Clone Repository
git clone https://github.com/USERNAME/service-system.git
cd service-system

2. Install Dependencies
composer install

3. Copy Environment File

Windows:

copy .env.example .env


Mac/Linux:

cp .env.example .env

4. Generate Application Key
php artisan key:generate

5. Run Application
php artisan serve


Akses melalui browser:

http://127.0.0.1:8000

DEFAULT ENV CONFIGURATION

Project ini tidak menggunakan database.

APP_NAME="Service System"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

LOG_CHANNEL=stack
LOG_LEVEL=debug

CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

DB_CONNECTION=null

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=yourcompanyemail@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=yourcompanyemail@gmail.com
MAIL_FROM_NAME="${APP_NAME}"


Gunakan Gmail App Password, bukan password utama akun.

FUTURE DEVELOPMENT POTENTIAL

Struktur sistem memungkinkan pengembangan lanjutan seperti:

Penyimpanan database pelamar

Dashboard HR

Sistem login admin

Tracking status lamaran

Panel manajemen rekrutmen

PROJECT STRUCTURE
/app
/routes
/resources/views
/public

DEVELOPER

Nur Wardani — 2026

Dikembangkan sebagai website company profile modern dengan fitur rekrutmen terintegrasi untuk kebutuhan perusahaan masa kini.
