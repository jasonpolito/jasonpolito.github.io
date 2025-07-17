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
    <x-container class="font-display max-w-3xl uppercase">
        <x-painterly>
            <x-container class="border-16 border-cyan-950">
                <div>
                    <div class="gap-x-8 gap-y-2 uppercase leading-[0.9] text-cyan-950 sm:flex">
                        <div class="w-full">
                            <h3 class="fitty">Jason</h3>
                        </div>
                        <div class="w-full">
                            <h3 class="fitty">Polito</h3>
                        </div>
                    </div>
                    <h3 class="my-3 block w-full rounded-md bg-cyan-950 px-4 py-[0.25rem] text-amber-100">
                        <div class="relative">
                            <div class="fitty relative -right-[0.45rem] tracking-[0.5em]">Full-Stack</div>
                        </div>
                    </h3>
                    <h3 class="fitty -my-2 text-cyan-950">Web
                        Developer</h3>
                </div>

            </x-container>
        </x-painterly>
    </x-container>
@endsection
