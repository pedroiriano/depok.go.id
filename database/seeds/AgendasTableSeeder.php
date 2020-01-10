<?php

use Illuminate\Database\Seeder;

class AgendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
        [
            'nama' => 'The Night Market',
            'tanggal' => '2019-10-05',
            'sumber' => 'Dinas Komunikasi dan Informatika Kota Depok',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '1.png',
            'status' => 1,
        ],
        [
            'nama' => 'Surf Festival',
            'tanggal' => '2019-10-05',
            'sumber' => 'Dinas Komunikasi dan Informatika Kota Depok',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '2.png',
            'status' => 1,
        ],
        [
            'nama' => 'Spontaneous Festival',
            'tanggal' => '2019-11-21',
            'sumber' => 'Dinas Komunikasi dan Informatika Kota Depok',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '3.png',
            'status' => 1,
        ],
        [
            'nama' => 'Food Film Festival',
            'tanggal' => '2019-11-21',
            'sumber' => 'Dinas Komunikasi dan Informatika Kota Depok',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '4.png',
            'status' => 1,
        ],
        [
            'nama' => 'Food Truck Festival',
            'tanggal' =>'2019-11-22',
            'sumber' => 'Dinas Komunikasi dan Informatika Kota Depok',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '5.png',
            'status' => 1,
        ],
    ]);
    }
}
