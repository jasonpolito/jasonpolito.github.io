<!DOCTYPE html>
<html lang="en" style="background: var(--color-slate-800)">

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

<body
    class="relative antialiased uppercase font-display min-h-dvh text-pretty bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950 selection:bg-red-800 selection:text-white">
    <x-painterly class="relative block min-h-dvh">
        <div class="lg:py-16">
            @yield('content')
            @include('_partials._texture_overlay')
        </div>
        <div class="py-8 text-xs text-center text-white sm:-mt-6 lg:-mt-12">&copy; {{ date('Y') }} – Jason Polito
        </div>
    </x-painterly>
    @stack('scripts')
    @stack('lightboxes')
    @stack('htmlClose')
</body>

</html>
