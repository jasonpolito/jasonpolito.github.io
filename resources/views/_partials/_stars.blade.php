    <div class="fill-parent absolute inset-0 overflow-hidden">
        <div class="absolute left-0 top-0 h-[20%] w-full bg-gradient-to-b from-black to-transparent"></div>
        @for ($i = 0; $i < 100; $i++)
            <div
                 style="top: {{ rand(0, 90) }}%; left: {{ rand(0, 100) }}%; transform: scale({{ mt_rand(5, 10) / 10 }})"
                 class="leading-2 text-white-950 {{ rand(0, 1) ? 'text-sky-200' : '' }} {{ rand(0, 10) > 7 ? 'opacity-50' : '' }} absolute select-none p-2">
                ✦</div>
        @endfor
    </div>
