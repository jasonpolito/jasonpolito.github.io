@extends('_layouts.main')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <x-container class="font-display text-{{ $ink }} max-w-3xl uppercase">
        @include('_partials.intro')
        <x-card class="text-transparent">
            <div class="text-{{ $ink }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span class="relative -top-1 text-[0.6em]">✦</span> Over a
                    Decade of Experience <span class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>
        <div class="relative mx-auto -mt-2 mb-6 w-3/5 sm:-mt-4 sm:mb-8 sm:w-2/5 lg:-mt-10">
            @include('_partials.horse1')
        </div>
        <x-card class="bg-{{ $ink }}">
            @include('_partials._desktop_skills')
            @include('_partials._tablet_skills')
            @include('_partials._mobile_skills')
        </x-card>
    </x-container>
@endsection
