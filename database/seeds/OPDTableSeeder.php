<?php

use Illuminate\Database\Seeder;

class OPDTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opd')->insert([
            [
                'nama' => 'Dinas Pendidikan'
            ],
            [
                'nama' => 'Dinas Kependudukan dan Pencatatan Sipil'
            ],
            [
                'nama' => 'Dinas Kesehatan'
            ],
            [
                'nama' => 'Dinas Pemuda, Olah Raga, Kebudayaan dan Pariwisata'
            ],
            [
                'nama' => 'Dinas Lingkungan Hidup dan Kebersihan'
            ],
            [
                'nama' => 'Dinas Perumahan dan Pemukiman'
            ],
            [
                'nama' => 'Dinas Tenaga Kerja'
            ],
            [
                'nama' => 'Dinas Pekerjaan Umum dan Penataan Ruang'
            ],
            [
                'nama' => 'Dinas Pemadam Kebakaran dan Penyelamatan'
            ],
            [
                'nama' => 'Dinas Koperasi dan Usaha Mikro'
            ],
            [
                'nama' => 'Badan Keuangan Daerah'
            ],
            [
                'nama' => 'Dinas Perdangan dan Perindustrian'
            ],
            [
                'nama' => 'Dinas Ketahanan Pangan, Pertanian dan Perikanan'
            ],
            [
                'nama' => 'Dinas Perhubungan'
            ],
            [
                'nama' => 'Dinas Komunikasi dan Informatika'
            ],
            [
                'nama' => 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu'
            ],
            [
                'nama' => 'Dinas Perlindungan Anak, Pemberdayaan Masyarakat dan Keluarga'
            ],
            [
                'nama' => 'Dinas Sosial'
            ],
            [
                'nama' => 'Dinas Kearsipan dan Perpustakaan'
            ],
            [
                'nama' => 'Badan Perencanaan Pembangunan dan Penelitian Pengembangan Daerah'
            ],
            [
                'nama' => 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia'
            ],
            [
                'nama' => 'Inspektorat Daerah'
            ],
            [
                'nama' => 'Kantor Kesatuan Bangsa dan Politik'
            ],
            [
                'nama' => 'Rumah Sakit Umum Daerah'
            ],
            [
                'nama' => 'Sekretariat Daerah'
            ],
            [
                'nama' => 'Satuan Polisi Pamong Praja'
            ],

        ]);
    }
}
