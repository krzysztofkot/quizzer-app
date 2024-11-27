@props(['type' => 'text', 'name', 'label'])

<div class="flex flex-col gap-y-2">
    @if (isset($label))
        <label for="{{ $name }}" class="font-normal">
            {{ $label }}
        </label>
    @endif
    <input class="rounded-md border border-gray-200 p-2 bg-gray-100" type="{{ $type }}" id="{{ $name }}"
        name="{{ $name }}" value="{{ old($name) }}" />
</div>
