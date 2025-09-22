@php
    function sanitize_output($buffer)
    {
        $search = [
            '/\>[^\S ]+/s', // strip whitespaces after tags, except space
            '/[^\S ]+\</s', // strip whitespaces before tags, except space
            '/(\s)+/s', // shorten multiple whitespace sequences
            '/<!--(.|\s)*?-->/', // Remove HTML comments
        ];

        $replace = ['>', '<', '\\1', ''];

        $buffer = preg_replace($search, $replace, $buffer);

        return $buffer;
    }

    ob_start('sanitize_output');
@endphp
<!DOCTYPE html>
<html lang="en" style="background: black">

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
      class="antialiased text-white text-pretty bg-slate-950 selection:bg-red-800 selection:text-white"
      style="transform: translate3d(0,0,1px); will-change: transform;">
    @yield('content')
    @stack('scripts')
    @stack('lightboxes')
    @stack('htmlClose')
</body>

</html>
