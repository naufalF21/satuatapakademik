@extends('layouts.app')
@section('content')
    {{-- hero --}}
    <div class="container flex flex-row py-7 md:py-14 gap-20">
        <div class="flex flex-col w-full gap-5">
            <span class="text-base-red">#SatuAtapAkademik</span>
            <h1 class="text-4xl md:text-5xl">Solusi Terbaik untuk
                Freelance
                Pemula</h1>
            <p class="text-lg">
                Mulai Perjalananmu Sebagai Leader Bersama SATU ATAP AKADEMIK
            </p>
            <div>
                <x-button text="Join Now" />
            </div>
        </div>
        <div class="hidden md:flex w-full">
            <img src="{{ url('/images/hero-image.jpg') }}" class="rounded-xl" alt="Hero Image" />
        </div>
    </div>
    {{-- end hero --}}

    {{-- list programs --}}
    <section class="container flex flex-col items-center gap-10 py-10">
        <h2 class="md:text-5xl text-4xl md:text-center leading-tight font-medium md:max-w-3xl">Temukan Kategori Program
            FavoritMu Sekarang</h2>
        <ul class="flex flex-col w-full gap-10">
            <li
                class="flex md:flex-row flex-col w-full bg-white px-10 md:px-10 py-8 rounded-xl md:justify-between gap-5 items-center text-justify">
                <div class="flex max-w-36 h-full">
                    <img src="{{ url('/images/satu-film.png') }}" class="rounded-xl" alt="Hero Image" />
                </div>
                <p class="md:max-w-3xl text-base">Kategori program acara PELATIHAN/WORKSHOP SINGKAT secara OFFLINE/ONLINE
                    yang bisa
                    membantu kamu untuk
                    mendalami skill yang dibutuhkan oleh profesi Content Creator. Program-program yang tersedia antara
                    lain: Creator Camp, Video Production Mastery, dan lain sebagainya.</p>
                <a href="/programs/movie">
                    <x-button text="Learn More" />
                </a>
            </li>

        </ul>
    </section>
    {{-- end list programs --}}
@endsection
