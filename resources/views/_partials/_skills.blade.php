@include('_partials._desktop_skills', ['class' => 'hidden lg:flex text-2xl leading-[2.5rem]'])
@include('_partials._tablet_skills', [
    'class' => 'hidden sm:flex lg:hidden text-2xl leading-[2.5rem]',
])
@include('_partials._mobile_skills', ['class' => 'flex md:hidden leading-[1.5rem]'])
