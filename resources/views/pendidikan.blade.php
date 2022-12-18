@extends('layouts.frontend')

@section('content')
<!-- BEGIN::Header -->
<section class="relative table w-full py-16 lg:py-24 bg-center bg-no-repeat bg-fixed" style="background-image: url({{ asset('img/content/pendidikan.png') }}); background-size: cover;">
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Pendidikan</h3>
        </div>
    </div>
    <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Depok</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Pendidikan</li>
        </ul>
    </div>
</section>
<!-- END::Header -->

<!-- BEGIN::Demographic -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="md:flex items-center justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <h5 class="text-xl font-semibold">Sumber Data: Dinas Pendidikan Kota Depok</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="md:flex items-center justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <form class="w-full max-w-sm">
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="kecamatan" id="kecamatan" aria-label="Pilihan Kecamatan">
                                        <option value="0">Semua Kecamatan</option>
                                        @if ($kecamatan === NULL)
                                            
                                        @else
                                            @foreach($kecamatan as $kec)
                                                <option value="{{ $kec->id }}">{{ $kec->nama }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="kelurahan" id="kelurahan" aria-label="Pilihan Kelurahan">
                                        <option value="0">Semua Kelurahan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <div class="relative">
                                    <button id="submit" type="button" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xs rounded-md">
                                        Pilih
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="md:flex items-center justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <h6 class="pb-3">Wilayah</h6>
                    <canvas id="sekolah-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });


    var chartBackgrounds = ['#a6cee3','#1f78b4','#b2df8a','#33a02c','#fb9a99','#e31a1c','#fdbf6f','#ff7f00','#cab2d6','#6a3d9a','#ffff99','#b15928'];

    $('#kecamatan').change(function (event, kelurahanValue) {
        var kecamatanId = $(this).val();

        if (kecamatanId) {
            $.ajax({
                type:"GET",
                url: '/get-kelurahan-list/' + kecamatanId,
                success: function (res) {
                    if (res) {
                        $("#kelurahan").empty();
                        $("#kelurahan").append(
                            '<option value="0">Semua Kelurahan</option>'
                        );

                        $.each(res, function (key, value) {
                            selectedAttr = '';
                            if (value.id == "{{ old('inputKelurahan', $data->kelurahan ?? '') }}" || value.id == kelurahanValue) {
                                selectedAttr = 'selected';
                            }

                            $("#kelurahan").append('<option value="'+value.id+'" ' + selectedAttr + '>'+value.nama+'</option>');
                        });
                    } else {
                        $("#kelurahan").empty().append('<option selected disabled>Pilih Kecamatan Terlebih Dahulu</option>');
                    }
                }
            });
        } else {
            $("#kelurahan").empty().append('<option selected disabled>Pilih Kecamatan Terlebih Dahulu</option>');
        }
    }).trigger('change');

    var types = [
        {
            name: 'Sekolah',
            chart:  createChart("sekolah-chart", 'bar', '# Jumlah Sekolah Berdasarkan Wilayah'),
        },
    ];

    $("#submit").on('click', function(){
        var kecamatan = document.getElementById("kecamatan").value;
        var kelurahan = document.getElementById("kelurahan").value;
        
        $.each(types, function (index, type) {
            $.ajax({
                url: '/api/pendidikan/' + type.name,
                dataType: 'json',
                data: {
                    'kecamatan': kecamatan,
                    'kelurahan' : kelurahan,
                },
                success: function (response) {
                    type.chart.data.labels = response.label
                    type.chart.data.datasets[0].data = response.count;

                    type.chart.update();

                    if (type.afterUpdateChart) {
                        type.afterUpdateChart.call(this, response)
                    }
                }
            });
        })
    }).trigger('click');


    function createChart(id, type, label) {
        return new Chart(
            document.getElementById(id), 
            {
                type: type,
                data: {
                    labels: [],
                    datasets: [{
                        label: label,
                        data: [],
                        backgroundColor: chartBackgrounds,
                    }]
                },
                options: type == 'bar' || type == 'horizontalBar' ? { legend: { display: false } } : {},
            }
        );
    }
</script>
@endpush
