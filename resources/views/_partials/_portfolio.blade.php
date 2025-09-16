@php
    $projects = [
        [
            'title' => 'Halifax Health',
            'color' => 'text-sky-500',
            'image' => null,
            'description' => 'pending',
        ],
        [
            'title' => 'Eagle Warranty',
            'color' => 'text-amber-500',
            'image' => null,
            'description' => 'pending',
        ],
        [
            'title' => 'Pending',
            'color' => 'text-lime-500',
            'image' => null,
            'description' => 'pending',
        ],
        [
            'title' => 'Pending Design assets',
            'color' => 'text-rose-500',
            'image' => null,
            'description' => 'pending',
        ],
    ];
@endphp

@foreach ($projects as $project)
    <x-project-card :$project />
@endforeach
