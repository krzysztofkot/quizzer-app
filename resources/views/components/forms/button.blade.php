@props(['type' => 'primary', 'size' => 'big'])

<?php
$size = match ($size) {
    'big' => 'px-3 py-2 text-lg',
    'small' => 'p-1.5 text-sm',
    default => '',
};

$type = match ($type) {
    'primary' => 'rounded-md text-white bg-blue-600',
    default => '',
};
?>

<button {{ $attributes->class([$type, $size]) }}>{{ $slot }}</button>
