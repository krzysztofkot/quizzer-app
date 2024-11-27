<x-layout>
    <x-utility.page-heading>
        Welcome back! Please log in
    </x-utility.page-heading>
    <div class="rounded-md p-4 max-w-[480px] mx-auto bg-white mt-12">
        <x-forms.form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-y-4">
            <x-forms.text-field name="email" label="E-mail" />
            <x-forms.text-field name="password" label="Password" />
            <x-forms.button>Log in</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>
