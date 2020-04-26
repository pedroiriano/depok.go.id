@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    @empty($infografis)
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Tambah Infografis</h1>
    @else
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Ubah Infografis</h1>
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
        <div class="card-header">Infografis</div>
        <div class="card-body">
            <form role="form" method="POST" action="{{ empty($infografis) ? route('admin-infografis.store') : route('admin-infografis.update', $infografis->id) }}" enctype="multipart/form-data">
                @csrf
                @isset($infografis)
                    {{ method_field('PATCH') }}
                @endisset
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Judul Infografis</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Judul Infografis" value="{{ old('nama', $infografis->nama ?? '') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Infografis</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" value="tes">
                                <label class="custom-file-label" for="image">Pilih Infografis</label>
                                @error('image')
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
                                    <option value="{{ $data->id }}" @if (old('opd', $infografis->sumber ?? '') == $data->id) selected @endif>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                            @error('opd')
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
@endsection
@section('js')
<script type="text/javascript">
    $('#image, #file').on('change',function(e){
        var fileName = e.target.files[0].name;;
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
@endsection
