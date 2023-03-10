@extends('includes.layout')
@section('content')
<div style="background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%); height:200px ">
</div>
<div class="container text-center">
        <div class="btn-group btn-group-lg flex-wrap" role="group" aria-label="#" style="top:-27px">
        <input type="button" onclick="window.location.href='{{ route('dinas') }}'" value="Dinas" class="btn btn-primary"/>
        <input type="button" onclick="window.location.href='{{ route('sekda') }}'" value="Sekretariat Daerah" class="btn btn-outline-primary btn-light"/>
        <input type="button" onclick="window.location.href='{{ route('kecamatan') }}'" value="Kecamatan" class="btn btn-outline-primary btn-light"/>
        <input type="button" onclick="window.location.href='{{ route('kelurahan') }}'" value="Kelurahan" class="btn btn-outline-primary btn-light"/>
        </div>
    </div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 py-4">Dinas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
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
                        Balaikota Depok, Jl. Margonda Raya No. 54 Kota Depok 16431 Telp. 021-7721 7360 ??? 7721 7361, Fax:
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
                        Telp. (021) 77205330 ??? 77216945)
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
            </div>
        </div>
    </div>
</div>
@endsection