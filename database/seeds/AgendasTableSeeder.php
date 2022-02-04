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
            'tanggal' => '2022-02-04',
            'sumber' => '8',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '1.png',
            'status' => 1,
        ],
        [
            'nama' => 'Surf Festival',
            'tanggal' => '2020-10-05',
            'sumber' => '8',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '2.png',
            'status' => 1,
        ],
        [
            'nama' => 'Spontaneous Festival',
            'tanggal' => '2020-11-21',
            'sumber' => '8',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '3.png',
            'status' => 1,
        ],
        [
            'nama' => 'Food Film Festival',
            'tanggal' => '2020-11-21',
            'sumber' => '8',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '4.png',
            'status' => 1,
        ],
        [
            'nama' => 'Food Truck Festival',
            'tanggal' =>'2020-11-22',
            'sumber' => '8',
            'tempat' => 'Kantor Walikota Depok',
            'ImageName' => '5.png',
            'status' => 1,
        ],
    ]);
    }
}
