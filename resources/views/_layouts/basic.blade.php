<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('meta_title', 'jasonpolito.github.io')</title>
    <meta name="description" content="@yield('meta_description', 'jasonpolito.github.io')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-white text-gray-800 antialiased dark:bg-gray-900 dark:text-gray-100">
    <x-section>
        <x-prose>
            @yield('content')
        </x-prose>
    </x-section>
    @stack('scripts')
</body>

</html>
