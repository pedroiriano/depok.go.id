<?php

use Illuminate\Database\Seeder;

class InfografisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infografis')->insert([
        [
            'nama' => 'Renovasi Dua Kantor Kecamatan',
            'sumber' => '6',
            'ImageName' => '1.jpeg',
            'status' => 1,
        ],
        [
            'nama' => '215 IKM Tersertifikasi',
            'sumber' => '6',
            'ImageName' => '2.jpeg',
            'status' => 1,
        ],
        ]);
    }
}
