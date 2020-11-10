@push('css')
<link rel="stylesheet" href={{ asset("css/owl/owl.carousel.min.css") }}>
<link rel="stylesheet" href={{ asset("css/owl/owl.theme.default.min.css") }}>
@endpush
@push('js')

<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript">
    $("#owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
</script>
@endpush
@extends('includes.layout')
@section('content')
<div class="jumbotron jumbotron-fluid banner" style="background-image: url({{ asset('images/bg.jpg') }})">
</div>

<div class="container-fluid">
    <div class="container">
        <h1 class="display-3 pt-4">Demografi</h1>
        <h6 class="h6 pb-4">Sumber data: Disdukcapil Kota Depok Tahun 2020 Semester 1</h6>
        <div class="row pb-4">
            <div class="col-md-12">
                <div class="card acik-renk-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <select name="kecamatan" id="kecamatan" class="custom-select">
                                        <option value="0">Semua Kecamatan</option>
                                        @foreach($kecamatan as $kec)
                                            <option value="{{ $kec->id }}">{{ $kec->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <select name="kelurahan" id="kelurahan" class="custom-select">
                                        <option value="0">Semua Kelurahan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-info  pl-5 pr-5" id="submit">Pilih</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="h5" id="total-penduduk"></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Jenis Kelamin</h6>
                                <h6 class="text-muted text-center" id="kelurahan-label"></h6>
                                <div class="px-5">
                                    <canvas id="kelamin-chart" width="200" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Agama</h6>
                                <div class="px-5">
                                    <canvas id="agama-chart" width="200" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Pendidikan</h6>
                                <canvas id="pendidikan-chart" width="200" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Status Kawin</h6>
                                <canvas id="status-kawin-chart" width="200" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Kelompok Umur</h6>
                                <canvas id="kelompok-umur-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Pekerjaan</h6>
                                <canvas id="pekerjaan-chart" height="500"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                $('#total-penduduk').text('Total Penduduk : ' + totalPenduduk);
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
@endsection