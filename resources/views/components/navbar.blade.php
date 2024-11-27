<nav
    class="flex justify-between items-center w-full bg-black px-4 md:px-8 xl:px-12 2xl:px-16 py-4 border-b border-gray-600">
    <x-nav.logo />
    <div class="flex gap-x-4">
        <x-nav.nav-link href="{{ route('login') }}" class="text-white">
            Login
        </x-nav.nav-link>
        <x-nav.nav-link href="{{ route('register') }}" class="text-white">
            Register
        </x-nav.nav-link>
    </div>


</nav>
