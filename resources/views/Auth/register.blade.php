<x-layout>
    <x-utility.page-heading>
        First time? Please register!
    </x-utility.page-heading>
    <div class="rounded-md p-4 max-w-[480px] mx-auto bg-white mt-12">
        <x-forms.form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-y-4">
            <x-forms.text-field name="name" label="Name" />
            <x-forms.text-field name="email" label="E-mail" type="email" />
            <x-forms.text-field name="password" label="Password" type="password" />
            <x-forms.text-field name="password_confirmation" label="Password Confirmation" type="password" />
            <x-forms.button>Register</x-forms.button>
        </x-forms.form>
    </div>
</x-layout>
