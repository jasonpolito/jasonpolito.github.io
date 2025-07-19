@extends('_layouts.main')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <x-container
        class="font-display text-{{ $ink }} from-{{ $paperDim }} via-{{ $paper }} to-{{ $paperDim }} max-w-3xl bg-gradient-to-r">
        @include('_partials.intro')
        <x-card class="text-transparent">
            <div class="text-{{ $dim }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span class="relative -top-1 text-[0.6em]">✦</span> Over a
                    Decade of Experience <span class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>
        <div class="relative mx-auto -mt-2 mb-6 w-3/5 sm:-mt-4 sm:mb-8 sm:w-2/5 lg:-mt-10">
            <div class="fill-parent left-16! scale-[0.9] text-cyan-950">@include('_partials.horse1')</div>
            <div class="fill-parent -left-16! scale-[0.9] text-red-800">@include('_partials.horse1')</div>
            <div class="relative">@include('_partials.horse1')</div>
        </div>

        <x-card class="text-transparent">
            <div class="text-{{ $dim }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span class="relative -top-1 text-[0.6em]">✦</span>
                    Done Pertin' Near Everything <span class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>

        <div class="lg:-mt-15 -mt-6 sm:-mt-9">
            <x-card class="text-{{ $ink }} bg-current">
                <div class="text-white">@include('_partials._skills')</div>
            </x-card>
        </div>

        @include('_partials._about')

        <div class="text-{{ $dim }} pt-8 text-center text-xs">&copy; {{ date('Y') }} – Jason Polito</div>
    </x-container>
@endsection
