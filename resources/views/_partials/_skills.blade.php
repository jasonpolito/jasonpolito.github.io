<div class="text-white">
    @include('_partials._desktop_skills', ['class' => 'hidden lg:flex text-3xl leading-[3rem]'])
    @include('_partials._tablet_skills', [
        'class' => 'hidden sm:flex lg:hidden text-2xl leading-[2.5rem]',
    ])
    @include('_partials._mobile_skills', ['class' => 'flex md:hidden leading-[2rem]'])
</div>
