@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('infografis') !!}

    <x-header text="infografis">
        <x-button route="infografis.create" icon="fas fa-plus">
            Tambah Infografis
        </x-button>
    </x-header>

    <x-alert></x-alert>

    <div class="card my-4 border">
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