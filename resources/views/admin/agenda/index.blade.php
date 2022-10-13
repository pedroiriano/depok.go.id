@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    <x-header text="agenda"></x-header>

    <x-alert></x-alert>
    
    <div class="card my-4 border">
        <div class="card-body">
            <div class="row">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

    {{ $dataTable->scripts() }}
@endpush