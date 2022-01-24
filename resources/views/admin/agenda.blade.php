@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
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
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Agenda</h1>
    <a class="btn btn-primary btn-icon-split text-white mb-4" href="{{ route('admin-agenda.create') }}">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Agenda</span>
    </a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary">Daftar Agenda Pemerintah Kota Depok</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th style="width: 8%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agendas as $key=>$agenda)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $agenda->nama }}</td>
                            <td>{{ $agenda->tanggal }}</td>
                            <td>
                                @if ( $agenda->status == 1 )
                                    <span class="badge badge-pill badge-success">Aktif</span>
                                @else
                                    <span class="badge badge-pill badge-danger">Tidak Aktif</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a class="btn btn-sm btn-success float-left rounded-0" href="{{ route('admin-agenda.edit', $agenda->id) }}">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </a>
                                    <form action="{{ route("admin-agenda.destroy", $agenda->id) }}" method="POST" class="form-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger rounded-0" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" style=""><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
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
