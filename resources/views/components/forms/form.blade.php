<form {{ $attributes(['method' => 'GET']) }}>
    @if ($attributes->get('method') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>
