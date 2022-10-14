@props([
    'route',
    'icon',
])
<a href="{{ route($route) }}" {{ $attributes->merge(['class' => 'btn btn-primary']) }}>
    <span class="icon me-2">
        <i class="{{ $icon }}"></i>
    </span>
    <span class="text-capitalize">{{ $slot }}</span>
</a>