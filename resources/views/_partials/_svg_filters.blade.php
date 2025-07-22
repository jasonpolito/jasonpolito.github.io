<svg class="fill-parent" viewBox="0 0 500 500" aria-hidden="true">
    <filter id="posterizer" filterRes="512">
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
