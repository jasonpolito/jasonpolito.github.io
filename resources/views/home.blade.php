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
    <div class="align-center h-screen-fallback relative z-10 flex max-h-[720px] w-full flex-col justify-center bg-slate-950 text-center sm:h-auto sm:py-32"
        id="fullystacked">
        <canvas id="flowfield"
            class="mask-b-from-25% absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-[2s]"></canvas>
        <div class="pointer-events-none space-y-4 md:space-y-8">
            <h3 class="font-mono text-sm uppercase leading-relaxed tracking-widest text-slate-400"><x-gradient-text
                    class="from-slate-400 via-slate-300 to-slate-400">Jason Polito<br>Full-stack
                    Developer & Designer</x-gradient-text></h3>
            <h1 class="font-display text-center text-5xl sm:text-8xl lg:text-9xl"><x-word-rotator
                    :words="$skills"></x-word-rotator>
            </h1>
        </div>
    </div>
    {{-- <div class="py-32 font-mono">
        <ul>
            @foreach ($skills as $skill)
                <li class="text-slate-400">{{ $skill }}</li>
            @endforeach
        </ul>
    </div> --}}
@endsection
