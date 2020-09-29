@extends('includes.layout')
@section('content')
<div class="container-fluid">
    <div class="container">
         <h1 class="display-3 py-5">Agenda</h1>
         <div class="row py-5">
         @foreach ($agendas as $agenda)
            <div class="col-12 col-md-3 d-flex align-items-stretch">
                <div class="card mb-3">
                    <a href="#" data-target="#modalAgendas-{{ $agenda->id }}" data-toggle="modal">
                        <img class="card-img-top" src="{{ asset('uploads/agendas/'.$agenda->imageName) }}" alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title">{{ $agenda->nama }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Modal Infografis-->
            <div class="modal fade" id="modalAgendas-{{ $agenda->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $agenda->nama }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('uploads/agendas/'.$agenda->imageName) }}" alt="" class="img-fluid">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
</div>

@endsection
