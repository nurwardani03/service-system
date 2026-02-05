🚀 SERVICE SYSTEM
🌐 Company Profile Website with Integrated Online Recruitment

Service System adalah website company profile profesional yang dilengkapi sistem lamaran kerja online. Platform ini berfungsi sebagai media branding perusahaan sekaligus sarana rekrutmen digital, di mana data pelamar dikirim otomatis ke email perusahaan.

Aplikasi dibangun dengan arsitektur modern, ringan, dan fokus pada proses pengiriman lamaran kerja secara efisien tanpa penyimpanan database.

📜 License Notice

❗ This project is NOT open source

Source code hanya diperuntukkan untuk:

🏢 Kebutuhan internal

🎓 Demonstrasi portfolio

📚 Keperluan akademik

Dilarang menyalin, memodifikasi, mendistribusikan, atau menggunakan ulang kode tanpa izin dari pengembang.

🧩 System Overview

Website ini menggabungkan dua fungsi utama:

🏢 Company Profile

Menampilkan profil perusahaan secara profesional

Menjelaskan layanan atau bidang usaha

Meningkatkan kredibilitas perusahaan

💼 Online Recruitment

Pelamar mengisi form lamaran langsung dari website

Data pelamar dikirim otomatis ke email perusahaan

Mengurangi proses manual via chat/email terpisah

✨ Main Features

🌐 Company profile modern & responsif

📝 Form lamaran kerja online

⚡ Validasi form menggunakan JavaScript

📧 Pengiriman data pelamar langsung ke email perusahaan

🪶 Sistem ringan tanpa database

🚫 Tanpa sistem login

🔧 Struktur siap dikembangkan menjadi sistem HR

👥 User Roles
Role	Akses
🌍 Website Visitor	Melihat profil & mengirim lamaran
🏢 Company (HR Email)	Menerima data pelamar via email
🛠 Technology Stack
Component	Technology
Backend	Laravel 10+
Language	PHP 8.2+
Frontend	Blade Template
Styling	Tailwind CSS
Client Script	JavaScript
Server	Apache / Nginx
🏗 System Architecture
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

🔄 Recruitment Data Flow
User membuka halaman lamaran
        ↓
Mengisi form
        ↓
Validasi JavaScript
        ↓
Data dikirim ke Laravel
        ↓
Validasi server-side
        ↓
Email terkirim ke perusahaan
        ↓
HR menerima data pelamar

🔐 Security Approach

✔ Validasi client & server side

✔ Proteksi CSRF Laravel

✔ Kredensial email disimpan di .env

✔ Tidak ada penyimpanan data pelamar di server

⚠️ System Limitation

❌ Tidak memiliki sistem login

❌ Tidak menyimpan data pelamar

❌ Tidak ada dashboard admin

📩 Seleksi dilakukan melalui email perusahaan

💻 Installation Guide
1️⃣ Clone Repository
git clone https://github.com/USERNAME/service-system.git
cd service-system

2️⃣ Install Dependency
composer install

3️⃣ Setup ENV

Windows:

copy .env.example .env


Mac/Linux:

cp .env.example .env

4️⃣ Generate Key
php artisan key:generate

5️⃣ Run Project
php artisan serve


Akses di:

http://127.0.0.1:8000

⚙️ Default ENV Configuration
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


Gunakan Gmail App Password, bukan password utama.

🚀 Future Development

📊 Dashboard HR

🗄 Penyimpanan database pelamar

🔐 Sistem login admin

📈 Tracking status lamaran

📁 Project Structure
/app
/routes
/resources/views
/public

👨‍💻 Developer

Nur Wardani — 2026

Website ini dikembangkan sebagai platform company profile modern dengan fitur rekrutmen terintegrasi untuk kebutuhan perusahaan masa kini.
