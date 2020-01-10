<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SejarahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarah')->insert([
            'content' => '{"ops":[{"attributes":{"color":"#5f6167"},"insert":"Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan."},{"insert":"\n"}]}',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
