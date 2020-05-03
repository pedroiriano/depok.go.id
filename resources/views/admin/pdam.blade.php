@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Pendaftaran Direksi PDAM</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Pendaftar Direksi PDAM</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Handphone</th>
                            <th style="width: 8%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftar as $key=>$data)
                        <tr>
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                {{ $data->nik }}
                            </td>
                            <td>
                                {{ $data->nama }}
                            </td>
                            <td>
                                {{ $data->handphone }}
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailPendaftar{{ $data->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Unduh Berkas
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="{{ route('pendaftaran.unduh.surat-lamaran', $data->surat_lamaran) }}">Unduh Surat Lamaran</a>
                                            <a class="dropdown-item" href="{{ route('pendaftaran.unduh.persyaratan', $data->sertifikat) }}">Unduh Persyaratan Administrasi</a>
                                        </div>
                                      </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="detailPendaftar{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{ $data->nama }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>NIK</label>
                                                    <input type="text" class="form-control" id="nama" value="{{ $data->nik }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" id="nama" value="{{ $data->nama }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" id="nama" value="{{ $data->email }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Handphone</label>
                                                    <input type="text" class="form-control" id="nama" value="{{ $data->handphone }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <a class="btn btn-success btn-sm" href="{{ route('pendaftaran.unduh.surat-lamaran', $data->surat_lamaran) }}">Unduh Surat Lamaran</a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <a class="btn btn-success btn-sm" href="{{ route('pendaftaran.unduh.persyaratan', $data->sertifikat) }}">Unduh Persyaratan Administrasi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
@endsection
