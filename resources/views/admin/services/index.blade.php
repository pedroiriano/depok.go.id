@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('layanan-dsw') !!}

    <x-header text="layanan dsw">
        <x-button route="service.create" icon="fas fa-plus">
            Tambah Layanan
        </x-button>
    </x-header>

    <x-alert></x-alert>

    <div class="card mb-4">
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection
@push('js')
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    
    {{ $dataTable->scripts() }}
@endpush