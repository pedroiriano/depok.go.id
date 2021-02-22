<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'nama' => 'Pajak',
                'icon' => 'Pajak.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 7,
                'status' => 1,
            ],
            [
                'nama' => 'Kependudukan',
                'icon' => 'Kependudukan.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 8,
                'status' => 1,
            ],
            [
                'nama' => 'Perizinan',
                'icon' => 'Perizinan.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 99,
                'status' => 1,
            ],
            [
                'nama' => 'Kesehatan',
                'icon' => 'Kesehatan.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 2,
                'status' => 1,
            ],
            [                
                'nama' => 'Peta',
                'icon' => 'Peta.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 99,
                'status' => 1,
            ],
            [                
                'nama' => 'Loker',
                'icon' => 'Loker.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 6,
                'status' => 1,
            ],
            [                
                'nama' => 'PDAM & PLN',
                'icon' => 'Pdam.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 99,
                'status' => 1,
            ],
            [                
                'nama' => 'Aspirasi',
                'icon' => 'Aspirasi.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 3,
                'status' => 1,
            ],
            [                
                'nama' => 'Kontak',
                'icon' => 'Kontak.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 4,
                'status' => 1,
            ],
            [                
                'nama' => 'Pendidikan',
                'icon' => 'Pendidikan.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 5,
                'status' => 1,
            ],
            [                
                'nama' => 'Zakat',
                'icon' => 'zakat.svg',
                'tooltip' => 'Tooltip with Html',
                'pos' => 99,
                'status' => 1,
            ],
            [                
                'nama' => 'Data ASN',
                'icon' => 'Kepegawaian.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 99,
                'status' => 1,
            ],
            [                
                'nama' => 'Ekonomi',
                'icon' => 'Ekonomi.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 99,
                'status' => 1,
            ],
            [                
                'nama' => 'Perpustakaan',
                'icon' => 'Perpustakaan.png',
                'tooltip' => 'Tooltip with Html',
                'pos' => 99,
                'status' => 1,
            ],
            [
                'nama' => 'Kampung Siaga COVID-19',
                'icon' => 'kampung-siaga.svg',
                'tooltip' => 'Tooltip with Html',
                'pos' => 1,
                'status' => 1,
            ],
        ]);
    }
}
