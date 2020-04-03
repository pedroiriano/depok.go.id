@extends('includes.layout')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-8">
            <h1 class="display-4">{{ $pengumuman->nama }}</h1>
            <h5 class="h6 text-muted pb-4">Sumber: {{ $pengumuman->opd->nama }}</h5>
         </div>
         <div class="col-10 text-center">
            <img src="{{ asset('storage/uploads/sliders/'.$pengumuman->imageName) }}" alt="" class="img-fluid rounded">
         </div>
         <div class="col-8 pt-5">
            <p class="lead" id="#deskripsi" style="font-size:1.2rem">{!! $pengumuman->deskripsi !!}</p>
         </div>
         @if($pengumuman->file)
         <div class="col-5">
            <a class="btn btn-success btn-sm shadow" href="{{ route('download', $pengumuman->file) }}">
               <div class="row no-gutters text-light">
                  <div class="col-3 d-flex justify-content-center align-items-center">
                     <span><i class="fas fa-file-download fa-3x"></i></span>
                  </div>
                  <div class="col-9 text-left p-2">
                     <h6 class="h6 font-weight-bold">Unduh</h6>
                     <small class="text-light">{{ $pengumuman->file }}</small>
                  </div>
               </div>
            </a>
         </div>
         @endif
      </div>
   </div>
</div>
@endsection
