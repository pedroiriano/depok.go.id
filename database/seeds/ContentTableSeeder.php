<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content')->insert([
        	[
	        	'nama' => 'Sejarah',
	            'slug' => 'sejarah',
	            'desc' => '{"ops":[{"attributes":{"color":"#5f6167"},"insert":"Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan."},{"insert":"\n"}]}',
	            'image' => 'sejarah.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Ikon Kota',
	            'slug' => 'ikon-kota',
	            'desc' => '{"ops":[{"attributes":{"color":"#5f6167"},"insert":"Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan."},{"insert":"\n"}]}',
	            'image' => 'ikon-kota.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Seni Budaya',
	            'slug' => 'seni-budaya',
	            'desc' => '{"ops":[{"attributes":{"color":"#5f6167"},"insert":"Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan."},{"insert":"\n"}]}',
	            'image' => 'seni-budaya.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Demografi',
	            'slug' => 'demografi',
	            'desc' => '{"ops":[{"attributes":{"color":"#5f6167"},"insert":"Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan."},{"insert":"\n"}]}',
	            'image' => 'demografi.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        ]);
    }
}
