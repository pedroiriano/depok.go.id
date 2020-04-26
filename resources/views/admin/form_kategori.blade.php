@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    @empty($category)
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Tambah Kategori</h1>
    @else
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Ubah Kategori</h1>
    @endempty
    
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Whoops!</strong> There were some problems with your input.
    </div>
    @endif
    @if ($message = Session::get('failed'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header">Kategori DSW</div>
            <form role="form" method="POST" action="{{ empty($infografis) ? route('admin-kategori-dsw.store') : route('admin-kategori-dsw.update', $infografis->id) }}" enctype="multipart/form-data">
                @csrf
                @isset($infografis)
                    {{ method_field('PATCH') }}
                @endisset
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Nama Kategori DSW</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Kategori" value="{{ old('nama', $infografis->nama ?? '') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('icon') is-invalid @enderror" id="icon" name="icon">
                                <label class="custom-file-label" for="icon" id="labelIcon">Pilih Icon</label>
                                @error('icon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        @isset($infografis)
                        <div class="form-group">
                            <img src="{{ asset('storage/uploads/infografis/'.$infografis->imageName) }}" alt="" class="img-thumbnail">
                        </div>
                        @endisset
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <select class="form-control form-control-sm" name="posisi" id="posisi" disabled>
                                <option value="0" selected="selected">Tidak muncul di halaman utama</option>
                                @for ($i = 1; $i < 13; $i++)
                                    <option value={{ $i }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tooltip">Tooltip</label>
                            <input type="text" class="form-control @error('tooltip') is-invalid @enderror" id="tooltip" name="tooltip" placeholder="Masukkan Tooltip" value="{{ old('tooltip', $infografis->tooltip ?? '') }}">
                            @error('tooltip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="custom-select @error('status') is-invalid @enderror" name="status" id="status">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>     
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('admin-infografis.index') }}" class="btn btn-outline-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
<!-- Modal Tambah Kategori-->
<div class="modal fade" id="modalCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori DSW</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin-kategori-dsw.store') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label for="tooltip">Tooltip</label>
                        <input type="text" class="form-control" id="tooltip" name="tooltip"
                            placeholder="Tooltip">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control form-control-sm" name="status" id="status">
                            <option value="0" selected="selected">Tidak Aktif</option>
                            <option value="1">Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <select class="form-control form-control-sm" name="posisi" id="posisi" disabled>
                            <option value="0" selected="selected">Tidak muncul di halaman utama</option>
                            @for ($i = 1; $i < 13; $i++) <option value={{ $i }}>{{ $i }}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-group">Upload Icon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="icon"
                                    aria-describedby="inputGroupFileAddon01" name="icon">
                                <label class="custom-file-label" for="inputGroupFile01" id="labelIcon">Pilih Icon</label>
                            </div>
                        </div>
                    </div>
               </div>
               <div class=" modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
       // if ($('#status').val() == 1) {
       //     $('#posisi').prop('disabled', false); 
       // }
        $('#status').on('change', function () {
            if ($('#status').val() == 1)
                $('#posisi').prop('disabled', false);
            else
                $('#posisi').prop('disabled', true);
        });
        
        $('#icon').change(function (e) {
            var fileName = e.target.files[0].name;
            $('#labelIcon').text(fileName);
        });
    });
</script>
@endsection
