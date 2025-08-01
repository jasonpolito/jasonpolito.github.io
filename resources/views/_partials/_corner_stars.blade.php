@foreach (['top', 'bottom'] as $item)
    @for ($i = 0; $i < 2; $i++)
        <div
             class="{{ $item }}-0 {{ $i ? 'left' : 'right' }}-0 leading-2 absolute select-none p-2 text-orange-950">
            ✦</div>
    @endfor
@endforeach
