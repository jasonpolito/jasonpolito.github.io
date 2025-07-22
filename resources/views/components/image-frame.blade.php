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
            class="filter-[url(#posterize1)_saturate(0)_sepia(0.06)_invert(100)] relative mix-blend-multiply group-hover:mix-blend-normal group-hover:contrast-100 group-hover:saturate-100 group-hover:sepia-0 group-focus:mix-blend-normal group-focus:contrast-100 group-focus:saturate-100 group-focus:sepia-0">
        <svg class="fill-parent" viewBox="0 0 500 500" aria-hidden="true">
            <filter id="posterize1" filterRes="512">
                <feColorMatrix type="saturate" values="0.35" result="desat" />
                <feComponentTransfer>
                    <feFuncR type="gamma" exponent="0.8" amplitude="1.5" offset="0.1" />
                    <feFuncG type="gamma" exponent="0.8" amplitude="1.5" offset="0.1" />
                    <feFuncB type="gamma" exponent="0.8" amplitude="1.5" offset="0.1" />
                </feComponentTransfer>
                <feComponentTransfer>
                    <feFuncR type="discrete" tableValues="0 0.25 0.5 0.75 1" />
                    <feFuncG type="discrete" tableValues="0 0.25 0.5 0.75 1" />
                    <feFuncB type="discrete" tableValues="0 0.25 0.5 0.75 1" />
                </feComponentTransfer>
            </filter>
        </svg>
    </div>
</div>
