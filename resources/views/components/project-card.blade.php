<x-container>
    <div class="-mx-8 flex items-center py-[20vh]">
        <div class="w-1/2 px-8">
            <h3 class="mb-6 text-2xl font-medium">{{ $project['title'] }}</h3>
            <p class="mb-8 font-light text-slate-300">{{ fake()->paragraph() }}</p>
            <div class="flex justify-between">
                @for ($i = 0; $i < 2; $i++)
                    <div class="w-1/2">
                        <div class="flex items-end gap-3">
                            <h4 class="{{ $project['color'] }} text-5xl">{{ rand(20, 80) }}</h4>
                            <div class="font-tight text-sm font-bold uppercase tracking-widest">
                                {{ fake()->sentence(rand(1, 2)) }}</div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="w-1/2 px-8">
            <x-image-frame src="null" />
        </div>
    </div>
</x-container>
