@php
    $fadeHeight = 'h-[calc(max(6rem,10vh))]';
@endphp
<div class="mx-auto max-w-[1480px] 2xl:p-20">
    <div
         class="relative overflow-hidden bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950 uppercase 2xl:rounded-3xl">
        <x-painterly class="font-display relative block">
            <div class="bg-red-950 2xl:rounded-2xl 2xl:p-8">
                <div class="relative">
                    <div class="fill-parent overflow-hidden 2xl:rounded-xl">
                        @include('_partials._stars')
                        @include('_partials._sunrise')
                    </div>
                    <div class="xl:py-30 lg:py-16">
                        <x-container
                                     class="lg:outline-16 relative max-w-3xl rounded bg-gradient-to-r from-orange-300 via-orange-100 to-orange-300 text-slate-950 outline-slate-950">
                            @include('_partials.intro')
                            <x-card class="text-transparent">
                                <div class="-mt-6 text-orange-950 sm:-mt-8 lg:-mt-12">
                                    <h4 class="fitty nowrap-forced tracking-widest"><span
                                              class="relative -top-1 text-[0.6em]">✦</span> Over a
                                        Decade of Experience <span
                                              class="relative -top-1 text-[0.6em]">✦</span></h4>
                                </div>
                            </x-card>
                            @include('_partials._horse_chromatic')
                            <x-card class="text-transparent">
                                <div class="-mt-6 text-orange-950 sm:-mt-8 lg:-mt-12">
                                    <h4 class="fitty nowrap-forced tracking-widest"><span
                                              class="relative -top-1 text-[0.6em]">✦</span>
                                        Done Pertin' Near Everything <span
                                              class="relative -top-1 text-[0.6em]">✦</span></h4>
                                </div>
                            </x-card>
                            <div class="lg:-mt-15 -mt-6 sm:-mt-9">
                                <x-card class="bg-current text-slate-950">
                                    <div class="text-white">@include('_partials._skills')</div>
                                </x-card>
                            </div>
                            @include('_partials._about')
                            @include('_partials._corner_stars')
                        </x-container>
                    </div>
                </div>
                @include('_partials._portfolio_intro')
                {{-- @include('_partials._portfolio') --}}
                @include('_partials._texture_overlay')
            </div>
        </x-painterly>
    </div>
</div>
</div>
