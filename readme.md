# Portal depok.go.id - Pemerintah Kota Depok

## Cara Pemasangan
1. git clone https://dev.depok.go.id/diskominfo/depokgoid2022_v2.git
2. Membuat folder "cache" di dalam folder "bootstrap"
3. Unduh dan pasang library menggunakan perintah `composer install`
4. Membuat file ".env" dengan perintah `cp .env.example .env`
5. Kemudian isikan semua pengaturan yang perlu kamu masukkan, umumnya yang paling penting adalah pengaturan koneksi basis data
6. Jalankan perintah `npm install`
7. Jalankan perintah `php artisan key:generate`
8. Jalankan perintah `php artisan migrate:refresh --seed`
9. Jalankan perintah `php artisan storage:link`
