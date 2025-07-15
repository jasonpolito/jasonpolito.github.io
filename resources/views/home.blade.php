@extends('_layouts.basic')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description',
    'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <div class="align-center flex w-full flex-col justify-center py-24 text-center md:h-screen md:min-h-[400px] md:py-0">
        <div class="space-y-4 md:space-y-8">
            <h3 class="text-sm uppercase tracking-widest text-slate-400"><x-gradient-text
                    class="from-slate-400 via-slate-300 to-slate-400">Fully Full-stack</x-gradient-text></h3>
            <h1 class="font-display text-center text-5xl md:text-8xl lg:text-9xl"><x-word-rotator
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
@endsection

@push('scripts')
    {{-- <script src="{{ asset('assets/js/ldbx.js') }}"></script>
    <script>
        const UserModel = new LDBX('users')
        let data = {
            name: "John",
            age: 21
        }

        UserModel.save(data)
    </script> --}}
@endpush
