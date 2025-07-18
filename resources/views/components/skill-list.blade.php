<ul {{ $attributes->merge(['class' => 'flex-wrap justify-between']) }}>
    @foreach ($lines as $skillGroup)
        @foreach ($skillGroup as $item)
            <li>{{ $item }}</li>
            @if (!$loop->last)
                <li class="select-none text-[0.7em]">✦</li>
            @elseif (!$loop->parent->last)
                <li class="w-full"></li>
            @endif
        @endforeach
    @endforeach
</ul>
