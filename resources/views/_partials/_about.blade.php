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

<x-card
        class="py-0! m-0! text-transparent">
    <div>
        <h3
            class="fitty font-display2 text-{{ $accent }}">
            Let's spin a yarn together
        </h3>
    </div>
</x-card>

<x-card
        class="-mt-6 -mb-8 text-transparent sm:-mt-18">
    <div
         class="flex flex-wrap gap-3 text-justify uppercase leading-[1.8rem] sm:flex-nowrap sm:gap-6 sm:text-lg">
        <div class="sm:w-1/2">
            <p
               class="text-{{ $dim }}">
                @highlightWords($highlightedWords)
                    Saddle up partner and
                    let me tell you a tale.
                    I'm a full&#8209;stack
                    wrangler with one boot
                    in code
                    and the other in design.
                    I ride 'round the
                    Laravel and PHP gulches
                    and the Vue and React
                    ranges.
                    Ropin' in Tailwind and
                    CSS like a well seasoned
                    ranch hand and handlin
                    databases like a poker
                    game I
                    never lose.
                @endHighlightWords
            </p>
        </div>
        <div class="sm:w-1/2">

            <p
               class="text-{{ $dim }} mb-3">
                @highlightWords($highlightedWords)
                    From branding logos, to animating camp fires and stirring up
                    servers more sturdy than a saloon safe! Whether it's pixels or
                    pipelines, I'm your full&#8209;stack, all terrain tech cowboy.
                @endHighlightWords
            </p>

            <p
               class="text-{{ $dim }}">
                @highlightWords($highlightedWords)
                    what are ya waitin' for, compadre? Giddyup!
                @endHighlightWords
            </p>

            <a href="#"
               class="text-{{ $ink }} hover:text-{{ $accent }} focus:text-{{ $accent }} block focus:outline-none">
                <x-card
                        class="p-0! relative bg-current text-xs uppercase tracking-widest text-current">
                    <div
                         class="flex items-center justify-center gap-3 -mx-6 text-white">
                        <h4
                            class="font-display2 relative top-0.5 text-xl tracking-[0.25em]">
                            Say howdy!
                        </h4>
                        <div
                             class="w-16 -my-4">
                            @include('_partials._arrow')
                        </div>
                    </div>
                </x-card>
            </a>
        </div>
    </div>
</x-card>
