@extends('layouts.app')
@section('content')
    {{-- hero section --}}
    @include('pages.home.sections.hero')
    {{-- end hero section --}}

    {{-- lets learn section --}}
    @include('pages.home.sections.learn')
    {{-- end lets learn section --}}

    {{-- events --}}
    @include('pages.home.sections.events')
    {{-- end events --}}

    {{-- kelas populer --}}
    @include('pages.home.sections.kelas')
    {{-- end kelas populer --}}

    {{-- join use --}}
    @include('pages.home.sections.join_us')
    {{-- end join us --}}

    {{-- akses materi pembelajaran --}}
    @include('pages.home.sections.materi')
    {{-- end akses materi pembelajaran --}}

    {{-- clients --}}
    @include('includes.clients')
    {{-- end clients --}}

    {{-- join now --}}
    @include('includes.join_now')
    {{-- end join now --}}
@endsection
