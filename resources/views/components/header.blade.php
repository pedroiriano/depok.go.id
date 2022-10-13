@props([
    'text'
])
<div class="d-flex mb-3">
    <h5 class="h5 font-weight-bold mb-0 text-gray-800 text-capitalize">{{ $text }}</h5>
    <a class="btn btn-primary ml-auto" href="{{ route( $text . '.create') }}">
        <span class="icon me-2">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text-capitalize">Tambah {{ $text }}</span>
    </a>
</div>