<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PimpinanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pimpinan')->insert([
            [
                'nama' => 'Mohammad Idris',
                'deskripsi' => 'Wali Kota Depok 2021-2026',
                'image' => 'img/Walikota.png',
                'instagram' =>  'https://www.instagram.com/idrisashomad/?hl=en',
                'twitter' =>  'https://twitter.com/idrisashomad?lang=en',
                'facebook' =>  'https://www.facebook.com/IdrisAShomad/',
                'status' =>  1,
            ],
            [
                'nama' => 'Imam Budi Hartono',
                'deskripsi' => 'Wakil Wali Kota Depok 2021-2026',
                'image' => 'img/Wakil-Walikota-2021.png',
                'instagram' =>  'https://www.instagram.com/imambhartono/',
                'twitter' =>  'https://twitter.com/imambhartono',
                'facebook' =>  'https://www.facebook.com/ImamBHartono/',
                'status' => 1,
            ]
        ]);
    }
}
