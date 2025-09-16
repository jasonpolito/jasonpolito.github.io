 <div class="mx-auto max-w-[1480px] 2xl:p-20">
     <div
          class="relative overflow-hidden bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950 uppercase 2xl:rounded-3xl">
         <x-painterly class="font-display relative block min-h-dvh">
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
                             <div
                                  class="relative mx-auto -mt-2 mb-6 w-3/5 sm:-mt-4 sm:mb-8 sm:w-2/5 lg:-mt-10">
                                 <div class="fill-parent left-16! scale-[0.9] text-cyan-950">
                                     @include('_partials.horse1')</div>
                                 <div class="fill-parent -left-16! scale-[0.9] text-red-800">
                                     @include('_partials.horse1')</div>
                                 <div class="relative">@include('_partials.horse1')</div>
                             </div>
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
                 <div class="relative bg-red-950">
                     <x-container
                                  class="relative max-w-3xl 2xl:pb-4">
                         <div class="lg:max-w-auto z-12 mx-auto py-4 sm:max-w-4xl sm:py-8 lg:py-0">
                             <div class="flex items-center gap-4 text-orange-100">
                                 <div
                                      class="w-20 rotate-90">
                                     @include('_partials._arrow')
                                 </div>
                                 <div class="w-full">
                                     <h3 class="fitty font-display2 -mb-4 -mt-2">
                                         Come on now, take a gander!</h3>
                                 </div>
                                 <div
                                      class="w-20 rotate-90">
                                     @include('_partials._arrow')
                                 </div>
                             </div>
                         </div>
                     </x-container>
                 </div>
                 @include('_partials._texture_overlay')
             </div>
         </x-painterly>
     </div>
 </div>
 </div>
