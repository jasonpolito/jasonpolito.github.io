@extends('_layouts.basic')

@section('meta_title', 'Test Page - jasonpolito.github.io')
@section('meta_description', 'This is a test page to ensure that the static site generation works correctly with Laravel
    and Vite.')

@section('content')
    <h1>Testing a <x-gradient-text>sub page.</x-gradient-text></h1>
    <p>
        Return home.
        <x-link href="{{ route('home') }}">Go to Home Page</x-link>
    </p>
@endsection
