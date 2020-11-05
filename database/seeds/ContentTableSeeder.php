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
	            'desc' => '<p class="lead">Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan.</p>
            
            <p class="lead">Pada tahun 1981 Pemerintah membentuk Kota Administratif Depok berdasarkan Peraturan Pemerintah Nomor 43 tahun 1981 yang peresmiannya pada tanggal 18 Maret 1982 oleh Menteri dalam Negeri (H. Amir Machmud) yang terdiri dari 3 (tiga) Kecamatan dan 17 (tujuh belas) Desa, yaitu :</p>
            <ul class="lead">
               <li>Kecamatan Pancoran Mas, terdiri dari 6 (enam) Desa, yaitu Desa Depok, Desa Depok Jaya, Desa Pancoram Mas, Desa Mampang, Desa Rangkapan Jaya, Desa Rangkapan Jaya Baru.</li>
               <li>Kecamatan Beji, terdiri dari 5 (lima) Desa, yaitu : Desa Beji, Desa Kemiri Muka, Desa Pondok Cina, Desa Tanah Baru, Desa Kukusan.</li>
              <li>Kecamatan Sukmajaya, terdiri dari 6 (enam) Desa, yaitu : Desa Mekarjaya, Desa Sukma Jaya, Desa Sukamaju, Desa Cisalak, Desa Kalibaru, Desa Kalimulya.</li>
            </ul>
            <p class="lead">Selama kurun waktu 17 tahun Kota Administratif Depok berkembang pesat baik dibidang Pemerintahan, Pembangunan dan Kemasyarakatan. Khususnya bidang Pemerintahan semua Desa berganti menjadi Kelurahan dan adanya pemekaran Kelurahan , sehingga pada akhirnya Depok terdiri dari 3 (Kecamatan) dan 23 (dua puluh tiga) Kelurahan, yaitu :</p>
            <ul class="lead">
                <li>Kecamatan Pancoran Mas, terdiri dari 6 (enam) Kelurahan, yaitu : Kelurahan Depok, Kelurahan Depok Jaya, Kelurahan Pancoran Mas, Kelurahjn Rangkapan Jaya, Kelurahan Rangkapan Jaya Baru.</li>
                <li>Kecamatan Beji terdiri dari (enam) Kelurahan, yaitu : Kelurahan Beji, Kelurahan Beji Timur, Kelurah Pondok Cina, Kelurahan Kemirimuka, Kelurahan Kukusan, Kelurahan Tanah Baru.</li>
                <li>Kecamatan Sukmajaya, terdiri dari 11 (sebelas) Kelurahan, yaitu : Kelurahan Sukmajaya, Kelurahan Suka Maju,. Kelurahan Mekarjaya, Kelurahan Abadi Jaya, Kelurahan Baktijaya, Kelurahan Cisalak, Kelurahan Kalibaru, Kelurahan Kalimulya, Kelurahan Kali Jaya, Kelurahan Cilodong, Kelurahan Jati Mulya, Kelurahan Tirta Jaya.</li>
            </ul>
            <p class="lead">Terbentuknya Kota Depok</p>

            <p class="lead">Dengan semakin pesatnya perkembangan dan tuntutan aspirasi masyarakat yang semakin mendesak agar Kota Administratif Depok diangkat menjadi Kotamadya dengan harapan pelayanan menjadi maksimum. Disis lain Pemerintah Kabupaten Bogor bersama – sama Pemerintah Propinsi Jawa Barat memperhatikan perkembangan tesebut, dan mengusulkannya kepada Pemerintah Pusat dan Dewan Perwakilan Rakyat. Berdasarkan Undang – undang No. 15 tahun 1999, tentang pembentukan Kotamadya Daerah Tk. II Depok yang ditetapkan pada tanggal 20 April 1999, dan diresmikan tanggal 27 April 1999 berbarengan dengan Pelantikan Pejabat Walikotamadya Kepala Daerah Tk. II Depok yang dipercayakan kepada Drs. H. Badrul Kamal yang pada waktu itu menjabat sebagai Walikota Kota Administratif Depok. Momentum peresmian Kotamadya Daerah Tk. II Depok dan pelantikan pejabat Walikotamadya Kepala Daerah Tk. II Depok dapat dijadikan suatu landasan yang bersejarah dan tepat untuk dijadikan hari jadi Kota Depok.</p>

            <p class="lead">Berdasarkan Undang – undang nomor 15 tahun 1999 Wilayah Kota Depok meliputi wilayah Administratif Kota Depok, terdiri dari 3 (tiga) Kecamatan sebagaimana tersebut diatas ditambah dengan sebagian wilayah Kabupaten Daerah Tingkat II Bogor, yaitu :</p>
            <ul class="lead">
               <li>
                Kecamatan Cimanggis, yang terdiri dari 1 (satu) Kelurahan dan 12 (dua belas) Desa , yaitu : Kelurahan Cilangkap, Desa Pasir Gunung Selatan, Desa Tugu, Desa Mekarsari, Desa Cisalak Pasar, Desa Curug, Desa Hajarmukti, Desa Sukatani, Desa Sukamaju Baru, Desa Cijajar, Desa Cimpaeun, Desa Leuwinanggung.</li>
                <li>Kecamatan Sawangan, yang terdiri dari 14 (empat belas) Desa, yaitu : Desa Sawangan, Desa Sawangan Baru, Desa Cinangka, Desa Kedaung, Desa Serua, Desa Pondok Petir, Desa Curug, Desa Bojong Sari, Desa Bojong Sari Baru, Desa Duren Seribu, Desa Duren Mekar, Desa Pengasinan Desa Bedahan, Desa Pasir Putih</li>
                <li>Kecamatan Limo yang terdiri dari 8 (delapan) Desa, yaitu : Desa Limo, Desa Meruyung, Desa Cinere, Desa Gandul, Desa Pangkalan Jati, Desa Pangkalan Jati Baru, Desa Krukut, Desa Grogol.</li>
                <li>Dan ditambah 5 (lima) Desa dari Kecamatan Bojong Gede, yaitu : Desa Cipayung, Desa Cipayung Jaya, Desa Ratu Jaya, Desa Pondok Terong, Desa Pondok Jaya.</li>
            </ul>
            <p class="lead">Kota Depok selain merupakan Pusat Pemerintahan yang berbatasan langsung dengan Wilayah Daerah Khusus Ibu Kota Jakarta juga merupakan wilayah penyangga Ibu Kota Negara yang diarahkan untuk kota pemukiman , Kota Pendidikan, Pusat pelayanan perdagangan dan jasa, Kota pariwisata dan sebagai kota resapan air.</p>',
	            'image' => 'img/sekilas-depok/1.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Ikon Kota',
	            'slug' => 'ikon-kota',
	            'desc' => '<p>
                    Kota Depok terbentuk pada tahun 1999 berdasarkan UU No.15 Tahun 1999, dengan luas wilayah 20029 m²,
                    Meliputi 6 Kecamatan : Pancoran Mas, Beji, Sukmajaya, Limo, Sawangan, Cimanggis. Salah satu potensi
                    pertanian yang cukup potensial adalah Pertanaman Belimbing.
                </p>
                <p>
                    Belimbing Depok dikenal dengan Belimbing Dewa, Hasil buah karya petani penangkar Depok Bapak H.
                    Usman Mubin. Buah yang berwarna kuning-Orange keemasan, mengandung vitamin C dan A yang cukup
                    tinggi, buah besar dapat mencapai 0.8 Kg per buah, Rasa manis ditenggarai sebagi obat herbal penurun
                    darah tinggi/Hipertensi, Kencing Manis, Nyeri Lambung, dll, sangat Prospektif dikembangkan di kota
                    Depok dan kini telah menjadi buah unggulan kota Depok karena secara komparatif Buah Belimbing Dewa
                    Depok Lebih unggul dibandingkan buah belimbing yang lainnya yang ada di Indonesia. Hal ini diketahui
                    pada setiap Event Lomba Buah Unggul dan pameran-pameran buah Nasional serta Internasional, Buah
                    Belimbing Dewa ini lebih unggul dan selalu menjuarai sebagai buah unggul nasional versi Trubus.
                    Potensi pertanian Belimbing di Kota Depok Sampai Tahun 2006 Berjumlah 33.729 dengan total luas Areal
                    135 ha menyebar di wilayah kota Depok. Perkiraan Tanaman Belimbing yang sudah Produktif dengan umur
                    tanaman lebih dari 4 Tahun, Memiliki kapasitas produksi per tahun 100-150 Kg per pohon per tahun.
                    Tanaman produktif ini kurang lebih sekitar 27.500-28.000 pohon terdapat di Depok. Sehingga perkiraan
                    total produksi yang dihasilkan dari belimbing Depok berkisar antara 2.700 Ton sampai 3.000 Ton per
                    tahun, Sementara kapasitas Produksi Belimbing jika diterapkan budidaya sesuai SOP Belimbing Dewa,
                    diharapkan produktifitas per pohon dapat mencapai 300 kg per tahun dan jika diasumsikan harga per Kg
                    Belimbing Berkisar antara Rp 4.000 – Rp 6.000, maka Omzet penjualan belimbing setiap tahun berkisar
                    Rp 16 Miliar sampai 24 Miliar per tahun. Nilai yang cukup besar untuk suatu produk pertanian
                    perkotaan.</p>
                <p>
                    Pertanaman Belimbing di kota Depok banyak dikembangkan dilahan-lahan masyarakat dan uniknya banyak
                    juga dikembangkan disepanjang kali ciliwung, contohnya di kel. Pondok Cina, Kel. Tugu dan kelurahan
                    Kelapa Dua. Sehingga pemandangan sepanjang kali Ciliwung menjadi indah dan asri dengan keberadaan
                    tanaman belimbing ini, hal ini berpotensi menjadi kawasan Agrowisata Belimbing Depok di Sepanjang
                    DAS Ciliwung. Sesuatu potensi Sumber Daya Alam yang tak ternilai harganya, ditengah hiruk pikuknya
                    kemacetan jalan jalan di kota Depok.</p>
                <p>
                    Upaya lain dalam meningkatkan nilai tambah produk Belimbing adalah pengolahan produk. Walaupun usaha
                    pengolahan hortikultura di kota Depok masih minim, akan tetapi sosialisasi pelatihan di bidang
                    olahan untuk memotivasi pengusaha mikro dibidang pengolahan dalam memproduksi olahan hortikultura
                    khususnya buah-buahan menjadi minuman segar terus ditingkatkan. Kini mulai banyak pengusaha olahan
                    di kota Depok yang merintis untuk olahan produk holtikultura seperti buah belimbing dan jambu biji
                    merah diantaranya adalah Bapak Toni, Ibu Maria, Ibu Retno.
                </p>
                <p>
                    Toko Fresh e adalah salah satu toko buah segar di Jl. Margonda yang telah melakukan kemitraan dengan
                    Asosiasi Petani Belimbing Depok (APEBEDE) dalam pemasaran buah belimbing, jambu dll. Walaupun
                    kapasitas penerimaan produk masih rendah sekitar 15-20 Kg per minggu, akan tetapi perlu upaya
                    mempertahankan kemitraan ini. Sehingga Petani memiliki kemampuan untuk berkomitmen dengan pengusaha
                    Ritel Buah Segar yang selalu memenuhi 3 K (Kapasitas, Kontinuitas, dan Kualitas). PT Sewu segar
                    sebagai supplier buah belimbing untuk wilayah Jakarta dan Surabaya telah membantu pemasaran
                    Belimbing mencapai 1 Ton per bulan, dan kapasitasnya akan terus ditingkatkan sesuai peningkatan
                    hasil kualitas belimbing dari para petani kota Depok dan dalam upaya pemenuhan kualitas produk, para
                    petani mulai menerapkan SOP GAP Belimbing DEWA, hal ini juga dipicu dengan peluang pasar komoditas
                    ini masih cukup besar, karena keunggulan spesifik yang dimiliki belimbing Dewa Depok dan cukup
                    diminati konsumen. Peluang pasar Belimbing untuk kawasan Jabodetabek mencapai angka 6.000 Ton per
                    tahun.
                </p>
                <p>
                    Depok yang memiliki visi sebagai kota niaga dan jasa yang nyaman diharapkan menjadi daerah yang
                    nyaman bagi penduduknya. Kenyamanan tersebut salah satunya dengan tetap mempertahankan ruang terbuka
                    hijau dan potensi lahan pertanian Belimbing yang produktif menjadi salah satu pilihan dalam
                    mempertahankan ruang terbuka hijau perkotaan. (sesuai amanat UU Tata Ruang yaitu RTH perkotaan harus
                    memuat 30% dari total luas wilayah) sehingga kota Depok tetap memiliki komoditas unggulan yang
                    bernilai Kompetitif dan Komparatif khususnya komoditas hortikultura yang merupakan sumber daya lokal
                    (Base Resources) kota Depok yaitu BELIMBING. Keunggulan spesifik ini yang musti dilestarikan, dan
                    menjadi ICON kota, Sehingga di masa mendatang kota Depok tetap memiliki kebanggaan akan sumber daya
                    alam yang potensial dari pengembangan produk pertanian spesifik wilayah dan mendukung ruang terbuka
                    hijau kota Depok.
                </p>',
	            'image' => 'img/sekilas-depok/7.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Seni Budaya',
	            'slug' => 'seni-budaya',
	            'desc' => '<div class="display-5">Hymne dan Mars Kota Depok</div>
            	<p class="lead">Berdasarkan Keputusan Walikota Depok Nomor : 431/79/Kpts/HK/2004 tentang penetapan Hymne dan Mars Kota Depok karya cipta Hj.Rini Tjakraningrat S.Sargo sebagai Hymne dan Mars Pemerintah Kota Depok. Berikut ini adalah syair dari Hymne dan Mars Kota Depok.</p>',
	            'image' => 'images/seni-budaya.svg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Demografi',
	            'slug' => 'demografi',
	            'desc' => '<p class="lead">
                    Sebagai Kota yang berbatasan langsung dengan Ibukota Negara, Kota Depok menghadapi berbagai
                    permasalahan perkotaan, termasuk masalah kependudukan. Sebagai daerah penyangga Kota Jakarta, Kota
                    Depok mendapatkan tekanan migrasi penduduk yang cukup tinggi sebagai akibat dari meningkatnya jumlah
                    kawasan permukiman, pendidikan, perdagangan dan jasa.
                </p>
                <ul class="lead">
                    <li>Jumlah Penduduk</li>
                    Jumlah penduduk di Kota Depok semester II tahun 2016 yang telah dikonsolidasikan dan dibersihkan
                    oleh Kementerian Dalam Negeri mencapai 1.803.708 jiwa, terdiri atas laki-laki 913.359 jiwa (50,63%)
                    dan perempuan 890.349 jiwa (49,36%),

                    Kecamatan Sukmajaya merupakan kecamatan yang paling banyak penduduknya dibanding dengan kecamatan
                    lainnya di Kota Depok, yaitu 245.142 jiwa. Sedangkan kecamatan dengan penduduk terkecil adalah
                    Kecamatan Limo yaitu 86.147 jiwa.

                    Di tahun 2016 kepadatan penduduk Kota Depok mencapai 10.255 jiwa/km2. Kecamatan Sukmajaya merupakan
                    kecamatan terpadat di Kota Depok dengan tingkat kepadatan 15.063 jiwa/km2, kemudian Kecamatan
                    Pancoran Mas dengan tingkat kepadatan 13.522 jiwa/km2. Sedangkan kecamatan dengan kepadatan penduduk
                    terendah adalah Kecamatan Sawangan yaitu 5.580 jiwa/km2. (sumber : DDA 2015)
                    <li>Iklim</li>
                    Wilayah Depok termasuk dalam daerah beriklim tropis dengan perbedaan curah hujan yang cukup kecil
                    dan dipengaruhi oleh iklim musim. Secara umum musim kemarau antara bulan April-September dan musim
                    hujan antara bulan Oktober-Maret.
                    <ul>
                        <li>Temperatur : 24,3o-33 o Celsius</li>
                        <li>Kelembaban rata-rata : 25 %</li>
                        <li>Penguapan rata-rata : 3,9 mm/th</li>
                        <li>Kecepatan angin rata-rata : 14,5 knot</li>
                        <li>Penyinaran matahari rata-rata : 49,8 %</li>
                        <li>Jumlah curah hujan : 2684 m/th</li>
                        <li>Jumlah hari hujan : 222 hari/tahun</li>
                    </ul>
                </ul>',
	            'image' => 'img/karya_new_watermark/Umum_Alpha.png',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Geografi',
	            'slug' => 'geografi',
	            'desc' => '<p class="lead">
                    Secara geografis Kota Depok terletak pada koordinat 6o 19’ 00” – 6o 28’ 00” Lintang Selatan dan 106o
                    43’ 00” – 106o 55’ 30” Bujur Timur. Secara geografis, Kota Depok berbatasan langsung dengan Kota
                    Jakarta atau berada dalam lingkungan wilayah Jabotabek.

                    Bentang alam Kota Depok dari Selatan ke Utara merupakan daerah dataran rendah – perbukitan
                    bergelombang lemah, dengan elevasi antara 50 – 140 meter diatas permukaan laut dan kemiringan
                    lerengnya kurang dari 15%. Kota Depok sebagai wilayah termuda di Jawa Barat, mempunyai luas wilayah
                    sekitar 200,29 km2.

                    Kondisi geografisnya dialiri oleh sungai-sungai besar yaitu Sungai Ciliwung dan Cisadane serta 13
                    sub Satuan Wilayah Aliran Sungai. Disamping itu terdapat pula 25 situ. Data luas situ pada tahun
                    2005 sebesar 169,68 Ha, dengan kualitas air rata-rata buruk akibat tercemar.

                    Kondisi topografi berupa dataran rendah bergelombang dengan kemiringan lereng yang landai
                    menyebabkan masalah banjir di beberapa wilayah, terutama kawasan cekungan antara beberapa sungai
                    yang mengalir dari selatan menuju utara: Kali Angke, Sungai Ciliwung, Sungai Pesanggrahan dan Kali
                    Cikeas.
                </p>
                <ul class="lead">
                    <li>Sumber Daya Lahan</li>
                    <p> Sumber Daya Lahan Kota Depok mengalami tekanan sejalan dengan perkembangan kota yang sedemikian
                        pesat. Sebagaimana kita ketahui berdasarkan data analisis Revisi RTRW Kota Depok (2000-2010)
                        dalam pemanfaatan ruang kota, kawasan pemukiman pada tahun 2005 mencapai 8.915.09 ha (44,31%)
                        dari total pemanfaatan ruang Kota Depok.

                        Pada tahun 2005 kawasan terbuka hijau tercatat 10.106,14 ha (50,23%) dari luas wilayah Depok
                        atau terjadi penyusutan sebesar 0,93 % dari data tahun 2000. Meningkatnya tutupan permukaan
                        tanah, berdampak terhadap penurunan kondisi alam Kota Depok, terutama disebabkan tekanan dari
                        pemanfaatan lahan untuk kegiatan pemukiman yang mencapai lebih dari 44,31 % dari luas wilayah
                        kota. Sementara luas kawasan terbangun tahun 2005 mencapai 10.013,86 ha (49,77%) dari luas
                        wilayah Kota Depok atau meningkat 3,59 % dari data tahun 2000.

                        Luas kawasan terbangun sampai dengan tahun 2010 diproyeksikan mencapai 10.720,59 ha (53,28%)
                        atau meningkat 3,63 % dari data tahun 2005. Sementara luas ruang terbuka (hijau) pada tahun 2010
                        diproyeksikan seluas 9.399,41 ha (46,72%) atau menyusut 3,63 % dari tahun 2005.

                        Diprediksikan pada tahun 2010, dari 53,28% total luas kawasan terbangun, hampir 45,49% akan
                        tertutup oleh perumahan dan perkampungan. Jasa dan perdagangan akan menutupi 2,96% total luas
                        kota, industri 2,08% total luas kota, pendidikan tinggi 1,49% total luas kota, dan kawasan
                        khusus 1,27% total luas kota. Meningkatnya jumlah tutupan permukaan tanah tersebut, ditambah
                        dengan berubahnya fungsi saluran irigasi menjadi saluran drainase, diprediksikan akan
                        menyebabkan terjadinya genangan dan banjir di beberapa kawasan, yang berdampak terhadap
                        penurunan kondisi Kota Depok.

                        Diperkirakan pembangunan pertanian tanaman pangan di Kota Depok di masa yang akan datang akan
                        menghadapi suatu kondisi, dimana lahan sawah yang semakin menyempit. Pada tahun 2010
                        diperkirakan lahan sawah akan mengecil bila dibandingkan kondisi sekarang. Penyempitan yang
                        paling parah terjadi pada lahan sawah tadah hujan, disusul sawah irigasi sederhana PU. </p>
                    <li>Sumber Daya Air</li>
                    <p> Sumber Daya Air yang ada terdiri dari dua sumber yaitu sungai dan situ. Secara umum
                        sungai-sungai di Kota Depok termasuk kedalam dua Satuan Wilayah Sungai besar, yaitu sungai
                        Ciliwung dan Cisadane. Selanjutnya sungai-sungai tersebut dibagi menjadi 13 Satuan Wilayah
                        Aliran Sungai, yaitu sungai Ciliwung, Kali Baru, Pesanggrahan, Angke, Sugutamu, Cipinang,
                        Cijantung, Sunter, Krukut, Saluran Cabang Barat, Saluran Cabang Tengah dan sungai Caringin.

                        Kota Depok memiliki 25 situ yang tersebar di wilayah Timur, Barat dan Tengah. Luas keseluruhan
                        situ yang ada di Kota Depok berdasarkan data tahun 2005 adalah seluas 169,68 Ha1), atau sekitar
                        0,84 % luas Kota Depok. Kedalaman situ-situ bervariasi antara 1 sampai 4 meter, dengan kualitas
                        air yang paling buruk terdapat pada Situ Gadog dan Rawa Besar. Selain penurunan kualitas air,
                        kawasan situ juga mengalami degradasi luasan.

                        Pembangunan perikanan di Kota Depok juga menghadapi masalah yang sama dengan pertanian tanaman
                        pangan, yaitu penyempitan lahan air kolam. Berdasarkan data tahun 2005, luas areal air kolam
                        adalah 242,21 ha dibandingkan pada tahun 2000 seluas 290,54 ha. </p>
                </ul>',
	            'image' => 'img/karya_new_watermark/Umum_SMK_PGRI_2_DEPOK.png',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Visi dan Misi',
	            'slug' => 'visi-misi',
	            'desc' => '<h6 class="h6 pb-5">Periode 2016-2021</h6>
        <div class="row pb-5">
           <div class="col-12">
               <h5 class="h5">Visi Kota Depok</h5>
               <p class="lead">"Kota Depok yang Unggul, Nyaman dan Religius"</p>
               <h5 class="h5">Misi Kota Depok</h5>
               <ol class="lead" type="1">
                  <li>Meningkatkan kualitas Pelayanan Publik yang Profesional dan Transparan.</li>
                  <li>Mengembangkan Sumber Daya Manusia yang Religius, Kreatif dan Berdaya Saing.</li>
                  <li>Mengembangkan Ekonomi yang Mandiri, Kokoh dan Berkeadilan berbasis Ekonomi Kreatif.</li>
                  <li>Membangun Infrastruktur dan Ruang Publik yang Merata, Berwawasan Lingkungan dan Ramah Keluarga.</li>
                  <li>Meningkatkan Kesadaran Masyarakat dalam melaksanakan Nilai-nilai Agama dan menjaga Kerukunan antar Umat Beragama serta meningkatkan Kesadaran Hidup Berbangsa dan Bernegara.</li>
               </ol>',
	            'image' => 'img/karya_new_watermark/Umum_Designer_Ngaret.png',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Struktur Daerah',
	            'slug' => 'struktur-daerah',
	            'desc' => '<div class="row pb-5">
            <div class="col-12">
                <p class="lead mb-4">
                    Struktur Organisasi Perangkat Daerah Kota Depok berdasarkan Peraturan Daerah Kota Depok Nomor 19
                    Tahun 2012 Tentang Perubahan Ketiga atas Peraturan Daerah Kota Depok Nomor 08 Tahun 2008 Tentang
                    Organisasi Perangkat Daerah yang disahkan pada tanggal 21 Desember 2012 adalah sebagai berikut :
                </p>
                <p class="lead">
                    Dengan disahkannya Perda tersebut, struktur Badan Kepegawaian Daerah mengalami perubahan dari 3
                    (tiga) bidang, yaitu Bidang Pendidikan Latihan dan pengembangan Karir, Bidang Umum Kepegawaian, dan
                    Bidang Mutasi, menjadi 4 (empat) bidang, yaitu Bidang Data dan Administrasi Kepegawaian, Bidang
                    Pendidikan dan Pelatihan, Bidang Pengembangan Karir, dan Bidang Pembinaan dan Disiplin Pegawai.
                    Kantor Kesatuan Bangsa, Politik dan Perlindungan Masyarakat mengalami perubahan nomenklatur menjadi
                    Kantor Kesatuan Bangsa dan Politik seiring dengan dialihkannya Seksi Perlindungan Masyarakat ke
                    dalam struktur organisasi Satuan Polisi Pamong Praja. Sedangkan Badan Pemberdayaan Perempuan dan
                    Keluarga Berencana serta Kantor Pemberdayaan Masyarakat dan Ketahanan Pangan dilebur menjadi Badan
                    Pemberdayaan Masyarakat dan Keluarga.
                </p>
                <p class="lead">
                    Lebih lengkap, OPD yang mengalami perubahan struktur sebagaimana tercantum dalam lampiran Perda Kota
                    Depok No 19 TH. 2012 adalah:
                </p>
                <ol class="lead pb-5" type="1">
                    <li>Sekretariat DPRD</li>
                    <li>Satuan Polisi Pamong Praja Type A</li>
                    <li>Dinas Tata Ruang dan Pemukiman</li>
                    <li>Badan Perencanaan Pembangunan Daerah</li>
                    <li>Inspektorat</li>
                    <li>Badan Lingkungan Hidup</li>
                    <li>Badan Kepegawaian Daerah</li>
                    <li>Badan Pemberdayaan Masyarakat dan Keluarga</li>
                    <li>Badan Pemberdayaan Masyarakat dan Keluarga</li>
                </ol>
            </div>
        </div>',
	            'image' => 'img/karya_new_watermark/Umum_141.png',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Perundang-Undangan',
	            'slug' => 'perundang-undangan',
	            'desc' => '',
	            'image' => 'img/karya_new_watermark/Umum_141.png',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Penghargaan',
	            'slug' => 'penghargaan',
	            'desc' => '<div class="col-12 text-justify">
                <p class="lead">
                    Depok sebagai kota dengan ikon kota belimbing sepanjang tahun 2014 – 2017 memiliki berbagai prestasi
                    dan penghargaan sebagai berikut :
                </p>
                <p class="lead">Tahun 2019</p>
                <ul class="lead">
                    <li>Pemerintah Kota Depok Meraih Penghargaan Kinerja Pengurangan Sampah Tahun 2018, dari Menteri Lingkungan Hidup dan Kehutanan RI.</li>
                    <li>Pemerintah Kota Depok Meraih PEnghargaan Peringkat Pertama se- Provinsi Jawa Barat dalam Koordinasi dan Supervisi Pencegahan Korupsi (Korsupgah) Tahun 2018 oleh
                        Komisi Pemberantasan Korupsi (KPK) dengan nilai 84 persen berdasarkan Penilaian Enam Indikator Kinerja Aparatur Sipil Negara (ASN)</li>
                    <li>Pemerintah Kota Depok Meraih Penghargaan dari Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi, atas prestasi dalam Akuntabilitas Kinerja Tahun
                        2018 dengan Predikat Nilai B, 28 Februari 2019</li>
                    <li>Pemerintah Kota Depok Meraih Penghargaan Earth Hour Leaders Award kepada Wali Kota Depok sebagai Kepala Daerah yang Peduli Lingkungan dan Bijak Energi Tingkat
                        Provinsi Jawa Barat Tahun 2019, 28 Maret 2019</li>
                    <li>Pemerintah Kota Depok Meraih Penghargaan Indonesia Visionary Leader kategori Certificate of Visionary Leader Presentation kepada Wali Kota Depok dari SINDO bekerjasama dengan Kementerian Dalam Negeri RI, 29 Maret 2019</li>
                    <li>Pemerintah Kota Depok Meraih Penghargaan Pembangunan Daerah Kategori Dokumen Perencanaan Kota Terbaik Tingkat Provinsi Jawa Barat Tahun 2019, dengan meraih Peringkat Terbaik I, 1 April 2019</li>
                    <li>Pemerintah Kota Depok Meraih Penghargaan Opini Wajar Tanpa Pengecualian (WTP) dari Badan Pemeriksa Keuangan (BPK) Provinsi Jawa Barat, atas Laporan Keuangan Pemerintah Daerah Tahun Anggaran 2018, 28 Mei 2019.</li>
                </ul>
                <p class="lead">Tahun 2018</p>
                <ul class="lead">
                    <li>Badan Perencaaan Pembangunan, Penelitian, dan Pengembangan Daerah Kota Depok Mendapatkan Penghargaan Terbaik II Dalam rangka Pembangunan Daerah Tingkat Provinsi
                        Jawa Barat Tahun 2018</li>
                        <li>TP PKK Kota Depok Meraih - Juara I Lingkungan Bersih dan Sehat (LBS) Kelurahan Mekarjaya</li>
                        <li>Badan Keuangan Daerah Kota Depok Mendapatkan Penghargaan Capaian Standar Tertinggi dalam Akuntansi dan Pelaporan Keuangan Pemerintah 
                            (Wajar Tanpa Pengecualian/WTP). Tingkat Badan Pemeriksa Keuangan/ BPK</li>
                        <li>Hj. Elly Farida (Ketua TP PKK Kota Depok) Mendapatkan Penghargaan atas Prestasi yang Menonjol dan komitmen serta Kepemimpinannya dalam Menggerakkan Program
                            Kependudukan, Keluarga Berencana dan Pembangunan Keluarga untuk Mewujudkan Keluarga Kecil Bahagia Sejahtera</li>
                        <li>Dinas Lingkungan Hidup dan Kebersihan Kota Depok Meraih Penghargaan Juara II Kategori Kab/Kota Penyusun Terbaik Dokumen Informasi Kinerja Pengelolaan
                            Lingkungan Hidup Daerah (DIKPLHD) Tahun 2017</li>
                        <li>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Depok Mendapatkan Penghargaan Kota Potensial Sektor Pelayanan Publik</li>
                </ul>
                <p class="lead">Tahun 2017</p>
                <ul class="lead">
                    <li>Depok Meraih Penghargaan Anugerah Pangripta Nusantara (APN) dari dua kategori yaitu kategori
                        penghargaan dokumen perencanaan terbaik dan Kategori Penghargaan inovasi terbaik.</li>
                    <li>Depok Menerima Penghargaan Tanda Kehormatan Presiden RI yaitu Anugerah Parasamya dan
                        Satyalencana atau Kinerja tertinggi dalam penyelenggaraan pemerintah daerah.</li>
                    <li>Dinas Ketahanan Pangan, Pertanian dan Perikanan Kota Depok Mendapatkan Pengharagaan 
                        Kota Terbaik untuk kategori Peduli Ketahanan Pangan, Tingkat Nasional.</li>
                    <li>Badan Perencaaan Pembangunan, Penelitian, dan Pengembangan Daerah Kota Depok Mendapatkan Penghargaan 
                        Terbaik I untuk kategori Dokumen Perencanaan, Penyusunan Rencana Kerja Pemerintah Daerah (RKPD).</li>
                    <li>Badan Perencaaan Pembangunan, Penelitian, dan Pengembangan Daerah Kota Depok Meraih Penghargaan 
                        Terbaik III untuk kategori Inovasi Penyusunan Rencana Kerja Pemerintah Daerah (RKPD).</li>
                    <li>Depok Mendapatkan Penghargaan Prestasi Kinerja Tertinggi, Penyelenggaraan Pemerintahan Daerah Berdasarkan 
                        Laporan Penyelenggaraan Pemerintahan Daerah (LPPD), Tingkat Kementerian Dalam Negeri RI</li>
                    <li>Badan Keuangan Daerah Kota Depok Mendapatkan Penghargaan yang keenam kalinya secara berturut-turut, 
                        Capaian Standar Tertinggi dalam Akuntansi dan Pelaporan Keuangan Pemerintah (Wajar Tanpa Pengecualian/WTP), Tingkat Nasional (Badan Pemeriksa Keuangan/ BPK)</li>
                    <li>Dinas Perlindungan Anak, Pemberdayaan Masyarakat dan Keluarga Kota Depok Mendapatkan Penghargaan Pelaksana 
                        Terbaik III dalam Lomba Kesatuan Gerak (Kesrak) PKK-KB-Kes dan Lingkungan Bersih Sehat (LBS) Tingkat Nasional Tahun 2017, Tingkat Nasional.</li>
                    <li>Dinas Perlindungan Anak, Pemberdayaan Masyarakat dan Keluarga Kota Depok Meraih 
                        Penghargaan Kota Layak Anak, Kategori NINDYA, Tingkat Nasional (Kementerian Pemberdayaan Perempuan dan Perlindungan Anak RI)</li>
                    <li>Dinas Lingkungan Hidup dan Kebersihan (DLHK) Kota Depok Menerima Penghargaan Kepala Daerah Inovatif 2017, 
                        Kategori Lingkungan Hidup, Tingkat Koran Sindo.</li>
                    <li>Dinas Lingkungan Hidup dan Kebersihan Kota Depok Meraih Penghargaan yang diberikan pemerintah kepada Walikota/Bupati berprestasi dan kepemimpinan dalam mewujudkan
                        kota yang bersih, hijau, sehat dan berkelanjutan. Tingkat Nasional (Kementerian Lingkungan Hidup dan Kehutanan RI)</li>
                    <li>Depok Meraih Penghargaan dalam Penyelenggaraan Pemerintahan Daerah Berdasarkan Laporan Penyelenggaraan Pemerintah Daerah (LPPD)</li>
                    <li>UPT LPSE Diskominfo Kota Depok Meraih Juara II Lomba Inovasi LPSE Kategori Inovasi LPSE se- Provinsi Jawa Barat</li>
                    <li>Depok Meraih Penghargaan atas Capaian Opini Wajar Tanpa Pengecualian untuk Laporan Keuangan Pemerintah Daerah Kota Depok.</li>
                    <li>Depok Meraih Penghargaan dari Rektor Universitas Indonesia, Atas Dukungan Terhadap Portal Pusat Informasi Usaha Mikro Kecil dan Menengah (UMKM) yang digagas Lembaga
                        Penyelidikan Ekonomi  dan Masyarakat UI.</li>
                    <li>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Depok, meraih penghargaan Kota berpotensi besar untuk menarik investor dan pelaku bisnis dalam memajukan
                        perekonomian daerah, Tingkat Nasional.</li>
                    <li>Bagian Hukum Setda Kota Depok Meraih Penghargaan atas jasa-jasa dalam membina dan mengembangkan Kelurahan Sadar Hukum dalam wilayah Kota Depok.</li>
                    <li>Dinas Kesehatan Kota Depok Meraih Penghargaan Kota Depok dinilai berhasil meminimalisir penularan penyakit kaki gajah (filariasis) melalui gerakan masyarakat minum
                        obat bersama untuk keluarga Indonesia bebas kaki gajah</li>
                    <li>Badan Keuangan Daerah Kota Depok Mendapatkan Penghargaan Atas Keberhasilan Menyusun dan Menyajikan 
                        Laporan Keuangan Tahun 2016 dengan Capaian Standar Tertinggi.</li>
                    <li>Dinas Komunikasi dan Informatika Kota Depok Meraih Penghargaan TOP IT Implementation on Public Service 2017 </li>
                    <li>Walikota Depok Meraih Penghargaan TOP Leader in IT Leadership 2017</li>
                    <li>Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah serta Dinas Perumahan dan Permukiman mendapatkan Penghargaan Kategori Penghargaan “Komitmen
                        Pemerintah Daerah dalam Pengelolaan Air Limbah”</li>
                    <li>Pemerintah Kota Depok Mendapatkan Penghargaan sKhusus sebagai Pemerintah Daerah dengan Kinerja dan Tata Kelola Baik</li>
                    <li>Dinas Koperasi dan Usaha Mikro Mendapatkan Penghargaan atas Dedikasi Pemerintah Kota Depok dalam Membina dan Mengembangkan Pelaku UMKM </li>
                    <li>Dinas Kesehatan Kota Depok Meraih Penghargaan Depok Kota Sehat Nasional (Kementerian Kesehatan RI)</li>
                    <li>Badan Keuangan Daerah Kota Depok Meraih Penghargaan untuk Daerah Berkinerja Baik (Pengelolaan Keuangan Daerah - Pelayanan Dasar Publik - Kesejahteraan Masyarakat –
                        Pelayanan Pemerintahan Umum)</li>
                    <li>Dinas Kesehatan Mendapatkan Penghargaan terkait Pelayanan Kesehatan</li>
                    <li>Dinas Perhubungan Mendapatkan Penghargaan atas keberhasilan mengikuti Penilaian Kinerja Penyelenggaraan Sistem Transportasi Kategori Kota Raya Tahun 2017</li>
                    <li>Walikota Depok Meraih Penghargaan yang diberikan kepada Walikota Depok atas kepeduliannya terhadap revitalisasi posyandu di Kota Depok</li>
                    <li>TP PKK Kota Depok Mendapatkan Penghargaan yang diberikan kepada Hj. Elly Farida selaku Ketua TP PKK Kota Depok dalam upaya terbaiknya memberikan pembinaan dan
                        pendampingan terhadap program P2WKSS</li>
                    <li>Dinas Perlindungan Anak, Pemberdayaan Masyarakat dan Keluarga (DPAPMK) Mendapatkan Penghargaan Juara 1 Lomba Posyandu Terbaik Kategori Kota</li>
                    <li>Dinas Perlindungan Anak, Pemberdayaan Masyarakat dan Keluarga (DPAPMK) Mendapatkan Penghargaan Kota Depok Juara 1 P2WKSS Kampung Ramah Anak Kategori Kelurahan</li>
                </ul>
                <p class="lead">Tahun 2016</p>
                <ul class="lead">
                    <li>Depok mendapatkan penghargaan sebagai kota peduli HAM.</li>
                    <li>Depok meraih penghargaan Anugerah Parahita Ekapraya</li>
                    <li>Depok Menerima Penghargaan Bhumandala Award 2016</li>
                    <li>Depok menerima penghargaan Adhyasta Bhumi Pura dari Menkumham</li>
                    <li>Meraih Penghargaan PNS teladan Pemerintah Kabupaten/Kota Kategori Pejabat Struktural Eselon III</li>
                    <li>Meraih Penghargaan Kepegawaian yang Bermutu, Akuntabel, Inovatif, dan Kreatif (BAIK) kategori
                        cluster III untuk BKD Kota Depok</li>
                    <li>Dinas Perhubungan Kota Depok mendapatkan Penghargaan atas keberhasilan mengikuti Penilaian Kinerja Penyelenggaraan Sistem Transportasi Perkotaan Tahun 2016 Dari
                        Kementrian Perhubungan RI</li>
                    <li>Dinas Perhubungan Kota Depok Meraih Penghargaan atas keberhasilan mengikuti Penilaian Kinerja Penyelenggaraan Sistem Transportasi Perkotaan Tahun 2016.</li>
                    <li>Bagian Hukum Setda Kota Depok Meraih Penghargaan atas upaya membina dan mengembangkan Kota Depok menjadi kota yang peduli Hak Asasi Manusia (HAM) 
                        pada tahun 2015.</li>
                    <li>UPT Pasar Sukatani Kota Depok Mendapatkan Penghargaan Pasar telah memenuhi Standar Nasional Indonesia (SNI) dari Kementerian Perdagangan RI</li>
                    <li>Bagian Hukum Setda Kota Depok Mendapatkan Penghargaan atas jasa-jasa dalam membina dan mengembangkan Kelurahan Sadar Hukum dalam wilayah Kota Depok, Dari
                        Kementerian Hukum dan HAM RI</li>
                    <li>Dinas Komunikasi dan Informatika Kota Depok Meraih Penghargaan Juara Umum 1 Keterbukaan Informasi Publik, Tingkat Provinsi Jawa Barat</li>
                    <li>Inspektorat Kota Depok Meraih Penghargaan Predikat Kepatuhan Tinggi terhadap Standar Pelayanan Publik sesuai Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan
                        Publik. Tingkat Ombudsman RI</li>
                    <li>Dinas Komunikasi dan Informatika Meraih Penghargaan Juara Satu Terbaik Simpul Jaringan Informasi Geospasial Katagori Kota.</li>
                    <li>Pemerintah Kota Depok Meraih Penghargaan Kota berpotensi besar untuk menarik investor dan pelaku bisnis dalam memajukan perekonomian daerah.</li>
                    <li>Wali Kota Depok (K.H. Dr. Mohammad Idris, MA) Meraih Penghargaan Atas Dukungan Pembentukan Tim Pengawasan Orang Asing Tingkat Kecamatan Wilayah Kota Depok. Tingkat
                        Kementerian Hukum dan HAM RI</li>
                    <li>Dinas Pendapatan, Pengelolaan Keuangan dan Aset (DPPKA) Kota Depok Meraih Penghargaan Kategori Kota Terbaik Tingkat Provinsi Jawa Barat</li>
                    <li>Dinas Pendapatan, Pengelolaan Keuangan dan Aset (DPPKA) Kota Depok Meraih Penghargaan Capaian Standar Tertinggi dalam Akuntansi dan Pelaporan Keuangan Pemerintah
                    (Wajar Tanpa Pengecualian/WTP). Tingkat Badan Pemeriksa Keuangan/ BPK</li>
                    <li>Pemerintah Kota Depok Mendapatkan Penghargaan Penyelenggaraan Pemerintahan Daerah Tingkat Kementerian Dalam Negeri RI</li>
                    <li>Badan Perencanaan Pembangunan Daerah (Bappeda) Kota Depok Meraih Penghargaan Kategori Kota Terbaik I Tingkat Provinsi Jawa Barat</li>
                    <li>Badan Perencanaan Pembangunan Daerah (Bappeda) Kota Depok Meraih Penghargaan Kategori Terbaik II Dokumen RKPD 2016 Terbaik</li>
                    <li>Dinas Pemadam Kebakaran Kota Depok Meraih Penghargaan Atas prestasi kinerja yang dicapai dalam pencegahan, dan penanggulangan kebakaran bangunan gedung publik, pemukiman penduduk, pabrik/industri dengan prinsip tata kelola pemerintahan yang baik dan pengurangan risiko kebakaran. Tingkat Kementerian Dalam Negeri RI</li>
                </ul>
                <p class="lead">Tahun 2015</p>
                <ul class="lead">
                    <li>Meraih penghargaan Adiwiyata untuk 16 sekolah di Kota Depok.</li>
                    <li>Depok meraih penghargaan kategori Daerah Berpretasi Tinggi dalam Pencegahan Kebakaran Bangunan
                        Gedung, dan Pemukiman tahun 2015.</li>
                    <li>Meraih Penghargaan Kota Layak Anak kategori madya</li>
                    <li>Depok meraih Penghargaan Anubhawa Sasana Kelurahan 2015 oleh Kementerian Hukum dan HAM.</li>
                    <li>Depok mendapatkan penghargaan Sertifikat Adipura 2015 dari Kementerian Lingkungan Hidup dan
                        Kehutanan.</li>
                    <li>LPSE Depok meraih penghargaan terbaik kedua se Jawa Barat dari Pemerintah Provinsi Jawa Barat
                        pada acara Kominfo Awards Jawa Barat.</li>
                    <li>Pemerintah Kota Depok Mendapatkan Penghargaan Terbaik Kedua dalam penyelenggaraan LPSE dan Komunitas Terbaik Ketiga untuk Depok Cyber City</li>
                    <li>Pemerintah Kota Depok Mendapatkan Penghargaan 15 Sekolah di Depok berbasis lingkungan</li>
                    <li>Dinas Keehatan Kota Depok Mendapatkan Penghargaan Depok Kota Sehat (Memenuhi 2 dari 9 Tatanan Kesehatan kawasan, yaitu permukiman, sarana prasarana umum yang sehat dan tatanan kehidupan masyarakat yang sehat mandiri).</li>
                    <li>Pemerintah Kota Depok Mendapatkan Penghargaan Penganugerahan Inovasi Administrasi Negara
                        (Walikota Pendukung Proyek Perubahan Diklat Kepemimpinan LAN RI)</li>
                        <li>Pemerintah Kota Depok Mendapatkan Penghargaan atas jasa-jasa dalam membina dan mengembangkan Kelurahan Sadar Hukum dalam wilayah Kota Depok</li>
                </ul>
                <p class="lead">Tahun 2014</p>
                <ul class="lead">
                    <li>Mendapat penghargaan Upakarti kategori Jasa Kepedulian melalui pembinaan terhadap industry kecil
                        dan menengah.</li>
                    <li>Pelopor ketahanan pangan dalam rangka Peringatan Hari Pangan Sedunia (HPS).</li>
                    <li>Meraih Anugerah Peduli Pendidikan tahun 2014.</li>
                    <li>Meraih Parasamya Purnakarya Nugraha, penghargaan tertinggi di bidang pemerintahan daerah.</li>
                    <li>Meraih Satya Lancana Karya Bhakti Praja Nugraha.</li>
                    <li>Meraih Anugerah Revitalisasi Posyandu.</li>
                    <li>Menerima penghargaan sebagai Kota Penyelenggara Manajemen Kepegawaian yang bermutu, akuntabel,
                        inovatif dan kreatif (BAIK).</li>
                    <li>Laporan keuangan Pemda Kota Depok mendapat opini Wajar Tanpa Pengecualian (WTP) dari Badan
                        Pemeriksa Keuangan (BPK).</li>
                    <li>Predikat Kota Cerdas untuk kategori penduduk diatas 1 juta orang dari ITB bekerjasama dengan
                        koran harian Kompas.</li>

                </ul>
            </div>',
	            'image' => 'img/karya_new_watermark/Umum_141.png',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Dinas',
	            'slug' => 'dinas',
	            'desc' => '<div class="col-12">
                <ul class="list lead">
                    <li>Dinas Pendidikan/Disdik (Gedung Dibaleka II Komplek Balaikota Depok Lantai 4, Jl. Margonda Raya
                        No. 54 Depok, Telp./Fax. (021) 29402287, Email : disdik@depok.go.id / ppid.disdik@gmail.com)
                        <a target="_blank" href="https://disdik.depok.go.id/">disdik.depok.go.id</a>
                    </li>
                    <li>Dinas Kependudukan dan Pencatatan Sipil/Disdukcapil ( Gedung Dibaleka II Komplek Balaikota Depok
                        Lantai 2, Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402262 )
                        <!-- <a target="_blank" href="https://disdik.depok.go.id/">website</a>  -->
                    </li>
                    <li>Dinas Kesehatan/Dinkes (Gedung Dibaleka II Kompleks Balaikota Depok Lantai 3, Jl. Margonda Raya
                        No. 54 Depok, Telp.(021) 29402281, Email : dinkes@depok.go.id)
                        <a target="_blank" href="http://dinkes.depok.go.id/">dinkes.depok.go.id</a>
                    </li>
                    <li>Dinas Pemuda, Olah Raga, Kebudayaan dan Pariwisata/Disporyata (Gedung Dibaleka II Komplek
                        Balaikota Depok Lantai 9, Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402271 )
                        <a target="_blank" href="http://disporyata.depok.go.id/">disporyata.depok.go.id</a>
                    </li>
                    <li>Dinas Lingkungan Hidup dan Kebersihan/DLHK (Jl. Raya Jakarta Bogor Km. 34,5 Tapos Depok, Telp/
                        Fax (021) 87746031)
                        <a target="_blank" href="https://dlhk.depok.go.id/">dlhk.depok.go.id</a>
                    </li>
                    <li>Dinas Perumahan dan Permukiman/Rumkim (Gedung Dibaleka II Komplek Balaikota Depok Lantai 5, Jl.
                        Margonda Raya No. 54 Depok, Telp.(021) 29402293, Email : rumkim@depok.go.id)
                        <a target="_blank" href="http://rumkim.depok.go.id/">rumkim.depok.go.id</a>
                    </li>
                    <li>Dinas Tenaga Kerja/Disnaker (Gedung Dibaleka II Komplek Balaikota Depok Lantai 8, Jl. Margonda
                        Raya No. 54 Depok, Telp.(021) 29402280)
                        <a target="_blank" href="https://disnaker.depok.go.id/">disnaker.depok.go.id</a>
                    </li>
                    <li>Dinas Pekerjaan Umum dan Penataan Ruang/PUPR (Jl. Raya Jakarta Bogor Km. 34,5 Tapos, Depok,
                        Telp.(021) 87743196)
                        <a target="_blank" href="https://dpupr.depok.go.id/">dpupr.depok.go.id</a>
                    </li>
                    <li>Dinas Pemadam Kebakaran dan Penyelamatan (Jl. Boulevard Kota Kembang, Telp. (021) 77827280)
                        <a target="_blank" href="https://damkar.depok.go.id/">damkar.depok.go.id</a>
                    </li>
                    <li>Dinas Koperasi dan Usaha Mikro/DKUM (Gedung Dibaleka II Komplek Balaikota Depok Lantai 7, Jl.
                        Margonda Raya No. 54 Depok, Telp.(021) 29402268 )
                        <a target="_blank" href="http://dkum.depok.go.id/index.php/welcome/home">dkum.depok.go.id</a>
                    </li>
                    <li>Badan Keuangan Daerah/BKD (Jl. Margonda Raya No. 54 Depok, Telp.(021) 77217366 / 77217364,
                        Email: dppka_kotadepok@depok.go.id )
                        <a target="_blank" href="https://bkd.depok.go.id/">bkd.depok.go.id</a>
                    </li>
                    <li>Dinas Perdagangan dan Perindustrian/Disperdagin (Gedung Dibaleka II Komplek Balaikota Depok
                        Lantai 6, Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402273)
                        <a target="_blank" href="http://disperdagin.depok.go.id/">disperdagin.depok.go.id</a>
                    </li>
                    <li>Dinas Ketahanan Pangan, Pertanian dan Perikanan/DKPPP (Jl. Margonda Raya No. 144 Depok,
                        Telp.(021) 7752737 / 77206784)
                        <a target="_blank" href="http://dkppp.depok.go.id/">dkppp.depok.go.id</a>
                    </li>
                    <li>Dinas Perhubungan/Dishub (Jalan Raya Jatimulya, Kelurahan Jatimulya Rt/Rw 03/03 Cilodong Depok
                        16414 Telp.(021) 29230770)
                        <a target="_blank" href="https://dishub.depok.go.id/">dishub.depok.go.id</a>
                    </li>
                    <li>Dinas Komunikasi dan Informatika/Diskominfo (Gedung Dibaleka II Komplek Balaikota Depok Lantai
                        7, Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402276 dan (021) 7764410, Email :
                        diskominfo@depok.go.id)
                        <a target="_blank" href="https://diskominfo.depok.go.id/">diskominfo.depok.go.id</a>
                    </li>
                    <li>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu/DPMPTSP ( Gedung Dibale 1 Komplek
                        Balaikota Depok, Jl. Margonda Raya No. 54 Kota Depok 16431 Telp. 021-7721 7360 – 7721 7361, Fax:
                        021-7721 7362)
                        <a target="_blank" href="https://dpmptsp.depok.go.id/">dpmptsp.depok.go.id</a>
                    </li>
                    <li>Dinas Perlindungan Anak, Pemberdayaan Masyarakat dan Keluarga (Gedung Dibaleka II Kompleks
                        Balaikota Depok Lantai 9, Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402286)
                        <a target="_blank" href="http://dpapmk.depok.go.id/">dpapmk.depok.go.id</a>
                    </li>
                    <li>Dinas Sosial ( Gedung Dibaleka II Komplek Balaikota Depok Lantai 6, Jl. Margonda Raya No. 54
                        Depok, Telp.(021) 29402264)
                        <a target="_blank" href="http://dinsos.depok.go.id/">dinsos.depok.go.id</a>
                    </li>
                    <li>Dinas Kearsipan dan Perpustakaan (Jl. Margonda Raya No. 54 Depok, Telp.(021) 7720 4210)
                        <a target="_blank" href="https://kap.depok.go.id/beta/">kap.depok.go.id</a>
                    </li>
                </ul>
                <h1 class="display-5 py-4">OPD Lembaga Teknis</h1>
                <ul class="list lead">
                    <li>Badan Perencanaan Pembangunan dan Penelitian Pengembangan Daerah (Gedung Dibale 1 Komplek
                        Balaikota Depok, Jl. Margonda Raya No. 54 Depok, Telp.(021) 7759869
                        <a target="_blank" href="https://bappeda.depok.go.id/">bappeda.depok.go.id</a>
                    </li>
                    <li>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia/BKPSDM (Gedung Dibaleka II Komplek
                        Balaikota Depok Lantai 8, Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402279)
                        <a target="_blank" href="https://bkpsdm.depok.go.id/">bkpsdm.depok.go.id</a>
                    </li>
                    <li>Inspektorat Daerah (Gedung Dibaleka 1 Komplek Balaikota Depok, Jl. Margonda Raya No. 54 Depok,
                        Telp. (021) 77205330 – 77216945)
                        <a target="_blank" href="https://inspektorat.depok.go.id/">inspektorat.depok.go.id</a>
                    </li>
                    <li>Kantor Kesatuan Bangsa dan Politik (Kesbangpol) (Gedung Dibale 1 lantai 4 Komplek Balaikota
                        Depok, Jl. Margonda Raya No. 54 Kota Depok 16431)
                        <a target="_blank" href="https://kesbangpol.depok.go.id/">kesbangpol.depok.go.id</a>
                    </li>
                    <li>Rumah Sakit Umum Daerah (RSUD Depok) (Jl. Raya Muchtar No.99 Kelurahan Sawangan Kecamatan
                        Sawangan Depok, Jawa Barat P.O. Box 92839 Telpon : 0251-71691899/0251-8602514 Fax. 0251-8602534
                        )
                        <a target="_blank" href="https://rsud.depok.go.id/">rsud.depok.go.id</a>
                    </li>
                    <li>Sekretariat DPRD
                        <a target="_blank" href="https://dprd.depok.go.id/">dprd.depok.go.id</a>
                    </li>
                    <li>Satuan POL PP ( Jl. Margonda Raya No. 54 Depok 16431 Jawa Barat Telp. (021) 7762959, 7773610
                        Fax. (021) 7762959)
                        <a target="_blank" href="http://satpolpp.depok.go.id/">satpolpp.depok.go.id</a>
                    </li>
                </ul>
                <h1 class="display-5 py-4">Instalasi Vertikal</h1>
                <ul class="list lead">
                    <li>Kantor Imigrasi Kelas II Depok (Jalan Boulevard Raya, Komplek Perkantoran Pemda Depok, Grand
                        Depok City, Kalimulya, Cilodong, Kota Depok, Jawa Barat 16413, Telp. (021) 77820580, Email :
                        depokimigrasi@gmail.com )
                        <a target="_blank" href="https://depok.imigrasi.go.id/">depok.imigrasi.go.id</a>
                    </li>
                    <li> Pengadilan Negeri Depok (Komplek Perkantoran Kota Kembang, Jalan Boulevard No. 7, Kalimulya,
                        Cilodong, Kota Depok, Jawa Barat 16432, Telp. (021) 77829167, Email : info.pn.depok@gmail.com)
                        <a target="_blank" href="http://www.pn-depok.go.id/">www.pn-depok.go.id</a>
                    </li>
                    <li>Kementerian Agama Depok (Jalan Grand Depok City Raya, Sukmajaya, Kalimulya, Cilodong, Kota
                        Depok, Jawa Barat 16413, Telp. (021) 7715909)
                    </li>
                    <li>Kantor Pusat PLN Depok (Jalan Kota Kembang Raya, Tirtajaya, Sukmajaya, Kota Depok, Jawa Barat
                        16412, Telp.(021) 77824054)
                    </li>
                    <li>PDAM Kota Depok Tirta Asasta (Jalan Legong I No. 1, Mekar Jaya, Sukmajaya, Kota Depok, Jawa
                        Barat 1641, Telp.(021) 77820897)
                        <a target="_blank" href="https://www.pdamdepok.co.id/">www.pdamdepok.co.id</a>
                    </li>
                    <li>BPJS Kesehatan Depok (Ruko Aladin Square, Jalan Margonda Raya No. 39, Depok, Pancoran Mas, Kota
                        Depok, Jawa Barat 16431, Telp.0812-1299-9736)
                    </li>
                    <li>BPJS Ketenagakerjaan Depok (Komplek Ruko ITC No. 19-20, Jalan Margonda Raya No. 56, Pancoran
                        MAS, Depok, Pancoran MAS, Kota Depok, Jawa Barat 16431, Telp.(021) 77215101)
                    </li>
                </ul>
            </div>',
	            'image' => 'img/karya_new_watermark/Umum_141.png',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Sekretariat Daerah',
	            'slug' => 'sekretariat-daerah',
	            'desc' => '<div class="col-12">
                <p class="lead">Asisten Hukum dan Sosial</p>
                <ul class="lead list">
                    <li>Bagian Hukum</li>
                    <li>Bagian Kesejahteraan Sosial</li>
                    <li>Bagian Protokol dan Dokumentasi</li>
                </ul>
                <p class="lead">Asisten Ekonomi dan Pembangunan</p>
                <ul class="lead list">
                    <li>Bagian Ekonomi</li>
                    <li>Bagian Pembangunan</li>
                    <li>Bagian Layanan Pengadaan</li>
                </ul>
                <p class="lead">Asisten Administrasi dan Pemerintahan</p>
                <ul class="lead list">
                    <li>Bagian Umum</li>
                    <li>Bagian Administrasi</li>
                    <li>Bagian Organisasi dan Tata Laksana</li>
                    <li>Bagian Pemerintahan</li>
                </ul>
                <p class="lead">Sekretariat DPRD</p>
                <ul class="lead list">
                    <li>Bagian Umum</li>
                    <li>Bagian Persidangan</li>
                    <li>Bagian Keuangan</li>
                    <li>Bagian Hubungan Masyarakat dan Protokol</li>
                </ul>
            </div>',
	            'image' => 'img/karya_new_watermark/Umum_141.png',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Kecamatan',
	            'slug' => 'kecamatan',
	            'desc' => '<div class="col-12">
                <ul class="list lead">

                    <a href="https://beji.depok.go.id" target="_blank">
                        <li>Kecamatan Beji (Alamat:Perum Depok Indah)</li>
                    </a>
                    <a href="https://panmas.depok.go.id" target="_blank">
                        <li>Kecamatan Pancoran Mas (Alamat: Jl. Raya Kartini)</li>
                    </a>
                    <a href="https://cipayung.depok.go.id" target="_blank">
                        <li>Kecamatan Cipayung (Alamat: Jl. Raya Cipayung)</li>
                    </a>
                    <a href="https://sukmajaya.depok.go.id" target="_blank">
                        <li>Kecamatan Sukmajaya (Alamat: Jl. Sentosa Raya)</li>
                    </a>
                    <a href="https://cilodong.depok.go.id" target="_blank">
                        <li>Kecamatan Cilodong (Alamat: Jl. M. Nasir Raya Cilodong)</li>
                    </a>
                    <a href="https://limo.depok.go.id" target="_blank">
                        <li>Kecamatan Limo (Alamat: Jl. Raya Limo)</li>
                    </a>
                    <a href="https://cinere.depok.go.id" target="_blank">
                        <li>Kecamatan Cinere (Alamat: Jl. Bukit Cinere No.17, RT.05 RW.02, Kelurahan Cinere)</li>
                    </a>
                    <a href="https://cimanggis.depok.go.id" target="_blank">
                        <li>Kecamatan Cimanggis (Alamat: Jl. Radar Auri No. 15)</li>
                    </a>
                    <a href="https://tapos.depok.go.id" target="_blank">
                        <li>Kecamatan Tapos (Alamat: Jl. Raya Tapos)</li>
                    </a>
                    <a href="https://sawangan.depok.go.id" target="_blank">
                        <li>Kecamatan Sawangan (Alamat: Jl. Raya Muchtar)</li>
                    </a>
                    <a href="https://bojongsari.depok.go.id" target="_blank">
                        <li>Kecamatan Bojongsari (Alamat: Jl. Raya Batu No.12 Rt 03/04 Kel.Bojongsari, Kec.Bojongsari)
                        </li>
                    </a>

                </ul>
            </div>',
	            'image' => 'kecamatan.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
	        	'nama' => 'Kelurahan',
	            'slug' => 'kelurahan',
	            'desc' => '<div class="col-12">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td><strong>NO</strong></td>
                            <td><strong>KECAMATAN/KELURAHAN</strong></td>
                            <td><strong>NOMOR TELEPON</strong></td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td><strong>KECAMATAN BEJI (Perum Depok Indah) </strong></td>
                            <td><strong>(021) 7520233</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1.Kelurahan Beji (Jl. H. Asmawi)</td>
                            <td>(021) 7773243</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2.Kelurahan Beji Timur (Jl. Raya Pemuda No 3 RT 2 RW 5 Beji Timur)</td>
                            <td>(021) 7521432</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3.Kelurahan Kemiri Muka (Jl. H. Fatimah)</td>
                            <td>(021) 77203114</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4.Kelurahan Pondok Cina (Jl. H. Yahya Nuih)</td>
                            <td>(021) 7522352</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5.Kelurahan Kukusan (Jl. Palakali&nbsp; )</td>
                            <td>(021) 7271404</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6.Kelurahan Tanah Baru (Jl. Palakali RT 6 RW 12)</td>
                            <td>(021) 7752860</td>
                        </tr>
                        <tr>
                            <td>II</td>
                            <td><strong>KECAMATAN PANCORAN MAS (Jl. Raya Kartini ) </strong></td>
                            <td><strong>(021) 77200537</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Pancoran Mas (Jl. Pitara Raya No 49 RT&nbsp; 2 RW 15)</td>
                            <td>(021) 7759249</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Kelurahan Depok (Jl. Kartini No 26 RT 2 RW 9)</td>
                            <td>(021) 7520659</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. Kelurahan Depok Jaya (Jl. Nusantara Raya)</td>
                            <td>(021) 7520762</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Rangkapan Jaya (Jl. Raya Sawangan No 21 Rangkapan Jaya </td>
                            <td>(021) 77883634</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5. Kelurahan Rangkapan Jaya Baru(Jl.Keadilan No 1)</td>
                            <td>(021) 77880529</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6. Kelurahan Mampang (Jl. Damai 1 RT 03 RW 12)</td>
                            <td>(021) 77201335</td>
                        </tr>
                        <tr>
                            <td>III</td>
                            <td><strong>KECAMATAN CIPAYUNG (Jl. Raya Cipayung) </strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Cipayung (Jl. Jembatan Serong) </td>
                            <td>(021) 77880516</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Kelurahan Cipayung Jaya (Jl. Pertanian no 4 RT 4 RW 4) </td>
                            <td>(021) 77881451</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. Kelurahan Ratu Jaya (Jl. Masjid Alfalah) </td>
                            <td>(021) 7758190</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Bojong Pondok Terong (Jl. Masjid Al ittihad)</td>
                            <td>(021) 77213277</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5. Kelurahan Pondok Jaya (Permata Depok ) </td>
                            <td>(021) 32192940</td>
                        </tr>
                        <tr>
                            <td>IV</td>
                            <td><strong>KECAMATAN SUKMAJAYA (Jl. Sentosa Raya) </strong></td>
                            <td><strong>(021) 77822576</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Sukmajaya (Perumahan Pondok Sukmajaya Permai) </td>
                            <td>(021) 7706854</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Kelurahan Mekar Jaya (Jl. Waru Jaya No 9 Kp. Sugutamu)&nbsp;</td>
                            <td>(021) 7710283</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. Kelurahan Bakti Jaya (Jl. Cimanuk (dkt Pol PPD) </td>
                            <td>(021) 7709806</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Abadi Jaya (Jl. Musi Raya No 1) </td>
                            <td>(021) 77830676</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5. Kelurahan Tirta Jaya (Jl. Tugu Jaya RT 4 RW 3) </td>
                            <td>(021) 77822769</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6. Kelurahan Cisalak </td>
                            <td>(021) 87708662</td>
                        </tr>
                        <tr>
                            <td>V</td>
                            <td><strong>KECAMATAN CILODONG (Jl. M. Nasir Raya Cilodong) </strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Sukamaju (Jl. Jakarta Bogor (samping Woody) </td>
                            <td>(021) 8752270</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Keluraham Cilodong </td>
                            <td>(021)&nbsp; 7705292</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. Kelurahan Kalibaru (Jl. H. Nirun No.7)</td>
                            <td>(021) 8762480</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Kalimulya (Jl. PTU I )</td>
                            <td>(021) 8764582</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5. Kelurahan Jatimulya (Perumahan GDC sektor melati)</td>
                            <td>(021) 8753669</td>
                        </tr>
                        <tr>
                            <td><strong>VI</strong></td>
                            <td><strong>KECAMATAN LIMO (Jl. Raya Limo)</strong></td>
                            <td><strong>(021) 75 46 98 2</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Limo (Jl. Koman Muin, Limo Raya)&nbsp;</td>
                            <td>(021) 75 35 48 1</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Kelurahan Meruyung (Jl. Meruyung raya)&nbsp;</td>
                            <td>(021) 75 35 40 3</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. Kelurahan Grogol (Jl. Raya Grogol)</td>
                            <td>(021) 77 54 82 4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Krukut (Jl. Krukut)</td>
                            <td>(021) 75 33 33 1</td>
                        </tr>
                        <tr>
                            <td><strong>VII</strong></td>
                            <td><strong>KECAMATAN CINERE (Jl. Bukit Cinere No.17, RT.05 RW.02)</strong></td>
                            <td>&nbsp;&nbsp;<strong>021-29412552</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Cinere</td>
                            <td>(021) 75 43 34 0</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Kelurahan Gandul&nbsp;</td>
                            <td>(021) 75 45 08 4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. Kelurahan Pengkalan Jati&nbsp;</td>
                            <td>(021) 75 91 33 51</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Pangkalan Jati Baru</td>
                            <td>(021) 75 90 66 49</td>
                        </tr>
                        <tr>
                            <td><strong>VIII</strong></td>
                            <td><strong>KECAMATAN CIMANGGIS(Jl.Radar Auri No. 15) </strong></td>
                            <td><strong>(021) 87 11 43 6</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Cisalak Pasar;</td>
                            <td>(021) 87 34 13 2</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Kelurahan Mekarsari (Jl. Raya Mekarsari)</td>
                            <td>(021) 87 11 73 4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. Kelurahan Tugu</td>
                            <td>(021) 87720940</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Pasir Gunung Selatan (Jl. Garuda II)</td>
                            <td>(021) 87 25 61 1</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5. Kelurahan Harjamukti (Jl. Raya Gas Alam)&nbsp;</td>
                            <td>(021) 87 31 21 7</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6. Kelurahan Curug (Jl. Raya Pekapuran)</td>
                            <td>(021) 87 41 67 2</td>
                        </tr>
                        <tr>
                            <td><strong>IX</strong></td>
                            <td><strong>KECAMATAN TAPOS (Jl. Raya Tapos) </strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Tapos (Jl. Raya Tapos)</td>
                            <td>(021) 87 57 71 4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Kelurahan Leuwinanggung (Jl. Raya Leuwinanggung)</td>
                            <td>(021) 84 49 22</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. Kelurahan Sukatani (Jl. Gas Alam)</td>
                            <td>(021) 87 74 20 75</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Sukamaju Baru (Gg Nangka)</td>
                            <td>(021) 70782035</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5. Kelurahan Jatijajar (Perum Jatijar)</td>
                            <td>(021) 87 25 92 3</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6. Kelurahan Cilangkap (Jl. Lurah Ripan Kel Cilangkap RT 1)&nbsp;
                            </td>
                            <td>(021) 87 51 83 8</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>7.kelurahan cimpaeun (Jl. Raya Cimpaeun, gg kirai)
                            </td>
                            <td>(021) 87 57 33 3</td>
                        </tr>
                        <tr>
                            <td><strong>X.</strong></td>
                            <td><strong>KECAMATAN SAWANGAN (Jl. Raya Muchtar ) </strong></td>
                            <td><strong>(0251) 61 8177</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Sawangan (Jl. Raya Sawangan ( belakang RSUD)</td>
                            <td>(0251) 8617531</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Kelurahan Kedaung (Jl. Raya Ketapang No 5 RT 1 RW 2)</td>
                            <td>(021) 7494350</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3. Kelurahan Cinangka (Jl. Pahlawan RT 2 RW 9 no 8)</td>
                            <td>(021) 70623458</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Sawangan Baru (Jl. Raya Sawangan Permai)</td>
                            <td>0251 70888683</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5. Kelurahan Bedahan (Jl. H Sulaeman)</td>
                            <td>(0251) 8619159</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6. Kelurahan Pengasinan (Jl. Raya Pengasinan RT 2 RW 3)</td>
                            <td>(0251) 8619521</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>7. Kelurahan Pasir Putih (Jl. Raya Pasir&nbsp; putih No. 1 RT 4 RW 2)
                               </td>
                            <td>0251 8610872</td>
                        </tr>
                        <tr>
                            <td><strong>XI</strong></td>
                            <td><strong>KECAMATAN BOJONG SARI (Jl.Raya Batu No.12 Rt 03/04
                                    Kel.Bojongsari,Kec.Bojongsari)
                                </strong></td>
                            <td>&nbsp;<strong>(0251) 8612040</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1. Kelurahan Bojong Sari (Jl. Bojongsari)&nbsp;</td>
                            <td>(0251) 619766</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2. Kelurahan Bojongsari Baru (Jl. Bojongsari&nbsp; gg. Rotan ) </td>
                            <td>(0251) 8610108</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3.&nbsp; Kelurahan Serua (Jl. Raya Serua)&nbsp; </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4. Kelurahan Pondok Petir (Jl. Raya Serua) </td>
                            <td>(021) 7421409</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5. Kelurahan Curug (Jl. Raya curug) </td>
                            <td>(0251) 8610044</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6. Kelurahan Duren Mekar (Jl. H. Suhaemi ) </td>
                            <td>(0251) 8613522</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>7. Kelurahan Duren Seribu (Jl. Harco Raya) </td>
                            <td>(0251) 8613522</td>
                        </tr>
                    </tbody>
                </table>
                <p class="lead">Daftar Kode Pos Wilayah Kota Depok</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>Kecamatan Beji</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Beji<br>
                                » Kelurahan Beji Timur<br>
                                » Kelurahan Kemiri Muka<br>
                                » Kelurahan Kukusan<br>
                                » Kelurahan Pondok Cina<br>
                                » Kelurahan Tanah Baru</td>
                            <td>» 16421<br>
                                » 16422<br>
                                » 16423<br>
                                » 16425<br>
                                » 16424<br>
                                » 16425</td>
                            <td>» Beji<br>
                                » Beji<br>
                                » Beji<br>
                                » Beji<br>
                                » Beji<br>
                                » Beji</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>Kecamatan Bojongsari *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Bojongsari<br>
                                » Kelurahan Bojongsari Baru<br>
                                » Kelurahan Curug<br>
                                » Kelurahan Duren Mekar<br>
                                » Kelurahan Duren Seribu<br>
                                » Kelurahan Pondok Petir<br>
                                » Kelurahan Serua</td>
                            <td>» 16516<br>
                                » 16516<br>
                                » 16517<br>
                                » 16518<br>
                                » 16518<br>
                                » 16517<br>
                                » 16517</td>
                            <td>» Bojongsari<br>
                                » Bojongsari<br>
                                » Bojongsari<br>
                                » Bojongsari<br>
                                » Bojongsari<br>
                                » Bojongsari<br>
                                » Bojongsari</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>* Kecamatan Cilodong *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Cilodong<br>
                                » Kelurahan Jatimulya<br>
                                » Kelurahan Kalibaru<br>
                                » Kelurahan Kalimulya<br>
                                » Kelurahan Sukamaju</td>
                            <td>» 16414<br>
                                » 16413<br>
                                » 16414<br>
                                » 16413<br>
                                » 16415</td>
                            <td>» Cilodong<br>
                                » Cilodong<br>
                                » Cilodong<br>
                                » Cilodong<br>
                                » Cilodong</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>* Kecamatan Cimanggis *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Cisalak Pasar<br>
                                » Kelurahan Curug<br>
                                » Kelurahan Harjamukti<br>
                                » Kelurahan Mekarsari<br>
                                » Kelurahan Pasir Gunung Selatan<br>
                                » Kelurahan Tugu</td>
                            <td>» 16452<br>
                                » 16453<br>
                                » 16454<br>
                                » 16452<br>
                                » 16451<br>
                                » 16451</td>
                            <td>» Cimanggis<br>
                                » Cimanggis<br>
                                » Cimanggis<br>
                                » Cimanggis<br>
                                » Cimanggis<br>
                                » Cimanggis</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>* Kecamatan Cinere *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kerurahan Cinere<br>
                                » Kelurahan Gandul<br>
                                » Kelurahan Pangkalan Jati Baru<br>
                                » Kelurahan Pangkalan Jati Lama</td>
                            <td>» 16514<br>
                                » 16512<br>
                                » 16513<br>
                                » 16513</td>
                            <td>» Cinere<br>
                                » Cinere<br>
                                » Cinere<br>
                                » Cinere</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>* Kecamatan Cipayung *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Bojong Pondok Terong<br>
                                » Kelurahan Cipayung<br>
                                » Kelurahan Cipayung Jaya<br>
                                » Kelurahan Pondok Jaya<br>
                                » Kelurahan Ratu Jaya</td>
                            <td>» 16436<br>
                                » 16437<br>
                                » 16437<br>
                                » 16438<br>
                                » 16439</td>
                            <td>» Cipayung<br>
                                » Cipayung<br>
                                » Cipayung<br>
                                » Cipayung<br>
                                » Cipayung</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>* Kecamatan Limo *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Grogol<br>
                                » Kelurahan Limo<br>
                                » Kelurahan Meruyung<br>
                                » Kelurahan Krukut</td>
                            <td>» 16512<br>
                                » 16515<br>
                                » 16515<br>
                                » 16512</td>
                            <td>» Limo<br>
                                » Limo<br>
                                » Limo<br>
                                » Limo</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>* Kecamatan Pancoran Mas *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Depok<br>
                                » Kelurahan Depok Jaya<br>
                                » Kelurahan Mampang<br>
                                » Kelurahan Pancoran Mas<br>
                                » Kelurahan Rangkapan Jaya<br>
                                » Kelurahan Rangkapan Jaya Baru</td>
                            <td>» 16431<br>
                                » 16432<br>
                                » 16433<br>
                                » 16436<br>
                                » 16435<br>
                                » 16434</td>
                            <td>» Pancoran Mas<br>
                                » Pancoran Mas<br>
                                » Pancoran Mas<br>
                                » Pancoran Mas<br>
                                » Pancoran Mas<br>
                                » Pancoran Mas</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>* Kecamatan Sawangan *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Bedahan<br>
                                » Kelurahan Cinangka<br>
                                » Kelurahan Kedaung<br>
                                » Kelurahan Sawangan<br>
                                » Kelurahan Sawangan Baru<br>
                                » Kelurahan Pasir Putih<br>
                                » Kelurahan Pengasinan</td>
                            <td>» 16519<br>
                                » 16516<br>
                                » 16516<br>
                                » 16511<br>
                                » 16511<br>
                                » 16519<br>
                                » 16518</td>
                            <td>» Sawangan<br>
                                » Sawangan<br>
                                » Sawangan<br>
                                » Sawangan<br>
                                » Sawangan<br>
                                » Sawangan<br>
                                » Sawangan</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>* Kecamatan Sukmajaya *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Abadijaya<br>
                                » Kelurahan Baktijaya<br>
                                » Kelurahan Cisalak<br>
                                » Kelurahan Mekarjaya<br>
                                » Kelurahan Sukmajaya<br>
                                » Kelurahan Tirtajaya</td>
                            <td>» 16417<br>
                                » 16418<br>
                                » 16416<br>
                                » 16411<br>
                                » 16412<br>
                                » 16412</td>
                            <td>» Sukmajaya<br>
                                » Sukmajaya<br>
                                » Sukmajaya<br>
                                » Sukmajaya<br>
                                » Sukmajaya<br>
                                » Sukmajaya</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><strong>* Kecamatan Tapos *</strong></td>
                        </tr>
                        <tr>
                            <td><strong>– Kelurahan</strong></td>
                            <td><strong>– Kode Pos</strong></td>
                            <td><strong>– Kecamatan</strong></td>
                            <td><strong>– Kota</strong></td>
                        </tr>
                        <tr>
                            <td>» Kelurahan Cilangkap<br>
                                » Kelurahan Cimpaeun<br>
                                » Kelurahan Jatijajar<br>
                                » Kelurahan Leuwinanggung<br>
                                » Kelurahan Sukamaju Baru<br>
                                » Kelurahan Sukatani<br>
                                » Kelurahan Tapos</td>
                            <td>» 16458<br>
                                » 16459<br>
                                » 16451<br>
                                » 16456<br>
                                » 16455<br>
                                » 16454<br>
                                » 16457</td>
                            <td>» Tapos<br>
                                » Tapos<br>
                                » Tapos<br>
                                » Tapos<br>
                                » Tapos<br>
                                » Tapos<br>
                                » Tapos</td>
                            <td>» Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok<br>
                                » Kota Depok</td>
                        </tr>
                    </tbody>
                </table>
            </div>',
	            'image' => 'kelurahan.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
			],
			[
	        	'nama' => 'Lambang Identitas',
	            'slug' => 'lambang-identitas',
	            'desc' => '<h5 class="h5">Bagian A</h5>
	             <p class="lead">
                            Gambar Kujang dengan posisi tegak, Kujang merupakan senjata/alat kerja masyarakat Jawa
                            Barat, Kujang dianggap sebagai manifestasi satria-satria Pajajaran, yang identik dengan
                            nilai-nilai kejuangan pahlawan Depok, yang memiliki sifat tak gentar dalam menegakkan
                            kebenaran dan rela berkorban; Pada gambar Kujang terdapat 2 (dua) buah Lubang, dengan
                            lengkungan luar sebanyak 7 (tujuh) buah dan tangkai (gagang) mempunyai lekukan 4 (empat)
                            buah, yang dikelilingi rangkain padi dan bunga kapas yang terdiri dari 9 (sembilan) butir
                            padi dan 9 (sembilan) kuntum bungan kapas yang mempunyai arti Kota Depok dilahirkan pada
                            tanggal “27 April 1999”. Padi dan Kapas melambangkan cita-cita pemerintahan dan masyarakat
                            Kota Depok guna mewujudkan kesejahteraan dan kemakmuran; Di bawah gambar Kujang terdapat
                            gambar sebuah mata pena dan gambar sebuah buku terbuka, yang melambangkan Depok sebagai Kota
                            Pendidikan.
                        </p>
                        <h5 class="h5 pt-4">Bagian B</h5>
                        <p class="lead">
                            Gambar Pendopo merupakan simbol Pusat Pemerintahan Kota Depok dalam melaksanakan tugas
                            Pemerintahan, Pembangunan dan Kemasyarakatan. Gambar Bangunan Gedung melambangkan Kota Depok
                            sebagai Kota Pemukiman serta sebagai pusat perdagangan dan jasa; Gambar tumpukan batu bata
                            membentuk rangkaian kesatuan yang menggambarkan dinamika masyarakat Kota Depok dalam
                            melaksanakan Pembangunan di segala bidang; Gambar gelombang air menggambarkan aliran sungai
                            yang mengalir di wilayah Kota Depok melambangkan kesuburan serta menunjukkan Depok sebagai
                            Kota Resapan Air.
                        </p>
                        <h5 class="h5 pt-4">Bagian C</h5>
                        <p class="lead">
                            Bentuk Perisai yang memiliki 5 (lima) sisi melambangkan tameng dan benteng, yang mampu
                            mengayomi, memberikan rasa aman dan tentram baik lahir maupun batin bagi masyarakat Depok
                            serta melambangkan ketahanan fisik dan mental masyarakat Depok dalam menghadapi segala macam
                            gangguan, halangan dan tantangan yang datang dari manapun juga terhadap kehidupan Bangsa dan
                            Negara Republik Indonesia yang berdasarkan Pancasila. Dan ke 5 (lima) sisi tersebut
                            melambangkan pula fungsi/pesan yang diemban oleh Pemerintah Kota Depok yaitu sebagai : a)
                            Kota Pemukiman; b) Kota Pendidikan; c) Pusat Perdagangan dan Jasa; d) Kota Wisata; e) Kota
                            Resapan Air; Tulisan “Kota Depok” menunjukkan sebutan bagi Kota dan Pemerintah Kota Depok;
                            Tulisan Paricara Dharma : berasal dari bahasa Sansekerta yang terdiri dari kata Paricara
                            yang berarti Abdi, sedangkan Dharma adalah Kebaikan, Kebenaran dan Keadilan jadi Paricara
                            Dharma mengandung makna bahwa Pemerintah Kota Depok sebagai Abdi Masyarakat dan Abdi Negara
                            senantiasa mengutamakan kepada Kebaikan, Kebenaran dan Keadilan.
                        </p>',
	            'image' => 'lambang-identitas.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        ]);
    }
}
