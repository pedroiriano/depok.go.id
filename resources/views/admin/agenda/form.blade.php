@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    @empty($agenda)
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Tambah Agenda</h1>
    @else
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Ubah Agenda</h1>
    @endempty
    
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ $message }}
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
        <div class="card-header">Agenda</div>
        <div class="card-body">
            <form role="form" method="POST" action="{{ empty($agenda) ? route('admin-agenda.store') : route('admin-agenda.update', $agenda->id) }}" enctype="multipart/form-data">
                @csrf
                @isset($agenda)
                    {{ method_field('PATCH') }}
                @endisset
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Nama Kegiatan</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Kegiatan" value="{{ old('nama', $agenda->nama ?? '') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" max="2100-12-31" min="1900-01-01" id="date" class="form-control @error('tanggal') is-invalid @enderror" data-provide="datepicker" value="{{ old('tanggal', $agenda->tanggal ?? '') }}">
                            @error('tanggal')
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
                        @isset($agenda)
                        <div class="form-group">
                            <img src="{{ asset('storage/uploads/agendas/'.$agenda->imageName) }}" alt="" class="img-thumbnail">
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
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="opd">Perangkat Daerah</label>
                            <select class="custom-select @error('opd') is-invalid @enderror" name="opd" id="opd">
                                <option selected disabled="disabled">Pilih OPD</option>
                                @foreach($opd as $data)
                                    <option value="{{ $data->id }}" @if (old('opd', $agenda->sumber ?? '') == $data->id) selected @endif>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                            @error('opd')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" name="tempat" id="tempat" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Tempat" value="{{ old('tempat', $agenda->tempat ?? '') }}">
                            @error('tempat')
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
                <a href="{{ route('admin-agenda.index') }}" class="btn btn-outline-secondary">Kembali</a>
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
</script>
@endsection
