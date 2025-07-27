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
            class="fitty font-display2 text-red-800">
            Let's spin a yarn together
        </h3>
    </div>
</x-card>

<x-card
        class="sm:-mt-18 -mb-8 -mt-6 text-transparent">
    <div
         class="flex flex-wrap gap-3 text-justify uppercase leading-[1.8rem] sm:flex-nowrap sm:gap-6 sm:text-lg">
        <div class="sm:w-1/2">
            <p
               class="text-orange-950">
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
               class="mb-3 text-orange-950">
                @highlightWords($highlightedWords)
                    From branding logos, to animating camp fires and stirring up
                    servers more sturdy than a saloon safe! Whether it's pixels or
                    pipelines, I'm your full&#8209;stack, all terrain tech cowboy.
                @endHighlightWords
            </p>

            <p
               class="text-orange-950">
                @highlightWords($highlightedWords)
                    What are ya waitin' for, compadre? Giddyup!
                @endHighlightWords
            </p>
            @php
                $content = <<<EOD
                🔍 Project Overview
                Brief description of your business/organization

                Purpose of the site (e.g., portfolio, e-commerce, informational, app landing page)

                🎯 Key Goals & Features
                Pages you'd like (e.g., Home, About, Services, Contact)

                Any specific features? (e.g., contact forms, blog, booking system, online payments, user login)

                CMS preference (e.g., WordPress, Webflow, custom build, no preference)

                🖼 Design
                Do you already have designs/mockups?

                If not, do you need design services too?

                Any reference sites you like in terms of look, feel, or functionality?

                ⚙️ Functionality
                Will the site need mobile responsiveness?

                Any integrations needed? (e.g., CRM, newsletter signup, third-party APIs)

                🗂 Content
                Will you be providing the text/images, or would you like help with that?

                🚀 Timeline
                Do you have a deadline or ideal launch date?

                💰 Budget
                An idea of your budget range would help me tailor the quote appropriately
                EOD;
            @endphp
            <a href="mailto:jasonpolito@gmail.com?subject=Howdy%20Partner!%20Let's%20spin%20a%20yarn%20together!&body={{ rawurlencode($content) }}"
               class="block text-slate-950 hover:text-red-800 focus:text-red-800 focus:outline-none">
                <x-card
                        class="p-0! relative bg-current text-xs uppercase tracking-widest text-current">
                    <div
                         class="-mx-6 flex items-center justify-center gap-3 text-white">
                        <h4
                            class="font-display2 relative top-0.5 text-xl tracking-[0.25em]">
                            Say howdy!
                        </h4>
                        <div
                             class="-my-4 w-16">
                            @include('_partials._arrow')
                        </div>
                    </div>
                </x-card>
            </a>
        </div>
    </div>
</x-card>
