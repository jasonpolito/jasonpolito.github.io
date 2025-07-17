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
    <x-container class="font-display max-w-3xl pt-16 uppercase">
        <div class="rounded bg-amber-50 p-8 shadow-sm shadow-amber-200 md:p-16">
            <div>
                <div class="gap-x-8 gap-y-2 uppercase leading-[0.9] text-cyan-950 sm:flex">
                    <div class="w-full">
                        <x-painterly class="fitty">Jason</x-painterly>
                    </div>
                    <div class="w-full">
                        <x-painterly class="fitty">Polito</x-painterly>
                    </div>
                </div>
                <x-painterly class="my-3 block">
                    <div class="w-full rounded-md bg-cyan-950 px-4 py-[0.25rem] text-amber-100">
                        <div class="relative">
                            <div class="fitty relative -right-1 tracking-[0.5em]">Full-Stack</div>
                        </div>
                    </div>
                </x-painterly>
                <x-painterly class="fitty -my-2 text-cyan-950">Web
                    Developer</x-painterly>
            </div>

        </div>
    </x-container>
@endsection
