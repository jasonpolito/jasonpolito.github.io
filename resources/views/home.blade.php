@extends('_layouts.basic')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <div class="align-center flex h-screen flex-col justify-center text-center">
        <div class="space-y-8">
            <h3 class="text-sm uppercase tracking-widest text-slate-500">The Definition of Full-stack</h3>
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
    </div>
@endsection
