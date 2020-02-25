@extends('includes.layout')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="display-3 py-5">Pengumuman</h1>
         </div>
         @foreach($pengumuman as $item)
         <div class="col-3 mb-3">      
            <div class="card">
               <img class="card-img-top" src="{{ asset('storage/uploads/sliders/'.$item->imageName) }}" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title font-weight-bold">{{ $item->nama }}</h5>
                  <a href="/pengumuman/{{ $item->url }}" style="font-size:0.9rem">Selengkapnya</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection
