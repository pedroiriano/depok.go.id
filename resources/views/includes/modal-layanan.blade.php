<div id="modalLayanan-{{ $category->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-16 left-0 right-0 z-999 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $category->nama }}</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalLayanan-{{ $category->id }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="grid grid-cols-1 p-6 space-y-6">
                <form class="w-full max-w-sm">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="relative">
                            <select id="serviceselector{{ $category->id }}" class="block service-selector appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                @foreach ($category->services as $service)
                                    <option value="{{ $service->id }}" data-url="{{ $service->url }}">{{ $service->namaservice }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative">
                            @foreach ($category->services as $service)
                                <div class="service" id="{{ $service->id }}" @if (!$loop->first) style="display: none;" @endif>
                                    <iframe src="" data-url="{{ $service->url }}" class="service-iframe" frameborder="0" width="100%" height="600px">
                                    </iframe>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('.btnModal').click(function(){
            $('.service-selector').change(function(){
                var $iframe = $('#' + $(this).val() + ' iframe');

                if ($iframe.attr('src') !== $iframe.data('url')) {
                    $iframe.attr('src', $iframe.data('url'));
                }
                $(this).closest('.grid').find('.service').hide();
                $('#' + $(this).val()).show();
            });
            $('.service-selector').trigger('change');
        });
    });
</script>
@endpush
