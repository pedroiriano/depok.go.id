<style>
    .main-content {
        position: relative;

        .owl-theme {
            .custom-nav {
                position: absolute;
                top: 20%;
                left: 0;
                right: 0;

                .owl-prev, .owl-next {
                    position: absolute;
                    height: 100px;
                    color: inherit;
                    background: none;
                    border: none;
                    z-index: 100;

                    i {
                        font-size: 2.5rem;
                        color: #cecece;
                    }
                }

                .owl-prev {
                    left: 0;
                }

                .owl-next {
                    right: 0;
                }
            }
        }
    }
</style>
{{-- <div class="row" id="pangan-loading">
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
</div> --}}
<div class="main-content">
    <div class="grid grid-cols-1 relative owl-carousel owl-theme owl-loaded owl-drag z-0" id="pangan-wrapper">
        {{-- Commodity Contents --}}
    </div>
    <div class="owl-theme">
        <div class="owl-controls">
            <div class="custom-nav owl-nav"></div>
        </div>
    </div>
</div>
