@php
    extract($project);
@endphp

<x-container
             class="relative max-w-3xl mb-24 rounded lg:outline-16 bg-gradient-to-r from-orange-300 via-orange-100 to-orange-300 text-slate-950 outline-slate-950">
    <div>
        <h3 class="text-2xl font-medium leading-relaxed text-red-800 fitty font-display2">{{ $subtitle }}
        </h3>
    </div>
    <p class="mb-8 leading-relaxed text-justify">
        {{ $description ?? fake()->paragraph() }}
    </p>
    <div class="flex justify-between">
        @if (isset($metrics))
            @foreach ($metrics as $metric)
                <div class="w-1/2">
                    <div class="flex items-end gap-3">
                        <h4 class="{{ $project['color'] }} flex text-5xl">
                            @if (isset($metric['icon']))
                                <x-dynamic-component class="{{ $metric['icon']['class'] ?? '' }} relative top-[2px] -mr-2 h-11 w-11"
                                                     :component="'heroicon-' . $metric['icon']['name']" />
                            @endif
                            <span>{{ $metric['value'] }}</span>
                        </h4>
                        <div class="text-sm font-bold tracking-widest uppercase font-tight">
                            {{ $metric['description'] }}</div>
                    </div>
                </div>
            @endforeach
        @else
            @for ($i = 0; $i < 2; $i++)
                <div class="w-1/2">
                    <div class="flex items-end gap-3">
                        <h4 class="text-red-800 font-display2 text-7xl">{{ rand(20, 80) }}</h4>
                        <div class="relative text-sm tracking-widest uppercase -top-2">
                            {{ fake()->sentence(rand(1, 2)) }}</div>
                    </div>
                </div>
            @endfor
        @endif
    </div>
</x-container>
