<x-layout>
    <x-utility.h1>
        Welcome back! Please log in
    </x-utility.h1>
    <div class="rounded-md p-4 max-w-[480px] mx-auto bg-white mt-12">
        <x-forms.form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-y-4">
            <x-forms.text-field name="email" label="E-mail" type="email" />
            <x-forms.text-field name="password" label="Password" type="password" />
            <x-forms.button>Log in</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>
