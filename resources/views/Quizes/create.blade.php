<x-layout>
    <x-utility.h1>Add new quiz</x-utility.h1>


    <div class="max-w-[686px] mx-auto mt-10">
        <x-forms.form method="POST" action="{{ route('quizes.store') }}" class="flex flex-col gap-y-4">
            <x-forms.text-field name="title" label="Quiz title" />
            <x-forms.text-area name="description" label="Quiz description" class="min-h-[150px]" />
            <x-forms.button class="w-max">Add quiz</x-forms.button>
        </x-forms.form>
    </div>

</x-layout>
