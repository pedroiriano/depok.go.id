@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Infografis</h1>
    <a class="btn btn-primary btn-icon-split text-white mb-4" href="{{ route('admin-infografis.create') }}">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Infografis</span>
    </a>
     @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Infografis</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Nama</th>
                            <th>OPD</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infografis as $key=>$data)
                        <tr>
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                {{ $data->nama }}
                            </td>
                            <td>
                                {{ $data->opd->nama }}
                            </td>
                            <td>
                                @if ($data->status == 1)
                                <span class="badge badge-pill badge-success">Aktif</span>
                                @else
                                <span class="badge badge-pill badge-danger">Tidak Aktif</span>
                                Tidak Aktif
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-infografis.edit', $data->id) }}" style="text-decoration:none;">
                                    <button class="btn btn-success btn-sm btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </button>
                                </a>
                                <form action="{{ route("admin-infografis.destroy", $data) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm btn-icon-split" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" style="">
                                        <span class="icon"><i class="fas fa-trash"></i></span>
                                        <span class="text">Hapus</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
