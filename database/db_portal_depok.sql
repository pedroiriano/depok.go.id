-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2023 at 02:28 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portal_depok`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

DROP TABLE IF EXISTS `agendas`;
CREATE TABLE IF NOT EXISTS `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `imageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `created_at`, `updated_at`, `nama`, `tempat`, `tanggal`, `imageName`, `sumber`, `status`) VALUES
(1, NULL, NULL, 'The Night Market', 'Kantor Walikota Depok', '2022-02-04', '1.png', '8', 1),
(2, NULL, NULL, 'Surf Festival', 'Kantor Walikota Depok', '2020-10-05', '2.png', '8', 1),
(3, NULL, NULL, 'Spontaneous Festival', 'Kantor Walikota Depok', '2020-11-21', '3.png', '8', 1),
(4, NULL, NULL, 'Food Film Festival', 'Kantor Walikota Depok', '2020-11-21', '4.png', '8', 1),
(5, NULL, NULL, 'Food Truck Festival', 'Kantor Walikota Depok', '2020-11-22', '5.png', '8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tooltip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `icon`, `tooltip`, `pos`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pajak', 'Pajak.png', 'Tooltip with Html', 7, 1, NULL, NULL),
(2, 'Kependudukan', 'Kependudukan.png', 'Tooltip with Html', 8, 1, NULL, NULL),
(3, 'Perizinan', 'Perizinan.png', 'Tooltip with Html', 99, 1, NULL, NULL),
(4, 'Kesehatan', 'Kesehatan.png', 'Tooltip with Html', 2, 1, NULL, NULL),
(5, 'Peta', 'Peta.png', 'Tooltip with Html', 99, 1, NULL, NULL),
(6, 'Loker', 'Loker.png', 'Tooltip with Html', 6, 1, NULL, NULL),
(7, 'PDAM & PLN', 'Pdam.png', 'Tooltip with Html', 99, 1, NULL, NULL),
(8, 'Aspirasi', 'Aspirasi.png', 'Tooltip with Html', 3, 1, NULL, NULL),
(9, 'Kontak', 'Kontak.png', 'Tooltip with Html', 4, 1, NULL, NULL),
(10, 'Pendidikan', 'Pendidikan.png', 'Tooltip with Html', 5, 1, NULL, NULL),
(11, 'Zakat', 'zakat.svg', 'Tooltip with Html', 99, 1, NULL, NULL),
(12, 'Data ASN', 'Kepegawaian.png', 'Tooltip with Html', 99, 1, NULL, NULL),
(13, 'Ekonomi', 'Ekonomi.png', 'Tooltip with Html', 99, 1, NULL, NULL),
(14, 'Perpustakaan', 'Perpustakaan.png', 'Tooltip with Html', 99, 1, NULL, NULL),
(15, 'Kampung Siaga COVID-19', 'kampung-siaga.svg', 'Tooltip with Html', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `nama`, `slug`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah', 'sejarah', 'img/content/sejarah.jpg', '<h5 class=\"text-xl font-semibold mb-4\">Sejarah</h5><p class=\"text-slate-400\">Kota Depok bermula dari sebuah Kecamatan yang berada di lingkungan Kawedanan (Pembantu Bupati) wilayah Parung Kabupaten Bogor. Pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan.</p><p class=\"text-slate-400 mt-3\">Perkembangan Depok yang begitu cepat menjadi perhatian bagi Pemerintah Orde Baru. Menteri Dalam Negeri kala itu, Amir Machmud, mulai mengkaji peningkatan status Kecamatan Depok menjadi Kota Administratif. Peningkatan status Kota Depok dilakukan agar pembangunan lebih tertata dan terarah sebagai kota masa depan, ketimbang dikelola sepenuhnya oleh Kota Bogor yang hanya sebagai kecamatan yang dipimpin oleh Camat.</p><p class=\"text-slate-400 mt-3\">Pembentukan Kota Administratif Depok dilakukan oleh Menteri Dalam Negeri Amir Machmud sekaligus melantik Wali Kota Administratif yang pertama, yaitu Mochammad Rukasah Suradimadja oleh Gubernur Jawa Barat, Aang Kunaefi.</p><p class=\"text-slate-400 mt-3\">Di awal tahun 1999, Kota Administratif Depok dimekarkan dan seluruh desa berganti status menjadi Kelurahan. Hasil pemekaran wilayah tersebut terdiri dari 3 (tiga) Kecamatan dan 17 (tujuh belas) Desa, yaitu:</p><ul class=\"list-none text-slate-400 mt-3\"><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kecamatan Pancoran Mas, terdiri dari 6 (enam) Desa, yaitu: Desa Depok, Desa Depok Jaya, Desa Pancoran Mas, Desa Mampang, Desa Rangkapan Jaya, dan Desa Rangkapan Jaya Baru.</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kecamatan Beji, terdiri dari 5 (lima) Desa, yaitu: Desa Beji, Desa Kemiri Muka, Desa Pondok Cina, Desa Tanah Baru, dan Desa Kukusan.</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kecamatan Sukmajaya, terdiri dari 6 (enam) Desa, yaitu: Desa Mekarjaya, Desa Sukmajaya, Desa Sukamaju, Desa Cisalak, Desa Kalibaru, dan Desa Kalimulya.</li></ul><p class=\"text-slate-400 mt-3\">Selama kurun waktu 17 tahun Kota Administratif Depok berkembang pesat baik di bidang Pemerintahan, Pembangunan, dan Kemasyarakatan. Khususnya di bidang Pemerintahan Kota Depok berkembang menjadi 3 (tiga) wilayah Kecamatan yang terdiri dari 23 (dua puluh tiga) Kelurahan, yang terbagi atas:</p><ul class=\"list-none text-slate-400 mt-3\"><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kecamatan Pancoran Mas, terdiri dari 6 (enam) Kelurahan, yaitu: Kelurahan Depok, Kelurahan Depok Jaya, Kelurahan Mampang, Kelurahan Pancoran Mas, Kelurahan Rangkapan Jaya, dan Kelurahan Rangkapan Jaya Baru.</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kecamatan Beji terdiri dari 6 (enam) Kelurahan, yaitu: Kelurahan Beji, Kelurahan Beji Timur, Kelurahan Pondok Cina, Kelurahan Kemiri Muka, Kelurahan Kukusan, dan Kelurahan Tanah Baru.</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kecamatan Sukmajaya, terdiri dari 11 (sebelas) Kelurahan, yaitu: Kelurahan Sukmajaya, Kelurahan Sukamaju, Kelurahan Mekar Jaya, Kelurahan Abadi Jaya, Kelurahan Bakti Jaya, Kelurahan Cisalak, Kelurahan Kalibaru, Kelurahan Kalimulya, Kelurahan Cilodong, Kelurahan Jati Mulya, dan Kelurahan Tirta Jaya.</li></ul><h5 class=\"text-xl font-semibold mt-8\">Terbentuknya Kota Depok</h5><p class=\"text-slate-400\">Pesatnya perkembangan dan tuntutan aspirasi masyarakat semakin mendesak agar Kota Administratif Depok dinaikkan statusnya menjadi Kotamadya dengan harapan pelayanannya menjadi lebih maksimal. Di sisi lain, Pemerintah Kabupaten Bogor bersama-sama Pemerintah Provinsi Jawa Barat memperhatikan perkembangan tersebut, dan mengusulkannya kepada Pemerintah Pusat dan Dewan Perwakilan Rakyat Daerah.</p><p class=\"text-slate-400 mt-3\">Hingga akhirnya pada tanggal 20 April 1999, berdasarkan Undang-undang No. 15 tahun 1999, Kota Depok diresmikan menjadi Kotamadya Daerah Tk. II Depok.  Peresmian pembentukan Kotamadya Daerah Tk. II Depok dilakukan pada tanggal 27 April 1999 bersamaan dengan Pelantikan Pejabat Walikotamadya Kepala Daerah Tk. II Depok saat itu, Drs. H. Badrul Kamal, yang menjabat sebagai Walikota Kota Administratif Depok.</p><p class=\"text-slate-400 mt-3\">Momentum peresmian Kotamadya Daerah Tk. II Depok dan pelantikan pejabat Walikotamadya Kepala Daerah Tk. II Depok saat itu, dijadikan suatu landasan yang bersejarah dan tepat untuk dijadikan hari jadi Kota Depok.</p><p class=\"text-slate-400 mt-3\">Berdasarkan Undang-undang Nomor 15 Tahun 1999, Wilayah Kota Depok meliputi wilayah Administratif Kota Depok terdiri dari 3 (tiga) Kecamatan, ditambah  sebagian wilayah Kabupaten Daerah Tingkat II Bogor, yang meliputi:</p><ul class=\"list-none text-slate-400 mt-3\"><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kecamatan Cimanggis, yang terdiri dari 1 (satu) Kelurahan dan 12 (dua belas) Desa, yaitu: Kelurahan Cilangkap, Desa Pasir Gunung Selatan, Desa Tugu, Desa Mekarsari, Desa Cisalak Pasar, Desa Curug, Desa Harjamukti, Desa Sukatani, Desa Sukamaju Baru, Desa Cijajar, Desa Cimpaeun, Desa Leuwinanggung.</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kecamatan Sawangan, yang terdiri dari 14 (empat belas) Desa, yaitu: Desa Sawangan, Desa Sawangan Baru, Desa Cinangka, Desa Kedaung, Desa Serua, Desa Pondok Petir, Desa Curug, Desa Bojong Sari, Desa Bojong Sari Baru, Desa Duren Seribu, Desa Duren Mekar, Desa Pengasinan Desa Bedahan, Desa Pasir Putih.</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kecamatan Limo yang terdiri dari 8 (delapan) Desa, yaitu: Desa Limo, Desa Meruyung, Desa Cinere, Desa Gandul, Desa Pangkalan Jati, Desa Pangkalan Jati Baru, Desa Krukut, Desa Grogol.</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Dan ditambah lagi 5 (lima) Desa dari Kecamatan Bojong Gede, yaitu: Desa Cipayung, Desa Cipayung Jaya, Desa Ratu Jaya, Desa Pondok Terong, Desa Pondok Jaya.</li></ul><p class=\"text-slate-400 mt-3\">Kota Depok selain merupakan Pusat Pemerintahan yang berbatasan langsung dengan Wilayah Daerah Khusus Ibu Kota Jakarta juga merupakan wilayah penyangga Ibu Kota Negara yang diarahkan untuk kota pemukiman, kota pendidikan, pusat pelayanan perdagangan dan jasa, kota pariwisata dan sebagai kota resapan air.</p>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(2, 'Ikon Kota', 'ikon-kota', 'img/content/ikon-kota.png', '<p class=\"text-slate-400\">Kota Depok terbentuk tahun 1999 berdasarkan UU No.15 Tahun 1999, dengan luas wilayah 20.029 m² yang meliputi 6 Kecamatan, yaitu: Pancoran Mas, Beji, Sukmajaya, Limo, Sawangan dan  Cimanggis. Salah satu potensi pertanian yang cukup potensial adalah belimbing.</p><p class=\"text-slate-400 mt-3\">Belimbing Depok yang dikenal dengan Belimbing Dewa ini merupakan buah hasil karya petani penangkar Depok,  Bapak H.Usman Mubin. Buah yang berwarna kuning-oranye ini, mengandung vitamin C dan A yang cukup tinggi. Belimbing Depok yang besar dapat mencapai 0.8 kg per buah. Rasa manisnya ditengarai sebagai obat herbal penurun darah tinggi/hipertensi, kencing manis, nyeri lambung, dan sebagainya.</p><p class=\"text-slate-400 mt-3\">Buah ini sangat prospektif dikembangkan di Kota Depok, dan kini telah menjadi buah unggulan yang secara komparatif lebih unggul dibandingkan buah belimbing yang lainnya yang ada di Indonesia. Hal ini diketahui pada setiap event lomba buah unggul dan pameran-pameran buah nasional serta internasional. Buah Belimbing Dewa selalu menjuarai lomba buah unggul tingkat nasional versi Trubus.</p><p class=\"text-slate-400 mt-3\">Potensi pertanian belimbing di Kota Depok sampai tahun 2006 berjumlah 33.729 dengan total luas areal 135 Ha yang menyebar di wilayah Kota Depok. Perkiraan buah belimbing yang produktif berumur tanaman lebih dari 4 tahun, yang memiliki kapasitas produksi per tahun 100-150 kg per pohon per tahun. Tanaman produktif ini kurang lebih berjumlah sekitar 27.500-28.000 pohon terdapat di Depok. Sehingga perkiraan total produksi yang dihasilkan dari belimbing Depok berkisar antara 2.700 ton sampai 3.000 ton per tahun. Sementara kapasitas produksi belimbing jika diterapkan budidaya sesuai SOP Belimbing Dewa, diharapkan produktifitas per pohon dapat mencapai 300 kg per tahun dan jika diasumsikan harga per kg belimbing berkisar antara Rp 4.000 - Rp 6.000. Maka omzet penjualan belimbing setiap tahun berkisar Rp 16 Miliar sampai 24 Miliar per tahun. Nilai yang cukup besar untuk satu produk pertanian perkotaan.</p><p class=\"text-slate-400 mt-3\">Tanaman belimbing di Kota Depok banyak dikembangkan di lahan-lahan masyarakat. Uniknya, banyak juga yang dikembangkan di sepanjang kali Ciliwung, contohnya di kelurahan Pondok Cina, kelurahan Tugu dan kelurahan Kelapa Dua. Sehingga pemandangan sepanjang kali Ciliwung menjadi indah dan asri dengan keberadaan tanaman belimbing ini. Hal ini berpotensi menjadi kawasan agrowisata belimbing Depok di sepanjang DAS Ciliwung. Suatu potensi sumber daya alam yang tak ternilai harganya, terutama di tengah keramaian lalu-lintas jalan di Kota Depok.</p><p class=\"text-slate-400 mt-3\">Upaya lain dalam meningkatkan nilai tambah produk belimbing adalah pengolahan produk. Walaupun usaha pengolahan hortikultura di kota Depok masih minim, akan tetapi sosialisasi pelatihan bagi  pengusaha mikro di bidang pengolahan dalam memproduksi olahan hortikultura khususnya buah-buahan menjadi minuman segar terus ditingkatkan. Sampai  kini mulai banyak pengusaha di kota Depok yang merintis  olahan produk holtikultura seperti buah belimbing dan jambu biji merah, diantaranya  Bapak Toni, Ibu Maria dan Ibu Retno.</p><p class=\"text-slate-400 mt-3\">Toko Fresh e adalah salah satu toko buah segar di Jl. Margonda yang telah melakukan kemitraan dengan Asosiasi Petani Belimbing Depok (APEBEDE) dalam pemasaran buah belimbing, jambu dan lain-lain. Walaupun kapasitas penerimaan produk masih rendah sekitar 15-20 kg per minggu, akan tetapi perlu upaya mempertahankan kemitraan ini. Pada akhirnya petani memiliki kemampuan untuk berkomitmen dengan pengusaha ritel buah segar yang selalu memenuhi 3 K (Kapasitas, Kontinuitas, dan Kualitas). PT Sewu Segar sebagai supplier buah belimbing untuk wilayah Jakarta dan Surabaya telah membantu memasarkan belimbing hingga mencapai 1 ton per bulannya. Kapasitasnya akan terus dinaikkan sesuai peningkatan hasil kualitas belimbing dari para petani Kota Depok.</p><p class=\"text-slate-400 mt-3\">Dalam upaya pemenuhan kualitas produk, para petani mulai menerapkan SOP GAP Belimbing Dewa. Hal ini juga dipicu dengan peluang pasar komoditas yang masih cukup besar, karenanya keunggulan spesifik yang dimiliki Belimbing Dewa Depok cukup diminati konsumen. Peluang pasar belimbing untuk kawasan Jabodetabek ini menjadikan Depok memiliki peningkatan kualitas produksi Belimbing Dewa mencapai angka 6.000 ton pertahun.</p><p class=\"text-slate-400 mt-3\">Depok yang memiliki visi sebagai kota niaga dan jasa  diharapkan menjadi daerah yang nyaman bagi penduduknya. Kenyamanan tersebut salah satunya dengan tetap mempertahankan ruang terbuka hijau dan potensi lahan pertanian.</p><p class=\"text-slate-400 mt-3\">Belimbing yang produktif menjadi salah satu pilihan dalam mempertahankan ruang terbuka hijau perkotaan. Sesuai amanat UU Tata Ruang, ruang terbuka hijau perkotaan harus memuat 30% dari total luas wilayah, Kota Depok tetap memiliki komoditas unggulan yang bernilai kompetitif dan komparatif khususnya komoditas hortikultura yang merupakan sumber daya lokal (Base Resources) Kota Depok yaitu belimbing. Keunggulan spesifik inilah yang harus dilestarikan dan menjadi ikon kota, sehingga di masa mendatang Kota Depok tetap memiliki kebanggaan akan sumber daya alam yang potensial dari pengembangan produk pertanian spesifik wilayah dan mendukung ruang terbuka hijau Kota Depok.</p>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(3, 'Seni Budaya', 'seni-budaya', 'img/content/seni-budaya.svg', '<h5 class=\"text-xl font-semibold mb-4\">Seni Budaya Depok</h5><p class=\"text-slate-400\">Kota Depok  yang dikenal dengan ikon Kota Belimbing sangat kental dengan kekayaan budaya, etnik, dan latar belakang para pendatangnya. Budaya Kota Depok, mengikut kepada induknya, salah satunya yaitu budaya Betawi. Akar budaya orang Depok sama sebagaimana induknya yaitu Betawi, berdasarkan atas sistem kekerabatan patrilineal, dengan keluarga batih sebagai kesatuan sosial yang terkecil. Mereka memiliki kebiasaan untuk menetap dalam satu areal dengan kerabat-kerabat yang masih seketurunan dalam satu rumah. Karenanya, masyarakat Depok memiliki rasa kekeluargaan yang sangat erat.</p><p class=\"text-slate-400 mt-3\">Kesenian dan budaya Kota Depok yang dikenal saat ini memiliki kekhasan tersendiri mengikuti adat Melayu sebagai warisan yang harus dilestarikan. Merujuk pada sejarah pelestarian budayanya, terdapat beberapa warisan kesenian dan budaya yang dimiliki masyarakat Kota Depok di antaranya:</p><ul class=\"list-none text-slate-400 mt-3\"><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Gong Sibolong</div><div class=\"text-slate-400\">Gamelan Khas Depok, Warisan Budaya Takbenda yang merupakan pengiring kesenian daerah seperti Jaipong, wayang kulit Betawi hingga Tayuban. Karakternya terbilang unik, dengan nuansa suling terompet Sunda yang kuat dan biasanya diiringi dengan tetabuhan gendang serta gamelan dengan tempo yang berubah-ubah. Alat musik yang dipakai dalam pertunjukan Gong Si Bolong adalah satu set gendang, dua set saron, satu set keromong, satu set kedemung, satu set kenong, satu terompet, satu set gong, rebab, dan gambang.</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Rebut Dandang</div><div class=\"text-slate-400\">Acara ini biasanya jadi bagian tradisi pesta pernikahan Betawi. Biasanya diiringi alunan musik tradisional seperti tanjidor dan gambang kromong. Selama atraksi berlangsung, jawara dari mempelai putri berusaha mempertahankan dandang yang digendongnya sementara jawara dari mempelai putri berusaha merebut dandang. Jawara dari pihak mempelai putra harus menang dan berhasil merebut dandang tersebut.</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Marawis/Hadroh</div><div class=\"text-slate-400\">Seni musik mawaris biasanya hadir dalam rangkaian acara pengiring sholawat Islam dalam komunitas masyarakat Depok.</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Tarian Khas Depok</div><div class=\"text-slate-400 ml-8\"><ul class=\"list-none text-slate-400 mt-3\"><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-from-right text-indigo-600 text-lg align-middle mr-2\"></i>Tari Godeg Ayu</div><div class=\"text-slate-400\">Tari Godeg Ayu merupakan tari kreasi yang berpijak dari kesenian topeng asli Cisalak, Depok. Pencipta Tari Godeg Ayu adalah Wulandari S.Sn dari Sanggar Tari Ayodya Pala. Tarian tersebut menggambarkan dinamika kehidupan gadis yang menginjak dewasa dengan kodratnya yang khas.</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-from-right text-indigo-600 text-lg align-middle mr-2\"></i>Tari Topeng Cisalak</div><div class=\"text-slate-400\">Nama Topeng Cisalak sendiri diberi orang tuanya berdasarkan tempat menetap dan kesenian topeng berkembang saat itu di Kampung Cisalak, Cimanggis, Depok, Jawa Barat. Padahal pertama kali muncul tahun 1918 Topeng Cisalak bernama topeng Kinang oleh dua pelopornya Djioen dan Mak Kinang.</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-from-right text-indigo-600 text-lg align-middle mr-2\"></i>Tari Nayuban</div><div class=\"text-slate-400\">Tari Nayuban, merupakan penampilan tarian Khas asal tanah Baru, Depok, yang merupakan cikal bakal tarian doger karawang, dan jaipongan Jawa Barat.</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-from-right text-indigo-600 text-lg align-middle mr-2\"></i>Tari D\'Gol (Depok Go Lincah)</div><div class=\"text-slate-400\">Tarian yang menggambarkan kelincahan anak-anak di Kota Depok. D\'GOL merupakan singkatan dari kata Depok Go Lincah, yang diberi judul oleh WaliKota Depok, Bapak Idris Abdul Shomad, Lc., M.A, pada tahun 2019. Tarian ini bernuansa Islam.</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-from-right text-indigo-600 text-lg align-middle mr-2\"></i>Tari Greget Mpok</div><div class=\"text-slate-400\">Tari Greget Mpok  melukiskan dinamika pergaulan khas remaja putri Betawi khususnya di Kota Depok.</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-from-right text-indigo-600 text-lg align-middle mr-2\"></i>Tari Jari Manis</div><div class=\"text-slate-400\">Tari Jari Manis, merupakan singkatan dari Jangan Iri Manis. Tari ini merupakan sebuah karya yang berpijak pada tari cokek.</div></li></ul></div><div class=\"text-slate-400 mt-2\">Tari Greget Mpok dan Jari Manis ditampilkan pada acara HUT ke-22 Kota Depok.</div></li></ul><div class=\"container-fluid mt-8\"><div class=\"grid grid-cols-1 pb-4\"><div class=\"md:text-left text-center\"><h5 class=\"text-xl font-semibold mb-4\">Mars dan Hymne Kota Depok</h5><p class=\"text-slate-400\">Berdasarkan Keputusan Walikota Depok Nomor: 431/256/Kpts/Disporyata/Huk/2022 tentang Penetapan Mars Depok Sejahtera dan Hymne Damai Depokku sebagai Mars dan Hymne Kota Depok.</p><p class=\"text-slate-400\"><ul class=\"list-none text-slate-400 mt-3\"><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Penulis Lirik: K.H. Mohammad Idris</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Arranser/Lagu/Musik/Mars:  Noer Shofa</div></li><li class=\"mt-2\"><div class=\"mb-0\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Arranser/Lagu/Musik/Hymne: Djoko Priyono (Koko Thole)</div></li></ul></p><p class=\"text-slate-400 mt-2\">Berikut adalah syair Mars dan Hymne Kota Depok:</p></div></div></div><div class=\"container-fluid\"><div class=\"relative grid md:grid-cols-2 grid-cols-1 mt-2 gap-[30px]\"><div class=\"group px-6 py-8 bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600\"><div class=\"content\"><a href=\"\" class=\"text-xl font-semibold hover:text-indigo-600 duration-500 ease-in-out\">Mars Depok - Depok Sejahtera</a><p class=\"text-slate-400 mt-4\">Fajar menyingsing menyapa<br>Suasana damai kota<br>Sang surya tersenyum ceria<br>Sambut warga nan bahagia<br>Pancasila dasar Negara<br>Generasi penuh asa<br>Setia PARICARA DHARMA<br>Menuju Depok sejahtera<br><br>Reff:<br>Depok, berjuang dengan jiwa raga<br>Depok, berkorban demi sesama<br>Singsingkan lengan, songsong masa depan<br>Demi Indonesia berjaya</p></div></div><div class=\"group px-6 py-8 bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600\"><div class=\"content\"><a href=\"\" class=\"text-xl font-semibold hover:text-indigo-600 duration-500 ease-in-out\">Hymne Depok - Damai Depokku</a><p class=\"text-slate-400 mt-4\">Harmoni wargaku<br>Indahnya rumahku<br>Asri lingkunganku<br>Damai kotaku<br>Cahaya keluhuran kota<br>Pedoman Paricara Dharma<br>Memancarkan semangat raga<br>Menebar cinta kasih sesama<br><br>Reff:<br>Depokku idaman penuh asa<br>Pancasila dasar Negara<br>Bhineka Tunggal Ika<br>Panduan untuk maju berkarya</p></div></div></div></div>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(4, 'Geografi', 'geografi', 'img/content/geografi.png', '<p class=\"text-slate-400\">Secara astronomis Kota Depok terletak pada koordinat 6° 19’00’’ - 6° 28’00’’ Lintang Selatan dan 106° 43’00’’ - 106° 55’00’’ Bujur Timur. Batas wilayahnya secara geografis berbatasan langsung dengan Kota Jakarta atau berada dalam lingkungan wilayah Jabotabek. Bentang alam Kota Depok dari Selatan ke Utara merupakan daerah dataran rendah - perbukitan bergelombang lemah, dengan elevasi antara 50 hingga 140 meter di atas permukaan laut, dengan kemiringan lerengnya kurang dari 15%.</p><p class=\"text-slate-400 mt-3\">Kota Depok sebagai wilayah termuda di Jawa Barat, mempunyai luas wilayah sekitar 200,29 km2. Kondisi geografisnya dialiri oleh sungai-sungai besar yaitu Sungai Ciliwung dan Cisadane serta 13 sub Satuan Wilayah Aliran Sungai. Di samping itu terdapat pula 26 situ.</p><p class=\"text-slate-400 mt-3\">Data luas situ pada tahun 2005 sebesar 169,68 ha, dengan kualitas air rata-rata buruk akibat tercemar. Kondisi topografi berupa dataran rendah bergelombang dengan kemiringan lereng yang landai, menyebabkan masalah banjir di beberapa wilayah, terutama kawasan cekungan antara beberapa sungai yang mengalir dari selatan menuju utara, yaitu Kali Angke, Sungai Ciliwung, Sungai Pesanggrahan dan Kali Cikeas.</p><ul class=\"list-none text-slate-400 mt-3\"><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Sumber Daya Lahan</li><p class=\"text-slate-400 ml-8\">Sumber daya lahan Kota Depok mengalami tekanan sejalan dengan perkembangan kota yang demikian pesat. Berdasarkan Analisis Data Revisi RT RW Kota Depok (tahun 2000-2010) tentang pemanfaatan ruang kota, kawasan pemukiman pada tahun 2005 mencapai 8.915.09 ha (44,31%) dari total pemanfaatan ruang Kota Depok. Pada tahun 2005 kawasan terbuka hijau tercatat 10.106,14 ha (50,23%) dari luas wilayah Depok atau terjadi penyusutan sebesar 0,93 % dari data tahun 2000.</p><p class=\"text-slate-400 ml-8\">Meningkatnya tutupan permukaan tanah, berdampak terhadap penurunan kondisi alam Kota Depok, terutama disebabkan tekanan dari pemanfaatan lahan untuk kegiatan pemukiman yang mencapai lebih dari 44,31 % dari luas wilayah kota. Luas kawasan terbangun tahun 2005 mencapai 10.013,86 ha (49,77%) dari luas wilayah Kota Depok, atau meningkat 3,59 % dari data tahun 2000. Luas kawasan terbangun sampai dengan tahun 2010 diproyeksikan mencapai 10.720,59 ha (53,28%) atau meningkat 3,63 % dari data tahun 2005. Luas ruang terbuka (hijau) pada tahun 2010 diproyeksikan seluas 9.399,41 ha (46,72%) atau menyusut 3,63 % dari tahun 2005. Diprediksikan pada tahun 2010, dari 53,28% total luas kawasan terbangun, hampir 45,49% akan tertutup oleh perumahan dan perkampungan. Jasa dan perdagangan akan menutupi 2,96% total luas kota, industri 2,08% total luas kota, pendidikan tinggi 1,49% total luas kota, dan kawasan khusus 1,27% total luas kota. Meningkatnya jumlah tutupan permukaan tanah tersebut, ditambah dengan berubahnya fungsi saluran irigasi menjadi saluran drainase, diprediksikan akan menyebabkan terjadinya genangan dan banjir di beberapa kawasan, yang berdampak terhadap penurunan kondisi Kota Depok.</p><p class=\"text-slate-400 ml-8\">Diperkirakan pembangunan pertanian tanaman pangan di Kota Depok di masa yang akan datang menghadapi suatu kondisi, dimana lahan sawah akan jadi semakin menyempit. Pada tahun 2010 diperkirakan lahan sawah akan mengecil bila dibandingkan kondisi sekarang. Penyempitan yang paling parah terjadi pada lahan sawah tadah hujan, disusul sawah irigasi sederhana PU.</p><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Sumber Daya Air</li><p class=\"text-slate-400 ml-8\">Kota Depok memiliki sumber daya air yang terdiri dari dua sumber yaitu sungai dan situ. Secara umum sungai-sungai di Kota Depok masuk kedalam dua satuan wilayah sungai besar, yaitu sungai Ciliwung dan Cisadane. Sungai-sungai tersebut dibagi lagi menjadi 13 satuan wilayah aliran sungai, yaitu sungai Ciliwung, Kali Baru, Pesanggrahan, Angke, Sugutamu, Cipinang, Cijantung, Sunter, Krukut, Saluran Cabang Barat, Saluran Cabang Tengah dan sungai Caringin.</p><p class=\"text-slate-400 ml-8\">Kota Depok memiliki 25 situ yang tersebar di wilayah timur, barat dan tengah. Luas keseluruhan situ yang ada di Kota Depok berdasarkan data tahun 2005 adalah seluas 169,68 ha, atau sekitar 0,84 % luas Kota Depok. Kedalaman situ bervariasi antara 1 sampai 4 meter, dengan kualitas air yang paling buruk terdapat pada Situ Gadog dan Rawa Besar. Selain penurunan kualitas air, kawasan situ juga mengalami degradasi luasan.</p><p class=\"text-slate-400 ml-8\">Pembangunan perikanan di Kota Depok juga menghadapi masalah yang sama dengan pertanian tanaman pangan, yaitu penyempitan lahan air kolam. Berdasarkan data tahun 2005, luas areal air kolam adalah 242,21 ha dibandingkan pada tahun 2000 seluas 290,54 ha.</p></ul>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(5, 'Visi dan Misi', 'visi-misi', 'img/content/visi-misi.png', '<h5 class=\"text-xl font-semibold mb-4\">Periode 2021-2026</h5><p class=\"text-slate-400\">Visi Kota Depok:</p><p class=\"text-slate-400\">\"Kota Depok yang Maju, Berbudaya dan Sejahtera\"</p><p class=\"text-slate-400 mt-10\">Misi Kota Depok:</p><ol class=\"list-none text-slate-400\"><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-1-box text-indigo-600 text-lg align-middle mr-2\"></i>Meningkatkan Pembangunan Infrastruktur Berbasis Teknologi dan Berwawasan Lingkungan.</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-2-box text-indigo-600 text-lg align-middle mr-2\"></i>Meningkatkan Tata Kelola Pemerintahan dan Pelayanan Publik yang Modern dan Partisipatif.</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-3-box text-indigo-600 text-lg align-middle mr-2\"></i>Mewujudkan Masyarakat yang Religius dan Berbudaya Berbasis Kebhinekaan dan Ketahanan Keluarga.</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-4-box text-indigo-600 text-lg align-middle mr-2\"></i>Mewujudkan Masyarakat yang Sejahtera, Mandiri, dan Berdaya Saing.</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-5-box text-indigo-600 text-lg align-middle mr-2\"></i>Mewujudkan Kota yang Sehat, Aman, Tertib dan Nyaman.</li></ol>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(6, 'Struktur Daerah', 'struktur-daerah', 'img/content/pemerintahan.jpg', '<p class=\"text-slate-400\">Depok adalah sebuah kota yang berada di wilayah provinsi Jawa Barat, Indonesia. Lokasi kota ini terletak tepat di selatan Jakarta, yakni antara Jakarta dan Bogor. Dahulu Depok adalah kecamatan dalam wilayah Kabupaten Bogor, yang kemudian mendapat status Kota pada tanggal 27 April 1999. Pada tahun 2021, jumlah penduduk Kota Depok sebanyak 1.886.890 jiwa dengan kepadatan 9.421 jiwa/km².</p><p class=\"text-slate-400 mt-3\">Depok awalnya dikenal dengan nama Gemeente Depok atau desa otonom pada zaman Hindia Belanda. Kota Depok sebagai wilayah termuda di Jawa Barat, mempunyai luas wilayah sekitar 200,29 km². Kondisi geografisnya dialiri oleh sungai-sungai besar yaitu Sungai Ciliwung dan Cisadane serta 13 sub Satuan Wilayah Aliran Sungai. Di samping itu juga terdapat 26 Situ yang terbentang.</p><p class=\"text-slate-400 mt-3\">Secara administratif wilayah yang berdasarkan Undang-Undang No. 15 Tahun 1999 tentang terbentuknya Kota Depok, pada tanggal 27 April 1999, Kota Administratif Depok berubah menjadi Kotamadya. Sejak saat itu Kota Depok memiliki batas-batas wilayahnya sendiri.</p><p class=\"text-slate-400 mt-3\">Wilayah Kota Depok berbatasan dengan tiga kabupaten dan satu Provinsi. Batas-batas wilayah Kota Depok secara jelas adalah sebagai berikut:<ol class=\"list-decimal text-slate-400\"><li class=\"mb-1 ml-4\">Sebelah Utara berbatasan dengan Kecamatan Ciputat Kabupaten Tangerang Selatan dan Wilayah Daerah Khusus Ibukota Jakarta.</li><li class=\"mb-1 ml-4 mt-2\">Sebelah Timur berbatasan dengan Kecamatan Pondokgede Kota Bekasi dan Kecamatan Gunung Putri Kabupaten Bogor.</li><li class=\"mb-1 ml-4 mt-2\">Sebelah Selatan berbatasan dengan Kecamatan Cibinong dan Kecamatan Bojonggede Kabupaten Bogor.</li><li class=\"mb-1 ml-4 mt-2\">Sebelah Barat berbatasan dengan Kecamatan Parung dan Kecamatan Gunungsindur Kabupaten Bogor.</li></ol></p>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(7, 'Perundang-Undangan', 'perundang-undangan', 'img/content/pemerintahan.jpg', '', '2022-12-08 16:29:52', '2022-12-08 16:29:52');
INSERT INTO `content` (`id`, `nama`, `slug`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(8, 'Penghargaan', 'penghargaan', 'img/content/penghargaan.jpg', '<h5 class=\"text-xl font-semibold mb-4\">Penghargaan Kota Depok</h5><table id=\"awardTable\" class=\"stripe hover\" style=\"width:100%; padding-top: 1em;  padding-bottom: 1em;\"><thead><tr><th data-priority=\"1\">Tahun</th><th data-priority=\"2\">Tanggal</th><th data-priority=\"3\">Penghargaan</th><th data-priority=\"4\">Deskripsi</th></tr></thead><tbody><tr><td>2021</td><td>01/02/2021</td><td>Nilai Predikat A untuk Kepatuhan Syariah</td><td>Pusat Kajian Strategis (Puskas) Baznas RI memberikan penilaian berbasis riset kepada Baznas Kota Depok Jawa Barat dengan nilai predikat A, untuk kategori kepatuhan syariah</td></tr><tr><td>2021</td><td>03/03/2021</td><td>Karya Bhakti Satpol PP</td><td>Menteri Dalam Negeri Republik Indonesia, Tito Karnavian, dalam acara Syukuran Hari Ulang Tahun (HUT) ke-71 Satpol PP dan ke-59 Satuan Perlindungan Masyarakat (Satlinmas) memberikan penghargaan kepada Satuan Polisi Pamong Praja (Satpol PP) Kota Depok berupa penghargaan Karya Bhakti Satpol PP</td></tr><tr><td>2021</td><td>29/03/2021</td><td>Duta Puteri Pendidikan Jawa Barat</td><td>Fayanna Ailisha Davianny, siswi kelas 10 SMA Islam Dian Didaktika dinobatkan sebagai Duta Puteri Pendidikan Jawa Barat Tahun 2021</td></tr><tr><td>2021</td><td>29/03/2021</td><td>Kinerja Baik untuk Dinas Kependudukan dan Pencatatan Sipil Kota Depok</td><td>Dinas Kependudukan dan Pencatatan Sipil termasuk ke dalam Dinas yang berkinerja baik dalam memberikan pelayanan kependudukan. Depok termasuk dalam kategori 10 Kota dan Kabupaten dengan jumlah Penduduk besar di atas 1,5 juta jiwa.</td></tr><tr><td>2021</td><td>01/07/2021</td><td>Kota Tipe A peringkat ketiga untuk Kota Depok</td><td>Pemerintah Kota Depok meraih penghargaan dari Badan Kepegawaian Nasional Award Tahun 2021 untuk kategori Implementasi Sistem Aplikasi Pelayanan Kepegawaian (SAPK) dan Pemanfaatan Computer Assisted Test (CAT) Tingkat Kota Tipe A peringkat ketiga.</td></tr><tr><td>2021</td><td>05/07/2021</td><td>Kader Terbaik Ketiga Tingkat Provinsi Jawa Barat</td><td>Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga (TP-PKK) Kelurahan Duren Mekar Kecamatan Bojongsari, Selvi Winarni, berhasil meraih juara kader terbaik ketiga pada Lomba Kader PKK Tingkat Provinsi Jawa Barat.</td></tr><tr><td>2021</td><td>29/07/2021</td><td>Kota Layak Anak (KLA) dengan predikat Nindya</td><td>Kota Depok berhasil mempertahankan predikat Nindya pada ajang penghargaan Kota Layak Anak (KLA) Tahun 2021 yang digelar Kementerian Pemberdayaan Perempuan dan Perlindungan Anak (PPPA) Republik Indonesia. Dengan raihan tersebut, maka Kota Depok  telah meraih predikat yang sama sebanyak empat kali secara berturut-turut yaitu pada 2017, 2018, 2019, dan 2021.</td></tr><tr><td>2021</td><td>10/09/2021</td><td>Dinas Kependudukan dan Pencatatan Sipil Kota Depok meraih Kinerja Terbaik Kedua</td><td>Dinas Kependudukan dan Pencatatan Sipil Kota Depok meraih juara dua penilaian kinerja terbaik Administrasi Kependudukan (Adminduk) Juara se-Jawa Barat.</td></tr><tr><td>2021</td><td>14/09/2021</td><td>Unggul dalam Lomba Kelurahan Tingkat Provinsi</td><td>Kelurahan Tanah Baru mewakili Kota Depok berhasil unggul dalam lomba Kelurahan tingkat Provinsi Jawa Barat.</td></tr><tr><td>2021</td><td>15/09/2021</td><td>Juara Harapan 3 di Lomba Perpustakaan Tingkat Provinsi Jawa Barat</td><td>Perpustakaan Kelurahan Baktijaya berhasil meraih juara harapan tiga pada Lomba Perpustakaan Desa/Kelurahan Tingkat Provinsi Jawa Barat.</td></tr><tr><td>2021</td><td>12/10/2021</td><td>Puteri Pendidikan Indonesia Tahun 2021</td><td>Fayyana Ailisha Davianny terpilih sebagai Puteri Pendidikan Indonesia Tahun 2021.</td></tr><tr><td>2021</td><td>12/10/2021</td><td>Jajaka dan Mojang Wakil 2 Jawa Barat Tahun 2021</td><td>Mahathir Mohammad dan Risya Cahya Fadhila dinobatkan sebagai Jajaka dan Mojang Wakil 2 Jawa Barat Tahun 2021.</td></tr><tr><td>2021</td><td>12/10/2021</td><td>Ruang Bermain Ramah Anak (RBRA)</td><td>Dinas Lingkungan Hidup dan Kebersihan (DLHK) Kota Depok meraih penghargaan untuk Taman Lembah Gurame dengan predikat Ruang Bermain Ramah Anak (RBRA) Tahun 2019. Penghargaan tersebut diberikan oleh Kementerian Pemberdayaan Perempuan dan Perlindungan Anak (KPPPA) RI.</td></tr><tr><td>2021</td><td>13/10/2021</td><td>Anugerah Parahita Ekapraya (APE)</td><td>Ketua TP-PKK Kota Depok, Elly Farida menerima Anugerah Parahita Ekapraya (APE) tahun 2020 Kategori Utama dari Kementerian Pemberdayaan Perempuan dan Perlindungan Anak (KPPPA) RI.</td></tr><tr><td>2021</td><td>26/10/2021</td><td>Anugerah Paritrana Tahun 2020 atau Peringkat 3 Penghargaan Jaminan Sosial Ketenagakerjaan</td><td>Kota Depok meraih peringkat ketiga Penghargaan Jaminan Sosial Ketenagakerjaan atau Anugerah Paritrana Tahun 2020 kategori Pemerintah Kabupaten/Kota pada ajang Paritrana Award dari Provinsi Jawa Barat.</td></tr><tr><td>2021</td><td>01/11/2021</td><td>Warisan Budaya Takbenda (WBTb)</td><td>Gong Si Bolong ditetapkan sebagai Warisan Budaya Takbenda (WBTb) dalam Sidang Penetapan Warisan Budaya Takbenda Indonesia 2021 oleh Kementerian Pendidikan Kebudayaan Riset dan Teknologi.</td></tr><tr><td>2021</td><td>09/11/2021</td><td>Tenaga Kesehatan Teladan Tingkat Provinsi Jawa Barat (Jabar) Tahun 2021</td><td>Lima tenaga kesehatan (nakes) di Kota Depok mendapatkan penghargaan sebagai Tenaga Kesehatan Teladan Tingkat Provinsi Jawa Barat (Jabar) Tahun 2021. Diantaranya:<ol class=\"list-decimal\"><li class=\"ml-4\">Juara I kategori dokter gigi dari Puskesmas Kemirimuka, Faradilla Mauliningrum;</li><li class=\"ml-4\">Juara II kategori perawat dari Puskesmas Jatijajar, Wa Ode Moliyuni;</li><li class=\"ml-4\">Juara I kategori bidan dari Puskesmas Mekarsari, Ratih Rahmadhanny;</li><li class=\"ml-4\">Juara III kategori nakes masyarakat atau tenaga promosi kesehatan dan ilmu perilaku atau penyuluh kesehatan dari Puskesmas Sukmajaya, Sari Puspito Donowati; dan</li><li class=\"ml-4\">Juara II kategori tenaga gizi atau nutrisionis dari Puskesmas Sawangan, Indah Rozalina.</li></ol></td></tr><tr><td>2021</td><td>16/11/2021</td><td>Bunda PAUD Kelurahan Tanah Baru Tembus 10 Besar Nasional</td><td>Bunda PAUD Kelurahan Tanah Baru, Frina Shaurin, mendapatkan penghargaan Apresiasi Juara 1 Teladan Utama Bunda Pendidikan Anak Usia Dini (PAUD) tingkat Kecamatan dan Kelurahan mewakili Kota Depok.</td></tr><tr><td>2021</td><td>29/11/2021</td><td>Anugerah KORPRI Award Tahun 2021</td><td>Ketua Dewan Pengurus KORPRI Kota Depok, Supian Suri, menerima Anugerah Korpri Award Tahun 2021 kategori kepengurusan dari Dewan Pengurus KORPRI Nasional.</td></tr><tr><td>2021</td><td>07/12/2021</td><td>Predikat Wajar Tanpa Pengecualian (WTP) 10 kali berturut-turut</td><td>Kota Depok sukses meraih predikat Wajar Tanpa Pengecualian (WTP) dari Badan Pemeriksa Keuangan (BPK) Republik Indonesia 10 kali berturut-turut dari tahun 2012.</td></tr><tr><td>2021</td><td>07/12/2021</td><td>Top Inovasi Jawa Barat 2021</td><td>Dinas Kesehatan (Dinkes) Kota Depok mendapatkan penghargaan sebagai Finalis Top Inovasi Jawa Barat Tahun 2021, sebuah prestasi yang diraih melalui Inovasi Surat Jaminan Pelayanan (SJP) Online.</td></tr><tr><td>2021</td><td>08/12/2021</td><td>Penghargaan Standar Nasional Indonesia (SNI) Pasar Rakyat Tahun 2021</td><td>Pasar Cisalak berhasil mendapat penghargaan Standar Nasional Indonesia (SNI) Pasar Rakyat Tahun 2021 dari Kementerian Perdagangan Republik Indonesia.</td></tr><tr><td>2021</td><td>09/12/2021</td><td>Finalis Top 45 Inovasi Pelayanan Publik Jabar 2021</td><td>Program Sekolah Ayah Bunda besutan Dinas Perlindungan Anak, Pemberdayaan Masyarakat dan Keluarga (DPAPMK) Kota Depok menyabet penghargaan dari Pemerintah Provinsi Jawa Barat. Penghargaan didapat sebagai Finalis Top 45 Inovasi Pelayanan Publik Jabar 2021.</td></tr><tr><td>2021</td><td>13/12/2021</td><td>Penyusun Dokumen Informasi Kinerja Pengelolaan Lingkungan Hidup Daerah (DIKPLHD) Tahun 2020</td><td><ol class=\"list-decimal\"><li class=\"ml-4\">Kategori Kabupaten/Kota diraih oleh Ety Suryahati, Kepala Dinas Lingkungan Hidup dan Kebersihan (DLHK);</li><li class=\"ml-4\">Kategori Individu/Kelompok Masyarakat Peduli Lingkungan (Kategori Perintis Lingkungan) diraih Sanusi dan Heri Syaefudin;</li><li class=\"ml-4\">Kategori Program Kampung Iklim (Proklim) diraih RW. 10 Kelurahan Baktijaya, Kecamatan Sukmajaya dan RW. 07 Kelurahan Ratujaya, Kecamatan Cipayung;</li><li class=\"ml-4\">Sekolah Berbudaya Lingkungan (Adiwiyata) diraih oleh SDN Leuwinanggung 2 dan SMP Ar-Ridha Al Salaam.</li></ol></td></tr><tr><td>2021</td><td>13/12/2021</td><td>Penghargaan Terbaik 1 Lomba Kampung Keluarga Berkualitas Tingkat Provinsi Jawa Barat</td><td>Penghargaan diberikan kepada Ketua Kampung KB Cempaka RW 09 Kelurahan Depok Jaya, Nurdiansyah, dalam Lomba Kampung Berkualitas Tingkat Provinsi Jawa Barat.</td></tr><tr><td>2021</td><td>14/12/2021</td><td>Depok Smart Pole</td><td>Depok meraih Penghargaan sebagai Kota Cerdas atau Smart City dari Kementerian Kominfo untuk Depok Smart Pole (DSP).</td></tr><tr><td>2021</td><td>15/12/2021</td><td>Juara I Lomba Posyandu Tingkat Provinsi Jawa Barat</td><td>Posyandu Karunia RW. 01 Kelurahan Beji Timur, Kecamatan Beji berhasil unggul meraih  juara pertama pada Lomba Posyandu Tingkat Provinsi Jawa Barat (Jabar).</td></tr><tr><td>2021</td><td>15/12/2021</td><td>Kelurahan Sadar Hukum</td><td>Kelurahan Rangkapan Jaya Baru, Kelurahan Mampang serta Kelurahan Bojong Pondok Terong meraih predikat sebagai Kelurahan Sadar Hukum dari Kementerian Hukum dan Hak Asasi Manusia (Kemenkumham) Republik Indonesia.</td></tr><tr><td>2021</td><td>16/12/2021</td><td>Lomba 10 Program PKK Tahun 2021</td><td>Tim Penggerak Pemberdayaan Kesejahteraan Keluarga (TP-PKK) Kelurahan Beji telah memborong banyak prestasi di lima kategori pada Lomba 10 Program PKK Tahun 2021 Tingkat Provinsi Jawa Barat, yaitu:<ol class=\"list-decimal\"><li class=\"ml-4\">Juara I Lomba Tertib Administrasi;</li><li class=\"ml-4\">Juara I Lomba Usaha Peningkatan Pendapatan Keluarga (UP2K);</li><li class=\"ml-4\">Juara II Lomba Pola Asuh Anak dan Remaja (PAAR);</li><li class=\"ml-4\">Juara Harapan I Lomba Hatinya PKK;</li><li class=\"ml-4\">Juara Harapan I Lomba Pelaksanaan Inspeksi Visual Asetat (IVA) Test;</li><li class=\"ml-4\">Juara Harapan III Lomba Lingkungan Bersih dan Sehat (LBS); dan</li><li class=\"ml-4\">Juara Harapan III Lomba Perilaku Hidup Bersih dan Sehat (PHBS).</li></ol></td></tr><tr><td>2021</td><td>18/12/2021</td><td>Anugerah Kebudayaan Indonesia Tahun 2021</td><td>Kementerian Riset dan Teknologi (Kemenristek) memberikan Anugerah Kebudayaan Indonesia Tahun 2021 pada Kota Depok melalui Dinas Pemuda, Olah Raga, Budaya dan Pariwisata (Disporyata) sebagai Pelopor dan Pembaru.</td></tr><tr><td>2021</td><td>20/12/2021</td><td>Juara III Penilaian Kinerja Pemerintah Daerah</td><td>Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR) Kota Depok meraih peringkat ketiga pada  penilaian kinerja Pemerintah Daerah Bidang Kebinamargaan dalam penyelenggaraan jalan kategori Pemerintah Kota.</td></tr><tr><td>2021</td><td>27/12/2021</td><td>Penghargaan Kampung KB Award dari BKKBN</td><td>Badan Kependudukan dan Keluarga Berencana Nasional (BKKBN) Jawa Barat memberikan penghargaan Kampung KB Award kepada Wali Kota Depok atas dukungan dan komitmen dalam mengikuti kegiatan Apresiasi Kampung Keluarga Berkualitas Terbaik Tingkat Provinsi Jawa Barat Tahun 2021.</td></tr><tr><td>2022</td><td>10/01/2022</td><td>Piagam Penghargaan sebagai Sekolah Adiwiyata Nasional</td><td>Piagam Penghargaan sebagai Sekolah Adiwiyata Nasional Tahun 2021 dari Kementerian Lingkungan Hidup dan Kehutanan Republik Indonesia diberikan kepada SMPN 5 Depok, SMPIT Ummul Quro Depok, SDIT Mawaddah, SDIT Miftahul Ulum dan SDIT Umul Quro\' Depok.</td></tr><tr><td>2022</td><td>31/01/2022</td><td>Juara II Administrasi Kependudukan Se-Jawa Barat</td><td>Juara dua penilaian kinerja terbaik Administrasi Kependudukan (Adminduk) se-Jawa Barat diberikan kepada Dinas Kependudukan dan Pencatatan Sipil Kota Depok. Penghargaan tersebut diberikan bertepatan dengan peringatan hari jadi ke-5 Disdukcapil Provinsi Jabar.</td></tr><tr><td>2022</td><td>18/03/2022</td><td>Penghargaan dari Gubernur Jawa Barat</td><td>Gubernur Jawa Barat memberikan penghargaan dan apresiasi setinggi-tingginya kepada Dinas Pemadam Kebakaran dan Penyelamatan Kota Depok atas kinerja terbaiknya dalam penanggulangan kebakaran, evakuasi kemanusiaan dan turut andil menjaga garda terdepan memberantas Virus Covid-19 di Kota Depok.</td></tr><tr><td>2022</td><td>28/03/2022</td><td>Penyelenggara Pelayanan Publik kategori ‘Sangat Baik’ di Tahun 2021</td><td>Dari Kemenpan RB, Disdukcapil Kota Depok mendapat penghargaan sebagai penyelenggara pelayanan publik kategori ‘Sangat Baik’ tahun 2021. Penghargaan diterima oleh Disdukcapil dari Kemenpan RB di Tahun 2022.</td></tr><tr><td>2022</td><td>05/07/2022</td><td>Juara 1 Lomba Keluarga Teladan</td><td>Prestasi ditorehkan oleh pasangan suami istri Asy\'ari dan Kristianawati, warga Kecamatan Cilodong yang berhasil meraih Juara I Keluarga Teladan tingkat Provinsi Jawa Barat (Jabar) Tahun 2022. Penghargaan diberikan oleh Wakil dari Kota Depok.</td></tr><tr><td>2022</td><td>11/07/2022</td><td>Apresiasi Bunda PAUD Tingkat Nasional Teladan I</td><td>Teladan Satu Apresiasi Bunda Pendidikan Anak Usia Dini (PAUD) tingkat Nasional diraih Bunda PAUD Kelurahan Tanah Baru Kota Depok, Frina Shaurin. Penghargaan diberikan oleh Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi RI.</td></tr><tr><td>2022</td><td>17/07/2022</td><td>Lomba Jakarta Fire Fighter Challenge Braveheart (JFCC-B) Tahun 2022 kategori Umum</td><td>Penghargaan diberikan kepada Dinas Pemadam Kebakaran (Damkar) dan Penyelamatan Kota Depok.</td></tr><tr><td>2022</td><td>20/07/2022</td><td>Penghargaan Nirwasita Tantra Tahun 2021</td><td>Penghargaan Nirwasita Tantra adalah komitmen Pemkot Depok dalam menjaga kelestarian lingkungan yaitu pembuatan serta pemanfaatan Lubang Resapan Biopori (LRB), Sumur Resapan (SR), penyediaan Ruang Terbuka Hijau (RTH) serta terjaganya iklim di Kota Depok yang dinilai melalui alat pengukur udara atau Air Quality Monitoring System (AQMS).</td></tr><tr><td>2022</td><td>22/07/2022</td><td>Penghargaan Dafa Award 2022</td><td>Penghargaan Dafa Award 2022 kategori Partisipasi Anak dalam Perencanaan Pembangunan (PAPP) Terbaik  diselenggarakan oleh Forum Anak Nasional. Penghargaan diperoleh Forum Anak Kota Depok.</td></tr><tr><td>2022</td><td>22/07/2022</td><td>Predikat Nindya pada Ajang Penghargaan Kota Layak Anak Tahun 2022</td><td>Pemerintah Kota Depok memperoleh penghargaan Kota Layak Anak yang diselenggarakan oleh Kementerian Pemberdayaan Perempuan dan Perlindungan Anak Republik Indonesia. Penghargaan diterima oleh Wali Kota Depok, Mohammad Idris bersama Kepala Dinas Pemberdayaan Perempuan dan Perlindungan Anak Pengendalian Penduduk dan Keluarga Berencana (DP3AP2KB) Kota Depok.</td></tr><tr><td>2022</td><td>28/07/2022</td><td>Penghargaan sebagai Inspirator Anak Jabar dari Gubernur Jawa Barat</td><td>Ketua Forum Anak Kota Depok, Buti Adia Darma, menerima penghargaan sebagai Inspirator Anak Jabar, dari Gubernur Jawa Barat, Ridwan Kamil. Penghargaan tersebut diserahkan pada acara puncak Hari Anak Nasional dan Hari Keluarga Nasional tingkat Jawa Barat, di Kabupaten Kuningan.</td></tr><tr><td>2022</td><td>28/07/2022</td><td>Juara I Lomba P2L tingkat Provinsi Jawa Barat</td><td>Kota Depok meraih Juara I Lomba Pekarangan Pangan Lestari (P2L) tingkat Provinsi Jawa Barat, melalui Kelompok Wanita Tani (KWT) Anggrek RW. 02 Kelurahan Duren Seribu (Duser), Kecamatan Bojongsari. Inovasi yang diunggulkan dalam Lomba P2L ini yaitu Tumpangsari Tanaman (Turiman) dan pestisida nabati untuk pencegahan dan pengendalian hama yang terbuat dari rebusan air jengkol yang difermentasi (Pesnab Cedamakol).</td></tr><tr><td>2022</td><td>08/08/2022</td><td>Prestasi di Ajang Olimpiade Sains Nasional (OSN) SMP tingkat Nasional 2022</td><td>Dua pelajar Sekolah Menengah Pertama (SMP) di Kota Depok berhasil meraih prestasi di ajang Olimpiade Sains Nasional (OSN) SMP tingkat Nasional 2022. Mereka adalah Ester Gloria Abigail Mamesah peraih medali perak pada lomba Matematika asal SMP Negeri 2 Depok, serta Galang Radityowarman peraih medali perak lomba Ilmu Pengetahuan Alam asal SMP Lazuardi GIS Kota Depok.</td></tr><tr><td>2022</td><td>23/08/2022</td><td>Penghargaan BKN Award tahun 2022 kategori Penerapan Pemanfaatan Data Sistem Informasi dan Computer Assisted Test (CAT) Pemerintah Kota Tipe Besar</td><td>Kota Depok menerima penghargaan dalam Badan Kepegawaian Negara (BKN) Award Tahun 2022 kategori Penerapan Pemanfaatan Data Sistem Informasi dan Computer Assisted Test (CAT) Pemerintah Kota Tipe Besar. Penghargaan tersebut diberikan oleh Wakil Kepala BKN, Supranawa Yusuf, di Aula gedung Sate.</td></tr><tr><td>2022</td><td>23/08/2022</td><td>Penghargaan Juara Terbaik III Lomba Apresiasi Kampung Keluarga Berkualitas Tingkat Provinsi Jawa Barat</td><td>Kampung Keluarga Berkualitas (KB) Kasih Ibu RW. 14, Kelurahan Bojongsari mendapatkan piagam penghargaan dari Pemerintah Kota (Pemkot) atas prestasi yang telah ditorehkannya di Lomba Apresiasi Kampung KB tingkat Provinsi Jawa Barat, beberapa bulan lalu. Pada lomba tersebut, Kampung KB Kasih Ibu RW. 14 keluar sebagai juara III.</td></tr><tr><td>2022</td><td>12/09/2022</td><td>Pembinaan Terbaik dalam Penegakan Peraturan Daerah dan Peraturan Kepala Daerah Tahun 2022</td><td>Satuan Polisi Pamong Praja (Satpol PP) Kota Depok berhasil menyabet penghargaan Pembinaan Terbaik dalam Penegakan Peraturan Daerah dan Peraturan Kepala Daerah Tahun 2022. Penghargaan tersebut diberikan oleh Direktur Jenderal (Dirjen) Bina Administrasi Kewilayahan (Adwil) Kementerian Dalam Negeri (Kemendagri) Republik Indonesia (RI).</td></tr><tr><td>2022</td><td>12/09/2022</td><td>Penghargaan Evaluasi Administrasi dan Kependudukan (Adminduk) Peringkat III Tingkat Provinsi Jawa Barat</td><td>Disdukcapil meraih piagam Penghargaan Evaluasi Administrasi dan Kependudukan (Adminduk) sebagai Juara III Tahun 2022 Kategori Penduduk Besar di Tingkat Provinsi Jawa Barat.</td></tr><tr><td>2022</td><td>14/09/2022</td><td>Penghargaan Lencana Melati untuk Gerakan Pramuka Tahun 2022</td><td>Wali Kota Depok sekaligus Majelis Pembina Cabang (Mabicab) Gerakan Pramuka Kota Depok, Mohammad Idris menerima penghargaan Lencana Melati dari Gubernur Jawa Barat (Jabar), Ridwan Kamil. Penghargaan tersebut diberikan saat upacara peringatan Hari Pramuka ke-61 tingkat Provinsi Jawa Barat di Halaman Gedung Sate, Kota Bandung.</td></tr><tr><td>2022</td><td>20/09/2022</td><td>Penghargaan Terbaik II Pemaparan Program Kerja Unggulan Dekranasda Tingkat Provinsi Jawa Barat</td><td>Bunda Elly, Ketua Dekranasda Kota Depok diamanahkan menjadi Ketua Koordinator Dekranasda Wilayah IV yang terdiri dari Dekranasda Kota Depok, Kota Bogor, Kabupaten Bogor, Kota Bekasi, dan Kabupaten Bekasi. Dalam waktu tujuh menit, Bunda Elly berhasil menjabarkan program unggulan kelima wilayah tersebut.</td></tr><tr><td>2022</td><td>22/09/2022</td><td>Predikat Wajar Tanpa Pengecualian (WTP) 11 kali Berturut-turut</td><td>Pemerintah Kota Depok mendapatkan penghargaan dari Menteri Keuangan, Sri Mulyani Indrawati, dalam kategori Opini Wajar Tanpa Pengecualian (WTP) 11 kali berturut-turut dari tahun 2012, pada acara Rapat Kerja Nasional Akuntansi dan Pelaporan Keuangan Pemerintah Tahun 2022.</td></tr><tr><td>2022</td><td>26/09/2022</td><td>Penghargaan Gerakan Pembagian 10 Juta Bendera Merah Putih</td><td>Pemerintah Kota Depok menerima piagam penghargaan Gerakan Pembagian 10 Juta Bendera Merah Putih dari Kementerian Dalam Negeri. Pada momen ini, Kota Depok berhasil mengumpulkan sebanyak 26.960 bendera.</td></tr><tr><td>2022</td><td>29/09/2022</td><td>Penghargaan Peringkat 1 Kategori Perencanaan Logistik Pemilu 2024 tingkat Kabupaten/Kota</td><td>Nana Shobarna, Ketua KPU Kota Depok mendapatkan penghargaan Peringkat 1 Kategori Perencanaan Logistik Pemilu 2024 tingkat Kabupaten/Kota dari KPU RI. Penghargaan ini diberikan karena KPU Depok dinilai telah mempersiapkan dengan matang penyelenggaraan tahapan Pemilu 2024.</td></tr><tr><td>2022</td><td>08/10/2022</td><td>Tokoh Literasi Digital Daerah 2022</td><td>Wali Kota Depok, Mohammad Idris dinobatkan sebagai Tokoh Literasi Digital Daerah 2022 dari Gubernur Jawa Barat (Jabar) Ridwan Kamil. Piagam penghargaan diterima Kepala Diskominfo Depok, Manto, mewakili Wali Kota Depok pada Festival Literasi Digital (VIRAL) 2022 di Gedung Sate, Bandung.</td></tr><tr><td>2022</td><td>11/10/2022</td><td>Apresiasi Bunda PAUD Tingkat Nasional Tahun 2021</td><td>Bunda PAUD Kelurahan Tanah Baru, Frina Shaurin, mendapatkan penghargaan Apresiasi Bunda PAUD Tingkat Nasional Tahun 2021 di Aula Barat Gedung Sate, Jalan Diponegoro No. 22, Kota Bandung.</td></tr><tr><td>2022</td><td>28/10/2022</td><td>Penghargaan Program Kampung Iklim (Proklim) Tingkat Nasional</td><td>Prestasi Penghargaan Kampung Iklim (Proklim) tingkat Nasional dari Kementerian Lingkungan Hidup dan Kehutanan (KLHK) Republik Indonesia (RI) ini diraih RW. 05 dan RW. 07 Kelurahan Ratujaya, Kecamatan Cipayung.</td></tr><tr><td>2022</td><td>03/11/2022</td><td>Penghargaan Anubhawa Sasana Kelurahan Tahun 2022</td><td>Wakil Wali Kota Depok, Imam Budi Hartono menerima Piagam Penghargaan Anubhawa Sasana Kelurahan Tahun 2022 dari Kementerian Hukum dan Hak Asasi Manusia (Kemenkumham) Republik Indonesia.</td></tr><tr><td>2022</td><td>11/11/2022</td><td>Penghargaan Sanitasi Total Berbasis Masyarakat (STBM) Kategori Open Defecation Free (ODF)</td><td>Kota Depok berhasil mendapatkan penghargaan sebagai Kota yang telah melaksanakan Sanitasi Total Berbasis Masyarakat (STBM) Kategori Open Defecation Free (ODF) atau Bebas Buang Air Besar Sembarangan Tingkat Provinsi Jawa Barat Tahun 2022. Pemerintah Provinsi Jawa Barat memberikan sertifikat atas Deklarasi ODF Kota 100 persen di semua Kelurahan, sebagai motivasi dan pendorong utama menuju Kota Sehat di tahun 2023.</td></tr><tr><td>2022</td><td>14/11/2022</td><td>Peringkat II Pos UKK Tingkat Provinsi Jawa Barat</td><td>Pos Upaya Kesehatan Kerja (UKK) Rumah Cireng Brexchelle menempati peringkat kedua tingkat Provinsi Jawa Barat (Jabar) tahun 2022. Pos UKK binaan Puskemas Bojongsari ini dinilai sudah memenuhi standarisasi kesehatan kerja para pegawainya.</td></tr><tr><td>2022</td><td>14/11/2022</td><td>Penghargaan Nugra Jasa Dharma Pustaloka</td><td>Bunda Literasi Kota Depok, Elly Farida menerima penghargaan Nugra Jasa Dharma Pustaloka dari Perpustakaan Nasional Republik Indonesia (Perpusnas RI). Penghargaan Nugra Jasa Dharma Pustaloka merupakan penghargaan tertinggi bagi insan yang berperan penting dalam pengembangan literasi di tanah air.</td></tr><tr><td>2022</td><td>18/11/2022</td><td>Juara II Pasar Berprestasi Tingkat Provinsi Jawa Barat</td><td>Penerapan sistem digitalisasi dalam transaksi dan retribusi non tunai mengantarkan Pasar Cisalak meraih penghargaan sebagai Pasar Berprestasi tingkat Provinsi Jawa Barat. Di Pasar ini  konsumen bisa berbelanja secara online dan membayarnya cukup dengan Quick Response Code Indonesian Standard (QRIS).</td></tr><tr><td>2022</td><td>18/11/2022</td><td>Lomba Program PKK Tahun 2022</td><td>Tim Penggerak Pemberdayaan Kesejahteraan Keluarga (TP-PKK) Kelurahan Cilangkap Kecamatan Tapos memborong penghargaan di lima kategori Lomba dari 10 Program PKK Tahun 2022 Tingkat Provinsi Jawa Barat, yaitu:<ol class=\"list-decimal\"><li class=\"ml-4\">Juara I Tertib Administrasi PKK;</li><li class=\"ml-4\">Juara II Gelari Pelangi;</li><li class=\"ml-4\">Juara II Pelaksanaan IVA Test;</li><li class=\"ml-4\">Juara III PAAREDI; dan</li><li class=\"ml-4\">Juara Harapan I Aku Hatinya PKK.</li></ol></td></tr><tr><td>2022</td><td>23/11/2022</td><td>Enam Penghargaan Bidang Kesehatan Lingkungan Tahun 2022 kategori Sanitasi Total Berbasis Masyarakat (STBM)</td><td>Pemerintah Kota Depok berhasil meraih enam penghargaan Bidang Kesehatan Lingkungan Tahun 2022 Kategori Sanitasi Total Berbasis Masyarakat (STBM) Award dari Kementerian Kesehatan RI. Adapun penghargaan yang didapat antara lain:<ol class=\"list-decimal\"><li class=\"ml-4\">Pemenuhan Kebutuhan Sanitasi atau Supply Creation;</li><li class=\"ml-4\">Penerapan Lima Pilar STBM;</li><li class=\"ml-4\">Kabupaten atau Kota Stop Buang Air Besar Sembarangan (BABS);</li><li class=\"ml-4\">Ketua Forum Kota Sehat (FKS) Kota Depok, Bunda Elly Farida sebagai Natural Leader Terbaik;</li><li class=\"ml-4\">Camat Cimanggis, Dody Setiawan sebagai Kepala Desa Terbaik; dan</li><li class=\"ml-4\">Ibu Ecih, sebagai Sanitarian Terbaik.</li></ol></td></tr><tr><td>2022</td><td>25/11/2022</td><td>Penghargaan dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbud Ristek) Balai Besar Guru Penggerak (BBGP)</td><td>Di momen Hari Guru Nasional Tahun 2022 dan Hari Ulang Tahun (HUT) ke-77 PGRI Tingkat Kota Depok, berikut capaian penghargaan yang diraih dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbud Ristek) Balai Besar Guru Penggerak (BBGP), antara lain:<ol class=\"list-decimal\"><li class=\"ml-4\">Kota Depok sebagai Kota Terapik dalam menyelenggarakan loka karya Program Pendidikan Guru Penggerak;</li><li class=\"ml-4\">Restu Nur Wahyudin, guru SMP Dian Didaktika Kota Depok berhasil meraih predikat guru yang memiliki karya teknologi pembelajaran terinovatif yang menginspirasi; dan</li><li class=\"ml-4\">Penghargaan GTK Inspiratif Tingkat Nasional Tahun 2022, untuk jenjang guru TK ada dua orang, pamong belajar satu orang, pengawas dua orang, dan guru SD satu orang.</li></ol></td></tr><tr><td>2022</td><td>29/11/2022</td><td>Juara III PNS Berprestasi Tingkat Provinsi Jawa Barat</td><td>Eneng Sugiarti terpilih sebagai PNS Berprestasi Tingkat Provinsi Jawa Barat Kategori Inspiratif. Di kategori ini, Eneng mendirikan Di Ekraf (Depok Implementasi Ekonomi Kreatif) yang berkolaborasi dengan PSKS (Potensi Sumber Kesejahteraan Sosial) dalam akses permodalan, perizinan hingga pelatihan.</td></tr><tr><td>2022</td><td>30/11/2022</td><td>Penghargaan Kota Terbaik yang terintegrasi Sistem Informasi SDM Kesehatan (SISDMK)</td><td>Depok mendapatkan penghargaan yang diberikan oleh Kementerian Kesehatan atas kerja sama yang baik antara Dinas Kesehatan (Dinkes) Kota Depok dengan Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP).</td></tr><tr><td>2022</td><td>01/12/2022</td><td>Juara III Penghargaan Jaminan Sosial Ketenagakerjaan Paritrana Award 2022</td><td>Pemerintah Kota Depok meraih Penghargaan Jaminan Sosial Ketenagakerjaan Paritrana Award 2022 untuk kategori Kabupaten/Kota. Paritrana Award diberikan kepada Pemerintah Daerah dan para pelaku usaha yang memiliki komitmen serta dukungan terhadap implementasi pelaksanaan program Jaminan Sosial Ketenagakerjaan. Kota Depok berhasil meraih juara tiga, setelah Kabupaten Sukabumi dan Kabupaten Bandung.</td></tr><tr><td>2022</td><td>01/12/2022</td><td>Apresiasi East Ventures-Digital Competitiveness Index (EV-DCI) atau indeks daya saing digital daerah pada ajang Regional Summit Tahun 2022</td><td>Pemerintah Kota (Pemkot) Depok meraih apresiasi East Ventures-Digital Competitiveness Index (EV-DCI) atau indeks daya saing digital daerah. Ini merupakan event tahunan dari Katadata Insight Center (KIC) dan East Ventures, perusahaan venture capital pelopor investasi startup teknologi. Depok mendapatkan tantangan untuk berkolaborasi mewujudkan tujuan pembangunan daerah berkelanjutan.</td></tr><tr><td>2022</td><td>05/12/2022</td><td>Penghargaan Pelaporan Implementasi Gerakan Masyarakat (Germas) Terbaik dalam Rangka Hari Kesehatan Nasional tahun 2022</td><td>Pemerintah Kota Depok mendapatkan Penghargaan Pelaporan Implementasi Gerakan Masyarakat (Germas) Terbaik dalam Rangka Hari Kesehatan Nasional tahun 2022. Kota Depok berhasil mendapatkan penghargaan karena memiliki Peraturan Daerah (Perda) Nomor 17 Tahun 2017 tentang Sistem Kesehatan Daerah yang mengatur tentang Gerakan Masyarakat Hidup Sehat. Selain itu, Pemerintah Kota Depok juga telah melaksanakan berbagai kegiatan Germas, seperti senam peregangan, skrining kesehatan serta penerapan Kawasan Tanpa Rokok.</td></tr><tr><td>2022</td><td>06/12/2022</td><td>Juara III Lomba Resensi Buku untuk Pustakawan Tingkat Provinsi Jawa Barat</td><td>Pemerintah Kota Depok mendata ASN berprestasi di lingkungan Kota Depok, Nur Indrawati Pary, yang mendapatkan penghargaan Juara III Tingkat Provinsi dalam Lomba Resensi Buku \"Laki-Laki ke 42\" untuk Pustakawan dan Pengelola Perpustakaan Tingkat Provinsi Jawa Barat.</td></tr><tr><td>2022</td><td>08/12/2022</td><td>Penghargaan sebagai Badan Publik kategori Pemerintah Kota Informatif Tahun 2022</td><td>Kota Depok melalui Dinas Komunikasi dan Informatika (Diskominfo) menerima piagam penghargaan kategori Kota/Kabupaten Informatif dalam penilaian Keterbukaan Informasi Publik (KIP) Tingkat Provinsi Jawa Barat. Tahun 2021, Pemkot Depok berada di kategori Menuju Informatif, dan kali ini mengalami peningkatan menjadi Badan Publik Informatif. Artinya, Pemkot Depok terus berupaya maksimal melakukan keterbukaan informasi kepada masyarakat sesuai kaidah Undang-undang (UU) Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</td></tr><tr><td>2022</td><td>09/12/2022</td><td>Penghargaan Mayor Good Performance di acara Moeslim Choice Award Ke-5 Tahun 2022</td><td>Wali Kota Depok, Mohammad Idris dianugerahi penghargaan Mayor Good Perfomance pada acara Moeslim Choice Awards ke-5 Tahun 2022. Pemerintah Kota Depok di bawah kepemimpinannya telah berhasil menekan angka pengangguran dari 9,81 persen menjadi 7,81 persen di tahun 2022, dan menciptakan Wira Usaha Baru (WUB). Mohammad Idris pun menjadi satu-satunya Wali Kota di Indonesia yang menerima penghargaan MoeslimChoice Award 2022 dalam kategori Mayor Of Good Perfomance.</td></tr><tr><td>2022</td><td>09/12/2022</td><td>Juara I Lomba Posyandu Tingkat Provinsi Jawa Barat</td><td>Posyandu Teratai RW. 11, Kelurahan Curug Kecamatan Cimanggis, meraih Juara I Lomba Posyandu Tingkat Jawa Barat. Total nilai yang diperoleh Posyandu sebesar 96.15, sebuah pembinaan Posyandu terbaik yang dihasilkan di Kota Depok.</td></tr><tr><td>2022</td><td>12/12/2022</td><td>Depok sebagai Kota Peduli Hak Asasi Manusia (HAM) Tahun 2022</td><td>Depok meraih penghargaan sebagai Kota Peduli Hak Asasi manusia (HAM) dengan raihan nilai 96.45 dari 10 parameter penilaian kelompok HAM. Di antaranya: hak atas bantuan hukum, hak atas informasi, hak turut serta dalam pemerintahan, hak atas keberagaman dan pluralisme, hak atas kependudukan, hak atas kesehatan, hak atas pendidikan, hak atas pekerjaan, hak atas lingkungan yang baik dan sehat serta perumahan yang layak dan hak atas perempuan dan anak.</td></tr><tr><td>2022</td><td>13/12/2022</td><td>Penganugerahan Produktivitas Siddhakarya Jawa Barat Tahun 2022</td><td>Menjelang akhir tahun 2022, Wali Kota Depok, Mohammad Idris dianugrahi penghargaan Siddhakarya oleh Gubernur Jawa Barat, Ridwan Kamil. Penghargaan ini merupakan sebuah apresiasi bagi pembina terbaik yang berhasil dalam meningkatkan produktivitas daerahnya. Wali Kota Depok dianggap telah berhasil melaksanakan program Pembinaan Sistem Manajemen Peningkatan Produktivitas kepada perusahaan yang ada di Kota Depok.</td></tr><tr><td>2022</td><td>14/12/2022</td><td>Penghargaan Mitra Bhakti Husada Tahun 2022</td><td>Kota Depok mendapat penghargaan Mitra Bhakti Husada Tahun 2022 kategori Keselamatan dan Kesehatan Kerja (K3) di lingkungan perkantoran. Kota Depok memperoleh kinerja terbaik dengan beberapa komponen penilaian meliputi aspek keselamatan kerja yang terdiri dari alat pemadam api ringan, tangga dan pintu darurat, proteksi kebakaran, mekanik dan eletrik, serta lalu lintas kendaraan, keamanan, dan lift.</td></tr><tr><td>2022</td><td>14/12/2022</td><td>Penghargaan Jabar Stunting Summit kategori Kabupaten/Kota</td><td>Pemerintah Kota (Pemkot) Depok meraih penghargaan pada acara Jabar Stunting Summit kategori Kabupaten/Kota yang paling berkomitmen dalam pelaksanaan delapan aksi konvergensi penurunan stunting terintegrasi. Penghargaan juga diterima Elly Farida sebagai Ketua TP-PKK yang Paling Berkomitmen dalam kegiatan ODADING (Obrolan Daring Stunting) Award Tahun 2022.</td></tr><tr><td>2022</td><td>14/12/2022</td><td>Penghargaan Anugerah Raksa Prasada</td><td>DLHK Kota Depok kembali meraih penghargaan Raksa Prasada tahun 2022 ini. Beberapa kategori yang diraih di antaranya: kategori Sekolah Berbudaya Lingkungan (Adiwiyata) diraih oleh SDN Depok 1, SDN Cimpaeun 1, SDN Baktijaya 5 dan lain-lain. Kategori Individu/Kelompok Masyarakat Peduli Lingkungan Kategori Perintis Lingkungan diraih oleh Puji Nurwanto. Kategori Kabupaten/Kota Penyusun Terbaik Dokumen Informasi Kinerja Pengelolaan Lingkungan Hidup Daerah (DIKPLHD) Tahun 2021 diberikan kepada Pemerintah Kota (Pemkot) Depok. Program Kampung Iklim (Proklim) Kategori Trophy Proklim Utama yaitu RW. 07 Kelurahan Ratujaya Kecamatan Cipayung, dan kategori Sekolah Adiwiyata Nasional Tahun 2022 jatuh kepada MI Pengembangan Al-Muhajiriyah dan SDIT Al-Fatih.</td></tr><tr><td>2022</td><td>15/12/2022</td><td>Peringkat III Penilaian Indeks Reformasi Hukum Tahun 2022</td><td>Kota Depok meraih peringkat ketiga tingkat nasional pada penilaian Indeks Reformasi Hukum Tahun 2022 yang digelar Kementerian Hukum dan Hak Asasi Manusia (Kemenkumham) Republik Indonesia (RI). Dengan raihan nilai 89.05 kategori “A” setelah Kabupaten Buleleng dan Kabupaten Belitung, Kota Depok menjadi satu-satunya daerah di Pulau Jawa yang mendapatkan penghargaan ini.</td></tr><tr><td>2022</td><td>15/12/2022</td><td>Penghargaan di Ajang Baznas Jabar Award 2022</td><td>Badan Amil Zakat Nasional (Baznas) Kota Depok berhasil meraih penghargaan pada Baznas Jabar Award 2022, yaitu Inovasi Pendayagunaan Terbaik se-Jawa Barat. Baznas Jabar Award merupakan ajang penghargaan bagi Organisasi Pengelola Zakat (OPZ) dan para pihak yang berjasa atas perkembangan zakat di Jawa Barat. Depok masuk dalam tiga nominasi yang berhasil diraih di antaranya: Jumlah Mustahik Produktif Terbanyak, Baznas dengan Donasi Melalui Digital Terbaik dan Baznas dengan Kelembagaan Terbaik.</td></tr><tr><td>2022</td><td>19/12/2022</td><td>Terbaik II Apresiasi Jawara Ekonomi diGital (AJEG) Jawa Barat 2022</td><td>Kota Depok meraih Juara II dalam Ajang Apresiasi Jawara Ekonomi diGital (AJEG) Jawa Barat 2022. Sebuah akselerasi transformasi ditunjukkan Pemkot Depok melalui program Smart City dan program yang menciptakan Wirausaha Baru (WUB) atau StartUp dengan target 5.000 WUB dan 1.000 perempuan pengusaha.</td></tr><tr><td>2022</td><td>19/12/2022</td><td>Kota Terbaik III Program Inflasi Unggulan Juara Lahir Batin (PINUNJUL)</td><td>Depok meraih penghargaan terbaik ketiga di acara Apresiasi Program Inflasi Unggulan Juara Lahir Batin (PINUNJUL) kategori Kota IHK (Indeks Harga Konsumen) setelah Kota Bogor dan Bandung. Penghargaan ini merupakan apresiasi untuk Kabupaten/Kota yang telah berhasil melakukan berbagai inovasi dalam pengendalian inflasi.</td></tr><tr><td>2022</td><td>19/12/2022</td><td>Peringkat kedua Penghargaan Kartika Abhipraya Madya</td><td>Penghargaan Kartika Abhipraya Madya adalah bentuk apresiasi Pemerintah Provinsi Jawa Barat kepada BKPSDM Kabupaten/Kota Depok, sebagai perangkat daerah dan widyaiswara yang dinilai memberikan kontribusi terbaik dalam pengembangan kompetensi Aparatur Sipil Negara di lingkup Kota Depok.</td></tr><tr><td>2022</td><td>19/12/2022</td><td>Penghargaan dan Tropi Duta GenRe dan Ajang Kreativitas (Adujak) Remaja Tingkat Jabar Tahun 2022</td><td>Duta Generasi Berencana (GenRe), Forum GenRe, dan Kelompok Pusat Informasi dan Konseling Remaja (PIK-R) Kota Depok meraih berbagai penghargaan dan tropi juara pada Apresiasi Duta GenRe dan Ajang Kreativitas (Adujak) Remaja Tingkat Jabar Tahun 2022. Di antaranya, juara pertama Duta Genre Putri Jabar Meita Choppypah, Juara Favourite Duta Genre Putra M. Syafiq Rozin, juara tiga PIK R Segmentasi Berani - PIK R Ray\'s Shokat, juara tiga PIK R Segmentasi Beraksi - PIK R SKONE, dan Juara Aksi Keren Forum Genre Kota/Kabupaten dalam rangka Hari Remaja International (JABAT GenRe).</td></tr><tr><td>2022</td><td>22/12/2022</td><td>Penghargaan Kepatuhan Standar Pelayanan Publik Tahun 2022</td><td>Pemkot Depok mendapat penghargaan predikat Kepatuhan Standar Pelayanan Publik Tahun 2022 dari Ombudsman Republik Indonesia (RI), dengan nilai sangat baik atau tertinggi, peringkat ke-2 dari 92 kota se-Indonesia. Standar Pelayanan Publik dan Kepatuhan Standar Pelayanan Minimal (SPM) telah memberikan pelayanan publik yang baik untuk masyarakat.   SPM meliputi produk adm, perizinan, non perizinan serta produk jasa.</td></tr><tr><td>2022</td><td>22/12/2022</td><td>Juara I Kompetisi Inovasi Jawa Barat (KIJB) Tahun 2022</td><td>Dinas Tenaga Kerja (Disnaker) Depok meraih juara pertama pada Kompetisi Inovasi Jawa Barat (KIJB) tahun 2022 untuk kategori Kota. Prestasi ini diraih berkat Inovasi SIMPEL KEPOK (Sistem Informasi Manajemen Pelatihan Kerja Depok) yang terintegrasi dengan aplikasi BKOL (Bursa Kerja On Line).</td></tr><tr><td>2022</td><td>26/12/2022</td><td>Penghargaan Sertifikat ISO 27001:2013</td><td>Pemkot Depok melalui Dinas Komunikasi dan Informatika (Diskominfo) Kota Depok meraih Sertifikat ISO 27001:2013 pada ruang lingkup pengelolaan data center dari Lembaga Sertifikasi CBQA Global Indonesia.</td></tr><tr><td>2022</td><td>27/12/2022</td><td>Kepala Daerah Peduli Posyandu</td><td>Wali Kota Depok, Mohammad Idris, dianugerahi sebagai Kepala Daerah Peduli Posyandu. Kyai Idris sapaannya, memperoleh penghargaan sebagai Kepala Daerah Peduli Posyandu karena mempunyai komitmen yang kuat dalam pengembangan Posyandu di Kota Depok.</td></tr><tr><td>2022</td><td>27/12/2022</td><td>Juara II Lomba P2WKSS tingkat Provinsi Jawa Barat</td><td>Kota Depok meraih juara II dalam Lomba Peningkatan Peranan Wanita menuju Keluarga Sehat dan Sejahtera (P2WKSS) tingkat Provinsi Jabar tahun 2022 kategori Kota.</td></tr><tr><td>2022</td><td>27/12/2022</td><td>Juara I Lomba Gagah Bencana</td><td>Depok raih penghargaan juara I dalam Lomba Gerakan Keluarga Sehat, Tanggap dan Tangguh Bencana (Gagah Bencana) kategori Perilaku Hidup Bersih dan Sehat (PHBS) tingkat Jabar tahun 2022.</td></tr></tbody></table>', '2022-12-08 16:29:52', '2022-12-08 16:29:52');
INSERT INTO `content` (`id`, `nama`, `slug`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(9, 'Dinas', 'dinas', 'img/content/pemerintahan.jpg', '<h5 class=\"text-xl font-semibold mb-1\">Perangkat Daerah</h5><p class=\"text-slate-400\">Sesuai Peraturan Daerah Kota Depok Nomor 4 Tahun 2021 tentang Pembentukan dan Susunan Perangkat Daerah Kota Depok, maka dibentuk Perangkat Daerah dengan susunan sebagai berikut:</p><ol class=\"list-disc text-slate-400 mt-3\"><li class=\"mt-2 ml-4\">Sekretariat Daerah Kota Depok<div class=\"text-slate-400 mt-1\">Gedung Balaikota Depok, Jl. Margonda Raya No. 54 Depok, Telp. (021) 7773610-7762960 Fax. (021) 77204217</div></li><li class=\"mt-2 ml-4\">Sekretariat DPRD Kota Depok<div class=\"text-slate-400 mt-1\">Boulevard Kota Kembang Sektor Anggrek Kota Depok, Telp./Fax. (021) 7711653, Email: setwan@dprdkota.go.id, Situs Web: <a href=\"http://dprd-depokkota.go.id/\" target=\"_blank\">dprd-depokkota.go.id</a></div></li><li class=\"mt-2 ml-4\">Inspektorat Daerah Kota Depok<div class=\"text-slate-400 mt-1\">Gedung Dibaleka I Kompleks Balaikota Depok Lantai 3, Jl. Margonda Raya No. 54 Depok Telp. (021) 77205330, Situs Web: <a href=\"https://inspektorat.depok.go.id/\" target=\"_blank\">inspektorat.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Daerah Kota Depok, yang terdiri dari:<ol class=\"list-decimal text-slate-400 mt-3\"><li class=\"mt-2 ml-4\">Dinas Pendidikan (DISDIK)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 4, Jl. Margonda Raya No. 54 Depok, Telp./Fax. (021) 29402287, Email: ppid.disdik@gmail.com, Situs Web: <a href=\"https://disdik.depok.go.id/\" target=\"_blank\">disdik.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Kesehatan (DINKES)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 3, Jl. Margonda Raya No. 54 Depok, Telp. (021) 29402281, Email: ppid.dinkesdepok@gmail.com, Situs Web: <a href=\"https://dinkes.depok.go.id/\" target=\"_blank\">dinkes.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR)<div class=\"text-slate-400 mt-1\">Jl. Raya Jakarta Bogor Km. 34.5 Tapos Depok, Telp. (021) 87743196, Situs Web: <a href=\"https://dpupr.depok.go.id/\" target=\"_blank\">dpupr.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Perumahan dan Permukiman (DISRUMKIM)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 5, Jl.Margonda Raya No. 54 Depok, Telp. (021) 29402293, Situs Web: <a href=\"https://disrumkim.depok.go.id/\" target=\"_blank\">disrumkim.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Satuan Polisi Pamong Praja (Satpol PP)<div class=\"text-slate-400 mt-1\">Jl. Margonda Raya No. 54 Depok 16431 Jawa Barat, Telp. (021) 7762959 dan (021) 7773610, Fax. (021) 7762959, Situs Web: <a href=\"https://satpolpp.depok.go.id/\" target=\"_blank\">satpolpp.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Pemadam Kebakaran dan Penyelamatan (DISDAMKAR)<div class=\"text-slate-400 mt-1\">Boulevard Grand Depok City, Tirtajaya, Kec. Sukmajaya Kota Depok, Telp. (021) 77827280, Situs Web: <a href=\"https://damkar.depok.go.id/\" target=\"_blank\">damkar.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Sosial (DINSOS)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 6, Jl. Margonda Raya No. 54 Depok, Telp. (021) 29402264, Email: dinsos@depok.go.id, Situs Web: <a href=\"https://dinsos.depok.go.id/\" target=\"_blank\">dinsos.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Tenaga Kerja (DISNAKER)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 8, Jl. Margonda Raya No. 54 Depok, Telp. (021) 29402280, Situs Web: <a href=\"https://disnaker.depok.go.id/\" target=\"_blank\">disnaker.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Ketahanan Pangan, Pertanian dan Perikanan (DKP3)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka I Kompleks Balaikota Depok Lantai 1, Jl. Margonda Raya No. 54 Depok,Telp. (021) 7752737 dan (021) 77206784, Situs Web: <a href=\"https://dkppp.depok.go.id/\" target=\"_blank\">dkppp.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Lingkungan Hidup dan Kebersihan (DLHK)<div class=\"text-slate-400 mt-1\">Jl. Raya Jakarta Bogor Km. 34.5 Tapos Depok, Telp./Fax. (021) 87746031, Situs Web: <a href=\"https://dlhk.depok.go.id/\" target=\"_blank\">dlhk.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Kependudukan dan Pencatatan Sipil (DISDUKCAPIL)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 2, Jl. Margonda Raya No. 54 Depok, Telp. (021) 7756256 dan 0811903276, Email: disdukcapil@depok.go.id, Situs Web: <a href=\"https://disdukcapil.depok.go.id/\" target=\"_blank\">disdukcapil.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana (DP3AP2KB)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 9, Jl. Margonda Raya No. 54 Depok, Email: dp3ap2kb.kotadepok@gmail.com, Situs Web: <a href=\"https://dp3ap2kb.depok.go.id/\" target=\"_blank\">dp3ap2kb.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Perhubungan (DISHUB)<div class=\"text-slate-400 mt-1\">Jalan Perhubungan No. 50 Rt. 003 Rw. 003, Kel. Jatimulya Kec. Cilodong Depok 16414, Telp. (021) 29230770, Situs Web: <a href=\"https://dishub.depok.go.id/\" target=\"_blank\">dishub.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Komunikasi dan Informatika (DISKOMINFO)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 7, Jl. Margonda Raya No. 54 Depok, Telp. (021) 29402276 dan (021) 7764410, Email: diskominfo@depok.go.id, Situs Web: <a href=\"https://diskominfo.depok.go.id/\" target=\"_blank\">diskominfo.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka I Kompleks Balaikota Depok, Jl. Margonda Raya No. 54 Kota Depok 16431, Telp. (021) 77217360 dan (021) 77217361, Fax. (021) 77217362, Situs Web: <a href=\"https://dpmptsp.depok.go.id/\" target=\"_blank\">dpmptsp.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Kearsipan dan Perpustakaan (DISKARPUS)<div class=\"text-slate-400 mt-1\">Jl. Margonda Raya No. 54 Depok, Telp. (021) 77204210, Situs Web: <a href=\"https://diskarpus.depok.go.id/\" target=\"_blank\">diskarpus.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Koperasi dan Usaha Mikro (DKUM)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 7, Jl. Margonda Raya No. 54 Depok, Telp. (021) 29402268, Situs Web: <a href=\"https://dkum.depok.go.id/\" target=\"_blank\">dkum.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Pemuda, Olah Raga, Kebudayaan dan Pariwisata (DISPORYATA)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 9, Jl. Margonda Raya No. 54 Depok, Telp. (021) 29402271, Situs Web: <a href=\"https://disporyata.depok.go.id/\" target=\"_blank\">disporyata.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Dinas Perdagangan dan Perindustrian (DISPERDAGIN)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 6, Jl. Margonda Raya No. 54 Depok, Telp. (021) 29402273, Situs Web: <a href=\"https://disperdagin.depok.go.id/\" target=\"_blank\">disperdagin.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Rumah Sakit Umum Daerah (RSUD) Depok<div class=\"text-slate-400 mt-1\">Jl. Raya Muchtar No. 99 Kelurahan Sawangan Kecamatan Sawangan Kota Depok, Jawa Barat P.O. Box 92839, Telp. (0251) 71691899 dan (0251) 8602514, Fax. (0251) 8602534, Situs Web: <a href=\"https://rsud.depok.go.id/\" target=\"_blank\">rsud.depok.go.id</a></div></li></ol></li><li class=\"mt-2 ml-4\">Badan Daerah Kota Depok, yang terdiri dari:<ol class=\"list-decimal text-slate-400 mt-3\"><li class=\"mt-2 ml-4\">Badan Perencanaan Pembangunan dan Penelitian Pengembangan Daerah (BAPPEDA)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka I Kompleks Balaikota Depok, Jl. Margonda Raya No. 54 Depok, Telp. (021) 7759869, Situs Web: <a href=\"https://bappeda.depok.go.id/\" target=\"_blank\">bappeda.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Badan Keuangan Daerah (BKD)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka I Kompleks Balaikota Depok Lantai 1, Jl. Margonda Raya No. 54 Depok, Telp. (021) 77217366 dan (021) 77217364, Situs Web: <a href=\"https://bkd.depok.go.id/\" target=\"_blank\">bkd.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia (BKPSDM)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka II Kompleks Balaikota Depok Lantai 8, Jl. Margonda Raya No. 54 Depok, Telp. (021) 29402279, Situs Web: <a href=\"https://bkpsdm.depok.go.id/\" target=\"_blank\">bkpsdm.depok.go.id</a></div></li><li class=\"mt-2 ml-4\">Badan Kesatuan Bangsa dan Politik (BAKESBANGPOL)<div class=\"text-slate-400 mt-1\">Gedung Dibaleka I Kompleks Balaikota Depok Lantai 4, Jl. Margonda Raya No. 54 Kota Depok, Situs Web: <a href=\"https://kesbangpol.depok.go.id/\" target=\"_blank\">kesbangpol.depok.go.id</a></div></li></ol></li></ol><h5 class=\"text-xl font-semibold mb-1 mt-8\">Instansi Vertikal</h5><ol class=\"list-disc text-slate-400 mt-3\"><li class=\"mt-2 ml-4\">Polres Metro Kota Depok, Jalan Margonda Raya No. 14 Depok, Kecamatan Pancoran Mas, Kota Depok, Jawa Barat, 16431, Telp. (021) 77202414, Situs Web: <a href=\"https://polrestadepok.net/\" target=\"_blank\">polrestadepok.net</a></li><li class=\"mt-2 ml-4\">Kantor Imigrasi Kelas I Depok, Jalan Boulevard Raya, Grand Depok City, Kalimulya, Cilodong, Kota Depok, Jawa Barat 16413, Telp. (021) 77820580, Email: depokimigrasi@gmail.com, Situs Web: <a href=\"https://depok.imigrasi.go.id/\" target=\"_blank\">depok.imigrasi.go.id</a></li><li class=\"mt-2 ml-4\">Kantor Imigrasi Kelas II Non TPI Depok, Unit Layanan Paspor (ULP) Depok Town Square, Jl. Margonda Raya, Kemiri Muka, Beji, Kota Depok, Jawa Barat, 16424</li><li class=\"mt-2 ml-4\">Kementerian Agama Kota Depok, Jalan Boulevard Grand Depok City, Sukmajaya, Kalimulya, Cilodong, Kota Depok, Jawa Barat 16413, Telp. (021) 7715909</li><li class=\"mt-2 ml-4\">Pengadilan Negeri Depok, Jl. Boulevard Raya Grand Depok City No. 7, Kalimulya, Cilodong, Kota Depok, Jawa Barat 16413, Telp. (021) 77829167, Email: info.pn.depok@gmail.com, Situs Web: <a href=\"https://pn-depok.go.id/\" target=\"_blank\">pn-depok.go.id</a></li><li class=\"mt-2 ml-4\">Pengadilan Agama Depok, Jalan Boulevard Sektor Anggrek Grand Depok City Kota Kembang Depok, Jawa Barat 16413, Telp. (021) 77835414, Email: pa.depok_ptabdg@yahoo.co.id dan delegasi.padepok@gmail.com, Situs Web: <a href=\"https://pa-depok.go.id/\" target=\"_blank\">pa-depok.go.id</a></li><li class=\"mt-2 ml-4\">Kejaksaan Negeri Depok, GDC Komplek Perkantoran Jalan Boulevard Raya Kota Kembang, Jatimulya, Kec. Cilodong Depok, Jawa Barat, Telp. 087739929983</li><li class=\"mt-2 ml-4\">Komisi Pemilihan Umum Kota Depok, Jl. Margonda Raya No. 379, Kelurahan Kemiri Muka, Kecamatan Beji, Kota Depok 16424, Telp. (021) 72740889, Situs Web: <a href=\"https://kota-depok.kpu.go.id/\" target=\"_blank\">kota-depok.kpu.go.id</a></li><li class=\"mt-2 ml-4\">Kantor Pusat PLN Kota Depok, Jl. Boulevard Grand Depok City No. 1 Kota Kembang Raya, Tirtajaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16412, Telp. (021) 77820077</li><li class=\"mt-2 ml-4\">PDAM Tirta Asasta Kota Depok, Jl. Legong Raya No. 1, Depok 2 Tengah, Mekar Jaya, Sukmajaya, Kota Depok, Jawa Barat 16411, Telp. 77820897, Email: info@pdamdepok.co.id, Situs Web: <a href=\"https://tirtaasasta.depok.co.id/\" target=\"_blank\">tirtaasasta.depok.co.id</a></li><li class=\"mt-2 ml-4\">BPJS Kesehatan Depok , Jl. Boulevard Grand Depok City, Jatimulya, Cilodong, Kota Depok, Jawa Barat 16431, Telp. (021) 83727739</li><li class=\"mt-2 ml-4\">BPJS Ketenagakerjaan Depok, Jl. Sersan Aning No. 26 Pancoran Mas, Kota Depok, Jawa Barat 16431, Telp. (021) 77215101), Fax. (021) 77215103</li><li class=\"mt-2 ml-4\">BPS Kota Depok, Boulevard Grand Depok City Kota Depok, Jawa Barat 16431, Telp. (021) 7710370, Fax. (021) 77825913, Email: bps3276@bps.go.id, Situs Web: <a href=\"https://depokkota.bps.go.id/\" target=\"_blank\">depokkota.bps.go.id</a></li><li class=\"mt-2 ml-4\">Palang Merah Indonesia Kota Depok, Boulevard Grand Depok City Kota Kembang, Jl. Raya Abdul Gani, Jatimulya, Kec. Cilodong, Kota Depok, Jawa Barat 16413, Telp. (021) 87927210</li><li class=\"mt-2 ml-4\">Kantor Pelayanan PBB dan BPHTB Kota Depok, Jl. Margonda Raya No. 54 RW. 11, Pancoran Mas, Kota Depok, Jawa Barat 16431, Telp. (021) 77217367</li><li class=\"mt-2 ml-4\">Kantor Pelayanan Pajak Pratama Depok Sawangan, Jl. Siliwangi K No.1B, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431, Telp. 08111099448</li><li class=\"mt-2 ml-4\">Kantor Pelayanan Pajak Pratama Depok Cimanggis, Jl. Pemuda No. 40, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat, 16431, Telp. (021) 7763896</li><li class=\"mt-2 ml-4\">Perpustakaan Umum Kota Depok, Jl. Margonda Raya No. 54, Pancoran Mas, Kota Depok, Jawa Barat 16431, Telp. (021) 77200936</li></ol>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(10, 'Sekretariat Daerah', 'sekretariat-daerah', 'img/content/pemerintahan.jpg', '<div class=\"col-12\"><p class=\"lead\">Asisten Hukum dan Sosial</p><ul class=\"lead list\"><li>Bagian Hukum</li><li>Bagian Kesejahteraan Sosial</li><li>Bagian Protokol dan Dokumentasi</li></ul><p class=\"lead\">Asisten Ekonomi dan Pembangunan</p><ul class=\"lead list\"><li>Bagian Ekonomi</li><li>Bagian Pembangunan</li><li>Bagian Layanan Pengadaan</li></ul><p class=\"lead\">Asisten Administrasi dan Pemerintahan</p><ul class=\"lead list\"><li>Bagian Umum</li><li>Bagian Administrasi</li><li>Bagian Organisasi dan Tata Laksana</li><li>Bagian Pemerintahan</li></ul><p class=\"lead\">Sekretariat DPRD</p><ul class=\"lead list\"><li>Bagian Umum</li><li>Bagian Persidangan</li><li>Bagian Keuangan</li><li>Bagian Hubungan Masyarakat dan Protokol</li></ul></div>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(11, 'Kecamatan', 'kecamatan', 'img/content/kecamatan.jpg', '<h5 class=\"text-xl font-semibold mb-4\">Kecamatan</h5><table id=\"awardTable\" class=\"stripe hover\" style=\"width:100%; padding-top: 1em; padding-bottom: 1em;\"><thead><tr><th data-priority=\"1\">Kecamatan</th><th data-priority=\"2\">Alamat</th><th data-priority=\"3\">Telepon</th><th data-priority=\"4\">Situs Web</th></tr></thead><tbody><tr><td>Beji</td><td>Perum Depok Indah</td><td>(021) 7520233</td><td><a href=\"https://beji.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Pancoran Mas</td><td>Jl. Raya Kartini</td><td>(021) 77200537</td><td><a href=\"https://panmas.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Cipayung</td><td>Jl. Raya Cipayung</td><td>-</td><td><a href=\"https://cipayung.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Sukmajaya</td><td>Jl. Sentosa Raya</td><td>(021) 77822576</td><td><a href=\"https://sukmajaya.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Cilodong</td><td>Jl. M. Nasir Raya Cilodong</td><td>-</td><td><a href=\"https://cilodong.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Limo</td><td>Jl. Raya Limo</td><td>(021) 7546982</td><td><a href=\"https://limo.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Cinere</td><td>Jl. Bukit Cinere No. 17, RT. 05 RW. 02, Kel. Cinere</td><td>(021) 29412552</td><td><a href=\"https://cinere.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Cimanggis</td><td>Jl. Radar Auri No. 15</td><td>(021) 8711436</td><td><a href=\"https://cimanggis.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Tapos</td><td>Jl. Raya Tapos</td><td>-</td><td><a href=\"https://tapos.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Sawangan</td><td>Jl. Raya Muchtar</td><td>(0251) 618177</td><td><a href=\"https://sawangan.depok.go.id\" target=\"_blank\">Lihat</a></td></tr><tr><td>Bojongsari</td><td>Jl. Raya Batu No. 12 RT. 03 RW. 04 Kel. Bojongsari, Kec. Bojongsari</td><td>(0251) 8612040</td><td><a href=\"https://bojongsari.depok.go.id\" target=\"_blank\">Lihat</a></td></tr></tbody></table>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(12, 'Kelurahan', 'kelurahan', 'img/content/kelurahan.jpg', '<h5 class=\"text-xl font-semibold mb-4\">Kelurahan</h5><table id=\"awardTable\" class=\"stripe hover\" style=\"width:100%; padding-top: 1em; padding-bottom: 1em;\"><thead><tr><th data-priority=\"1\">Kecamatan</th><th data-priority=\"2\">Kelurahan</th><th data-priority=\"3\">Alamat</th><th data-priority=\"4\">Telepon</th><th data-priority=\"5\">Kode Pos</th></tr></thead><tbody><tr><td>Beji</td><td>Beji</td><td>Jl. H. Asmawi</td><td>(021) 7773243</td><td>16421</td></tr><tr><td>Beji</td><td>Beji Timur</td><td>Jl. Raya Pemuda No. 3 RT. 02 RW. 05, Kel. Beji Timur</td><td>(021) 7521432</td><td>16422</td></tr><tr><td>Beji</td><td>Kemiri Muka</td><td>Jl. H. Fatimah</td><td>(021) 77203114</td><td>16423</td></tr><tr><td>Beji</td><td>Pondok Cina</td><td>Jl. H. Yahya Nuih</td><td>(021) 7522352</td><td>16424</td></tr><tr><td>Beji</td><td>Kukusan</td><td>Jl. Palakali</td><td>(021) 7271404</td><td>16425</td></tr><tr><td>Beji</td><td>Tanah Baru</td><td>Jl. Palakali RT. 06 RW. 12</td><td>(021) 7752860</td><td>16425</td></tr><tr><td>Pancoran Mas</td><td>Depok</td><td>Jl. Kartini No. 26 RT. 02 RW. 09</td><td>(021) 7520659</td><td>16431</td></tr><tr><td>Pancoran Mas</td><td>Depok Jaya</td><td>Jl. Nusantara Raya</td><td>(021) 7520762</td><td>16432</td></tr><tr><td>Pancoran Mas</td><td>Mampang</td><td>Jl. Damai 1 RT. 03 RW. 12</td><td>(021) 77201335</td><td>16433</td></tr><tr><td>Pancoran Mas</td><td>Rangkapan Jaya Baru</td><td>Jl. Keadilan No. 1</td><td>(021) 77880529</td><td>16434</td></tr><tr><td>Pancoran Mas</td><td>Rangkapan Jaya</td><td>Jl. Raya Sawangan No. 21, Kel. Rangkapan Jaya</td><td>(021) 77883634</td><td>16435</td></tr><tr><td>Pancoran Mas</td><td>Pancoran Mas</td><td>Jl. Pitara Raya No. 49 RT. 02 RW. 15</td><td>(021) 7759249</td><td>16436</td></tr><tr><td>Cipayung</td><td>Bojong Pondok Terong</td><td>Jl. Masjid Al Ittihad</td><td>(021) 77213277</td><td>16436</td></tr><tr><td>Cipayung</td><td>Cipayung</td><td>Jl. Jembatan Serong</td><td>(021) 77880516</td><td>16437</td></tr><tr><td>Cipayung</td><td>Cipayung Jaya</td><td>Jl. Pertanian No. 4 RT. 04 RW. 04</td><td>(021) 77881451</td><td>16437</td></tr><tr><td>Cipayung</td><td>Pondok Jaya</td><td>Permata Depok</td><td>(021) 32192940</td><td>16438</td></tr><tr><td>Cipayung</td><td>Ratu Jaya</td><td>Jl. Masjid Alfalah</td><td>(021) 7758190</td><td>16439</td></tr><tr><td>Sukmajaya</td><td>Mekarjaya</td><td>Jl. Waru Jaya No. 9, Kp. Sugutamu</td><td>(021) 7710283</td><td>16411</td></tr><tr><td>Sukmajaya</td><td>Sukmajaya</td><td>Perumahan Pondok Sukmajaya Permai</td><td>(021) 7706854</td><td>16412</td></tr><tr><td>Sukmajaya</td><td>Tirtajaya</td><td>Jl. Tugu Jaya RT. 04 RW. 03</td><td>(021) 77822769</td><td>16412</td></tr><tr><td>Sukmajaya</td><td>Cisalak</td><td>-</td><td>(021) 87708662</td><td>16416</td></tr><tr><td>Sukmajaya</td><td>Abadijaya</td><td>Jl. Musi Raya No. 1</td><td>(021) 77830676</td><td>16417</td></tr><tr><td>Sukmajaya</td><td>Baktijaya</td><td>Jl. Cimanuk (Dekat Pool PPD)</td><td>(021) 7709806</td><td>16418</td></tr><tr><td>Cilodong</td><td>Jatimulya</td><td>Perumahan GDC Sektor Melati</td><td>(021) 8753669</td><td>16413</td></tr><tr><td>Cilodong</td><td>Kalimulya</td><td>Jl. PTU I</td><td>(021) 8764582</td><td>16413</td></tr><tr><td>Cilodong</td><td>Cilodong</td><td>-</td><td>(021) 7705292</td><td>16414</td></tr><tr><td>Cilodong</td><td>Kalibaru</td><td>Jl. H. Nirun No. 7</td><td>(021) 8762480</td><td>16414</td></tr><tr><td>Cilodong</td><td>Sukamaju</td><td>Jl. Jakarta Bogor (Samping Woody)</td><td>(021) 8752270</td><td>16415</td></tr><tr><td>Limo</td><td>Grogol</td><td>Jl. Raya Grogol</td><td>(021) 7754824</td><td>16512</td></tr><tr><td>Limo</td><td>Krukut</td><td>Jl. Krukut</td><td>(021) 7533331</td><td>16512</td></tr><tr><td>Limo</td><td>Limo</td><td>Jl. Koman Muin, Limo Raya</td><td>(021) 7535481</td><td>16515</td></tr><tr><td>Limo</td><td>Meruyung</td><td>Jl. Meruyung Raya</td><td>(021) 7535403</td><td>16515</td></tr><tr><td>Cinere</td><td>Gandul</td><td>-</td><td>(021) 7545084</td><td>16512</td></tr><tr><td>Cinere</td><td>Pangkalan Jati Baru</td><td>-</td><td>(021) 75906649</td><td>16513</td></tr><tr><td>Cinere</td><td>Pangkalan Jati</td><td>-</td><td>(021) 75913351</td><td>16513</td></tr><tr><td>Cinere</td><td>Cinere</td><td>-</td><td>(021) 7543340</td><td>16514</td></tr><tr><td>Cimanggis</td><td>Pasir Gunung Selatan</td><td>Jl. Garuda II</td><td>(021) 8725611</td><td>16451</td></tr><tr><td>Cimanggis</td><td>Tugu</td><td>-</td><td>(021) 87720940</td><td>16451</td></tr><tr><td>Cimanggis</td><td>Cisalak Pasar</td><td>-</td><td>(021) 8734132</td><td>16452</td></tr><tr><td>Cimanggis</td><td>Mekarsari</td><td>Jl. Raya Mekarsari</td><td>(021) 8711734</td><td>16452</td></tr><tr><td>Cimanggis</td><td>Curug</td><td>Jl. Raya Pekapuran</td><td>(021) 8741672</td><td>16453</td></tr><tr><td>Cimanggis</td><td>Harjamukti</td><td>Jl. Raya Gas Alam</td><td>(021) 8731217</td><td>16454</td></tr><tr><td>Tapos</td><td>Jatijajar</td><td>Perum Jatijajar</td><td>(021) 8725923</td><td>16451</td></tr><tr><td>Tapos</td><td>Sukatani</td><td>Jl. Gas Alam</td><td>(021) 87742075</td><td>16454</td></tr><tr><td>Tapos</td><td>Sukamaju Baru</td><td>Gg. Nangka</td><td>(021) 70782035</td><td>16455</td></tr><tr><td>Tapos</td><td>Leuwinanggung</td><td>Jl. Raya Leuwinanggung</td><td>(021) 844922</td><td>16456</td></tr><tr><td>Tapos</td><td>Tapos</td><td>Jl. Raya Tapos</td><td>(021) 8757714</td><td>16457</td></tr><tr><td>Tapos</td><td>Cilangkap</td><td>Jl. Lurah Ripan RT. 01, Kel. Cilangkap</td><td>(021) 8751838</td><td>16458</td></tr><tr><td>Tapos</td><td>Cimpaeun</td><td>Jl. Raya Cimpaeun, Gg. Kirai</td><td>(021) 8757333</td><td>16459</td></tr><tr><td>Sawangan</td><td>Sawangan</td><td>Jl. Raya Sawangan (Belakang RSUD)</td><td>(0251) 8617531</td><td>16511</td></tr><tr><td>Sawangan</td><td>Sawangan Baru</td><td>Jl. Raya Sawangan Permai</td><td>(0251) 70888683</td><td>16511</td></tr><tr><td>Sawangan</td><td>Cinangka</td><td>Jl. Pahlawan No. 8 RT. 02 RW. 09</td><td>(021) 70623458</td><td>16516</td></tr><tr><td>Sawangan</td><td>Kedaung</td><td>Jl. Raya Ketapang No. 5 RT. 01 RW. 02</td><td>(021) 7494350</td><td>16516</td></tr><tr><td>Sawangan</td><td>Pengasinan</td><td>Jl. Raya Pengasinan RT. 02 RW. 03</td><td>(0251) 8619521</td><td>16518</td></tr><tr><td>Sawangan</td><td>Bedahan</td><td>Jl. H. Sulaeman</td><td>(0251) 8619159</td><td>16519</td></tr><tr><td>Sawangan</td><td>Pasir Putih</td><td>Jl. Raya Pasir Putih No. 1 RT. 04 RW. 02</td><td>(0251) 8610872</td><td>16519</td></tr><tr><td>Bojongsari</td><td>Bojongsari</td><td>Jl. Bojongsari</td><td>(0251) 619766</td><td>16516</td></tr><tr><td>Bojongsari</td><td>Bojongsari Baru</td><td>Jl. Bojongsari Gg. Rotan</td><td>(0251) 8610108</td><td>16516</td></tr><tr><td>Bojongsari</td><td>Curug</td><td>Jl. Raya Curug</td><td>(0251) 8610044</td><td>16517</td></tr><tr><td>Bojongsari</td><td>Pondok Petir</td><td>Jl. Raya Serua</td><td>(021) 7421409</td><td>16517</td></tr><tr><td>Bojongsari</td><td>Serua</td><td>Jl. Raya Serua</td><td>-</td><td>16517</td></tr><tr><td>Bojongsari</td><td>Duren Mekar</td><td>Jl. H. Suhaemi</td><td>(0251) 8613522</td><td>16518</td></tr><tr><td>Bojongsari</td><td>Duren Seribu</td><td>Jl. Harco Raya</td><td>(0251) 8613522</td><td>16518</td></tr></tbody></table>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(13, 'Lambang Identitas', 'lambang-identitas', 'img/content/lambang-identitas.png', '<div class=\"flex p-6 text-center items-center justify-center mb-6\"><img src=\"assets/images/brand/lambang-depok.png\" class=\"rounded-md hover:origin-center hover:scale-105 transition duration-500 w-60\" alt=\"Gambar Lambang Depok\"></div><h5 class=\"text-xl font-semibold mb-4\">Bagian A</h5><p class=\"text-slate-400\">Gambar Kujang dengan posisi tegak. Kujang merupakan senjata/alat kerja masyarakat Jawa Barat. Kujang dianggap sebagai manifestasi satria-satria Pajajaran, yang identik dengan nilai-nilai kejuangan pahlawan Depok, yang memiliki sifat tak gentar dalam menegakkan kebenaran dan rela berkorban.</p><p class=\"text-slate-400 mt-3\">Pada gambar Kujang terdapat 2 (dua) buah lubang, dengan lengkungan luar sebanyak 7 (tujuh) buah dan tangkai (gagang) mempunyai lekukan 4 (empat) buah yang dikelilingi rangkaian padi dan bunga kapas yang terdiri dari 9 (sembilan) butir padi dan 9 (sembilan) kuntum bunga kapas yang mempunyai arti Kota Depok dilahirkan pada tanggal 27 April 1999.</p><p class=\"text-slate-400 mt-3\">Padi dan Kapas melambangkan cita-cita pemerintahan dan masyarakat Kota Depok yang mewujudkan kesejahteraan dan kemakmuran. Di bawah gambar Kujang terdapat gambar sebuah mata pena dan gambar sebuah buku terbuka, yang melambangkan Depok sebagai Kota Pendidikan.</p><h5 class=\"text-xl font-semibold mb-4 mt-8\">Bagian B</h5><p class=\"text-slate-400\">Gambar Pendopo merupakan simbol Pusat Pemerintahan Kota Depok dalam melaksanakan tugas Pemerintahan, Pembangunan dan Kemasyarakatan.</p><p class=\"text-slate-400 mt-3\">Gambar Bangunan Gedung melambangkan Kota Depok sebagai Kota Pemukiman serta sebagai pusat perdagangan dan jasa.</p><p class=\"text-slate-400 mt-3\">Gambar tumpukan batu bata membentuk rangkaian kesatuan yang menggambarkan dinamika masyarakat Kota Depok dalam melaksanakan Pembangunan di segala bidang.</p><p class=\"text-slate-400 mt-3\">Gambar gelombang air menggambarkan aliran sungai yang mengalir di wilayah Kota Depok, yang melambangkan kesuburan serta menunjukkan Depok sebagai Kota Resapan Air.</p><h5 class=\"text-xl font-semibold mb-4 mt-8\">Bagian C</h5><p class=\"text-slate-400\">Bentuk Perisai yang memiliki 5 (lima) sisi melambangkan tameng dan benteng yang mampu mengayomi, memberikan rasa aman dan tentram baik lahir maupun batin bagi masyarakat Depok serta melambangkan ketahanan fisik dan mental masyarakat Depok dalam menghadapi segala macam gangguan, halangan dan tantangan yang datang dari manapun juga terhadap kehidupan bangsa dan Negara Republik Indonesia yang berdasarkan Pancasila.</p><p class=\"text-slate-400 mt-3\">5 (lima) sisi perisai yang diemban Pemerintah Kota Depok melambangkan fungsi dan pesan sebagai:</p><ul class=\"list-none text-slate-400 mt-3\"><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kota Pemukiman;</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kota Pendidikan;</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Pusat Perdagangan dan Jasa;</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kota Wisata; dan</li><li class=\"flex mt-2\"><i class=\"uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2\"></i>Kota Resapan Air.</li></ul><p class=\"text-slate-400 mt-3\">Tulisan <b><i>Kota Depok</i></b> menunjukkan sebutan bagi Kota dan Pemerintah Kota Depok. Tulisan <b><i>Paricara Dharma</i></b> berasal dari bahasa Sansekerta yang terdiri dari kata Paricara yang berarti Abdi, Dharma yang berarti Kebaikan, Kebenaran dan Keadilan. Jadi Paricara Dharma mengandung makna bahwa Pemerintah Kota Depok sebagai Abdi Masyarakat dan Abdi Negara senantiasa mengutamakan Kebaikan, Kebenaran dan Keadilan.</p>', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(14, 'Pimpinan', 'pimpinan', 'img/content/pimpinan.png', '<h5 class=\"text-xl font-semibold mb-6\">Wali Kota & Wakil Wali Kota Depok Sepanjang Masa</h5><h6 class=\"text-lg font-semibold mb-4\">Pemerintahan Administratif</h6><p class=\"text-slate-400\">Sebelum menjadi sebuah Kota, Depok merupakan kota administratif dan merupakan bagian dari Kabupaten Bogor. Berikut adalah daftar Wali Kota Depok Non Partisan sejak tahun 1982:</p><ul class=\"list-none text-slate-400 mt-3\"><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-1-box text-indigo-600 text-lg align-middle mr-2\"></i>Mochammad Rukasah Suradimadja: 18 Maret 1982 - 1984</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-2-box text-indigo-600 text-lg align-middle mr-2\"></i>Ibid Tamdjid: 1984 - 1988</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-3-box text-indigo-600 text-lg align-middle mr-2\"></i>Abdul Wachyan: 1988 - 1991</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-4-box text-indigo-600 text-lg align-middle mr-2\"></i>Masduki: 1991 - 1992</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-5-box text-indigo-600 text-lg align-middle mr-2\"></i>Sofyan Safari Hamim: 1992 - 1996</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-6-box text-indigo-600 text-lg align-middle mr-2\"></i>Yuyun Wirasaputra (Penjabat): 1996 - 7 Oktober 1997</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-7-box text-indigo-600 text-lg align-middle mr-2\"></i>Badrul Kamal: 7 Oktober 1997 - 27 April 1999</li></ul><h6 class=\"text-lg font-semibold mb-4 mt-10\">Daftar Wali Kota dan Wakil Wali Kota Depok secara Definitif</h6><ul class=\"list-none text-slate-400 mt-3\"><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-1-box text-indigo-600 text-lg align-middle mr-2\"></i>Periode 15 Maret 2000 - 15 Maret 2005</li><p class=\"text-slate-400 ml-6\">Wali Kota: Badrul Kamal</p><p class=\"text-slate-400 ml-6\">Wakil Wali Kota: Yus Ruswandi</p><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-2-box text-indigo-600 text-lg align-middle mr-2\"></i>Periode 26 Januari 2006 - 26 Januari 2011</li><p class=\"text-slate-400 ml-6\">Wali Kota: Nur Mahmudi Ismail</p><p class=\"text-slate-400 ml-6\">Wakil Wali Kota: Yuyun Wirasaputra</p><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-3-box text-indigo-600 text-lg align-middle mr-2\"></i>Periode 26 Januari 2011 - 26 Januari 2016</li><p class=\"text-slate-400 ml-6\">Wali Kota: Nur Mahmudi Ismail</p><p class=\"text-slate-400 ml-6\">Wakil Wali Kota: Mohammad Idris</p><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-4-box text-indigo-600 text-lg align-middle mr-2\"></i>Periode 17 Februari 2016 - 17 Februari 2021</li><p class=\"text-slate-400 ml-6\">Wali Kota: Mohammad Idris</p><p class=\"text-slate-400 ml-6\">Wakil Wali Kota: Pradi Supriatna</p><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-5-box text-indigo-600 text-lg align-middle mr-2\"></i>Periode 26 Februari 2021 - 2024</li><p class=\"text-slate-400 ml-6\">Wali Kota: Mohammad Idris</p><p class=\"text-slate-400 ml-6\">Wakil Wali Kota: Imam Budi Hartono</p></ul><h6 class=\"text-lg font-semibold mb-4 mt-10\">Pengganti Sementara</h6><p class=\"text-slate-400\">Dalam tampuk Pemerintahan, Seorang Kepala Daerah yang mengajukan diri untuk cuti atau berhenti sementara dari jabatannya kepada Pemerintah Pusat, maka Menteri Dalam Negeri menyiapkan penggantinya yang merupakan birokrat di Pemerintah Daerah atau bahkan Wakil Wali Kota termasuk ketika posisi Wali Kota berada dalam masa transisi. Pengganti sementara yang bertugas di antaranya berlangsung pada masa periode:</p><ul class=\"list-none text-slate-400 mt-3\"><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-1-box text-indigo-600 text-lg align-middle mr-2\"></i>27 April 1999 - 15 Maret 2000: Badrul Kamal (Penjabat Sementara)</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-2-box text-indigo-600 text-lg align-middle mr-2\"></i>15 Maret 2005 - 8 September 2005: Warma Sutarman (Pelaksana Tugas)</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-3-box text-indigo-600 text-lg align-middle mr-2\"></i>8 September 2005 - 21 September 2005: Numan Abdul Hakim (Wakil Gubernur) (Pelaksana Harian)</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-4-box text-indigo-600 text-lg align-middle mr-2\"></i>21 September 2005 - 26 Januari 2006: Warma Sutarman (Penjabat)</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-5-box text-indigo-600 text-lg align-middle mr-2\"></i>19 Januari 2015 - 3 Februari 2015: Mohammad Idris (Pelaksana Tugas)</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-6-box text-indigo-600 text-lg align-middle mr-2\"></i>26 Januari 2016 - 17 Februari 2016: Arifin Harun Kertasaputra (Penjabat)</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-7-box text-indigo-600 text-lg align-middle mr-2\"></i>26 September 2020 - 5 Desember 2020: Dedi Supandi (Penjabat Sementara)</li><li class=\"flex mt-2\"><i class=\"mdi mdi-numeric-8-box text-indigo-600 text-lg align-middle mr-2\"></i>17 Februari 2021 - 26 Februari 2021: Sri Utomo (Pelaksana Harian)</li></ul>', '2022-12-08 16:29:52', '2022-12-08 16:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `infografis`
--

DROP TABLE IF EXISTS `infografis`;
CREATE TABLE IF NOT EXISTS `infografis` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infografis`
--

INSERT INTO `infografis` (`id`, `nama`, `imageName`, `sumber`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Renovasi Dua Kantor Kecamatan', '1.jpeg', '6', 1, NULL, NULL),
(2, '215 IKM Tersertifikasi', '2.jpeg', '6', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'Pancoran Mas'),
(2, 'Cimanggis'),
(3, 'Sawangan'),
(4, 'Limo'),
(5, 'Sukmajaya'),
(6, 'Beji'),
(7, 'Cipayung'),
(8, 'Cilodong'),
(9, 'Cinere'),
(10, 'Tapos'),
(11, 'Bojong Sari');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

DROP TABLE IF EXISTS `kelurahan`;
CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kd_kecamatan` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `kd_kecamatan`, `nama`) VALUES
(1, 1, 'Depok'),
(2, 1, 'Depok Jaya'),
(3, 1, 'Pancoran Mas'),
(4, 1, 'Mampang'),
(5, 1, 'Rangkapan Jaya Baru'),
(6, 1, 'Rangkapan Jaya'),
(7, 2, 'Harjamukti'),
(8, 2, 'Curug'),
(9, 2, 'Tugu'),
(10, 2, 'Mekarsari'),
(11, 2, 'Pasir Gunung Selatan'),
(12, 2, 'Cisalak Pasar'),
(13, 3, 'Pasir Putih'),
(14, 3, 'Bedahan'),
(15, 3, 'Pengasinan'),
(16, 3, 'Cinangka'),
(17, 3, 'Sawangan'),
(18, 3, 'Sawangan Baru'),
(19, 3, 'Kedaung'),
(20, 4, 'Grogol'),
(21, 4, 'Krukut'),
(22, 4, 'Limo'),
(23, 4, 'Meruyung'),
(24, 5, 'Sukmajaya'),
(25, 5, 'Abadi Jaya'),
(26, 5, 'Mekarjaya'),
(27, 5, 'Baktijaya'),
(28, 5, 'Cisalak'),
(29, 5, 'Tirta Jaya'),
(30, 6, 'Beji'),
(31, 6, 'Kukusan'),
(32, 6, 'Tanah Baru'),
(33, 6, 'Kemiri Muka'),
(34, 6, 'Pondok Cina'),
(35, 6, 'Beji Timur'),
(36, 7, 'Cipayung'),
(37, 7, 'Cipayung Jaya'),
(38, 7, 'Ratu Jaya'),
(39, 7, 'Bojong Pondok Terong'),
(40, 7, 'Pondok Jaya'),
(41, 8, 'Sukamaju'),
(42, 8, 'Cilodong'),
(43, 8, 'Kalibaru'),
(44, 8, 'Kalimulya'),
(45, 8, 'Jatimulya'),
(46, 9, 'Cinere'),
(47, 9, 'Gandul'),
(48, 9, 'Pangkalan Jati'),
(49, 9, 'Pangkalan Jati Baru'),
(50, 10, 'Tapos'),
(51, 10, 'Leuwinanggung'),
(52, 10, 'Sukatani'),
(53, 10, 'Sukamaju Baru'),
(54, 10, 'Jatijajar'),
(55, 10, 'Cilangkap'),
(56, 10, 'Cimpaeun'),
(57, 11, 'Bojongsari Lama'),
(58, 11, 'Bojongsari Baru'),
(59, 11, 'Serua'),
(60, 11, 'Pondok Petir'),
(61, 11, 'Curug'),
(62, 11, 'Duren Mekar'),
(63, 11, 'Duren Seribu');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_30_030510_create_agenda_table', 1),
(4, '2019_08_29_073520_create_sejarah_table', 1),
(5, '2019_09_10_022703_create_sliders_table', 1),
(6, '2019_09_15_162402_create_services_table', 1),
(7, '2019_09_24_013153_categories_table', 1),
(8, '2019_09_26_042852_create_infografis_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2020_02_12_062308_create_opd_table', 1),
(11, '2020_04_24_055537_create_pendaftaran_table', 1),
(12, '2020_09_04_085850_create_content_table', 1),
(13, '2020_11_03_155155_create_kecamatan_table', 1),
(14, '2020_11_03_155211_create_kelurahan_table', 1),
(15, '2022_01_23_133924_create_permission_tables', 1),
(16, '2022_10_17_090110_create_pimpinans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

DROP TABLE IF EXISTS `opd`;
CREATE TABLE IF NOT EXISTS `opd` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id`, `nama`) VALUES
(1, 'Dinas Pendidikan'),
(2, 'Dinas Kependudukan dan Pencatatan Sipil'),
(3, 'Dinas Kesehatan'),
(4, 'Dinas Pemuda, Olah Raga, Kebudayaan dan Pariwisata'),
(5, 'Dinas Lingkungan Hidup dan Kebersihan'),
(6, 'Dinas Perumahan dan Pemukiman'),
(7, 'Dinas Tenaga Kerja'),
(8, 'Dinas Pekerjaan Umum dan Penataan Ruang'),
(9, 'Dinas Pemadam Kebakaran dan Penyelamatan'),
(10, 'Dinas Koperasi dan Usaha Mikro'),
(11, 'Badan Keuangan Daerah'),
(12, 'Dinas Perdangan dan Perindustrian'),
(13, 'Dinas Ketahanan Pangan, Pertanian dan Perikanan'),
(14, 'Dinas Perhubungan'),
(15, 'Dinas Komunikasi dan Informatika'),
(16, 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu'),
(17, 'Dinas Perlindungan Anak, Pemberdayaan Masyarakat dan Keluarga'),
(18, 'Dinas Sosial'),
(19, 'Dinas Kearsipan dan Perpustakaan'),
(20, 'Badan Perencanaan Pembangunan dan Penelitian Pengembangan Daerah'),
(21, 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia'),
(22, 'Inspektorat Daerah'),
(23, 'Kantor Kesatuan Bangsa dan Politik'),
(24, 'Rumah Sakit Umum Daerah'),
(25, 'Sekretariat Daerah'),
(26, 'Satuan Polisi Pamong Praja');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

DROP TABLE IF EXISTS `pendaftaran`;
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_lamaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'mengelola agenda', 'web', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(2, 'mengelola dsw', 'web', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(3, 'mengelola pengumuman', 'web', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(4, 'mengelola infografis', 'web', '2022-12-08 16:29:52', '2022-12-08 16:29:52'),
(5, 'mengelola konten', 'web', '2022-12-08 16:29:52', '2022-12-08 16:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

DROP TABLE IF EXISTS `pimpinan`;
CREATE TABLE IF NOT EXISTS `pimpinan` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id`, `nama`, `deskripsi`, `image`, `facebook`, `twitter`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Idris', 'Wali Kota Depok 2021-2026', 'uploads/pimpinan/Walikota.png', 'https://www.facebook.com/IdrisAShomad/', 'https://twitter.com/idrisashomad?lang=en', 'https://www.instagram.com/idrisashomad/?hl=en', 1, NULL, NULL),
(2, 'Imam Budi Hartono', 'Wakil Wali Kota Depok 2021-2026', 'uploads/pimpinan/Wakil-Walikota-2021.png', 'https://www.facebook.com/ImamBHartono/', 'https://twitter.com/imambhartono', 'https://www.instagram.com/imambhartono/', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', '2022-12-08 16:29:52', '2022-12-08 16:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

DROP TABLE IF EXISTS `sejarah`;
CREATE TABLE IF NOT EXISTS `sejarah` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '{\"ops\":[{\"attributes\":{\"color\":\"#5f6167\"},\"insert\":\"Depok berawal dari sebuah Kecamatan yang berada di lingkungan Kewedanaan (Pembantu Bupati) wilayah Parung Kabupaten Bogor, kemudian pada tahun 1976 perumahan mulai dibangun baik oleh Perum Perumnas maupun pengembang yang kemudian diikuti dengan dibangunnya kampus Universitas Indonesia (UI), serta meningkatnya perdagangan dan Jasa yang semakin pesat sehingga diperlukan kecepatan pelayanan.\"},{\"insert\":\"\\n\"}]}', '2022-12-08 16:29:52', '2022-12-08 16:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `namaservice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusservice` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `namaservice`, `url`, `statusservice`, `created_at`, `updated_at`) VALUES
(1, 9, 'Panggilan Darurat', 'https://dsw.depok.go.id/html/panggilan_darurat', 1, NULL, NULL),
(2, 9, 'Call Center OPD', 'https://dsw.depok.go.id/html/panggilan_opd', 1, NULL, NULL),
(3, 5, 'Lalu Lintas Depok', 'https://dsw.depok.go.id/html/lalulintas', 1, NULL, NULL),
(4, 6, 'Lowongan Kerja', 'https://dsw.depok.go.id/html/loker', 1, NULL, NULL),
(5, 14, 'Berita Depok', 'https://dsw.depok.go.id/html/rss', 1, NULL, NULL),
(6, 1, 'Informasi PBB', 'https://dsw.depok.go.id/html/pbb', 1, NULL, NULL),
(7, 1, 'Cek PBB', 'https://dsw.depok.go.id/html/tagihan_pbb', 1, NULL, NULL),
(8, 1, 'Pembayaran PBB', 'https://dsw.depok.go.id/html/info_pembayaran_pbb', 1, NULL, NULL),
(9, 1, 'Informasi BPHTB', 'https://dsw.depok.go.id/html/bphtb', 1, NULL, NULL),
(10, 1, 'Cek BPHTB', 'https://dsw.depok.go.id/html/pembayaran_bphtb', 1, NULL, NULL),
(11, 1, 'Info Pembayaran BPHTB', 'https://dsw.depok.go.id/html/info_pembayaran_bphtb', 1, NULL, NULL),
(12, 3, 'Informasi Perizinan', 'https://dsw.depok.go.id/html/perizinan', 1, NULL, NULL),
(13, 3, 'Cek Perizinan', 'https://dsw.depok.go.id/html/tracking_perizinan', 1, NULL, NULL),
(14, 3, 'Perizinan Online', 'https://dsw.depok.go.id/html/izinonline', 1, NULL, NULL),
(15, 2, 'Persyaratan Pelayanan Daftar Penduduk', 'https://dsw.depok.go.id/html/dafduk', 1, NULL, NULL),
(16, 2, 'Persyaratan Pelayanan Pencatatan Sipil Berdasarkan Per-Walikota Depok Nomor 94 Tahun 2018', 'https://dsw.depok.go.id/html/persyaratan', 1, NULL, NULL),
(17, 2, 'Persyaratan dan Tata Cara Pendaftaran Penduduk dan Pencatatan Sipil', 'https://dsw.depok.go.id/html/penduduk', 1, NULL, NULL),
(18, 2, 'Persyaratan Pembuatan KIA dan Akta Kelahiran', 'https://dsw.depok.go.id/html/wali', 1, NULL, NULL),
(19, 4, 'Registrasi RSUD', 'https://dsw.depok.go.id/html/rsud_registrasi', 1, NULL, NULL),
(20, 4, 'Registrasi Puskesmas', 'https://dsw.depok.go.id/html/puskesmas_registrasi', 1, NULL, NULL),
(21, 4, 'Informasi Pendaftaran Puskesmas', 'https://dsw.depok.go.id/html/puskesmas_pendaftar', 1, NULL, NULL),
(22, 4, 'Antrian Puskesmas', 'https://dsw.depok.go.id/html/puskesmas_antrian', 1, NULL, NULL),
(23, 4, 'Puskesmas 24 Jam', 'https://dsw.depok.go.id/html/puskesmas24', 1, NULL, NULL),
(24, 4, 'Lokasi Puskesmas', 'https://dsw.depok.go.id/html/puskesmas_lokasi', 1, NULL, NULL),
(25, 4, 'Petunjuk', 'https://dsw.depok.go.id/html/puskesmas_petunjuk', 1, NULL, NULL),
(26, 4, 'Informasi Kesehatan', 'https://dsw.depok.go.id/html/kesehatan', 1, NULL, NULL),
(27, 4, 'Berita Kesehatan', 'https://dsw.depok.go.id/html/berita_kesehatan', 1, NULL, NULL),
(28, 10, 'Daftar Sekolah', 'https://dsw.depok.go.id/html/daftar_sekolah', 1, NULL, NULL),
(29, 10, 'Nilai Passing Grade', 'https://dsw.depok.go.id/html/info_passinggrade', 1, NULL, NULL),
(30, 10, 'Kalendar Pendidikan', 'https://dsw.depok.go.id/html/kalender_pendidikan', 1, NULL, NULL),
(31, 10, 'PPDB Online', 'https://dsw.depok.go.id/html/ppdb_online', 1, NULL, NULL),
(32, 11, 'Informasi Zakat', 'https://dsw.depok.go.id/html/info_zakat', 1, NULL, NULL),
(33, 11, 'Pembayaran Zakat', 'https://dsw.depok.go.id/html/bayar_zakat', 1, NULL, NULL),
(34, 7, 'Informasi PLN', 'https://dsw.depok.go.id/html/info_pln', 1, NULL, NULL),
(35, 7, 'Cek Tagihan PLN', 'https://dsw.depok.go.id/html/cek_pln', 1, NULL, NULL),
(36, 7, 'Informasi PDAM', 'https://dsw.depok.go.id/html/info_pdam', 1, NULL, NULL),
(37, 7, 'Registrasi Pelanggan Baru', 'https://dsw.depok.go.id/html/layanan_registerbaru', 1, NULL, NULL),
(38, 7, 'Registrasi Pelanggan Lama', 'https://dsw.depok.go.id/html/layanan_registerlama', 1, NULL, NULL),
(39, 7, 'Keluhan Pelanggan', 'https://dsw.depok.go.id/html/layanan_keluahanpelanggan', 1, NULL, NULL),
(40, 7, 'Keluhan Non Pelanggan', 'https://dsw.depok.go.id/html/layanan_keluahannonpelanggan', 1, NULL, NULL),
(41, 7, 'Cek Tagihan PDAM', 'https://dsw.depok.go.id/html/cek_pdam', 1, NULL, NULL),
(42, 1, 'Informasi Pajak Kendaraan', 'https://dsw.depok.go.id/html/info_pajak_sambara', 1, NULL, NULL),
(43, 1, 'Bukti Bayar ', 'https://dsw.depok.go.id/html/sambara_buktibayar', 1, NULL, NULL),
(44, 12, 'Cari ASN', 'https://dsw.depok.go.id/html/cari_pegawai', 1, NULL, NULL),
(45, 12, 'Statistik ASN', 'https://dsw.depok.go.id/html/statistik_peg', 1, NULL, NULL),
(46, 13, 'Harga Komoditas Pasar', 'https://dsw.depok.go.id/html/komoditas_pasar', 1, NULL, NULL),
(47, 13, 'Katalog Perusahaan', 'https://dsw.depok.go.id/html/kat_industri', 1, NULL, NULL),
(48, 13, 'Katalog Produk', 'https://dsw.depok.go.id/html/kat_produk', 1, NULL, NULL),
(49, 8, 'Pengaduan', 'https://dsw.depok.go.id/html/sigap', 1, NULL, NULL),
(50, 5, 'Peta Depok ', 'https://dsw.depok.go.id/html/peta_depok', 1, NULL, NULL),
(51, 15, 'Kampung Siaga ', 'https://ccc-19.depok.go.id/Forum/', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sumber` int(11) NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `popup` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `nama`, `deskripsi`, `imageName`, `file`, `sumber`, `url`, `status`, `popup`, `created_at`, `updated_at`) VALUES
(1, 'Sigap! (Sistem Terintegrasi untuk Pengaduan dan Aspirasi)', '<p>Sigap! (Sistem Terintegrasi untuk Pengaduan dan Aspirasi) adalah media bagi Masyarakat Kota Depok untuk mempermudah penyampaian pengaduan, aspirasi, dan saran kepada Pemerintah Kota Depok secara real-time.</p>\r\n            <p>Dengan Aplikasi Sigap!, masyarakat dapat memantau segala pengaduan dan aspirasi yang sudah disampaikan dan dapat berkomunikasi langsung dengan Pemerintah Kota Depok. </p>\r\n            <p>Download aplikasi Sigap! sekarang! Ayo bersama-sama, kita bangun Kota Depok tercinta!</p>\r\n            <p><a href=\"https://play.google.com/store/apps/details?id=com.depok.sigap&hl=in\" target=\"_blank\">Download SIGAP disini</a></p>', 'sigap.png', NULL, 15, 'sigap!-sistem-terintegrasi-untuk-pengaduan-dan-aspirasi', 1, 0, '2022-12-08 16:29:52', NULL),
(2, 'Portal Puskesmas Kota Depok', '<p>Portal Puskesmas adalah suatu layanan Puskesmas berbasis website yang tentunya dapat mempermudah masyarakat dalam berbagai hal contohnya Registrasi Online, Mengetahui Antrian Puskesmas, dan Mengecek jadwal pelayanan Puskesmas</p>\r\n                <p><a href=\"https://puskesmas.depok.go.id\" target=\"_blank\">Download SIGAP disini</a></p>', 'puskesmas.png', NULL, 3, 'portal-puskesmas-kota-depok', 1, 0, '2022-12-08 16:29:52', NULL),
(3, 'Depok Single Window - Aplikasi Layanan Publik Online Kota Depok', '<p>Depok Single Window, satu aplikasi untuk berbagai urusan.<br /><br />Depok Single Window adalah Media bagi masyarakat Kota Depok untuk memudahkan layanan Informasi yang dapat diakses di smartphone hanya dengan satu aplikasi<br />Gunakan Depok Single Window Untuk:<br />1. Waktu Sholat<br />Fitur ini menampilkan waktu solat di kota depok<br /><br />2. Panggilan Darurat<br />Anda membutuhkan panggilan darurat?<br />Ketika anda membutuhkan panggilan darurat, kami siap sedia dalam 7x24 jam.<br /><br />3. Cuaca<br />Fitur ini menyediakan informasi cuaca di kota depok berdasarkan lokasi anda<br /><br />4. Lalu lintas<br />Fitur ini menyediakan informasi keadaan lalu lintas di kota depok berdasarkan lokasi anda.<br /><br />5. Peta Depok<br />Fitur ini menyediakan informasi Peta di kota depok berdasarkan lokasi anda, di fitur ini anda dapat mencari lokasi obyek di sekitar anda.<br /><br />6. Berita Depok<br />Berita Depok hadir disini untuk memudahkan anda mencari berita terbaru di kota depok<br /><br />7. Lowongan Kerja<br />Layanan ini berisi informasi lowongan kerja yang disediakan khusus untuk daerah kota depok<br /><br />8. Kesehatan<br />Layanan ini berisi informasi kesehatan mulai dari daftar puskesmas, daftar layanan RSUD , daftar rumah sakit, dan informasi penyakit di kota depok<br /><br />9. Pendidikan<br />Layanan ini berisi informasi pendidikan mulai dari daftar sekolah di kota depok, informasi passing grade SMP,SMA,SMK , informasi kalendar pendidikan, dan informasi tentang PPDB<br /><br />10. Pajak<br />Layanan ini berisi informasi tentang PBB , SAMBARA( Samsat Mobile Jawa Barat ) dan juga terdapat fitur cek tagihan pbb maupun samsat, yang bisa anda cek secara online disini <br /><br />11. BPHTB<br />Layanan ini berisi informasi tentang BPHTB dan juga terdapat fitur cek pembayaran BPHTB, yang bisa anda cek secara online disini<br /><br />12. Perizinan<br />Layanan ini berisi informasi tentang Perizinan dan juga terdapat fitur cek tracking perizinan, yang bisa anda cek secara online disini<br /><br />13. PLN<br />Layanan ini berisi informasi PLN Depok<br /><br />14. Zakat<br />Layanan ini berisi informasi tentang Zakat dan juga Informasi pembayaran zakat melalui BAZNAS Depok <br /><br />15. Aspirasi<br />Dengan Layanan ini anda dapat menyampaikan Aspirasi anda tentang kota depok, Kami akan menjaga privasi anda.<br /><br />16. Contact Center<br />Dengan layanan ini anda dapat menyampaikan pengaduan melalui panggilan ke contact center depok</p>\r\n            <p><a href=\"https://play.google.com/store/apps/details?id=id.depok.depoksinglewindow&hl=in\" target=\"_blank\">Download Depok Single Window disini</a></p>', 'dsw.png', NULL, 15, 'depok-single-window', 1, 1, '2022-12-08 16:29:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adminstrator', 'admin@depok.go.id', NULL, '$2a$12$riFHRFohp0kn.9.UCx8cSO.gdltrOoxB0WPnIn9xDeCiZQVzbdVEm', NULL, NULL, NULL),
(2, 'Admin IKP', 'ikp@depok.go.id', NULL, '$2y$10$x2iyuvRC0lZTtqhgVGL1MOcLLeOsK3hyAKcKbocWjazt7V1yJFvbu', NULL, NULL, NULL),
(3, 'Admin Humas', 'humas@depok.go.id', NULL, '$2y$10$afWmNpn643kVTKb2tOoTyelSs5U9Jh65JTxqgQEIG3g1obm5kvSHm', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
