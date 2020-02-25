@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    @empty($slider)
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Tambah Pengumuman</h1>
    @else
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Ubah Pengumuman</h1>
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
        <div class="card-header">Pengumuman</div>
        <div class="card-body">
            <form role="form" method="POST" action="{{ empty($slider) ? route('slider.store') : route('slider.update', $slider->id) }}" enctype="multipart/form-data">
                @csrf
                @isset($slider)
                    {{ method_field('PATCH') }}
                @endisset
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Judul Pengumuman</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Judul" value="{{ old('nama', $slider->nama ?? '') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Gambar Banner</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" value="tes">
                                <label class="custom-file-label" for="image">Pilih gambar</label>
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        @isset($slider)
                        <div class="form-group">
                            <img src="{{ asset('storage/uploads/sliders/'.$slider->imageName) }}" alt="" class="img-thumbnail">
                            <a href="" type="button" class="btn btn-sm btn-danger mt-1">Hapus gambar</a>
                        </div>
                        @endisset
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
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="popup" name="popup" value="1" {{ old('popup', $slider->popup ?? '') == 1 ? 'checked' : '' }}>
                                <label class="custom-control-label" for="popup">Tampil di popup awal</label>
                            </div>
                            @error('dokumen')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="opd">Sumber</label>
                            <select class="custom-select @error('opd') is-invalid @enderror" name="opd" id="opd">
                                <option selected disabled="disabled">Pilih OPD</option>
                                @foreach($opd as $data)
                                    <option value="{{ $data->id }}" @if (old('opd', $slider->sumber ?? '') == $data->id) selected @endif>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                            @error('opd')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="file">Upload File</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('file') is-invalid @enderror" id="file" name="file">
                                <label class="custom-file-label" for="file[]">Pilih file</label>
                                @error('file')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        @isset($slider->file)
                        <div class="form-group">
                            {{ $slider->file }}
                            <a href="" type="submit" class="btn btn-sm btn-danger">Hapus File</a>
                        </div>
                        @endisset
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Pengumuman</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3" name="deskripsi">{{ old('deskripsi', $slider->deskripsi ?? '') }}</textarea>
                            @error('deskripsi')
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
                <a href="{{ route('slider.index') }}" class="btn btn-outline-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('node_modules/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
    $('#image, #file').on('change',function(e){
        var fileName = e.target.files[0].name;;
        $(this).next('.custom-file-label').html(fileName);
    })
    tinymce.init({
        selector: '#deskripsi',
        height : 300,
        plugins: "link",
    });
</script>
@endsection
