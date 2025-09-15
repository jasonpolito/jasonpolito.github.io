@php
    $projects = [
        [
            'title' => 'Halifax Health',
            'image' => null,
            'description' => 'pending',
        ],
        [
            'title' => 'Eagle Warranty',
            'image' => null,
            'description' => 'pending',
        ],
    ];
@endphp
@foreach ($projects as $project)
    <x-project-card :$project />
@endforeach
