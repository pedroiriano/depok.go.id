@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('kategori-dsw') !!}

    <x-header text="kategori dsw">
        <x-button route="kategori-dsw.create" icon="fas fa-plus">
            Tambah Kategori
        </x-button>
    </x-header>

    <x-alert></x-alert>

    <div class="card mb-4">
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>

@push('js')
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    
    {{ $dataTable->scripts() }}
@endpush
@endsection
