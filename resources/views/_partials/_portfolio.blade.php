@php
    $projects = [
        [
            'subtitle' => 'Hospital Chain Rebuild',
            'description' =>
                'Built and maintained a bespoke content management system for Halifax Health, a large hospital chain in central Florida.',
            'url' => 'https://halifaxhealth.org',
            'color' => 'text-sky-500',
            'image' => 'halifaxhealth2.jpg',
            'image_phone' => 'halifaxhealth_iphone.jpg',
        ],
        [
            'subtitle' => 'Warranty Management System',
            'title' => 'Eagle Warranty',
            'color' => 'text-amber-500',
            'image' => null,
        ],
        [
            'subtitle' => 'Pending Design assets',
            'title' => 'Pending Design assets',
            'color' => 'text-rose-500',
            'image' => null,
        ],
    ];
@endphp

<div class="relative py-32 bg-red-950">
    <div
         class="absolute top-0 z-10 w-1/2 pointer-events-none h-1/3 bg-gradient-to-br from-black via-transparent to-transparent opacity-80 mix-blend-overlay">
    </div>
    <div
         class="absolute top-0 right-0 z-10 w-1/2 pointer-events-none h-1/3 bg-gradient-to-bl from-black via-transparent to-transparent opacity-80 mix-blend-overlay">
    </div>
    @foreach ($projects as $project)
        <x-project-card :$project />
    @endforeach
</div>
