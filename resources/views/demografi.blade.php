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
        <h1 class="display-3 py-4">Demografi</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card acik-renk-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <select name="kecamatan" id="kecamatan" class="custom-select">
                                        <option disabled selected>Pilih Kecamatan</option>
                                        @foreach($kecamatan as $kec)
                                            <option value="{{ $kec->id }}">{{ $kec->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <select name="kelurahan" id="kelurahan" class="custom-select">
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
        <div class="row pt-5">
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
                    <div class="col-md-12">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Kelompok Umur</h6>
                                
                                <canvas id="kelompok-umur-chart" width="200" height="200"></canvas>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Pekerjaan</h6>
                                <canvas id="pekerjaan-chart" width="200" height="200"></canvas>
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

    $('#kecamatan').change(function (event, kelurahanValue) {
        var kecamatanId = $(this).val();

        if (kecamatanId) {
            $.ajax({
                type:"GET",
                url: '/get-kelurahan-list/' + kecamatanId,
                success: function (res) {
                    if (res) {
                        $("#kelurahan").empty();
                        $("#kelurahan").append('<option selected disabled>Pilih Kelurahan</option>');

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

    $("#submit").on('click', function(){
        var kecamatan = document.getElementById("kecamatan").value;
        var kelurahan = document.getElementById("kelurahan").value;
        var background = [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ];
        var border = [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ]

        var types = [
            {
                name: 'Agama',
                handle: function (response) {
                    var ctx = document.getElementById("agama-chart");
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: response.label,
                            datasets: [{
                                label: '# Agama',
                                data: response.count,
                                backgroundColor: background,
                                borderColor: border,
                                borderWidth: 1
                            }]
                        },
                        options: {},
                    });
                }
            },
            {
                name: 'Jenis Kelamin',
                handle: function (response) {
                   var ctx = document.getElementById("kelamin-chart");
                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: response.label,
                            datasets: [{
                                label: '# Agama',
                                data: response.count,
                                backgroundColor: background,
                                borderColor: border,
                                borderWidth: 1
                            }]
                        },
                        options: {},
                    });
                },
            },
            {
                name: 'Kelompok Umur',
                handle: function (response) {
                    var ctx = document.getElementById("kelompok-umur-chart");
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: response.label,
                            datasets: [{
                                label: '# Kelompok Umur',
                                data: response.count,
                                backgroundColor: background,
                                borderColor: border,
                                borderWidth: 1
                            }]
                        },
                        options: {},
                    });
                },
            },
            {
                name: 'Pekerjaan',
                handle: function (response) {
                    var ctx = document.getElementById("pekerjaan-chart");
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: response.label,
                            datasets: [{
                                label: '# Kelompok Umur',
                                data: response.count,
                                backgroundColor: background,
                                borderColor: border,
                                borderWidth: 1
                            }]
                        },
                        options: {},
                    });
                },
            },
            {
                name: 'Pendidikan',
                handle: function (response) {
                    var ctx = document.getElementById("pendidikan-chart");
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: response.label,
                            datasets: [{
                                label: '# Kelompok Umur',
                                data: response.count,
                                backgroundColor: background,
                                borderColor: border,
                                borderWidth: 1
                            }]
                        },
                        options: {},
                    });
                    
                },
            },
            {
                name: 'Status Kawin',
                handle: function (response) {
                    var ctx = document.getElementById("status-kawin-chart");
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: response.label,
                            datasets: [{
                                label: '# Kelompok Umur',
                                data: response.count,
                                backgroundColor: background,
                                borderColor: border,
                                borderWidth: 1
                            }]
                        },
                        options: {},
                    });
                    
                },
            }
        ];

        $.each(types, function (index, type) {
            $.ajax({
                url: '/api/demografi/' + type.name,
                dataType: 'json',
                data: {
                    'kecamatan': kecamatan,
                    'kelurahan' : kelurahan,
                },
                success: type.handle,
            });
        })
    });
</script>
@endpush
@endsection