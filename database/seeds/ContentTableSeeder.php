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
	            'desc' => 'Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan',
	            'image' => 'sejarah.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Ikon Kota',
	            'slug' => 'ikon-kota',
	            'desc' => 'Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan',
	            'image' => 'ikon-kota.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Seni Budaya',
	            'slug' => 'seni-budaya',
	            'desc' => 'Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan',
	            'image' => 'seni-budaya.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Demografi',
	            'slug' => 'demografi',
	            'desc' => 'Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan',
	            'image' => 'demografi.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Geografi',
	            'slug' => 'geografi',
	            'desc' => 'tes',
	            'image' => 'geografi.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Visi dan Misi',
	            'slug' => 'visi-misi',
	            'desc' => 'tes',
	            'image' => 'visi-misi.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Struktur Daerah',
	            'slug' => 'struktur-daerah',
	            'desc' => 'tes',
	            'image' => 'struktur-daerah.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Perundang-Undangan',
	            'slug' => 'perundang-undangan',
	            'desc' => 'tes',
	            'image' => 'perundangan.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Penghargaan',
	            'slug' => 'penghargaan',
	            'desc' => 'tes',
	            'image' => 'penghargaan.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Dinas',
	            'slug' => 'dinas',
	            'desc' => 'tes',
	            'image' => 'dinas.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Sekretariat Daerah',
	            'slug' => 'sekretariat-daerah',
	            'desc' => 'tes',
	            'image' => 'sekretariat-daerah.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Kecamatan',
	            'slug' => 'kecamatan',
	            'desc' => 'tes',
	            'image' => 'kecamatan.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Kelurahan',
	            'slug' => 'kelurahan',
	            'desc' => 'tes',
	            'image' => 'kelurahan.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
			],
			[
	        	'nama' => 'Lambang Identitas',
	            'slug' => 'lambang-identitas',
	            'desc' => 'tes',
	            'image' => 'lambang-identitas.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        ]);
    }
}
