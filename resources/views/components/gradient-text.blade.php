@php
    $c = $attributes->get('class');
    $gradientColors = !Str::contains($c, 'from-') ? 'from-amber-300 to-red-500' : '';
@endphp

<span {{ $attributes->merge(['class' => 'text-transparent bg-clip-text bg-linear-[-72deg] ' . $gradientColors]) }}>
    {{ $slot }}
</span>
