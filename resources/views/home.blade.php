@extends('_layouts.basic')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <div class="align-center flex h-screen flex-col justify-center">
        <h1 class="text-center text-9xl font-bold"><x-word-rotator :words="[
            'UX+UI',
            'Laravel',
            'React',
            'Tailwind',
            'Animations',
            'Vue',
            'Svelte',
            'PHP',
            'Print Media',
            'WordPress',
            'Databases',
        ]"></x-word-rotator>
        </h1>
    </div>
@endsection
