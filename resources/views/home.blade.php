@php
    $skills = [
        'UX+UI',
        'Laravel',
        'Vue',
        'React',
        'Tailwind',
        'Animation',
        'Svelte',
        'PHP',
        'Node',
        'WordPress',
        'Databases',
        'Performance',
        'Print Media',
        'Logos',
    ];
@endphp

@extends('_layouts.main')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <svg width="400" height="400" viewBox="0 0 400 400" style="display: none">
        <defs>
            <filter id="distortionFilter">
                <feTurbulence type="turbulence" baseFrequency="0.017" numOctaves="2" seed="1" result="noise" />
                <feDisplacementMap in="SourceGraphic" in2="noise" scale="5" xChannelSelector="R"
                    yChannelSelector="G" />
            </filter>
        </defs>
    </svg>
    <script>
        const displacementFilterValues = [0.02, 0.01, 0.021, 0.017];
        let displacementIndex = 0;
        setInterval(() => {
            const filter = document.querySelector('#distortionFilter feTurbulence');
            filter.setAttribute('baseFrequency', displacementFilterValues[displacementIndex]);
            displacementIndex = (displacementIndex + 1) % displacementFilterValues.length;
        }, 500);
    </script>
    <div class="bg-slate-50">
        <div class="max-w-xl bg-white">
            <h1 class="font-display fitty [filter:url(#distortionFilter)]">
                test displacement</h1>
        </div>
    </div>
@endsection
