<div {{ $attributes->merge(['class' => 'relative']) }}>
    <svg width="400" height="400" viewBox="0 0 400 400" style="display: none">
        <defs>
            <filter data-displacement-map id="{{ $id }}">
                <feTurbulence type="turbulence" baseFrequency="0.017" numOctaves="2" seed="1" result="noise" />
                <feDisplacementMap in="SourceGraphic" in2="noise" scale="2.25" xChannelSelector="R"
                    yChannelSelector="G" />
            </filter>
        </defs>
    </svg>
    <div style="filter: url(#{{ $id }})" class="relative min-h-full">{{ $slot }}</div>
</div>
