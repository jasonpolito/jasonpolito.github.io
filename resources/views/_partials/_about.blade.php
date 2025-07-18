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
    <div class="flex flex-wrap gap-3 sm:flex-nowrap sm:gap-6">
        <div class="sm:w-1/2">
            <p class="text-{{ $dim }} text-justify normal-case leading-[1.6rem] md:text-xl">
                @highlightWords($highlightedWords)
                    Saddle up partner and let me tell you a tale — I'm a full&#8209;stack wrangler with one boot in code
                    and the other in design. Ridin' clean from Laravel and PHP gulches through the Vue and React ranges. I
                    rope in
                    Tailwind like a seasoned ranch hand and handle databases like a poker game I never lose.
                @endHighlightWords
            </p>
        </div>
        <div class="sm:w-1/2">
            <p class="text-{{ $dim }} text-justify normal-case leading-[1.6rem] md:text-xl">
                @highlightWords($highlightedWords)
                    From branding logos, to animating camp fires and stirring up servers sturdier than a saloon safe!
                    Whether it's pixels or pipelines, I'm your full&#8209;stack, all-terrain tech cowboy.
                @endHighlightWords
            </p>
            <x-card class="text-{{ $accent }} relative bg-current text-xs">
                <div class="-mx-6 flex items-center justify-center gap-3 text-white">
                    <h4 class="text-xl">Say howdy! </h4>
                    <div class="w-12">@include('_partials.point')</div>
                </div>
            </x-card>
        </div>
    </div>
</x-card>
