<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-300">
    <header>
        <x-navbar />
    </header>
    <main class="w-[calc(100%-32px)] md:w-[calc(100%-64px)] xl:max-w-[1280px] 2xl:max-w-[1680px] mx-auto">
        {{ $slot }}
    </main>
</body>

</html>
