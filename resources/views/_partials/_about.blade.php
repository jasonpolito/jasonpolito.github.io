@php
    $highlightedWords = [
        'full&#8209;stack',
        'Laravel',
        'Vue',
        'React',
        'PHP',
        'Tailwind',
        'CSS',
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

<x-card class="-mb-8 -mt-3 text-transparent sm:-mt-6">
    <div class="flex flex-wrap gap-3 text-justify uppercase leading-[1.8rem] sm:flex-nowrap sm:gap-6 sm:text-lg">
        <div class="sm:w-1/2">
            <p class="text-{{ $dim }}">
                @highlightWords($highlightedWords)
                    Saddle up partner and let me tell you a tale. I'm a full&#8209;stack wrangler with one boot in code
                    and the other in design. I ride 'round the Laravel and PHP gulches and the Vue and React ranges.
                    Ropin' in Tailwind and CSS like a well seasoned ranch hand and handlin databases like a poker game I
                    never
                    lose.
                @endHighlightWords
            </p>
        </div>
        <div class="sm:w-1/2">
            <p class="text-{{ $dim }} mb-3">
                @highlightWords($highlightedWords)
                    From branding logos, to animating camp fires and stirring up servers more sturdy than a saloon safe!
                    Whether it's pixels or pipelines, I'm your full&#8209;stack, all terrain tech cowboy.
                @endHighlightWords
            </p>
            <p class="text-{{ $dim }}">
                @highlightWords($highlightedWords)
                    Well compadre, what are ya waitin' for – Giddy up!
                @endHighlightWords
            </p>
            {{-- <div class="text-{{ $dim }} mb-2 mt-4 flex justify-center gap-1 text-4xl">
                <div class="scale-[0.6]">✦</div>
                <div class="scale-[0.6]">✦</div>
                <div class="scale-[0.6]">✦</div>
            </div> --}}
            <a href="#"
                class="text-{{ $ink }} hover:text-{{ $accent }} focus:text-{{ $accent }} block focus:outline-none">
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
