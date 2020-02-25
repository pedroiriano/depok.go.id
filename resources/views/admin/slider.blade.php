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
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Pengumuman</h1>
    <a class="btn btn-primary btn-icon-split text-white mb-4" href="{{ route('slider.create') }}">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Pengumuman</span>
    </a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengumuman</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>OPD</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $key=>$slider)
                        <tr>
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                {{ $slider->nama }}
                            </td>
                            <td>
                                {{ $slider->opd->nama }}
                            </td>
                            <td>
                                @if ($slider->status == 1)
                                Aktif
                                @else
                                Tidak Aktif
                                @endif
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a class="btn btn-sm btn-success float-left" href="{{ route('slider.edit', $slider->id) }}">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </a>
                                    <form action="{{ route("slider.destroy", $slider->id) }}" method="POST" class="form-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" style=""><i class="fa fa-trash"></i></button>
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
<!-- Modal Tambah Slider-->
<div class="modal fade" id="modalTambahSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('slider.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" id="inputNama" name="inputNama"
                        placeholder="Nama Slider">
                    </div>
                    <div class="form-group">
                        <label for="inputDeskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="inputDeskripsi" name="inputDeskripsi"
                        placeholder="Deskripsi Slider">
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select class="form-control form-control-sm" name="status">
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <input type="file" name="image">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Modal Edit Slider --}}
<div class="modal fade" id="modalUbahSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data" id="formUbahSlider">
                    @csrf
                    <input type="hidden" id="inputUbahId">
                    <div class="form-group">
                        <label for="inputUbahNama">Nama</label>
                        <input type="text" class="form-control" id="inputUbahNama" name="inputUbahNama"
                        placeholder="Nama Slider">
                    </div>
                    <div class="form-group">
                        <label for="inputUbahDeskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="inputUbahDeskripsi" name="inputUbahDeskripsi"
                        placeholder="Deskripsi Slider">
                    </div>
                    <div class="form-group">
                        <label for="inputUbahStatus">Status</label>
                        <select class="form-control form-control-sm" name="inputUbahStatus" id="inputUbahStatus">
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputImage">Image</label>
                        <div class="row">
                            <div class="col-12">
                                <img src="" id="image" alt="" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-group">Upload Slider</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputImage"
                                aria-describedby="inputGroupFileAddon01" name="image"
                                accept=".jpg, .png, .jpeg|image/*">
                                <label class="custom-file-label" for="inputImage" id="labelImage">Pilih Gambar</label>
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
$(document).ready(function () {
$('#inputImage').change(function (e) {
var fileName = e.target.files[0].name;
$('#labelImage').text(fileName);
});
});
function loadUbahModal(nama, deskripsi, status, image, id) {
var public_url = {!!json_encode(asset('uploads\\slider\\')) !!};
var route = {!!json_encode(url('/ubah-slider')) !!};
console.log(id);
$('#modalUbahSlider').modal('show');
$('#modalUbahSlider').find("#inputUbahId").val(id);
$('#modalUbahSlider').find("#inputUbahNama").val(nama);
$('#modalUbahSlider').find("#inputUbahDeskripsi").val(deskripsi);
$('#modalUbahSlider').find("#image").attr('src', public_url + image);
$('#modalUbahSlider').find("#inputUbahStatus").val(status);
$('#formUbahSlider').attr('action', route + '/' + id);
}
$('#deleteSlider').click(function () {
var id = $(this).data("id");
$.ajax({
url: "hapus-slider/" + id,
type: "DELETE",
data: {
id: id,
_token: '{{ csrf_token() }}',
},
success: function () {
console.log("Data Berhasil Dihapus");
}
});
});
$('#formUbahSlider').on('submit', function (e) {
var form = $('#formUbahSlider');
var id = $('#inputUbahId').val();
$.ajax({
type: form.attr('method'),
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
