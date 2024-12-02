@props(['size' => 'big', 'color' => 'primary', 'variant' => 'contained'])

<?php
$size = match ($size) {
    'big' => 'px-3 py-2 text-lg',
    'small' => 'p-1.5 text-sm',
    default => '',
};

$color = match ($color) {
    'primary' => 'rounded-md bg-blue-600 border border-1 border-blue-600',

    'error' => 'rounded-md bg-red-600 border border-1 border-red-600 text-red-600',
    default => '',
};

$variant = match ($variant) {
    'contained' => 'text-white ',
    'text' => 'bg-transparent border-0 text-black',
    'outlined' => 'bg-transparent text-black',
};

?>

<button {{ $attributes->class([$color, $size, $variant]) }}>{{ $slot }}</button>
