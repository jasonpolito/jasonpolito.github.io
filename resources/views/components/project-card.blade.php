@php
    extract($project);
@endphp
<x-container>
    <div class="-mx-8 flex items-center py-[calc(min(20vh,8rem))]">
        <div class="w-1/2 px-8">
            <h4 class="font-tight {{ $color }} mb-6 text-sm font-bold uppercase tracking-widest">
                {{ $subtitle }}
            </h4>
            <h3 class="mb-6 text-2xl font-medium leading-relaxed">{{ $title }}</h3>
            <p class="mb-8 font-light leading-relaxed text-slate-300">
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
                                <div class="font-tight text-sm font-bold uppercase tracking-widest">
                                    {{ $metric['description'] }}</div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @for ($i = 0; $i < 2; $i++)
                        <div class="w-1/2">
                            <div class="flex items-end gap-3">
                                <h4 class="{{ $project['color'] }} text-5xl">{{ rand(20, 80) }}</h4>
                                <div class="font-tight text-sm font-bold uppercase tracking-widest">
                                    {{ fake()->sentence(rand(1, 2)) }}</div>
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
        <div class="w-1/2 px-8">
            <x-image-frame url="{{ $url ?? null }}" src="{{ $image ?? null }}" />
        </div>
    </div>
</x-container>
