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
        {{-- <h3 class="fitty text-{{ $accent }} font-display2 -mb-4 -mt-2">
            Fresh Off The Trail</h3> --}}
        <h3 class="fitty text-{{ $accent }} font-display2 -mb-4 -mt-2">
            On The Horizon</h3>
        <h3
            class="relative my-3 block w-full rounded-md bg-current px-2 py-[0.25rem] sm:px-4">
            <div class="relative left-1 sm:left-[1rem]">
                <div class="fitty tracking-[0.5em] text-white sm:tracking-[1em]">
                    Bits From the Workshop
                </div>
            </div>
        </h3>
        {{-- <h3 class="fitty text-{{ $accent }} font-display2 -mb-6">
            Headin' Your Way Soon</h3> --}}
    </div>
</x-card>
{{-- 
<div class="macy">
    @foreach ($work as $title => $image)
        @php
            $id = uniqid('lightbox-');
        @endphp
        <div>
            <x-lightbox :$id>
                <x-slot:trigger>
                    <div class="relative"
                         onclick="document.querySelector('body').classList.add('overflow-hidden')">
                        <x-image-frame
                                       src="{{ asset('assets/images/' . $image) }}" />
                    </div>
                </x-slot:trigger>
                <x-slot:content>
                    <label for="{{ $id }}"
                           onclick="document.querySelector('body').classList.remove('overflow-hidden')"
                           class="z-1 backdrop-saturate-10 pointer-events-auto fixed inset-0 block size-full cursor-zoom-out bg-red-800/10 backdrop-blur-[1.5px]"></label>
                    <div class="relative max-w-4xl mx-auto z-2">
                        <x-painterly>
                            <x-container
                                         class="text-{{ $ink }} from-{{ $paperDim }} via-{{ $paper }} to-{{ $paperDim }} pointer-events-auto relative max-w-4xl rounded bg-gradient-to-r shadow-xl">
                                <x-card class="m-0!">
                                    <div>
                                        <h3
                                            class="fitty text-{{ $accent }} font-display2 -mb-4 -mt-2">
                                            {{ $title }}</h3>
                                        <h3
                                            class="relative mb-2 mt-3 block w-full rounded-md bg-current px-2 py-[0.25rem] sm:px-4">
                                            <div class="relative left-1.5">
                                                <div
                                                     class="fitty tracking-[0.5em] text-white sm:tracking-[1em]">
                                                    Waste
                                                    to Revitalization</div>
                                            </div>
                                        </h3>
                                    </div>
                                </x-card>
                                <img src="{{ asset('assets/images/' . $image) }}"
                                     class="relative z-[999]" />
                                @include(
                                    '_partials._texture_overlay',
                                    ['class' => '']
                                )
                            </x-container>
                        </x-painterly>
                    </div>
                </x-slot:content>
            </x-lightbox>
        </div>
    @endforeach
</div> --}}
