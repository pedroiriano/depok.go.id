@extends('layouts.frontend')

@push('css')
<!-- BEGIN::Data Tables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css" crossorigin="anonymous">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
<!-- END::Data Tables -->
@endpush

@section('content')
<!-- BEGIN::Header -->
<section class="relative table w-full py-16 lg:py-24 bg-center bg-no-repeat bg-fixed" style="background-image: url({{ asset($content->image) }}); background-size: cover;">
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">{{ $content->nama }}</h3>
        </div>
    </div>
    <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Depok</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">{{ $content->nama }}</li>
        </ul>
    </div>
</section>
<!-- END::Header -->

<!-- BEGIN::History -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="md:flex justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    {!! $content->desc !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END::History -->
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
