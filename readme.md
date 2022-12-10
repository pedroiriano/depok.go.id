# Frontend Depok.go.id - Diskominfo Kota Depok

## How to install
1. git clone https://dev.depok.go.id/diskominfo/frontend-depok.go.id.git
2. Membuat folder "cache" di dalam folder bootstrap.
3. Install library menggunakan perintah `composer install`
4. Membuat file .env dengan perintah `cp .env.example .env`
5. Kemudian isikan semua pengaturan yang perlu kamu masukkan, biasanya yang penting adalah pengaturan koneksi database.
6. Jalankan perintah `npm install`
7. Jalankan perintah `php artisan key:generate`
8. Jalankan perintah `php artisan migrate:refresh --seed`
9. Jalankan perintah `php artisan storage:link`
