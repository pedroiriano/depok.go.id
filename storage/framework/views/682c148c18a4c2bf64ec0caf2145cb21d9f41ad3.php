
<?php $__env->startSection('content'); ?>
<div style="background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%); height:200px ">
</div>
<div class="container text-center">
     <div class="btn-group btn-group-lg flex-wrap" role="group" aria-label="#" style="top:-27px">
        <input type="button" onclick="window.location.href='<?php echo e(route('dinas')); ?>'" value="Dinas" class="btn btn-outline-primary btn-light"/>
        <input type="button" onclick="window.location.href='<?php echo e(route('sekda')); ?>'" value="Sekretariat Daerah" class="btn btn-outline-primary btn-light"/>
        <input type="button" onclick="window.location.href='<?php echo e(route('kecamatan')); ?>'" value="Kecamatan" class="btn btn-primary"/>
        <input type="button" onclick="window.location.href='<?php echo e(route('kelurahan')); ?>'" value="Kelurahan" class="btn btn-outline-primary btn-light"/>
        </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5">Kecamatan</h1>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12">
                <ul class="list lead">

                    <a href="https://beji.depok.go.id" target="_blank">
                        <li>Kecamatan Beji (Alamat:Perum Depok Indah)</li>
                    </a>
                    <a href="https://panmas.depok.go.id" target="_blank">
                        <li>Kecamatan Pancoran Mas (Alamat: Jl. Raya Kartini)</li>
                    </a>
                    <a href="https://cipayung.depok.go.id" target="_blank">
                        <li>Kecamatan Cipayung (Alamat: Jl. Raya Cipayung)</li>
                    </a>
                    <a href="https://sukmajaya.depok.go.id" target="_blank">
                        <li>Kecamatan Sukmajaya (Alamat: Jl. Sentosa Raya)</li>
                    </a>
                    <a href="https://cilodong.depok.go.id" target="_blank">
                        <li>Kecamatan Cilodong (Alamat: Jl. M. Nasir Raya Cilodong)</li>
                    </a>
                    <a href="https://limo.depok.go.id" target="_blank">
                        <li>Kecamatan Limo (Alamat: Jl. Raya Limo)</li>
                    </a>
                    <a href="https://cinere.depok.go.id" target="_blank">
                        <li>Kecamatan Cinere (Alamat: Jl. Bukit Cinere No.17, RT.05 RW.02, Kelurahan Cinere)</li>
                    </a>
                    <a href="https://cimanggis.depok.go.id" target="_blank">
                        <li>Kecamatan Cimanggis (Alamat: Jl. Radar Auri No. 15)</li>
                    </a>
                    <a href="https://tapos.depok.go.id" target="_blank">
                        <li>Kecamatan Tapos (Alamat: Jl. Raya Tapos)</li>
                    </a>
                    <a href="https://sawangan.depok.go.id" target="_blank">
                        <li>Kecamatan Sawangan (Alamat: Jl. Raya Muchtar)</li>
                    </a>
                    <a href="https://bojongsari.depok.go.id" target="_blank">
                        <li>Kecamatan Bojongsari (Alamat: Jl. Raya Batu No.12 Rt 03/04 Kel.Bojongsari, Kec.Bojongsari)
                        </li>
                    </a>

                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Sites/depok/resources/views/kecamatan.blade.php ENDPATH**/ ?>