# Frontend Depok.go.id - Diskominfo Kota Depok

## How to install
1. git clone https://dev.depok.go.id/diskominfo/frontend-depok.go.id.git
2. Install library menggunakan perintah `composer install`
3. Membuat file .env dengan perintah `copy .env.example .env`
4. Membuat folder "cache" di dalam folder bootstrap.
5. Kemudian isikan semua pengaturan yang perlu kamu masukkan, biasanya yang penting adalah pengaturan koneksi database.
6. Jalankan perintah `php artisan key:generate`
7. Jalankan perintah `php artisan migrate:refresh --seed`
8. Jalankan perintah `php artisan storage:link`
9. OK