@extends('includes.layout')
@section('content')
<div class="jumbotron jumbotron-fluid banner" style="background-image: url({{ asset('img/sekilas-depok/8.jpg') }})">
</div>
<div class="container-fluid">
    <div class="container">
        <h1 class="display-3 py-5">Infografis</h1>
        @foreach ($infografis as $infografi)
        <div class="row py-5">
            <div class="col-12 col-md-3">
                <a data-toggle="modal" data-target="#modalInfografis" href="#">
                <img src="{{ asset('uploads/infografis/'.$infografi->imageName) }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md">
                <p class="lead font-weight-bold">
                    {{ $infografi->nama }}
                </p>
                <p class="lead">
                    Sumber:
                    {{ $infografi->sumber }}
                </p>
            </div>
        </div>
        <!-- Modal Infografis-->
        <div class="modal fade" id="modalInfografis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $infografi->nama }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('uploads/infografis/'.$infografi->imageName) }}" alt="" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection