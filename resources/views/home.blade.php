@extends('_layouts.main')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <x-container class="font-display text-{{ $ink }} max-w-3xl uppercase">
        @include('_partials.intro')
        <x-card class="text-transparent">
            <div class="text-{{ $dim }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span class="relative -top-1 text-[0.6em]">✦</span> Over a
                    Decade of Experience <span class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>
        <div class="text-{{ $dim }} relative mx-auto -mt-2 mb-6 w-3/5 sm:-mt-4 sm:mb-8 sm:w-2/5 lg:-mt-10">
            @include('_partials.horse1')
        </div>
        <x-card class="text-transparent">
            <div class="text-{{ $dim }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span class="relative -top-1 text-[0.6em]">✦</span>
                    Done Pertin' Near Everything <span class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>
        <div class="lg:-mt-15 -mt-6 sm:-mt-9">@include('_partials._skills')</div>
        {{-- <div class="text-{{ $dim }} flex justify-center gap-3">
            @for ($i = 0; $i < 3; $i++)
                <div>✦</div>
            @endfor
        </div> --}}
        <x-card class="mt-8 hidden text-transparent sm:block">
            <div class="text-{{ $dim }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span class="relative -top-1 text-[0.6em]">✦</span>
                    I'll spin ya a yarn about myself <span class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>
        <x-card class="text-transparent sm:hidden">
            <div class="text-{{ $dim }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span class="relative -top-1 text-[0.6em]">✦</span>
                    Let's spin a yarn, shall we? <span class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>
        <x-card class="sm:-mt-30 -mt-12 text-transparent lg:-mt-40">
            <p class="text-{{ $dim }} text-justify normal-case md:text-xl">Well now, saddle up and let me tell you
                a
                tale — I’m a
                <span class="text-{{ $accent }}">full-stack</span> wrangler with
                one boot in design and the other
                in code, ridin’ clean from Laravel gulches through the Vue and React ranges. I rope in PHP like a seasoned
                ranch
                hand, style with the precision of Tailwind, and handle Node and databases like a poker game I never lose.
                I’ve
                branded logos, animated campfire stories, set up servers sturdier than a saloon safe, and even dabbled in
                the
                fine print arts. Nuxt? Tamed it. Cartwheels? I do ‘em just for flair. Whether it’s pixels or pipelines, I’m
                your
                all-terrain tech cowboy.
            </p>
        </x-card>
    </x-container>
@endsection
