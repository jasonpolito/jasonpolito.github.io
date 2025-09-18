@php
    $projects = [
        [
            'subtitle' => 'Halifax Health',
            'description' =>
                'Built and maintained a bespoke content management system for Halifax Health, a large hospital chain in central Florida.',
            'url' => 'https://halifaxhealth.org',
            'color' => 'text-sky-500',
            'image' => 'halifaxhealth2.jpg',
            // 'description' =>
            //     'Client was previously using WordPress but, with the large dataset and inter-relations of record types, needed a solution that fit their needs exactly. I was responsible for discovering, developing, and maintaining their new CMS and ground-up redesign of the public facing site.',
            // 'metrics' => [
            //     [
            //         'value' => '84%',
            //         'icon' => [
            //             'name' => 'o-arrow-long-up',
            //             // 'class' => 'text-sky-600',
            //         ],
            //         'description' => 'PageSpeed Increase',
            //     ],
            // ],
        ],
        [
            'subtitle' => 'Eagle Warranty',
            'title' => 'Eagle Warranty',
            'color' => 'text-amber-500',
            'image' => null,
        ],
        [
            'subtitle' => 'Pending',
            'title' => 'Pending',
            'color' => 'text-lime-500',
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

<div class="bg-black">
    <div
         class="pointer-events-none absolute z-10 h-1/3 w-1/2 bg-gradient-to-br from-black via-transparent to-transparent opacity-80 mix-blend-overlay">
    </div>
    <div
         class="pointer-events-none absolute right-0 z-10 h-1/3 w-1/2 bg-gradient-to-bl from-black via-transparent to-transparent opacity-80 mix-blend-overlay">
    </div>
    @foreach ($projects as $project)
        <x-project-card :$project />
    @endforeach
</div>
