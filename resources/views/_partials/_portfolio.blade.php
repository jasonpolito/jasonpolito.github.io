@php
    $projects = [
        [
            'title' => 'Halifax Health',
            'description' => 'pending',
        ],
        [
            'title' => 'Eagle Warranty',
            'description' => 'pending',
        ],
    ];
@endphp
@foreach ($projects as $project)
    <project-card :$project />
@endforeach
