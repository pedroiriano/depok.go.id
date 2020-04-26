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
            <h6 class="m-0 font-weight-bold text-primary">Daftar Agenda Pemerintah Kota Depok</h6>
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
                                    <button type="button" class="btn btn-sm btn-primary rounded-0">
                                        <i class="fas fa-eye"></i>
                                    </button>
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
<!-- Modal -->
<div class="modal fade" id="modalTambahAgenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Agenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.tambahAgenda') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputNamaKegiatan">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="inputNamaKegiatan" name="inputNamaKegiatan"
                            placeholder="Tulis Nama Kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="inputOPD">Perangkat Daerah</label>
                        <input type="text" class="form-control" id="inputOPD" name="inputOPD"
                            placeholder="Perangkat Daerah">
                    </div>
                    <div class="form-group">
                        <label for="inputTanggal">Tanggal</label>
                        <input type="date" name="inputTanggalKegiatan" max="2100-12-31" min="1900-01-01" id="date" class="form-control" data-provide="datepicker">
                    </div>
                    <div class="form-group">
                        <label for="inputTempat">Tempat</label>
                        <input type="text" name="inputTempat" id="inputTempat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select class="form-control form-control-sm" name="inputStatus">
                            <option value="1">Aktif</option>
                            <option valie="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-group">Upload Banner Kegiatan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01" name="image">
                                <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    var date = new Date();
    date.setDate(date.getDate());

    $('#date').datepicker({ 
        startDate: date
    });
</script>
@endsection
