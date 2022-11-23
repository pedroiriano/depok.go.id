@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('agenda') !!}

    <x-header text="agenda">
        <x-button route="agenda.create" icon="fas fa-plus">
            Tambah Agenda
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