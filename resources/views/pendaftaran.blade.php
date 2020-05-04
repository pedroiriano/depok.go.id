@extends('includes.layout')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
       <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-4 py-5 text-center">Pendaftaran Direksi PDAM</h1>
            </div>
            <div class="col-md-8 col-12">
                <div class="callout callout-danger">
                    <h4>Perhatian</h4>
                    Harap masukkan data sesuai dengan KTP
                </div>
                <form action="{{ route('pendaftaran-direksi-pdam.store') }}" role="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nik">Masukkan NIK</label>
                        <input type="text" class="form-control text-uppercase  @error('nik') is-invalid @enderror" id="nik" aria-describedby="nikHelp" placeholder="Masukkan NIK" name="nik" value="{{ old('nik', $pendaftaran->no_kk ?? '') }}">
                        @error('nik')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        <small id="nikHelp" class="form-text text-muted">Masukkan NIK dengan angka dan berjumlah 16. contoh <span class="font-weight-bold">3276061212970001</span></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Masukkan Nama</label>
                        <input type="text" class="form-control text-uppercase  @error('nama') is-invalid @enderror" id="nama" aria-describedby="namaHelp" placeholder="Masukkan Nama" name="nama" value="{{ old('nama', $pendaftaran->nama ?? '') }}">
                        @error('nama')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        <small class="form-text text-muted">Masukkan nama yang sesuai dengan KTP</small>
                    </div>
                    <div class="form-group">
                        <label for="email">Masukkan Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email" name="email" value="{{ old('email', $pendaftaran->email ?? '') }}">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="handphone">Masukkan Handphone</label>
                        <input type="text" class="form-control text-uppercase  @error('handphone') is-invalid @enderror" id="handphone" aria-describedby="handphoneHelp" placeholder="Masukkan Nomor Handphone" name="handphone" value="{{ old('handphone', $pendaftaran->handphone ?? '') }}">
                        @error('handphone')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        <small id="handphoneHelp" class="form-text text-muted">contoh <span class="font-weight-bold">081288112233</span> dan Nomor Handphone yang terdapat Whatsapp</small>
                    </div>
                    <div class="form-group">
                        <label for="surat_lamaran">Unggah Surat Lamaran</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('surat_lamaran') is-invalid @enderror" id="surat_lamaran" name="surat_lamaran">
                            <label class="custom-file-label" for="surat_lamaran">Choose file</label>
                            @error('surat_lamaran')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Upload File Word(.docx) yang telah di download</small>
                    </div>
                    <div class="form-group">
                        <label for="sertifikat">Unggah Berkas Persyaratan Administrasi</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('sertifikat') is-invalid @enderror" id="sertifikat" name="sertifikat">
                            <label class="custom-file-label" for="sertifikat">Choose file</label>
                            @error('sertifikat')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Unggah Berkas Persyaratan Administrasi dalam satu file dengan bentuk PDF(.pdf) atau Word(.docx)</small>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah data yang di isi sudah benar?');return false;">Kirim</button>
                </form>
            </div>
        </div>
   </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $('#surat_lamaran, #sertifikat').on('change',function(e){
        var fileName = e.target.files[0].name;;
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
@endsection
