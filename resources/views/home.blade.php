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
    <x-container class="font-display text-{{ $ink }} max-w-3xl uppercase">
        @for ($i = 0; $i < 3; $i++)
            <x-card>

                <div>
                    <div class="gap-x-8 gap-y-2 uppercase leading-[0.9] text-red-800 sm:flex">
                        <div class="w-full">
                            <h3 class="fitty">Jason</h3>
                        </div>
                        <div class="w-full">
                            <h3 class="fitty">Polito</h3>
                        </div>
                    </div>
                    <h3 class="bg-{{ $ink }} relative my-3 block w-full rounded-md px-2 py-[0.25rem] sm:px-4">
                        <div class="relative left-1 sm:left-[1rem]">
                            <div class="fitty tracking-[0.5em] text-white sm:tracking-[1em]">
                                Full-Stack
                            </div>
                        </div>
                    </h3>
                    <h3 class="fitty text-{{ $ink }} -mb-4 -mt-2">Web Developer</h3>
                </div>
            </x-card>
        @endfor
    </x-container>
@endsection
