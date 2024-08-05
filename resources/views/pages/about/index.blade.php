@extends('layouts.app')
@section('content')
    {{-- hero --}}
    @include('pages.about.sections.hero')
    {{-- end hero --}}

    {{-- story --}}
    @include('pages.about.sections.story')
    {{-- end story --}}

    {{-- cards --}}
    @include('pages.about.sections.cards')
    {{-- end cards --}}

    {{-- clients --}}
    @include('includes.clients')
    {{-- end clients --}}

    {{-- mentors --}}
    @include('pages.about.sections.mentors')
    {{-- end mentors --}}

    {{-- map --}}
    @include('pages.about.sections.map')
    {{-- end map --}}

    {{-- join now --}}
    @include('includes.join_now')
    {{-- end join now --}}
@endsection
