@extends('includes.layout')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
   <div class="row">
      <div class="col-12">
         <h1 class="display-3 py-5">Agenda</h1>
      </div>
      <div class="col-12">
         @foreach ($agendas as $agenda)
         <div class="row mb-3">
            <div class="col-2">
            <img src="{{ asset('uploads/agenda/'.$agenda->imageName) }}" alt="" class="img-fluid">
            </div>
            <div class="col">
               <h5 class="h5">
                  {{ $agenda->nama }}    
               </h5>
               <p class="lead"> Tanggal: {{ $agenda->tanggal }} </p>
               <p class="lead"> Sumber: {{ $agenda->sumber }} </p>
            </div>
         </div>
         @endforeach
      </div>
</div>
   </div>
</div>

@endsection