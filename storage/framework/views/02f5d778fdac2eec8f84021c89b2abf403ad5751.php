
<?php $__env->startSection('content'); ?>
<div style="background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%); height:200px ">
</div>
<div class="container text-center">
     <div class="btn-group btn-group-lg flex-wrap" role="group" aria-label="#" style="top:-27px">
        <input type="button" onclick="window.location.href='<?php echo e(route('dinas')); ?>'" value="Dinas" class="btn btn-outline-primary btn-light"/>
        <input type="button" onclick="window.location.href='<?php echo e(route('sekda')); ?>'" value="Sekretariat Daerah" class="btn btn-primary"/>
        <input type="button" onclick="window.location.href='<?php echo e(route('kecamatan')); ?>'" value="Kecamatan" class="btn btn-outline-primary btn-light"/>
        <input type="button" onclick="window.location.href='<?php echo e(route('kelurahan')); ?>'" value="Kelurahan" class="btn btn-outline-primary btn-light"/>
        </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="display-5 py-4">Sekretariat Daerah</h1>
            </div>
            <div class="col-12">
                <p class="lead">Asisten Hukum dan Sosial</p>
                <ul class="lead list">
                    <li>Bagian Hukum</li>
                    <li>Bagian Kesejahteraan Sosial</li>
                    <li>Bagian Protokol dan Dokumentasi</li>
                </ul>
                <p class="lead">Asisten Ekonomi dan Pembangunan</p>
                <ul class="lead list">
                    <li>Bagian Ekonomi</li>
                    <li>Bagian Pembangunan</li>
                    <li>Bagian Layanan Pengadaan</li>
                </ul>
                <p class="lead">Asisten Administrasi dan Pemerintahan</p>
                <ul class="lead list">
                    <li>Bagian Umum</li>
                    <li>Bagian Administrasi</li>
                    <li>Bagian Organisasi dan Tata Laksana</li>
                    <li>Bagian Pemerintahan</li>
                </ul>
                <p class="lead">Sekretariat DPRD</p>
                <ul class="lead list">
                    <li>Bagian Umum</li>
                    <li>Bagian Persidangan</li>
                    <li>Bagian Keuangan</li>
                    <li>Bagian Hubungan Masyarakat dan Protokol</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frontend/resources/views/sekda.blade.php ENDPATH**/ ?>