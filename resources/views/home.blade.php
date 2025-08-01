@extends('_layouts.main')

@section('meta_title', '🤠 Jason Polito - Full-Stack Developer')
@section('meta_description', '🤠 Jason Polito - Full-Stack Developer')

@section('content')
    <x-container
                 class="outline-16 relative max-w-3xl rounded bg-gradient-to-r from-orange-300 via-orange-100 to-orange-300 text-slate-950 outline-slate-800">
        @include('_partials.intro')

        <x-card class="text-transparent">
            <div class="-mt-6 text-orange-950 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span
                          class="relative -top-1 text-[0.6em]">✦</span> Over a
                    Decade of Experience <span
                          class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>

        <div
             class="relative mx-auto -mt-2 mb-6 w-3/5 sm:-mt-4 sm:mb-8 sm:w-2/5 lg:-mt-10">
            <div class="fill-parent left-16! scale-[0.9] text-cyan-950">
                @include('_partials.horse1')</div>
            <div class="fill-parent -left-16! scale-[0.9] text-red-800">
                @include('_partials.horse1')</div>
            <div class="relative">@include('_partials.horse1')</div>
        </div>

        <x-card class="text-transparent">
            <div class="-mt-6 text-orange-950 sm:-mt-8 lg:-mt-12">
                <h4 class="fitty nowrap-forced tracking-widest"><span
                          class="relative -top-1 text-[0.6em]">✦</span>
                    Done Pertin' Near Everything <span
                          class="relative -top-1 text-[0.6em]">✦</span></h4>
            </div>
        </x-card>

        <div class="lg:-mt-15 -mt-6 sm:-mt-9">
            <x-card class="bg-current text-slate-950">
                <div class="text-white">@include('_partials._skills')</div>
            </x-card>
        </div>

        @include('_partials._about')

        <div class="my-12 flex select-none justify-center gap-3 text-orange-950">
            @for ($i = 0; $i < 3; $i++)
                <div>✦</div>
            @endfor
        </div>

        @include('_partials._work')

        <div class="my-12 flex select-none justify-center gap-3 text-orange-950">
            @for ($i = 0; $i < 3; $i++)
                <div>✦</div>
            @endfor
        </div>

        @include('_partials._corner_stars')

    </x-container>
@endsection
