@push('css')
<link rel="stylesheet" href={{ asset("css/owl/owl.carousel.min.css") }}>
<link rel="stylesheet" href={{ asset("css/owl/owl.theme.default.min.css") }}>
@endpush
@extends('includes.layout')
@section('content')

<div class="container-fluid py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="display-3 py-5">Agenda</h1>
      </div>
      @foreach ($agendas as $agenda)
      <div class="col-md-3 col-sm-12 mb-3">      
        <div class="card h-100">
          <a href="#" data-target="#modalAgendas-{{ $agenda->id }}" data-toggle="modal">
            <img class="card-img-top" src="{{ asset('storage/uploads/agenda/'.$agenda->imageName) }}" alt="Card image cap">
            <div class="card-body">
								<h6 class="card-subtitle mb-2 text-muted">{{ $agenda->tanggal }}</h6>
                <h5 class="card-title">{{ $agenda->nama }}</h5>
								<h6 class="card-subtitle mb-2 text-muted">{{ $agenda->tempat }}</h6>
            </div>
          </a>
        </div>
      </div>
      <div class="modal fade" id="modalAgendas-{{ $agenda->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-body">
                <img src="{{ asset('storage/uploads/agenda/'.$agenda->imageName) }}" alt="" class="img-fluid">
                <h6 class="text-secondary mt-4">{{ $agenda->tanggal }}</h6>
								<h5 class="modal-title">{{ $agenda->nama }}</h5>
								<h6 class="text-secondary">{{ $agenda->tempat }}</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col-md-8 col-sm-12">
        {{ $agendas->links() }}
      </div>
    </div>
  </div>
</div>

@endsection
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