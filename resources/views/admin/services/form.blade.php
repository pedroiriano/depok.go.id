@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    @empty($service)
        {!! Breadcrumbs::render('layanan-dsw.create') !!}
        <x-header text="Tambah Layanan"></x-header>
    @else
        {!! Breadcrumbs::render('layanan-dsw.edit', $service) !!}
        <x-header text="Ubah Layanan"></x-header>
    @endempty

    <x-alert></x-alert>

    <div class="row">
        <div class="col-md-6 col-12">
            <form role="form" method="POST" action="{{ empty($service) ? route('service.store') : route('service.update', $service->id) }}" enctype="multipart/form-data">
            @csrf
            @isset($service)
                {{ method_field('PATCH') }}
            @endisset
            <div class="card shadow mb-4">
                <div class="card-header">Layanan DSW</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputNamaLayanan">Nama</label>
                        <input type="text" class="form-control" id="inputNamaLayanan" name="inputNamaLayanan" placeholder="Nama Layanan" value="{{ old('inputNamaLayanan', $service->namaservice ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="inputURL">URL</label>
                        <input type="text" class="form-control" id="inputURL" name="inputURL" placeholder="URL" value="{{ old('inputURL', $service->url ?? '') }}">
                        <small id="inputURLHelp" class="form-text text-muted">Contoh: https://dsw.depok.go.id/html/cari_dtks</small>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select class="form-control form-control-sm" name="inputStatus" id="inputStatus">
                            <option value="0" @if (old('inputStatus', $service->statusservice ?? '') == 0) selected @endif>Tidak Aktif</option>
                            <option value="1" @if (old('inputStatus', $service->statusservice ?? '') == 1) selected @endif>Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputKategori">Kategori</label>
                        <select name="inputKategori" id="inputKategori" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if (old('inputKategori', $service->category_id ?? '') == $category->id) selected @endif>{{ $category->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>     
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('service.index') }}" class="btn btn-outline-secondary">Kembali</a>
                </div>
            </div>
        </form>
        </div>
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
