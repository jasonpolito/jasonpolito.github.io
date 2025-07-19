<a href="#"
    class="group relative block rounded shadow-sm shadow-amber-950/10 transition-all hover:z-10 hover:rotate-0 hover:scale-105 hover:shadow-lg hover:shadow-amber-950/20">
    <div class="bg-{{ $ink }} flex gap-0.5 rounded-t p-1 transition group-hover:bg-slate-700">
        @foreach (['red', 'amber', 'lime'] as $item)
            <div class="bg-{{ $item }}-400 size-1 rounded-full"></div>
        @endforeach
    </div>
    <img src="{{ asset($src) }}" alt=""
        class="sepia-45 relative rounded-b brightness-90 saturate-0 group-hover:brightness-100 group-hover:saturate-100 group-hover:sepia-0">
</a>
