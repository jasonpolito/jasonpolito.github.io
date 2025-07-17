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
        <div class="pt-16">
            <div class="gap-x-8 gap-y-2 uppercase leading-[0.9] text-cyan-950 sm:flex">
                <div class="w-full">
                    <x-painterly class="fitty">Jason</x-painterly>
                </div>
                <div class="w-full">
                    <x-painterly class="fitty">Polito</x-painterly>
                </div>
            </div>
            <x-painterly class="fitty text-orange-600">Full-Stack</x-painterly>
            <x-painterly class="fitty -mt-2 text-cyan-800">Web Developer</x-painterly>

        </div>
    </x-container>
@endsection
