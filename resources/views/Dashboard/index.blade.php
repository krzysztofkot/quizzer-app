<x-layout bg="bg-white">
    <x-utility.h1>Dashboard</x-utility.h1>

    <div>
        <x-utility.btn-link href="{{ route('quizes.create') }}" class="flex gap-2 items-center">
            <span>Add new quiz</span>
            <img src="{{ Vite::asset('resources/images/icons/PlusIcon.svg') }}" />
        </x-utility.btn-link>
    </div>
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
        {{ count($quizes) }} amount
    @endif

</x-layout>
