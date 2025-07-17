<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport-fit" content="cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('meta_title', 'jasonpolito.github.io')</title>
    <meta name="description" content="@yield('meta_description', 'jasonpolito.github.io')">

    @preloadFonts

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="relative min-h-dvh bg-gradient-to-r from-orange-200 via-orange-100 to-orange-200 antialiased">
    <x-painterly class="relative block min-h-dvh">
        @yield('content')
        <div class="pointer-events-none absolute inset-0 size-full"
            style="background-image: url({{ asset('assets/images/texture.png') }})">
        </div>
    </x-painterly>
    @stack('script')
</body>

</html>
