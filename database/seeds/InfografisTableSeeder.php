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
            'sumber' => 'Dinas Perumahan dan Permukiman Kota Depok',
            'ImageName' => '1.jpeg',
            'status' => 1,
        ],
        [
            'nama' => '215 IKM Tersertifikasi',
            'sumber' => 'Dinas Perdagangan dan Perindustrian Kota Depok',
            'ImageName' => '2.jpeg',
            'status' => 1,
        ],
        ]);
    }
}
