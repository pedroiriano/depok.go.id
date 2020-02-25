<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
        [
            'nama' => 'Sigap! (Sistem Terintegrasi untuk Pengaduan dan Aspirasi)',
            'deskripsi' =>
            '<p>Sigap! (Sistem Terintegrasi untuk Pengaduan dan Aspirasi) adalah media bagi Masyarakat Kota Depok untuk mempermudah penyampaian pengaduan, aspirasi, dan saran kepada Pemerintah Kota Depok secara real-time.</p>
            <p>Dengan Aplikasi Sigap!, masyarakat dapat memantau segala pengaduan dan aspirasi yang sudah disampaikan dan dapat berkomunikasi langsung dengan Pemerintah Kota Depok. </p>
            <p>Download aplikasi Sigap! sekarang! Ayo bersama-sama, kita bangun Kota Depok tercinta!</p>
            <p><a href="https://play.google.com/store/apps/details?id=com.depok.sigap&hl=in" target="_blank">Download SIGAP disini</a></p>',
            'url' => 'sigap!-sistem-terintegrasi-untuk-pengaduan-dan-aspirasi',
            'sumber' => '15',
            'ImageName' => 'sigap.png',
            'status' => 1,
            'popup' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'nama' => 'Portal Puskesmas Kota Depok',
            'deskripsi' => '<p>Portal Puskesmas adalah suatu layanan Puskesmas berbasis website yang tentunya dapat mempermudah masyarakat dalam berbagai hal contohnya Registrasi Online, Mengetahui Antrian Puskesmas, dan Mengecek jadwal pelayanan Puskesmas</p>
                <p><a href="https://puskesmas.depok.go.id" target="_blank">Download SIGAP disini</a></p>',
            'url' => 'portal-puskesmas-kota-depok',
            'sumber' => '3',
            'ImageName' => 'puskesmas.png',
            'status' => 1,
            'popup' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'nama' => 'Depok Single Window - Aplikasi Layanan Publik Online Kota Depok',
            'deskripsi' => '<p>Depok Single Window, satu aplikasi untuk berbagai urusan.<br /><br />Depok Single Window adalah Media bagi masyarakat Kota Depok untuk memudahkan layanan Informasi yang dapat diakses di smartphone hanya dengan satu aplikasi<br />Gunakan Depok Single Window Untuk:<br />1. Waktu Sholat<br />Fitur ini menampilkan waktu solat di kota depok<br /><br />2. Panggilan Darurat<br />Anda membutuhkan panggilan darurat?<br />Ketika anda membutuhkan panggilan darurat, kami siap sedia dalam 7x24 jam.<br /><br />3. Cuaca<br />Fitur ini menyediakan informasi cuaca di kota depok berdasarkan lokasi anda<br /><br />4. Lalu lintas<br />Fitur ini menyediakan informasi keadaan lalu lintas di kota depok berdasarkan lokasi anda.<br /><br />5. Peta Depok<br />Fitur ini menyediakan informasi Peta di kota depok berdasarkan lokasi anda, di fitur ini anda dapat mencari lokasi obyek di sekitar anda.<br /><br />6. Berita Depok<br />Berita Depok hadir disini untuk memudahkan anda mencari berita terbaru di kota depok<br /><br />7. Lowongan Kerja<br />Layanan ini berisi informasi lowongan kerja yang disediakan khusus untuk daerah kota depok<br /><br />8. Kesehatan<br />Layanan ini berisi informasi kesehatan mulai dari daftar puskesmas, daftar layanan RSUD , daftar rumah sakit, dan informasi penyakit di kota depok<br /><br />9. Pendidikan<br />Layanan ini berisi informasi pendidikan mulai dari daftar sekolah di kota depok, informasi passing grade SMP,SMA,SMK , informasi kalendar pendidikan, dan informasi tentang PPDB<br /><br />10. Pajak<br />Layanan ini berisi informasi tentang PBB , SAMBARA( Samsat Mobile Jawa Barat ) dan juga terdapat fitur cek tagihan pbb maupun samsat, yang bisa anda cek secara online disini <br /><br />11. BPHTB<br />Layanan ini berisi informasi tentang BPHTB dan juga terdapat fitur cek pembayaran BPHTB, yang bisa anda cek secara online disini<br /><br />12. Perizinan<br />Layanan ini berisi informasi tentang Perizinan dan juga terdapat fitur cek tracking perizinan, yang bisa anda cek secara online disini<br /><br />13. PLN<br />Layanan ini berisi informasi PLN Depok<br /><br />14. Zakat<br />Layanan ini berisi informasi tentang Zakat dan juga Informasi pembayaran zakat melalui BAZNAS Depok <br /><br />15. Aspirasi<br />Dengan Layanan ini anda dapat menyampaikan Aspirasi anda tentang kota depok, Kami akan menjaga privasi anda.<br /><br />16. Contact Center<br />Dengan layanan ini anda dapat menyampaikan pengaduan melalui panggilan ke contact center depok</p>
            <p><a href="https://play.google.com/store/apps/details?id=id.depok.depoksinglewindow&hl=in" target="_blank">Download Depok Single Window disini</a></p>',
            'url' => 'depok-single-window',
            'sumber' => '15',
            'ImageName' => 'dsw.png',
            'status' => 1,
            'popup' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
    ]);
    }
}
