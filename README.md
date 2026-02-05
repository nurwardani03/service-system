# 🚀 Service System
![Laravel](https://img.shields.io/badge/Laravel-10+-red)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue)
![Tailwind CSS](https://img.shields.io/badge/TailwindCSS-3.x-38BDF8)
![License](https://img.shields.io/badge/License-Private-critical)

> **Company Profile Website with Integrated Online Recruitment**

---

## 🌐 Overview

**Service System** adalah website company profile profesional yang dilengkapi dengan sistem **lamaran kerja online berbasis email**.  
Platform ini berfungsi sebagai media branding perusahaan sekaligus sarana rekrutmen digital yang ringan, cepat, dan efisien **tanpa penyimpanan database**.

---

## 🎯 Project Goals

- Menyediakan company profile modern dan profesional
- Menyederhanakan proses rekrutmen melalui form online
- Mengirim data pelamar langsung ke email perusahaan
- Mengurangi proses manual via chat atau email terpisah
- Cocok untuk kebutuhan internal, portfolio, dan demo sistem

---

## 📜 License Notice

❗ **This project is NOT open source**

Source code **hanya diperuntukkan untuk**:

- 🏢 Kebutuhan internal perusahaan
- 🎓 Demonstrasi portfolio
- 📚 Keperluan akademik

🚫 **Dilarang menyalin, memodifikasi, mendistribusikan, atau menggunakan ulang kode tanpa izin tertulis dari pengembang.**

---

## 🧩 System Overview

Service System menggabungkan dua fungsi utama:

### 🏢 Company Profile
- Menampilkan profil perusahaan secara profesional
- Menjelaskan layanan atau bidang usaha
- Meningkatkan kredibilitas dan kepercayaan perusahaan

### 💼 Online Recruitment
- Form lamaran kerja langsung dari website
- Data pelamar dikirim otomatis ke email HR
- Tanpa penyimpanan data di server

---

## ✨ Features

- 🌐 Company profile modern & responsif
- 📝 Form lamaran kerja online
- ⚡ Validasi form menggunakan JavaScript
- 📧 Pengiriman data pelamar via email
- 🪶 Sistem ringan tanpa database
- 🚫 Tanpa sistem login
- 🔧 Struktur siap dikembangkan ke sistem HR

---

## 👥 User Roles

| Role | Description |
|-----|------------|
| 🌍 Website Visitor | Melihat company profile & mengirim lamaran |
| 🏢 Company (HR Email) | Menerima data pelamar melalui email |

---

## 🛠 Technology Stack

| Component | Technology |
|---------|-----------|
| Backend | Laravel 10+ |
| Language | PHP 8.2+ |
| Frontend | Blade Template |
| Styling | Tailwind CSS |
| Client Script | JavaScript |
| Web Server | Apache / Nginx |
| Email | SMTP |

---

## 🏗 System Architecture

```text
User Browser
     │
     ▼
Web Server (Apache / Nginx)
     │
     ▼
Laravel Application
 ├─ Routing
 ├─ Form Handling
 ├─ Validation
 └─ Email Service
     │
     ▼
SMTP Mail Server
     │
     ▼
Company Email Inbox (HR)
```

## 🔄 Recruitment Data Flow

```text
User membuka halaman lamaran
        ↓
Mengisi form lamaran
        ↓
Validasi JavaScript
        ↓
Data dikirim ke Laravel## 🔐 Security Implementation

- Client-side & server-side validation
- CSRF protection bawaan Laravel
- Kredensial email disimpan di file `.env`
- Tidak ada penyimpanan data pelamar di server

---
```

## ⚠️ System Limitations

```text
- Tidak memiliki sistem login
- Tidak menyimpan data pelamar
- Tidak tersedia dashboard admin
- Proses seleksi dilakukan melalui email perusahaan

---
```

## 💻 Installation
1. Clone Repository
```bash
git clone https://github.com/USERNAME/service-system.git
cd service-system
```

2. Install Dependencies
```bash
composer install
```

3. Environment Setup
```bash
Windows
```
```bash
copy .env.example .env
```
Mac / Linux
```bash
cp .env.example .env
```

4. Generate Application Key
```
php artisan key:generate
```

5. Run Application
```
php artisan serve
```

Akses aplikasi melalui browser:
```bash
http://127.0.0.1:8000
```

### ⚙️ Environment Configuration
```bash
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
```

Gunakan Gmail App Password, bukan password utama Gmail.

### 🚀 Future Development
```text
1. Dashboard HR
2. Database penyimpanan pelamar
3. Sistem login admin
4. Tracking status lamaran
5. Manajemen data pelamar
```

### 📁 Project Structure
```text
/app
/routes
/resources/views
/public
```

### 👨‍💻 Developer
Nur Wardani @2026
Website ini dikembangkan sebagai platform company profile modern dengan fitur rekrutmen terintegrasi untuk mendukung kebutuhan perusahaan masa kini.

