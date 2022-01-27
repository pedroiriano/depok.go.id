@extends('includes.admin-layout')
@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<style>
    table.dataTable thead th
    {
        border-bottom: 1px;
    }
</style>
@endpush
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
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Layanan DSW</h1>
    <button class="btn btn-primary btn-icon-split text-white mb-4" data-toggle="modal"
        data-target="#modalTambahLayanan">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Layanan</span>
    </button>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Layanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $key=>$service)
                        <tr>
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                {{ $service->namaservice }}
                            </td>
                            <td>
                                @if ($service->statusservice == 1)
                                Aktif
                                @else
                                Tidak Aktif
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-success btn-sm btn-icon-split"
                                    onclick="loadUbahLayanan('{{ $service->namaservice }}', '{{ $service->url }}','{{ $service->statusservice }}', '{{ $service->category->nama }}', '{{ $service->id }}')">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Ubah</span>
                                </button>
                                <button class="btn btn-danger btn-icon-split btn-sm" data-toggle="modal" data-target="#modalHapusLayanan">
                                    <span class="icon">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-xs-center">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tambah Layanan-->
<div class="modal fade" id="modalTambahLayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Layanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.tambahLayanan') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="inputNamaLayanan">Nama</label>
                        <input type="text" class="form-control" id="inputNamaLayanan" name="inputNamaLayanan"
                            placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                        <label for="inputURL">URL</label>
                        <input type="text" class="form-control" id="inputURL" name="inputURL" placeholder="URL">
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select class="form-control form-control-sm" name="inputStatus" id="inputStatus">
                            <option value="0" selected="selected">Tidak Aktif</option>
                            <option value="1">Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputKategori">Kategori</label>
                        <select name="inputKategori" id="inputKategori" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama }}</option>
                            @endforeach
                        </select>
                    </div>
               </div>
               <div class=" modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Layanan-->
<div class="modal fade" id="modalUbahLayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Layanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
            <form method="POST" action="{{ route('admin.ubahLayanan', $service->id) }}" enctype="multipart/form-data" id="formUbahLayanan">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" id="inputUbahIdLayanan">
                    <div class="form-group">
                        <label for="inputUbahNamaLayanan">Nama</label>
                        <input type="text" class="form-control" id="inputUbahNamaLayanan" name="inputUbahNamaLayanan"
                            placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                        <label for="inputUbahURL">URL</label>
                        <input type="text" class="form-control" id="inputUbahURL" name="inputUbahURL" placeholder="URL">
                    </div>
                    <div class="form-group">
                        <label for="inputUbahStatus">Status</label>
                        <select class="form-control form-control-sm" name="inputUbahStatus" id="inputUbahStatus">
                            <option value="0" selected="selected">Tidak Aktif</option>
                            <option value="1">Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputUbahKategori">Kategori</label>
                        <input type="text" class="form-control" id="inputUbahKategori" name="inputUbahKategori">
                        <select name="inputUbahKategori" id="inputUbahKategori" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Delete Layanan -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modalHapusLayanan">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.hapusLayanan', $service->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <p>Apakah anda yakin untuk menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Iya</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
       if ($('#inputUbahStatus').val() == 1) {
           $('#inputPosisi').prop('disabled', false); 
       }
        $('#inputStatus').on('change', function () {
            if ($('#inputStatus').val() == 1)
                $('#inputPosisi').prop('disabled', false);
            else
                $('#inputPosisi').prop('disabled', true);
        });
        
        $('#inputUbahStatus').on('change', function () {
            if ($('#inputUbahStatus').val() == 1)
                $('#inputUbahPosisi').prop('disabled', false);
            else
                $('#inputUbahPosisi').prop('disabled', true);
        });
        $('#inputIcon').change(function (e) {
            var fileName = e.target.files[0].name;
            $('#labelIcon').text(fileName);
        });
        $('#inputUbahIcon').change(function (e) {
            var fileName = e.target.files[0].name;
            $('#labelUbahIcon').text(fileName);
        });
    });

    function loadUbahLayanan(nama, url, status, category, id) {
        var public_url = {!!json_encode(asset('img\\icon\\')) !!};
        var route = {!! json_encode(url('/ubah-layanan')) !!}
        $('#modalUbahLayanan').modal('show');
        $('#formUbahLayanan').attr('action', route + '/' + id );
        $('#modalUbahLayanan').find("#inputUbahNamaLayanan").val(nama);
        $('#modalUbahLayanan').find("#inputUbahURL").val(url);
        $('#modalUbahLayanan').find("#inputUbahStatus").val(status);
        $('#modalUbahLayanan').find("#inputUbahKategori").val(category);
        $('#modalUbahLayanan').find("#inputUbahIdLayanan").val(id);
        //   $('#formUbahLayanan').attr('action', route + '/' + id);
    }
    $('#formUbahLayanan').on('submit', function (e) {
        var form = $('#formUbahLayanan');
        var id = $('#inputUbahIdLayanan').val();
        $.ajax({
            type: 'ubah-layanan/'+id,
            url: form.attr('action'),
            data: {
                id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function () {
                console.log("SUKSES");
            },
        });
    });
</script>
@endsection
@push('js')
<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
    </script>
@endpush