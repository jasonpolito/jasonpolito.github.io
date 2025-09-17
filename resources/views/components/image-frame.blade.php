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
    <div class="bg-slate-700 p-2">
        <div class="flex items-center gap-1 rounded-full bg-slate-600 px-2 py-1 text-[0.6em] text-slate-300">
            <x-heroicon-o-lock-closed class="relative top-[-1px] h-2.5 w-2.5 text-slate-400" />
            {{ $url ?? 'https://jasonpolito.github.io' }}
        </div>
    </div>
    <div
         class="border-3 rounded-b border-slate-800">
        <div class="image-frame relative max-h-[600px] overflow-hidden">
            @if ($src)
                <img src="{{ asset('assets/images/' . $src) }}" alt="{{ $src }}" />
            @else
                <div class="h-[400px] bg-slate-600"></div>
            @endif
        </div>
    </div>
</div>
