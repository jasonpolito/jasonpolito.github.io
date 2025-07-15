@php
    $underlineClasses = implode(' ', [
        'absolute',
        'bottom-0',
        'block',
        'h-[2px]',
        'w-full',
        'origin-top-right',
        'scale-x-0',
        'bg-gradient-to-l',
        'from-green-400',
        'to-blue-500',
        'transition',
        'rounded-xs',
        'group-hover:origin-top-left',
        'group-focus:origin-top-left',
        'group-hover:scale-x-100',
        'group-focus:scale-x-100',
    ]);
@endphp
<a href="{{ $attributes->get('href') }}" {{ $attributes->except('href') }}
    {{ $attributes->has('blank') ? 'target="_blank"' : '' }}
    {{ $attributes->merge(['class' => 'outline-none focus:brightness-[2] focus:animate-[pulse_1s_ease-in-out_infinite] inline-block no-underline group text-emerald-500 hover:text-emerald-600 transition']) }}>
    <x-gradient-text>{{ $slot }}</x-gradient-text>
    <span class="{{ $underlineClasses }}"></span>
</a>
