@extends('layouts.frontend')

@push('css')
<!-- BEGIN::Data Tables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css" crossorigin="anonymous">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
<!-- END::Data Tables -->
@endpush

@section('content')
<!-- BEGIN::Header -->
<section class="relative table w-full py-36 lg:py-44 bg-top bg-no-repeat bg-fixed" style="background-image: url({{ asset($content->image) }});">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">{{ $content->nama }}</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Dapatkan Informasi serta Layanan Publik terlengkap dan terkini seputar Kota Depok.</p>
        </div>
    </div>
    <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
           <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Depok</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">{{ $content->nama }}</li>
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

<!-- BEGIN::Content -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 items-center gap-[30px]">
            {!! $content->desc !!}
        </div>
    </div>
</section>
<!-- END::Content -->
@endsection

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
    <script>
		$(document).ready(function() {

			var table = $('#awardTable').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>
@endpush
