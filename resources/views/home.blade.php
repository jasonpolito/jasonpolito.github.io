@php
    $skills = [
        'UX+UI',
        'Laravel',
        'React',
        'PHP',
        'Tailwind',
        'Svelte',
        'Node',
        'Vue',
        'Animations',
        'WordPress',
        'Performance',
        'Print Media',
        'Databases',
    ];
@endphp

@extends('_layouts.basic')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <div class="align-center relative z-10 flex h-screen w-full flex-col justify-center bg-slate-950 text-center sm:h-auto sm:py-32"
        id="fullystacked">
        <canvas id="flowfield"
            class="mask-b-from-25% absolute left-0 top-0 hidden h-full w-full opacity-0 transition-all duration-[5s] sm:block"></canvas>
        <div class="z-10 space-y-4 md:space-y-8">
            <h3 class="font-mono text-sm uppercase leading-relaxed tracking-widest text-slate-400"><x-gradient-text
                    class="from-slate-400 via-slate-300 to-slate-400">Jason Polito<br>Full-stack
                    Developer & Designer</x-gradient-text></h3>
            <h1 class="font-display color-spin text-center text-5xl sm:text-8xl lg:text-9xl"><x-word-rotator
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
