
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
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Agenda</h1>
    <button class="btn btn-primary btn-icon-split text-white mb-4" data-toggle="modal" data-target="#modalTambahAgenda">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Agenda</span>
    </button>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Agenda Pemerintah Kota Depok</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $agendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e(++$key); ?></td>
                        <td><?php echo e($agenda->nama); ?></td>
                        <td><?php echo e($agenda->tanggal); ?></td>
                        <?php if( $agenda->status == 0 ): ?>
                        <td> Tidak Aktif </td>
                        <?php else: ?>
                        <td> Aktif </td>
                        <?php endif; ?>
                        <td>
                            <button class="btn btn-success">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>

                        </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <form method="POST" action="<?php echo e(route('admin.tambahAgenda')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frontend/resources/views/admin/agenda.blade.php ENDPATH**/ ?>