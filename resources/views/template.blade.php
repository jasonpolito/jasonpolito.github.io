@extends('_layouts.basic')

@section('meta_title', $title . ' - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the ' .
    $title .
    ' page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <h1 class="text-pretty">Page <x-gradient-text>{{ $title }}</x-gradient-text></h1>
    <ul>
        @foreach ($routes as $item)
            <li>
                <x-link href="{{ route($item) }}">{{ Str::title($item) }}</x-link>
            </li>
        @endforeach
    </ul>
@endsection
