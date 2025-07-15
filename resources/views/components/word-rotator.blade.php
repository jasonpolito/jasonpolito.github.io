<span class="relative">
    <span class="invisible">{{ $longest }}</span>
    <span class="absolute inset-x-0 text-center [filter:url(#threshold)]" data-word-rotator="{{ json_encode($words) }}">
        <x-gradient-text class="text1 absolute inset-x-0 block">{{ $words[0] }}</x-gradient-text>
        <x-gradient-text class="text2 absolute inset-x-0 top-0 block">{{ $words[1] }}</x-gradient-text>
        <svg class="hidden" id="filters" preserveAspectRatio="xMidYMid slice">
            <defs>
                <filter id="threshold">
                    <feColorMatrix in="SourceGraphic" type="matrix"
                        values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 255 -140">
                    </feColorMatrix>
                </filter>
            </defs>
        </svg>
    </span>
</span>
