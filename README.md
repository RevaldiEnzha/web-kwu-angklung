# Mandiri Laras Production — Website Company Profile

Website promosi UMKM pengrajin angklung bambu (Kemutug Lor, Baturraden, Banyumas), dibuat dengan Laravel.

## Menjalankan
Butuh PHP 8.3+ dan Composer.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```
Buka http://127.0.0.1:8000

Tanpa database dan tanpa build frontend (CSS/JS ada di `public/`).

## Mengubah konten
- Teks, harga, kontak, langkah proses: `config/umkm.php`
- Tampilan halaman: `resources/views/home.blade.php`
- Gaya: `public/css/style.css`
- Foto: `public/images/` (foto asli dari dokumentasi laporan KWU Kelompok 10)
