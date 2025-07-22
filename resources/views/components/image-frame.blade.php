@php
    $id = uniqid('image-frame-');
@endphp
<div
    class="relative block rounded shadow-sm outline-none appearance-none cursor-pointer padding-0 hover:z-1 group shadow-amber-950/10 hover:shadow-lg hover:shadow-amber-950/20 focus:z-10 focus:shadow-lg focus:shadow-amber-950/20">
    <div class="bg-{{ $ink }} flex gap-0.5 rounded-t p-1 group-hover:bg-slate-700">
        @foreach (['red', 'amber', 'lime'] as $color)
            <div
                class="group-hover:bg-{{ $color }}-400 group-focus:bg-{{ $color }}-400 bg-{{ $paper }} size-1 rounded-full">
            </div>
        @endforeach
    </div>
    <div
        class="border-3 border-{{ $ink }} bg-{{ $paper }} rounded-b group-hover:border-slate-700 group-focus:border-slate-700">
        <img src="{{ asset($src) }}" alt=""
            class="filter-[url(#posterizer)_saturate(0)_sepia(0.06)_invert(100)] relative mix-blend-multiply group-hover:mix-blend-normal group-hover:contrast-100 group-hover:saturate-100 group-hover:sepia-0 group-focus:mix-blend-normal group-focus:contrast-100 group-focus:saturate-100 group-focus:sepia-0">
    </div>
</div>
