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

<body class="bg-3{{ $paper }} relative antialiased">
    <x-painterly>
        @yield('content')
        <div class="absolute inset-0 size-full" style="background-image: url({{ asset('assets/images/texture.png') }})">
        </div>
    </x-painterly>
    @stack('script')
</body>

</html>
