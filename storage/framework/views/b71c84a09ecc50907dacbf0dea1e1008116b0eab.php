
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
    <?php endif; ?>
    <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Slider</h1>
    <button class="btn btn-primary btn-icon-split text-white mb-4" data-toggle="modal" data-target="#modalTambahSlider">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Slider</span>
    </button>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Slider</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($key+1); ?>

                            </td>
                            <td>
                                <?php echo e($slider->nama); ?>

                            </td>
                            <td>
                                <?php echo e($slider->deskripsi); ?>

                            </td>
                            <td>
                                <?php if($slider->status == 1): ?>
                                Aktif
                                <?php else: ?>
                                Tidak Aktif
                                <?php endif; ?>
                            </td>
                            <td>
                                <button class="btn btn-success btn-sm btn-icon-split mb-1"
                                    onclick="loadUbahModal('<?php echo e($slider->nama); ?>', '<?php echo e($slider->deskripsi); ?>', '<?php echo e($slider->status); ?>', '<?php echo e($slider->imageName); ?>', '<?php echo e($slider->id); ?>')">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Ubah</span>
                                </button>
                                <form action="<?php echo e(route('admin.hapusSlider', $slider->id)); ?>" method="POST" class="form-inline">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger btn-icon-split btn-sm" data-id="<?php echo e($slider->id); ?>"
                                        id="deleteSlider">
                                        <span class="icon">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('admin.tambahSlider')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
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
                    <div class="form-group">
                        <label for="input-group">Upload Slider</label>
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
                    <?php echo csrf_field(); ?>
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
        var public_url = <?php echo json_encode(asset('uploads\\slider\\')); ?>;
        var route = <?php echo json_encode(url('/ubah-slider')); ?>;
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
                _token: '<?php echo e(csrf_token()); ?>',
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
                _token: '<?php echo e(csrf_token()); ?>'
            },
            success: function () {
                console.log("SUKSES");
            },
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frontend/resources/views/admin/slider.blade.php ENDPATH**/ ?>