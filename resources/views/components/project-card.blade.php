@php
    extract($project);
@endphp
<x-container>
    <div class="-mx-8 flex items-center py-[calc(min(20vh,8rem))] text-orange-100">
        <div class="w-1/2 px-8">
            <div>
                <h3 class="fitty font-display2 mb-6 text-2xl font-medium leading-relaxed text-white">{{ $subtitle }}
                </h3>
            </div>
            {{-- <h3 class="mb-6 text-2xl font-medium leading-relaxed">{{ $title }}</h3> --}}
            <p class="mb-8 text-justify leading-relaxed">
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
                                <h4 class="font-display2 text-7xl text-white">{{ rand(20, 80) }}</h4>
                                <div class="relative -top-2 font-sans text-sm font-black uppercase tracking-widest">
                                    {{ fake()->sentence(rand(1, 2)) }}</div>
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
        <div class="w-1/2 px-8">
            <x-desktop-frame url="{{ $url ?? '' }}" src="{{ $image ?? null }}" />
            <x-phone-frame url="{{ $url ?? '' }}" src="{{ $image_phone ?? null }}" />
        </div>
    </div>
</x-container>
