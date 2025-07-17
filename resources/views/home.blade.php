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
            <div
                class="text-{{ $textColor }} dark:text-{{ $baseColor }} gap-x-8 gap-y-2 uppercase leading-[0.9] sm:flex">
                <div class="w-full">
                    <x-painterly class="fitty">Jason</x-painterly>
                </div>
                <div class="w-full">
                    <x-painterly class="fitty">Polito</x-painterly>
                </div>
            </div>
            <x-painterly class="my-3 block">
                <div
                    class="bg-{{ $textColor }} dark:bg-{{ $baseColor }} dark:text-{{ $textColor }} text-{{ $baseColor }} w-full rounded-md px-4 py-[0.25rem]">
                    <div class="relative">
                        <div class="fitty relative -right-1 tracking-[0.5em]">Full-Stack</div>
                    </div>
                </div>
            </x-painterly>
            <x-painterly class="fitty dark:text-{{ $baseColor }} -mt-2">Web Developer</x-painterly>

        </div>
    </x-container>
@endsection
