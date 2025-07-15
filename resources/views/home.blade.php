@extends('_layouts.basic')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <div class="align-center sticky top-0 flex h-[33vh] min-h-[400px] flex-col justify-center text-center md:h-screen">
        <div class="space-y-4 md:space-y-8">
            <h3 class="text-sm uppercase tracking-widest text-slate-400"><x-gradient-text
                    class="from-slate-400 via-slate-300 to-slate-400">Definitively Fully Full-stack</x-gradient-text></h3>
            <h1 class="text-center text-6xl font-bold md:text-8xl lg:text-9xl"><x-word-rotator
                    :words="[
                        'UX+UI',
                        'Laravel',
                        'React',
                        'Tailwind',
                        'Animations',
                        'Vue',
                        'Svelte',
                        'PHP',
                        'Print Media',
                        'WordPress',
                        'Databases',
                    ]"></x-word-rotator>
            </h1>
        </div>
    </div>
    <div class="bg-{{ $baseColor }}-900 relative z-10 h-screen"></div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/ldbx.js') }}"></script>
    <script>
        const UserModel = new LDBX('users')
        let data = {
            name: "John",
            age: 21
        }

        UserModel.save(data)
    </script>
@endpush
