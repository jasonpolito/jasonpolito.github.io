@extends('_layouts.scaffold')
@section('page')
    @yield('content')
    @stack('scripts')
@endsection
