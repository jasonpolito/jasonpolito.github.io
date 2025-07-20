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



@php
    $work = [
        'Halifax Health' => 'hh_1.png',
        'Dr. Mary McLeod Bethune' => 'mmb_1.png',
        'Greencourse Solutions' => 'gc_1.png',
    ];
@endphp
<div class="-mx-1.5 flex flex-wrap">
    @foreach ($work as $title => $image)
        <div class="w-1/2 p-2 sm:w-1/3">
            <div class="text-{{ $dim }} mb-2 text-center text-xs">{{ $title }}</div>
            <x-image-frame src="{{ asset('assets/images/' . $image) }}" />
        </div>
    @endforeach
</div>
