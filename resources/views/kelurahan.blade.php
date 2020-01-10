@extends('includes.layout')
@section('content')
<div style="background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%); height:200px ">
</div>
<div class="container text-center">
     <div class="btn-group btn-group-lg flex-wrap" role="group" aria-label="#" style="top:-27px">
        <input type="button" onclick="window.location.href='{{ route('dinas') }}'" value="Dinas" class="btn btn-outline-primary btn-light"/>
        <input type="button" onclick="window.location.href='{{ route('sekda') }}'" value="Sekretariat Daerah" class="btn btn-outline-primary btn-light"/>
        <input type="button" onclick="window.location.href='{{ route('kecamatan') }}'" value="Kecamatan" class="btn btn-outline-primary btn-light"/>
        <input type="button" onclick="window.location.href='{{ route('kelurahan') }}'" value="Kelurahan" class="btn btn-primary"/>
        </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 py-4">Kelurahan</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
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
            </div>
        </div>
    </div>
</div>
@endsection