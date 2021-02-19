<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'namaservice' => 'Panggilan Darurat',
                'category_id' => 9,
                'url' => 'https://dsw.depok.go.id/html/panggilan_darurat',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Call Center OPD',
                'category_id' => 9,
                'url' => 'https://dsw.depok.go.id/html/panggilan_opd',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Lalu Lintas Depok',
                'category_id' => 5,
                'url' => 'https://dsw.depok.go.id/html/lalulintas',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Lowongan Kerja',
                'category_id' => 6,
                'url' => 'https://dsw.depok.go.id/html/loker',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Berita Depok',
                'category_id' => 14,
                'url' => 'https://dsw.depok.go.id/html/rss',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Informasi PBB',
                'category_id' => 1,
                'url' => 'https://dsw.depok.go.id/html/pbb',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Cek PBB',
                'category_id' => 1,
                'url' => 'https://dsw.depok.go.id/html/tagihan_pbb',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Pembayaran PBB',
                'category_id' => 1,
                'url' => 'https://dsw.depok.go.id/html/info_pembayaran_pbb',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Informasi BPHTB',
                'category_id' => 1,
                'url' => 'https://dsw.depok.go.id/html/bphtb',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Cek BPHTB',
                'category_id' => 1,
                'url' => 'https://dsw.depok.go.id/html/pembayaran_bphtb',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Info Pembayaran BPHTB',
                'category_id' => 1,
                'url' => 'https://dsw.depok.go.id/html/info_pembayaran_bphtb',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Informasi Perizinan',
                'category_id' => 3,
                'url' => 'https://dsw.depok.go.id/html/perizinan',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Cek Perizinan',
                'category_id' => 3,
                'url' => 'https://dsw.depok.go.id/html/tracking_perizinan',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Perizinan Online',
                'category_id' => 3,
                'url' => 'https://dsw.depok.go.id/html/izinonline',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Persyaratan Pelayanan Daftar Penduduk',
                'category_id' => 2,
                'url' => 'https://dsw.depok.go.id/html/dafduk',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Persyaratan Pelayanan Pencatatan Sipil Berdasarkan Per-Walikota Depok Nomor 94 Tahun 2018',
                'category_id' => 2,
                'url' => 'https://dsw.depok.go.id/html/persyaratan',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Persyaratan dan Tata Cara Pendaftaran Penduduk dan Pencatatan Sipil',
                'category_id' => 2,
                'url' => 'https://dsw.depok.go.id/html/penduduk',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Persyaratan Pembuatan KIA dan Akta Kelahiran',
                'category_id' => 2,
                'url' => 'https://dsw.depok.go.id/html/wali',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Registrasi RSUD',
                'category_id' => 4,
                'url' => 'https://dsw.depok.go.id/html/rsud_registrasi',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Registrasi Puskesmas',
                'category_id' => 4,
                'url' => 'https://dsw.depok.go.id/html/puskesmas_registrasi',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Informasi Pendaftaran Puskesmas',
                'category_id' => 4,
                'url' => 'https://dsw.depok.go.id/html/puskesmas_pendaftar',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Antrian Puskesmas',
                'category_id' => 4,
                'url' => 'https://dsw.depok.go.id/html/puskesmas_antrian',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Puskesmas 24 Jam',
                'category_id' => 4,
                'url' => 'https://dsw.depok.go.id/html/puskesmas24',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Lokasi Puskesmas',
                'category_id' => 4,
                'url' => 'https://dsw.depok.go.id/html/puskesmas_lokasi',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Petunjuk',
                'category_id' => 4,
                'url' => 'https://dsw.depok.go.id/html/puskesmas_petunjuk',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Informasi Kesehatan',
                'category_id' => 4,
                'url' => 'https://dsw.depok.go.id/html/kesehatan',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Berita Kesehatan',
                'category_id' => 4,
                'url' => 'https://dsw.depok.go.id/html/berita_kesehatan',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Daftar Sekolah',
                'category_id' => 10,
                'url' => 'https://dsw.depok.go.id/html/daftar_sekolah',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Nilai Passing Grade',
                'category_id' => 10,
                'url' => 'https://dsw.depok.go.id/html/info_passinggrade',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Kalendar Pendidikan',
                'category_id' => 10,
                'url' => 'https://dsw.depok.go.id/html/kalender_pendidikan',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'PPDB Online',
                'category_id' => 10,
                'url' => 'https://dsw.depok.go.id/html/ppdb_online',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Informasi Zakat',
                'category_id' => 11,
                'url' => 'https://dsw.depok.go.id/html/info_zakat',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Pembayaran Zakat',
                'category_id' => 11,
                'url' => 'https://dsw.depok.go.id/html/bayar_zakat',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Informasi PLN',
                'category_id' => 7,
                'url' => 'https://dsw.depok.go.id/html/info_pln',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Cek Tagihan PLN',
                'category_id' => 7,
                'url' => 'https://dsw.depok.go.id/html/cek_pln',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Informasi PDAM',
                'category_id' => 7,
                'url' => 'https://dsw.depok.go.id/html/info_pdam',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Registrasi Pelanggan Baru',
                'category_id' => 7,
                'url' => 'https://dsw.depok.go.id/html/layanan_registerbaru',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Registrasi Pelanggan Lama',
                'category_id' => 7,
                'url' => 'https://dsw.depok.go.id/html/layanan_registerlama',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Keluhan Pelanggan',
                'category_id' => 7,
                'url' => 'https://dsw.depok.go.id/html/layanan_keluahanpelanggan',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Keluhan Non Pelanggan',
                'category_id' => 7,
                'url' => 'https://dsw.depok.go.id/html/layanan_keluahannonpelanggan',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Cek Tagihan PDAM',
                'category_id' => 7,
                'url' => 'https://dsw.depok.go.id/html/cek_pdam',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Informasi Pajak Kendaraan',
                'category_id' => 1,
                'url' => 'https://dsw.depok.go.id/html/info_pajak_sambara',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Bukti Bayar ',
                'category_id' => 1,
                'url' => 'https://dsw.depok.go.id/html/sambara_buktibayar',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Cari ASN',
                'category_id' => 12,
                'url' => 'https://dsw.depok.go.id/html/cari_pegawai',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Statistik ASN',
                'category_id' => 12,
                'url' => 'https://dsw.depok.go.id/html/statistik_peg',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Harga Komoditas Pasar',
                'category_id' => 13,
                'url' => 'https://dsw.depok.go.id/html/komoditas_pasar',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Katalog Perusahaan',
                'category_id' => 13,
                'url' => 'https://dsw.depok.go.id/html/kat_industri',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Katalog Produk',
                'category_id' => 13,
                'url' => 'https://dsw.depok.go.id/html/kat_produk',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Pengaduan',
                'category_id' => 8,
                'url' => 'https://dsw.depok.go.id/html/sigap',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Peta Depok ',
                'category_id' => 5,
                'url' => 'https://dsw.depok.go.id/html/peta_depok',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Kampung Siaga ',
                'category_id' => 15,
                'url' => 'https://ccc-19.depok.go.id/Forum/',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Berita BNN ',
                'category_id' => 16,
                'url' => 'https://bnn.go.id/berita/',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Login BNN ',
                'category_id' => 16,
                'url' => 'https://rehabilitasi.bnn.go.id/public/user/login/',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Daftar BNN ',
                'category_id' => 16,
                'url' => 'https://rehabilitasi.bnn.go.id/public/user/register/',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Prosedur Pendaftaran BNN ',
                'category_id' => 16,
                'url' => 'https://rehabilitasi.bnn.go.id/public/psd',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Lapor Rehab BNN ',
                'category_id' => 16,
                'url' => 'https://bnn.go.id/lapor/',
                'statusservice' => 1,
            ],
            [
                'namaservice' => 'Pelayanan BNN ',
                'category_id' => 16,
                'url' => 'https://rehabilitasi.bnn.go.id/public/layanan/',
                'statusservice' => 1,
            ],
        ]);
    }
}
