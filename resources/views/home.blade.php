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
        <x-card class="text-transparent">
            <div class="text-{{ $ink }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest">- Over 10 Years of Experience -</h4>
            </div>
        </x-card>
    </x-container>
@endsection
