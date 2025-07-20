@foreach (['top', 'bottom'] as $item)
    @for ($i = 0; $i < 2; $i++)
        <div class="text-{{ $dim }} {{ $item }}-0 {{ $i ? 'left' : 'right' }}-0 leading-2 absolute p-2">
            ✦</div>
    @endfor
@endforeach
