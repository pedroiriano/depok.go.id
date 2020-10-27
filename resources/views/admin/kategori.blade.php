@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Kategori DSW</h1>
    <a class="btn btn-primary btn-icon-split text-white mb-4" href="#" class="btn btn-primary mb-4" data-toggle="modal" data-target="#modalCategories">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Kategori</span>
    </a>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
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
            <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key=>$category)
                        <tr>
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                {{ $category->nama }}
                            </td>
                            <td>
                                {{ $category->pos }}
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modalUbahCategories" class="btn btn-success btn-sm btn-icon-split">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Ubah</span>
                                </a>
                                <a data-toggle="modal" data-target="#modal-remove-category-{{ $category->id }}" class="btn btn-danger btn-icon-split btn-sm" id="deleteSlider">
                                    <span class="icon">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal Update Kategori-->
<div class="modal fade" id="modalUbahCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori DSW</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin-kategori-dsw.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Nama Kategori" value="{{ $category->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="tooltip">Tooltip</label>
                        <input type="text" class="form-control" id="tooltip" name="tooltip"
                            placeholder="Tooltip" value="{{ $category->tooltip }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control form-control-sm" name="status" id="status">
                            <option value="1" {{ $category->status === 1 ? 'selected' : '' }}> Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <select class="form-control form-control-sm" name="posisi" id="posisi" >
                            <option value="0" selected="selected">Tidak muncul di halaman utama</option>
                            @for ($i = 1; $i < 20; $i++) <option value={{ $i }}>{{ $i }}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-group">Upload Icon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="icon"
                                    aria-describedby="inputGroupFileAddon01" name="icon">
                                <label class="custom-file-label" for="inputGroupFile01" id="labelIcon">Pilih Icon</label>
                            </div>
                        </div>
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
<!--Delete Category -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-remove-category-{{ $category->id }}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger">
                                        <h5 class="modal-title text-white">Konfirmasi Hapus Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('admin-kategori-dsw.destroy', $category->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
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
                        @endforeach
                    </tbody>
                </table>
                <div class="text-xs-center">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tambah Kategori-->
<div class="modal fade" id="modalCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori DSW</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin-kategori-dsw.store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label for="tooltip">Tooltip</label>
                        <input type="text" class="form-control" id="tooltip" name="tooltip"
                            placeholder="Tooltip">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control form-control-sm" name="status" id="status">
                            <option value="0" selected="selected">Tidak Aktif</option>
                            <option value="1">Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <select class="form-control form-control-sm" name="posisi" id="posisi" >
                            <option value="0" selected="selected">Tidak muncul di halaman utama</option>
                            @for ($i = 1; $i < 20; $i++) <option value={{ $i }}>{{ $i }}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-group">Upload Icon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="icon"
                                    aria-describedby="inputGroupFileAddon01" name="icon">
                                <label class="custom-file-label" for="inputGroupFile01" id="labelIcon">Pilih Icon</label>
                            </div>
                        </div>
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
{{-- <!-- Modal Edit Layanan-->
<div class="modal fade" id="modalUbahLayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="#" enctype="multipart/form-data" id="formUbahLayanan">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Layanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
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
                        <select name="" id="" class="form-control">
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
</div> --}}
<script>
    $(document).ready(function () {
       // if ($('#status').val() == 1) {
       //     $('#posisi').prop('disabled', false); 
       // }
        $('#status').on('change', function () {
            if ($('#status').val() == 1)
                $('#posisi').prop('disabled', false);
            else
                $('#posisi').prop('disabled', true);
        });
        
        $('#icon').change(function (e) {
            var fileName = e.target.files[0].name;
            $('#labelIcon').text(fileName);
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
