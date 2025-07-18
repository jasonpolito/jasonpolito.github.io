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

<body
    class="font-display relative min-h-dvh text-pretty bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950 uppercase antialiased selection:bg-red-800 selection:text-white">
    <x-painterly class="relative block min-h-dvh">
        <div class="lg:py-16">
            @yield('content')
            <div class="pointer-events-none absolute inset-0 size-full"
                style="background-image: url({{ asset('assets/images/asfalt-light.png') }})">
            </div>
            <div class="pointer-events-none absolute inset-0 size-full scale-x-[-1]"
                style="background-image: url({{ asset('assets/images/asfalt-dark.png') }})">
            </div>
            <div class="pointer-events-none absolute inset-0 size-full"
                style="background-image: url({{ asset('assets/images/canvas.png') }})">
            </div>
        </div>
        <div class="py-8 text-center text-xs text-white sm:-mt-6 lg:-mt-12">&copy; {{ date('Y') }} – Jason Polito
        </div>
    </x-painterly>
    @stack('script')
</body>

</html>
