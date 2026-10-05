# Wisata Majalengka - Landing Page Promosi Objek Wisata

Landing page statis untuk promosi objek wisata di Majalengka, Jawa Barat. Dibuat dengan HTML5, CSS3 (Vanilla), dan JavaScript ES6+.

## 📁 Struktur Project

```
2514101085/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── main.js
├── assets/
│   ├── img/
│   │   ├── hero.svg          # Placeholder - ganti dengan hero.jpg
│   │   ├── about.svg         # Placeholder - ganti dengan about.jpg
│   │   ├── gallery-1.svg     # Placeholder - ganti dengan gallery-1.jpg
│   │   ├── gallery-2.svg     # Placeholder - ganti dengan gallery-2.jpg
│   │   ├── gallery-3.svg     # Placeholder - ganti dengan gallery-3.jpg
│   │   ├── gallery-4.svg     # Placeholder - ganti dengan gallery-4.jpg
│   │   ├── package-1.svg     # Placeholder - ganti dengan package-1.jpg
│   │   ├── package-2.svg     # Placeholder - ganti dengan package-2.jpg
│   │   └── package-3.svg     # Placeholder - ganti dengan package-3.jpg
│   └── icons/
│       └── favicon.svg
└── README.md
```

## ✨ Fitur

- **Navbar Responsive** - Menu hamburger di mobile, sticky header
- **Hero Section** - Gradient background dengan CTA buttons
- **Tentang Wisata** - Deskripsi + fitur unggulan (grid 2 kolom)
- **Galeri Foto** - Grid 4 foto dengan lightbox (zoom, navigasi keyboard, caption)
- **Video Wisata** - YouTube embed responsif (16:9)
- **Paket Wisata** - 3 paket (Hemat, Keluarga, Rombongan) dengan badge, harga, fitur
- **Kontak** - Info lokasi/telepon/email/WA + form kontak (simulasi)
- **Footer** - Brand, menu navigasi, paket, kontak, sosial media
- **Back to Top** - Tombol muncul setelah scroll 300px
- **Animasi Scroll** - IntersectionObserver untuk fade-up
- **Active Nav on Scroll** - Highlight menu sesuai section aktif

## 🖼️ Mengganti Placeholder dengan Foto Asli

1. Download foto dari Google Drive: https://drive.google.com/drive/folders/1Vu-oIuxk8i9Fhp4IaePqUdYt08CXjnqs
2. Pilih foto terbaik (format JPG, max 1920px lebar, kompres ~80% quality)
3. Simpan ke `assets/img/` dengan nama file yang sama (hapus `.svg`, ganti `.jpg`):
   - `hero.jpg` (1920x1080) - Background hero
   - `about.jpg` (800x600) - Foto tentang wisata
   - `gallery-1.jpg` ~ `gallery-4.jpg` (800x600) - Foto kegiatan
   - `package-1.jpg` ~ `package-3.jpg` (500x300) - Thumbnail paket
4. Update `index.html` - ganti `src="assets/img/*.svg"` menjadi `src="assets/img/*.jpg"`

**Format HEIC** dari Drive perlu dikonversi ke JPG dulu (pakai online converter / Preview Mac / Paint Windows).

## 🎬 Video

Ganti `src` iframe di section `#video` dengan link YouTube embed Anda:
```html
<iframe src="https://www.youtube.com/embed/VIDEO_ID_ANDA" ...></iframe>
```

## 🚀 Cara Menjalankan

Cukup buka `index.html` di browser. Tidak perlu server (static HTML).

Untuk development dengan live reload:
```bash
# Pakai VS Code Live Server extension, atau:
npx serve .
# atau
python -m http.server 8000
```

## 🛠️ Teknologi

- HTML5 Semantic
- CSS3: Custom Properties, Flexbox, Grid, Animations
- Vanilla JS (ES6+): Modules pattern, IntersectionObserver
- Bootstrap Icons (CDN)
- Google Fonts: Poppins (CDN)

## 📱 Responsive Breakpoints

- Desktop: ≥1024px
- Tablet: 768px - 1023px
- Mobile: <768px

## 📄 Lisensi

MIT License - Bebas digunakan untuk tugas kuliah / project pribadi.

---

**Dibuat untuk:** Tugas Mahasiswa NIM 2514101085 - Universitas Majalengka