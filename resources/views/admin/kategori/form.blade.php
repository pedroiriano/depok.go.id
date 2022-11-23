@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    @empty($category)
        {!! Breadcrumbs::render('kategori-dsw.create') !!}
        <x-header text="Tambah Kategori"></x-header>
    @else
        {!! Breadcrumbs::render('kategori-dsw.edit', $infografis) !!}
        <x-header text="Ubah Kategori"></x-header>
    @endempty

    <x-alert></x-alert>

    <div class="card shadow mb-4">
        <div class="card-header">Kategori DSW</div>
            <form role="form" method="POST" action="{{ empty($category) ? route('kategori-dsw.store') : route('kategori-dsw.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                @isset($category)
                    {{ method_field('PATCH') }}
                @endisset
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Nama Kategori DSW</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Kategori" value="{{ old('nama', $category->nama ?? '') }}">
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
                        @isset($category)
                        <div class="form-group">
                            <img src="{{ asset('img/icon/'.$category->icon) }}" alt="" class="img-thumbnail">
                        </div>
                        @endisset
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <select class="form-control custom-select form-control-sm" name="posisi" id="posisi">
                                <option selected disabled="disabled">Pilih Posisi</option>
                                <option value="0" @if (old('status', $category->pos ?? '') == '0') selected @endif>Tidak muncul di halaman utama</option>
                                @for ($i = 1; $i < 9; $i++)
                                    <option value={{ $i }} @if (old('status', $category->pos ?? '') == $i) selected @endif>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tooltip">Deskripsi Kategori</label>
                            <input type="text" class="form-control @error('tooltip') is-invalid @enderror" id="tooltip" name="tooltip" placeholder="Masukkan Tooltip" value="{{ old('tooltip', $category->tooltip ?? '') }}">
                            @error('tooltip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="custom-select @error('status') is-invalid @enderror" name="status" id="status">
                                <option selected disabled="disabled">Pilih Status</option>
                                <option value="1" @if (old('status', $category->status ?? '') == '1') selected @endif>Aktif</option>
                                <option value="0" @if (old('status', $category->status ?? '') == '0') selected @endif>Tidak Aktif</option>
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
                <a href="{{ route('kategori-dsw.index') }}" class="btn btn-outline-secondary">Kembali</a>
            </div>
        </form>
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
