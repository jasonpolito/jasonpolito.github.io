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
    ];
@endphp

@extends('_layouts.main')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <x-container class="font-display text-{{ $ink }} max-w-3xl uppercase">
        <div class="relative mx-auto w-3/5 pt-8 sm:w-2/5">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-full rounded-full bg-amber-300"></div>
            </div>
            @include('_partials.horse1')
        </div>
        @include('_partials.intro')
        <x-card class="text-transparent">
            <div class="text-{{ $ink }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span class="relative -top-1 text-[0.6em]">✦</span> Over a
                    Decade of Experience <span class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>
        <x-card class="bg-{{ $ink }}">
            <ul
                class="text-md flex flex-wrap justify-between gap-2 text-center leading-[1] text-white sm:gap-4 sm:text-2xl lg:text-lg">
                <li>UX/UI</li>
                <li>✦</li>
                <li>Laravel</li>
                <li>✦</li>
                <li>Vue</li>
                <li>✦</li>
                <li>React</li>
                <li class="w-full"></li>
                <li>Svelte</li>
                <li>✦</li>
                <li>Tailwind</li>
                <li>✦</li>
                <li>Animation</li>
                <li class="w-full"></li>
                <li>Javascript</li>
                <li>✦</li>
                <li>Databases</li>
                <li>✦</li>
                <li>PHP</li>
            </ul>
        </x-card>
    </x-container>
@endsection
