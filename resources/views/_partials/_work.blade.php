@php
    $work = [
        'Halifax Health' => 'hh_1.png',
        'Dr. Mary McLeod Bethune' => 'mmb_1.png',
        'Greencourse Solutions' => 'gc_1.png',
        'Volusia Veterans' => 'vv_1.png',
        'Accept America' => 'aa_1.png',
    ];
@endphp

<x-card>
    <div>
        <h3 class="fitty text-{{ $accent }} font-display2 -mb-4 -mt-2">Fresh Off The Trail</h3>
        <h3 class="relative my-3 block w-full rounded-md bg-current px-2 py-[0.25rem] sm:px-4">
            <div class="relative left-1 sm:left-[1rem]">
                <div class="fitty tracking-[0.5em] text-white sm:tracking-[1em]">
                    Bits From the Workshop
                </div>
            </div>
        </h3>
    </div>
</x-card>

<div class="-mx-1.5 flex flex-wrap">
    @foreach ($work as $title => $image)
        @php
            $id = uniqid('lightbox-');
        @endphp
        <div class="w-full p-2 sm:w-1/2 lg:w-1/3">
            <div class="text-{{ $dim }} mb-2 text-center text-xs">{{ $title }}</div>
            <x-lightbox :$id>
                <x-slot:trigger>
                    <x-image-frame src="{{ asset('assets/images/' . $image) }}" />
                </x-slot:trigger>
                <x-slot:content>
                    <div class="py-16 pointer-events-none">
                        <x-painterly class="fixed inset-0 w-screen h-screen pointer-events-none">
                            <x-container
                                class="text-{{ $ink }} from-{{ $paperDim }} via-{{ $paper }} to-{{ $paperDim }} relative max-w-4xl rounded bg-gradient-to-r shadow-md">
                                <x-card>
                                    <div>
                                        <h3 class="fitty text-{{ $accent }} font-display2 -mb-4 -mt-2">
                                            {{ $title }}</h3>
                                        <h3
                                            class="relative mb-2 mt-3 block w-full rounded-md bg-current px-2 py-[0.25rem] sm:px-4">
                                            <div class="relative left-1.5">
                                                <div class="fitty tracking-[0.5em] text-white sm:tracking-[1em]">Waste
                                                    to Revitalization</div>
                                            </div>
                                        </h3>
                                    </div>
                                </x-card>
                                <img src="{{ asset('assets/images/' . $image) }}" class="relative z-[999]" />
                                @include('_partials._texture_overlay', ['class' => ''])
                            </x-container>
                            <div class="py-8"></div>
                        </x-painterly>
                    </div>
                </x-slot:content>
            </x-lightbox>
        </div>
    @endforeach
</div>
