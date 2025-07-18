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

<x-card class="-mt-3 text-transparent sm:-mt-6">
    <div class="flex flex-wrap gap-3 sm:flex-nowrap sm:gap-6">
        <div class="sm:w-1/2">
            <p class="text-{{ $dim }} text-justify normal-case leading-[1.6rem] md:text-xl">
                @highlightWords([
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
                    'servers',
                    'Nuxt',
                    'cartwheels'
                ])
                    Well now, saddle up and let me tell you a tale — I'm a full&#8209;stack wrangler with one boot in design
                    and
                    the other in code, ridin' clean from Laravel gulches through the Vue and React ranges. I rope in PHP
                    like a
                    seasoned ranch hand, style with the precision of Tailwind, and handle Node and databases like a poker
                    game I
                    never lose.
                @endHighlightWords
            </p>
        </div>
        <div class="sm:w-1/2">
            <p class="text-{{ $dim }} text-justify normal-case leading-[1.6rem] md:text-xl">
                @highlightWords([
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
                    'servers',
                    'Nuxt',
                    'cartwheels'
                ])
                    I've branded logos, animated campfire stories, set up servers sturdier than a saloon safe,
                    and
                    even dabbled in the fine print arts. Nuxt? Tamed it. Cartwheels? I do 'em just for flair. Whether it's
                    pixels or pipelines, I'm your all-terrain tech cowboy.
                @endHighlightWords
            </p>
        </div>
    </div>
</x-card>
