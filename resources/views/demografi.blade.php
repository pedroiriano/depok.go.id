@extends('layouts.frontend')

@section('content')
<!-- BEGIN::Header -->
<section class="relative table w-full py-36 lg:py-44 bg-top bg-no-repeat bg-fixed" style="background-image: url({{ asset('img/content/demografi.png') }});">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Demografi</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Dapatkan Informasi serta Layanan Publik terlengkap dan terkini seputar Kota Depok.</p>
        </div>
    </div>
    <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
           <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Depok</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Demografi</li>
        </ul>
    </div>
</section>
<div class="relative">
    <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- END::Header -->

<!-- BEGIN::Demographic -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="md:flex items-center justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <h5 class="text-xl font-semibold">Sumber Data: DISDUKCAPIL Kota Depok Tahun 2020 Semester 1</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="md:flex items-center justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <form class="w-full">
                        @csrf
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
                    <h5 id="total-penduduk"></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="grid md:grid-cols-2 md:flex items-center justify-center gap-[30px]">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <p class="text-slate-400">
                        <h6 class="pb-3">Jenis Kelamin</h6>
                        <h6 class="text-muted text-center" id="kelurahan-label"></h6>
                        <div class="px-5">
                            <canvas id="kelamin-chart" width="200" height="200"></canvas>
                        </div>
                    </p>
                </div>
            </div>
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <p class="text-slate-400">
                        <h6 class="pb-3">Agama</h6>
                        <div class="px-5">
                            <canvas id="agama-chart" width="200" height="200"></canvas>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="grid md:grid-cols-2 md:flex items-center justify-center gap-[30px]">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <p class="text-slate-400">
                        <h6 class="pb-3">Pendidikan</h6>
                        <canvas id="pendidikan-chart" width="200" height="200"></canvas>
                    </p>
                </div>
            </div>
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <p class="text-slate-400">
                        <h6 class="pb-3">Status Kawin</h6>
                        <canvas id="status-kawin-chart" width="200" height="200"></canvas>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="md:flex items-center justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <h6 class="pb-3">Kelompok Umur</h6>
                    <canvas id="kelompok-umur-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="md:flex items-center justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <h6 class="pb-3">Pekerjaan</h6>
                    <canvas id="pekerjaan-chart" height="500"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END::Demographic -->
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

    function getNumberWithDot(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

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
            name: 'Agama',
            chart:  createChart("agama-chart", 'doughnut', '# Agama'),
        },
        {
            name: 'Jenis Kelamin',
            chart:  createChart("kelamin-chart", 'pie', '# Jenis Kelamin'),
            afterUpdateChart: function (response) {
                var totalPenduduk = response.count.reduce(function(a, b){
                    return parseInt(a) + parseInt(b);
                }, 0);
                $('#total-penduduk').text('Total Penduduk : ' + getNumberWithDot(totalPenduduk));
            },
        },
        {
            name: 'Kelompok Umur',
            chart:  createChart("kelompok-umur-chart", 'bar', '# Kelompok Umur'),
        },
        {
            name: 'Pekerjaan',
            chart:  createChart("pekerjaan-chart", 'horizontalBar', '# Pekerjaan'),
        },
        {
            name: 'Pendidikan',
            chart:  createChart("pendidikan-chart", 'bar', '# Pendidikan'),
        },
        {
            name: 'Status Kawin',
            chart:  createChart("status-kawin-chart", 'bar', '# Status Kawin'),
        }
    ];

    $("#submit").on('click', function(){
        var kecamatan = document.getElementById("kecamatan").value;
        var kelurahan = document.getElementById("kelurahan").value;
        
        $.each(types, function (index, type) {
            $.ajax({
                url: '/api/demografi/' + type.name,
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
