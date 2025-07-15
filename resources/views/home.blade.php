@extends('_layouts.basic')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')

    @php
        $words = ['Fullstack', 'Laravel', 'UX+UI', 'Animation', 'PHP', 'Svelte', 'CSS', 'HTML', 'Javascript', 'SQL'];
    @endphp
    <h1 class="text-center">Let's do <br>
        <x-word-rotator :$words></x-word-rotator>
    </h1>
    <p>
        This is a test page to ensure that the static site generation works correctly with Laravel and Vite.
    </p>

    <p>
        Laravel is a modern PHP framework for
        elegant syntax, powerful tools, and robust
        features for rapid development.
    </p>
@endsection
