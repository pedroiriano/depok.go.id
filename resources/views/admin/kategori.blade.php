@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Kategori DSW</h1>
    <a class="btn btn-primary btn-icon-split text-white mb-4" href="{{ route('admin-kategori-dsw.create') }}" class="btn btn-primary mb-4">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Kategori</span>
    </a>
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
                                <a href="{{ route('admin-kategori-dsw.edit', $category->id) }}" class="btn btn-success btn-sm btn-icon-split">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Ubah</span>
                                </a>
                                <a data-toggle="modal" data-target="#modal-remove-category-{{ $category->id }}"
                                    class="btn btn-danger btn-icon-split btn-sm text-white" id="deleteSlider">
                                    <span class="icon">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                    </button>
                            </td>
                        </tr>
                        <!--Delete Category -->
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true" id="modal-remove-category-{{ $category->id }}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger">
                                        <h5 class="modal-title text-white">Konfirmasi Hapus Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('admin-kategori-dsw.destroy', $category->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-body">
                                            <p>Apakah anda yakin untuk menghapus data ini?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Iya</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tidak</button>
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
