@php
    $id = uniqid('image-frame-');
@endphp
<div
     class="padding-0 group relative block rounded bg-slate-800 shadow-sm shadow-amber-950/10 outline-none hover:shadow-lg hover:shadow-amber-950/20 focus:z-10 focus:shadow-lg focus:shadow-amber-950/20">
    <div
         class="bg-amber-400 bg-lime-400 bg-red-400">
    </div>
    <div
         class="flex gap-0.5 rounded-t bg-slate-800 p-1">
        @foreach (['red', 'amber', 'lime'] as $color)
            <div
                 class="bg-{{ $color }}-400 relative top-px size-1 rounded-full">
            </div>
        @endforeach
    </div>
    <div
         class="border-3 rounded-b border-slate-800">
        <div class="relative">
            <div class="h-[400px] bg-slate-600"></div>
            {{-- <img src="{{ asset($src) }}" alt=""
                 class="filter-[url(#posterizer)_saturate(0)_sepia(0.06)_invert(100)] mix-blend-multiply">
            <img src="{{ asset($src) }}" alt=""
                 class="z-1 fill-parent pointer-events-none relative opacity-0 transition duration-700 group-hover:opacity-100"> --}}
        </div>
    </div>
</div>
