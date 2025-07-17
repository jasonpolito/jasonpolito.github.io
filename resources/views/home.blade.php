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
        <div class="text-eme">@include('_partials.intro')</div>
        <div class="text-cyan-950">
            <x-card>
                <div class="-my-2">
                    <h4 class="fitty tracking-widest">15+ Years of Experience</h4>
                </div>
            </x-card>
        </div>
    </x-container>
@endsection
