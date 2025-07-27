@php
    $id = uniqid('image-frame-');
@endphp
<div
     class="padding-0 group relative block cursor-zoom-in appearance-none rounded shadow-sm shadow-amber-950/10 outline-none hover:shadow-lg hover:shadow-amber-950/20 focus:z-10 focus:shadow-lg focus:shadow-amber-950/20">
    <div
         class="flex gap-0.5 rounded-t bg-slate-950 p-1 group-hover:bg-slate-950">
        @foreach (['red', 'amber', 'lime'] as $color)
            <div
                 class="group-hover:bg-{{ $color }}-400 group-focus:bg-{{ $color }}-400 relative top-px size-1 rounded-full bg-orange-100">
            </div>
        @endforeach
    </div>
    <div
         class="border-3 rounded-b border-slate-950 bg-orange-100">
        <div class="relative">
            <img src="{{ asset($src) }}" alt=""
                 class="filter-[url(#posterizer)_saturate(0)_sepia(0.06)_invert(100)] mix-blend-multiply">
            <img src="{{ asset($src) }}" alt=""
                 class="z-1 fill-parent pointer-events-none relative opacity-0 transition duration-700 group-hover:opacity-100">
        </div>
    </div>
</div>
