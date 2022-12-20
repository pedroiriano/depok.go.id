<!-- Modal -->
<div class="modal fade" id="modalLayanan-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLayanan" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="layananTitle">{{ $category->nama }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <h5 class="display-5">Pilih Layanan:</h5>
                        <select class="custom-select custom-select-lg service-selector" id="serviceselector{{ $category->id }}">
                            @foreach ($category->services as $service)
                            <option value="{{ $service->id }}" data-url="{{ $service->url }}">{{ $service->namaservice }}</option>
                            @endforeach
                        </select>
                    </div>
                    @foreach ($category->services as $service)
                        <div class="col-12 pt-4 service" id="{{ $service->id }}" @if (!$loop->first) style="display: none;" @endif>
                            <iframe src="" data-url="{{ $service->url }}" class="service-iframe" frameborder="0" width="100%" height="600px">
                            </iframe>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('.btnModal').click(function(){
            console.log("asd");
        // $('.service:not(:nth-child(2))').hide();
        $('.service-selector').change(function(){
            var $iframe = $('#' + $(this).val() + ' iframe');

            if ($iframe.attr('src') !== $iframe.data('url')) {
                $iframe.attr('src', $iframe.data('url'));
            }
            $(this).closest('.row').find('.service').hide();
            $('#' + $(this).val()).show();
        });
        $('.service-selector').trigger('change');
    
        });
    });
</script>
@endpush
