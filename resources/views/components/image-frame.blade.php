@php
    $id = uniqid('image-frame-');
@endphp
<div
    class="relative block rounded shadow-sm outline-none appearance-none padding-0 group cursor-zoom-in shadow-amber-950/10 hover:shadow-lg hover:shadow-amber-950/20 focus:z-10 focus:shadow-lg focus:shadow-amber-950/20">
    <div class="bg-{{ $ink }} flex gap-0.5 rounded-t p-1 group-hover:bg-slate-950">
        @foreach (['red', 'amber', 'lime'] as $color)
            <div
                class="group-hover:bg-{{ $color }}-400 group-focus:bg-{{ $color }}-400 bg-{{ $paper }} size-1 rounded-full">
            </div>
        @endforeach
    </div>
    <div class="border-3 border-{{ $ink }} bg-{{ $paper }} rounded-b">
        <div class="relative">
            <img src="{{ asset($src) }}" alt=""
                class="filter-[url(#posterizer)_saturate(0)_sepia(0.06)_invert(100)] mix-blend-multiply">
            <img src="{{ asset($src) }}" alt=""
                class="relative transition duration-700 opacity-0 pointer-events-none z-1 fill-parent group-hover:opacity-100">
        </div>
    </div>
</div>
