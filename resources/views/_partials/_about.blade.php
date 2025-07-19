{{-- <x-card class="mt-8 hidden text-transparent sm:block">
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
</x-card> --}}

@php
    $highlightedWords = [
        'full&#8209;stack',
        'Laravel',
        'Vue',
        'React',
        'PHP',
        'Tailwind',
        'Node',
        'databases',
        'logos',
        'animated',
        'animating',
        'animation',
        'servers',
        'Nuxt',
        'cartwheels',
    ];
@endphp

<x-card class="-mt-3 text-transparent sm:-mt-6">
    <div class="flex flex-wrap gap-3 text-justify text-lg uppercase leading-[1.8rem] sm:flex-nowrap sm:gap-6">
        <div class="sm:w-1/2">
            <p class="text-{{ $dim }}">
                @highlightWords($highlightedWords)
                    Saddle up partner and let me tell you a tale. I'm a full&#8209;stack wrangler with one boot in code
                    and the other in design. I ride 'round the Laravel and PHP gulches and the Vue and React ranges.
                    I
                    rope in
                    Tailwind like a seasoned ranch hand and handle databases like a poker game I never lose.
                @endHighlightWords
            </p>
        </div>
        <div class="sm:w-1/2">
            <p class="text-{{ $dim }} mb-3">
                @highlightWords($highlightedWords)
                    From branding logos, to animating camp fires and stirring up servers sturdier than a saloon safe!
                    Whether it's pixels or pipelines, I'm your full&#8209;stack, all-terrain tech cowboy.
                @endHighlightWords
            </p>
            <p class="text-{{ $dim }}">
                @highlightWords($highlightedWords)
                    Well, what are ya waitin' for?! Giddy up!
                @endHighlightWords
            </p>
            {{-- <div class="text-{{ $dim }} mb-2 mt-4 flex justify-center gap-1 text-4xl">
                <div class="scale-[0.6]">✦</div>
                <div class="scale-[0.6]">✦</div>
                <div class="scale-[0.6]">✦</div>
            </div> --}}
            <a href="" class="text-{{ $accent }} hover:text-{{ $ink }} block">
                <x-card class="p-0! relative bg-current text-xs uppercase tracking-widest text-current">
                    <div class="-mx-6 flex items-center justify-center gap-6 text-white">
                        <h4 class="text-xl">Say howdy! </h4>
                        <div class="w-12">@include('_partials.point')</div>
                    </div>
                </x-card>
            </a>
        </div>
    </div>
</x-card>
