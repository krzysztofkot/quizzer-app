<x-layout bg="bg-white">
    <header class="flex justify-between items-center mb-8">
        <x-utility.h1>Quiz</x-utility.h1>
        <x-utility.btn-link href="{{ route('quizes.create') }}" class="flex gap-2 items-center">
            <img src="{{ Vite::asset('resources/images/icons/PlusIcon.svg') }}" />
            <span>Add new question</span>
        </x-utility.btn-link>
    </header>


</x-layout>
