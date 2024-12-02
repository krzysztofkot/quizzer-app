<x-layout bg="bg-white">
    <header class="flex justify-between items-center mb-8">
        <x-utility.h1>Dashboard</x-utility.h1>
        <x-utility.btn-link href="{{ route('quizes.create') }}" class="flex gap-2 items-center">
            <img src="{{ Vite::asset('resources/images/icons/PlusIcon.svg') }}" />
            <span>Add new quiz</span>
        </x-utility.btn-link>
    </header>

    @if (!count($quizes))
        <section class="mt-4">
            <div class="mx-auto w-[300px]">
                <img src="{{ Vite::asset('resources/images/emptyStates/dashboard.png') }}"
                    class="w-full object-cover object-center" />
            </div>
            <x-utility.paragraph class="text-center">You don't have any quizes yet. Maybe it's time to create
                one?</x-utility.paragraph>
        </section>
    @else
        <div class="grid grid-cols-[max-content_auto_repeat(3,max-content)] gap-x-4 items-center mx-auto px-4 py-2">

        </div>

        <section
            class="grid grid-cols-[max-content_auto_repeat(3,max-content)] bg-gray-200 gap-x-4 items-center mx-auto px-4 py-2 rounded-md">
            <p class="text-sm pb-4">Position</p>
            <p class="text-sm pb-4">Title</p>
            <p class="text-sm pb-4">No of questions</p>
            <p class="text-sm pb-4">No of submitions</p>
            <p class=" pb-4"></p>
            @foreach ($quizes as $quiz)
                <x-views.quiz-item :$quiz :position="$loop->iteration"></x-views.quiz-item>
            @endforeach
        </section>
    @endif

</x-layout>
