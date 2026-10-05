# Wisata Pangalengan - Landing Page Promosi Objek Wisata

Landing page statis **single-file HTML** untuk promosi objek wisata di Pangalengan, Jawa Barat.

## 📁 Struktur

```
2514101085/
├── index.html   ← Semua CSS + JS inline (1 file saja)
└── README.md
```

## ✨ Fitur

- **Navbar** - Menu navigasi responsif (hamburger di mobile)
- **Hero** - Judul + CTA ke Paket Wisata & Galeri
- **Tentang** - Deskripsi wisata + fitur unggulan
- **Galeri** - Grid foto kegiatan wisata + lightbox
- **Video** - YouTube embed responsif
- **Paket Wisata** - 3 paket (Hemat, Keluarga, Rombongan)
- **Kontak** - Info lokasi/telepon/email/WA + form simulasi
- **Footer** - Navigasi + sosial media
- **Responsive** - Mobile-first, smooth scroll, animasi fade-up

## 🖼️ Ganti Placeholder dengan Foto Asli

Saat ini foto diganti dengan placeholder. Untuk menambah foto asli:

1. Download foto dari Google Drive: https://drive.google.com/drive/folders/1Vu-oIuxk8i9Fhp4IaePqUdYt08CXjnqs
2. Konversi HEIC → JPG
3. Upload foto ke `assets/img/` (buat folder ini) dengan nama:
   - `about.jpg`, `gallery-1.jpg` ~ `gallery-4.jpg`, `package-1.jpg` ~ `package-3.jpg`
4. Edit `index.html`, ganti placeholder `<div class="placeholder-img">` menjadi `<img src="assets/img/xxx.jpg">`

## 🎬 Video

Ganti `src` iframe di section `#video` dengan link YouTube embed Anda:
```html
<iframe src="https://www.youtube.com/embed/VIDEO_ID_ANDA" ...></iframe>
```

## 🚀 Cara Menjalankan

Buka `index.html` langsung di browser. Tidak perlu server.

## 🛠️ Teknologi

- HTML5 + CSS3 (inline) + Vanilla JavaScript (inline)
- Google Fonts: Poppins
- Bootstrap Icons (CDN)
- Single-file, tanpa build tools

## 📄 Lisensi

MIT License - Bebas digunakan untuk tugas kuliah / project pribadi.

---

**Dibuat untuk:** Tugas Mahasiswa NIM 2514101085 - Universitas Majalengka