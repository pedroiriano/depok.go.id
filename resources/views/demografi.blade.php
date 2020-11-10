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
        <div class="row pt-3">
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
        <div class="row py-5">
            <div class="col-12">
                <h6 class="h6">Sumber data: Disdukcapil Kota Depok Tahun 2019 Semester 1</h6>
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

    $("#submit").on('click', function(){

        var kecamatan = document.getElementById("kecamatan").value;
        var kelurahan = document.getElementById("kelurahan").value;
        var background = ['#a6cee3','#1f78b4','#b2df8a','#33a02c','#fb9a99','#e31a1c','#fdbf6f','#ff7f00','#cab2d6','#6a3d9a','#ffff99','#b15928'];

        var ctx = document.getElementById("agama-chart");
        var agamaChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [],
                datasets: [{
                    label: '# Agama',
                    data: [],
                    backgroundColor: background,
                }]
            },
            options: {},
        });
        var ctx = document.getElementById("kelamin-chart");
        var jenisKelaminChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [],
                datasets: [{
                    label: '# Jenis Kelamin',
                    data: [],
                    backgroundColor: background,
                }]
            },
            options: {},
        });
        var ctx = document.getElementById("kelompok-umur-chart");
        var umurChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: '# Kelompok Umur',
                    data: [],
                    backgroundColor: background,
                }]
            },
            options: {},
        });
        var ctx = document.getElementById("pekerjaan-chart");
        var pekerjaanChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: [],
                datasets: [{
                    label: '# Pekerjaan',
                    data: [],
                    backgroundColor: background,
                }]
            },
            options: {},
        });
        var ctx = document.getElementById("pendidikan-chart");
        var pendidikanChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: '# Pendidikan',
                    data: [],
                    backgroundColor: background,
                }]
            },
            options: {},
        });
        var ctx = document.getElementById("status-kawin-chart");
        var statusKawinChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: '# Status Kawin',
                    data: [],
                    backgroundColor: background,
                }]
            },
            options: {},
        });
        var types = [
            {
                name: 'Agama',
                handle: function (response) {
                    agamaChart.data.labels = response.label
                    agamaChart.data.datasets[0].data = response.count;

                    agamaChart.update();
                }
            },
            {
                name: 'Jenis Kelamin',
                handle: function (response) {
                    jenisKelaminChart.data.labels = response.label
                    jenisKelaminChart.data.datasets[0].data = response.count;

                    jenisKelaminChart.update();

                    var totalPenduduk = response.count.reduce(function(a, b){
                        return a + b;
                    }, 0);
                    $('#total-penduduk').text('Total Penduduk = ' + totalPenduduk);
                },
            },
            {
                name: 'Kelompok Umur',
                handle: function (response) {
                    umurChart.data.labels = response.label
                    umurChart.data.datasets[0].data = response.count;

                    umurChart.update();
                },
            },
            {
                name: 'Pekerjaan',
                handle: function (response) {
                    pekerjaanChart.data.labels = response.label
                    pekerjaanChart.data.datasets[0].data = response.count;

                    pekerjaanChart.update();
                },
            },
            {
                name: 'Pendidikan',
                handle: function (response) {
                    pendidikanChart.data.labels = response.label
                    pendidikanChart.data.datasets[0].data = response.count;

                    pendidikanChart.update();
                },
            },
            {
                name: 'Status Kawin',
                handle: function (response) {
                    statusKawinChart.data.labels = response.label
                    statusKawinChart.data.datasets[0].data = response.count;

                    statusKawinChart.update();
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
    }).trigger('click');
</script>
@endpush
@endsection