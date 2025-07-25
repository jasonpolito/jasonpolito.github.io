@extends('_layouts.main')

@section('meta_title', '🤠 Jason Polito - Full-Stack Developer')
@section('meta_description', '🤠 Jason Polito - Full-Stack Developer')

@section('content')
    <x-container
                 class="text-{{ $ink }} from-{{ $paperDim }} via-{{ $paper }} to-{{ $paperDim }} outline-16 outline-{{ $inkDim }} relative max-w-3xl rounded bg-gradient-to-r">
        @include('_partials.intro')

        <x-card class="text-transparent">
            <div class="text-{{ $dim }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="tracking-widest fitty nowrap-forced"><span
                          class="relative -top-1 text-[0.6em]">✦</span> Over a
                    Decade of Experience <span
                          class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>

        <div
             class="relative w-3/5 mx-auto mb-6 -mt-2 sm:-mt-4 sm:mb-8 sm:w-2/5 lg:-mt-10">
            <div class="fill-parent left-16! scale-[0.9] text-cyan-950">
                @include('_partials.horse1')</div>
            <div class="fill-parent -left-16! scale-[0.9] text-red-800">
                @include('_partials.horse1')</div>
            <div class="relative">@include('_partials.horse1')</div>
        </div>

        <x-card class="text-transparent">
            <div class="text-{{ $dim }} -mt-6 sm:-mt-8 lg:-mt-12">
                <h4 class="tracking-widest fitty nowrap-forced"><span
                          class="relative -top-1 text-[0.6em]">✦</span>
                    Done Pertin' Near Everything <span
                          class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>

        <div class="-mt-6 lg:-mt-15 sm:-mt-9">
            <x-card class="text-{{ $ink }} bg-current">
                <div class="text-white">@include('_partials._skills')</div>
            </x-card>
        </div>

        @include('_partials._about')

        <div class="text-{{ $dim }} my-12 flex justify-center gap-3">
            @for ($i = 0; $i < 3; $i++)
                <div>✦</div>
            @endfor
        </div>

        @include('_partials._work')

        <div class="text-{{ $dim }} my-12 flex justify-center gap-3">
            @for ($i = 0; $i < 3; $i++)
                <div>✦</div>
            @endfor
        </div>

        @include('_partials._corner_stars')

    </x-container>
@endsection
