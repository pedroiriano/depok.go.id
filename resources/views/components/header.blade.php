@props([
    'text',
    'breadcrumbModel'
])

<div class="d-flex mb-3">
    <h5 class="h5 font-weight-bold mb-0 text-gray-800 text-capitalize">{{ $text }}</h5>
    <div class="ml-auto">
        {{ $slot }}
    </div>
</div>