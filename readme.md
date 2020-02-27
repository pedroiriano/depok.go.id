# Frontend Depok.go.id - Diskominfo Kota Depok

## How to install
1. git clone https://dev.depok.go.id/diskominfo/frontend-depok.go.id.git
2. Install library menggunakan perintah `composer install`
3. Membuat file .env dengan perintah `cp .env.example .env`
4. Kemudian isikan semua pengaturan yang perlu kamu masukkan, biasanya yang penting adalah pengaturan koneksi database.
5. Jalankan perintah `php artisan key:generate`
6. Jalankan perintah `php artisan migrate:refresh --seed`
7. Jalankan perintah `php artisan storage:link`