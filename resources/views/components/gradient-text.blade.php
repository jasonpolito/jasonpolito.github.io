@php
    $c = $attributes->get('class');
    $gradientColors = !Str::contains($c, 'from-') ? 'from-red-700 via-amber-500 to-yellow-400' : '';
@endphp

<span {{ $attributes->merge(['class' => 'text-transparent bg-clip-text bg-linear-[72deg] ' . $gradientColors]) }}>
    {{ $slot }}
</span>
