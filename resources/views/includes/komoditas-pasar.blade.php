<style>
    .owl-carousel .owl-stage {
        display: flex;
    }

   .owl-carousel .owl-item .card {
        width: auto;
        height: 100%;
    }
    .card-body-header{
        height: 55px;
    }
</style>
<div class="row" id="pangan-loading">
    @for($x = 0; $x < 5; $x++)
    <div class="col-md col-6">
        <div class="ph-item border shadow">
            <div class="ph-col-12">
                <div class="ph-picture"></div>
                <div class="ph-row">
                    <div class="ph-col-8 big"></div>
                    <div class="ph-col-4 empty big"></div>
                    <div class="ph-col-10"></div>
                    <div class="ph-col-2 empty"></div>
                    <div class="ph-col-4"></div>
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>
<div class="owl-carousel owl-theme owl-loaded owl-drag" id="pangan-wrapper">
</div>