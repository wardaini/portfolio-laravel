# 🌐 Portfolio — Wardatul A'ani (Amare)

> Personal portfolio website dengan tema **Cyberpunk Neon** (Hitam + Biru Elektrik + Hijau Neon)  
> Dibangun dengan **Laravel 11** — animasi custom, GitHub live sync, dan desain original.

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-00ff88?style=flat)

---

## 👩‍💻 About

Portfolio **Wardatul A'ani** (akrab dipanggil **Amare**) — mahasiswi S1 Informatika Universitas Malikussaleh semester 6, asal Peureulak, Aceh Timur.

- 🤖 AI & Machine Learning Enthusiast
- 🔬 Published Researcher — IJABC 2026
- 🌐 Laravel & Python Developer
- 📍 Lhokseumawe, Aceh

---

## ✨ Fitur

| Fitur | Keterangan |
|---|---|
| 🎨 Cyberpunk Design | Tema hitam-biru-hijau neon, original |
| ✨ Particle Canvas | Animasi partikel jaringan interaktif di hero |
| ⌨️ Typewriter Effect | Animasi teks otomatis multi-kata |
| 🖱️ Custom Cursor | Neon dot + ring mengikuti mouse |
| 📊 Animated Counters | Angka statistik count-up saat scroll |
| 📈 Skill Bars | Progress bar animate saat terlihat |
| 🐙 GitHub Live Sync | Repositories langsung dari GitHub API |
| 📁 Project Groups | Terorganisir: ML / Research / Web / General |
| 📜 Timeline Experience | Riwayat kerja & organisasi |
| 🏆 Certifications | Alibaba Cloud & Dicoding |
| 📧 Contact Form | Form kontak dengan Laravel Mail + Gmail SMTP |
| 📱 Fully Responsive | Mobile-first, semua device |

---

## 🗂️ Sections

1. **Hero** — Nama, typewriter, stats, particle canvas
2. **About** — Bio, foto, code snippet, semua link sosmed
3. **Skills** — Progress bars per kategori (AI/ML, Web, Data, Tools)
4. **Projects** — Grid terkategori + GitHub live repositories
5. **Experience** — Timeline riwayat kerja & organisasi
6. **Certifications** — Alibaba Cloud (10) + Dicoding (7)
7. **Contact** — Channel kontak + form kirim pesan

---

## 🛠️ Tech Stack

- **Backend** — Laravel 11 (PHP 8.2+)
- **Templating** — Blade
- **Styling** — Vanilla CSS (Custom Properties + Animations)
- **JavaScript** — Vanilla JS (Canvas API, IntersectionObserver)
- **Fonts** — Orbitron + JetBrains Mono + Syne
- **Mail** — Gmail SMTP via Laravel Mail
- **API** — GitHub REST API (live repo sync)

---

## 🚀 Instalasi

### 1. Clone repository

```bash
git clone https://github.com/wardaini/portfolio-laravel.git
cd portfolio-laravel
```

### 2. Install dependencies

```bash
composer install
```

### 3. Setup environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Edit `.env`

```env
APP_NAME="Portfolio"
APP_URL=http://localhost

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_USERNAME=emailkamu@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_FROM_ADDRESS="emailkamu@gmail.com"
CONTACT_MAIL_TO=emailkamu@gmail.com
```

### 5. Jalankan migration

```bash
php artisan migrate
```

### 6. Jalankan server

```bash
php artisan serve
```

Buka **http://localhost:8000**

---

## 📷 Foto Profil

Taruh foto di:

```
public/images/profile.jpg
```

---

## ⚙️ Kustomisasi Data

Semua data (skills, projects, experience, certifications) ada di:

```
app/Http/Controllers/PortfolioController.php
```

Tinggal edit array-nya sesuai kebutuhan.

---

## 📬 Contact

| Platform | Link |
|---|---|
| 📧 Email | awardatul5@gmail.com |
| 💼 LinkedIn | [wardatul-a-ani-a716b3319](https://www.linkedin.com/in/wardatul-a-ani-a716b3319/) |
| 🐙 GitHub | [wardaini](https://github.com/wardaini) |
| 🎓 Dicoding | [wardaini](https://www.dicoding.com/users/wardaini/academies) |
| 📄 Publication | [IJABC 2026](https://doi.org/10.60401/ijabc.163) |

---

## 📄 License

MIT License — feel free to use as reference with attribution.

---

<div align="center">
  Made with ♥ + Laravel &nbsp;·&nbsp; © 2026 Wardatul A'ani
</div>
