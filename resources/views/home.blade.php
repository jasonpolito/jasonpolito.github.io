@extends('_layouts.basic')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <h1 class="text-pretty">Jason <x-gradient-text>Polito</x-gradient-text></h1>
    <p>
        This is a test page to ensure that the static site generation works correctly with Laravel and Vite.
        <x-link href="{{ route('test') }}">Go to Test Page</x-link>
    </p>
    <p>
        Laravel is a modern PHP framework for <x-link href="{{ route('test') }}">building web applications</x-link>, offering
        elegant syntax, powerful tools, and robust
        features for rapid development.

    </p>
@endsection
