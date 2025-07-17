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
    <x-container class="max-w-3xl">
        <div class="pt-16">
            <div class="font-display gap-x-8 gap-y-2 uppercase leading-[0.9] text-cyan-950 sm:flex">
                <div class="w-full">
                    <x-painterly class="fitty">Jason</x-painterly>
                </div>
                <div class="w-full">
                    <x-painterly class="fitty">Polito</x-painterly>
                </div>
            </div>
        </div>
    </x-container>
@endsection
