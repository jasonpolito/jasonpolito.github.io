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

    @vite(['resources/css/app.css'])
    <style>
        * {
            position: relative;
        }
    </style>

</head>

<body class="bg-gray-950 text-white antialiased">
    <section class="py-16">
        <div class="container mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
            @verbatim
                <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
                <div id="app">
                    <div v-for="item in tracker.data" :key="item.id">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <input type="text"
                                   v-model="item.name"
                                   placeholder="Data Point Name">
                            <div class="w-full"></div>
                            <button
                                    @click="item.value++">{{ item . value }}</button>
                        </div>
                    </div>
                    <button @click="buildDataPoint()">Add Data Point</button>
                @endverbatim
            </div>
    </section>
    @vite(['resources/js/tracker.js'])

</body>

</html>
