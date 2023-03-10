@extends('includes.admin-layout')
@push('css')
    <link rel="stylesheet" href="{{ asset(mix('css/filepond.css')) }}">
@endpush
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('pimpinan') !!}

    <x-alert></x-alert>
    <div class="row pt-3">
        <div class="col-6">
            <x-header text="Wali Kota"></x-header>
            <form method="POST" action="{{ route('admin.walikota.update') }}" enctype="multipart/form-data" class="pb-5">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="preview-label" class="form-label">Foto</label>
                    <input type="file" id="walikota-image" name="image" class="@error('image') is-invalid @enderror" style="border-color: red solid 1px">
                    <div id="thumbHelp" class="form-text">*Ukuran Foto harus dibawah 150Kb</div>
                    
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Walikota" value="{{ old('nama', $walikota->nama ?? '') }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan Deskripsi">{{ $walikota->deskripsi }}</textarea>
                    @error('desc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook" value="{{ old('facebook', $walikota->facebook) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter" value="{{ old('twitter', $walikota->twitter) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" value="{{ old('instagram', $walikota->instagram) }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
        <div class="col-6">
            <x-header text="Wakil Wali Kota"></x-header>
            <form method="POST" action="{{ route('admin.wakil-walikota.update') }}" enctype="multipart/form-data" class="pb-5">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="preview-label" class="form-label">Foto</label>
                    <input type="file" id="wakil-walikota-image" name="image" class="@error('image') is-invalid @enderror" style="border-color: red solid 1px">
                    <div id="thumbHelp" class="form-text">*Ukuran Foto harus dibawah 150Kb</div>
                    
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Wakil Walikota" value="{{ old('nama', $wakilWalikota->nama ?? '') }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan Deskripsi">{{ $wakilWalikota->deskripsi }}</textarea>
                    @error('desc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook" value="{{ old('facebook', $wakilWalikota->facebook) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter" value="{{ old('twitter', $wakilWalikota->twitter) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" value="{{ old('instagram', $wakilWalikota->instagram) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="active-status" value="1" {{ $wakilWalikota->status == 1 ? "checked" : "" }}>
                        <label class="form-check-label" for="active-status">Aktif</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="deactive-status" value="0" {{ $wakilWalikota->status == 0 ? "checked" : "" }}>
                        <label class="form-check-label" for="deactive-status">Tidak Aktif</label>
                      </div>
                      
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>

    <form method="POST" action="{{ route('pimpinan.update', $content->id) }}" enctype="multipart/form-data" class="pb-5">
        @csrf
        @isset($content)
            {{ method_field('PATCH') }}
        @endisset
        <x-header text="Artikel Pimpinan"></x-header>
        <x-editor id="content" name="content" value="{!! $content->desc !!}" height="700px"></x-editor>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
@endsection
@push('js')
<script src="{{ asset(mix('js/plugin/filepond.js')) }}"></script>
<script>
    $('#walikota-image').filepond({
        maxFileSize: '550KB',
        labelMaxFileSizeExceeded: 'File gambar terlalu besar',
        acceptedFileTypes: ['image/*'],
        labelFileTypeNotAllowed: 'File hanya boleh berupa gambar',
        storeAsFile: true,
        @if (isset($walikota) && $walikota->image)
            files: [{ source: '{{ $walikota->image_url }}' }]
        @endif
    });

    $('#wakil-walikota-image').filepond({
        maxFileSize: '550KB',
        labelMaxFileSizeExceeded: 'File gambar terlalu besar',
        acceptedFileTypes: ['image/*'],
        labelFileTypeNotAllowed: 'File hanya boleh berupa gambar',
        storeAsFile: true,
        @if (isset($wakilWalikota) && $wakilWalikota->image)
            files: [{ source: '{{ $wakilWalikota->image_url }}' }]
        @endif
    });
</script>
@endpush

