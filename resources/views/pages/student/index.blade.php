@extends('layouts.app')
@section('content')
    {{-- hero --}}
    @include('pages.student.sections.hero')
    {{-- end hero --}}

    {{-- student projects --}}
    @include('pages.student.sections.projects')
    {{-- end student projects --}}

    {{-- testimonial --}}
    @include('pages.student.sections.testimonial')
    {{-- end testimonial --}}

    {{-- join now --}}
    @include('includes.join_now')
    {{-- end join now --}}
@endsection
