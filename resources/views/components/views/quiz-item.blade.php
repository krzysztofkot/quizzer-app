@props(['quiz', 'position'])

{{-- <div class="flex gap-x-3 bg-gray-200 px-4 py-2 rounded-md items-center"> --}}
<div>{{ $position }}.</div>
<div>
    <p>{{ $quiz->title }}</p>
</div>
<div>
    <p> 1</p>
</div>
<div>
    <p> 1 time</p>
</div>
<div class="flex gap-x-2">
    <x-utility.btn-link variant="text"
        href="{{ route('quizes.show', ['quiz' => $quiz->id]) }}">Details</x-utility.btn-link>
    <form method="POST" action="{{ route('quizes.destroy', ['quiz' => $quiz->id]) }}">
        @csrf
        @method('DELETE')
        <x-forms.button class="flex gap-x-1 items-center" variant="text" color="error"><img class="w-5 h-5"
                src="{{ Vite::asset('resources/images/icons/trash.svg') }}" />Delete</x-forms.button>
    </form>
</div>

{{-- </div> --}}
