<?php

use Illuminate\Database\Seeder;

class KecamatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatan')->insert([
           [
                'nama' => 'Pancoran Mas',
            ],
            [
                'nama' => 'Cimanggis',
            ],
            [
                'nama' => 'Sawangan',
            ],
            [
                'nama' => 'Limo',
            ],
            [
                'nama' => 'Sukmajaya',
            ],
            [
                'nama' => 'Beji',
            ],
            [
                'nama' => 'Cipayung',
            ],
            [
                'nama' => 'Cilodong',
            ],
            [
                'nama' => 'Cinere',
            ],
            [
                'nama' => 'Tapos',
            ],
            [
                'nama' => 'Bojong Sari',
            ],
        ]);
    }
}
