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
            'nama' => 'Hari Pancasila',
            'deskripsi' => 'Selamat Hari Lahir Pancasila',
            'ImageName' => 'Hari-Pancasila.png',
            'status' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'nama' => 'Idul Fitri',
            'deskripsi' => 'Selamat Hari Raya Idul Fitri 1440 H',
            'ImageName' => 'Idul-fitri.png',
            'status' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'nama' => 'Ulang Tahun Depok 2019',
            'deskripsi' => 'Selamat Hari Jadi Kota Depok Ke-20',
            'ImageName' => 'Ultah-Depok.png',
            'status' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
    ]);
    }
}
