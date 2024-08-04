@extends('layouts.app')
@section('content')
    {{-- title section --}}
    @include('pages.programs.sections.title_section')
    {{-- end title section --}}

    {{-- kelas --}}
    @include('pages.programs.sections.trailer')
    {{-- end kelas --}}

    {{-- description & similar course --}}
    <section class="container grid grid-cols-3 gap-7 pb-14">
        <div class="col-span-2">
            <div class="mb-4 border-b border-b-gray-200">
                <ul class="flex flex-wrap -mb-px text-base font-medium text-center border-b-2 border-b-gray-200"
                    id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-base-red hover:text-base-red border-base-red"
                    data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 border-gray-100 hover:border-gray-300"
                    role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="overview-styled-tab"
                            data-tabs-target="#styled-overview" type="button" role="tab" aria-controls="overview"
                            aria-selected="false">Overview</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="curriculum-styled-tab" data-tabs-target="#styled-curriculum" type="button" role="tab"
                            aria-controls="curriculum" aria-selected="false">Curriculum</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="benefits-styled-tab" data-tabs-target="#styled-benefits" type="button" role="tab"
                            aria-controls="benefits" aria-selected="false">Benefits</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="review-styled-tab" data-tabs-target="#styled-review" type="button" role="tab"
                            aria-controls="review" aria-selected="false">Review</button>
                    </li>
                </ul>
            </div>
            <div id="default-styled-tab-content">
                {{-- overview --}}
                <div class="hidden p-8 rounded-xl bg-white" id="styled-overview" role="tabpanel"
                    aria-labelledby="overview-tab">
                    <div class="flex flex-col gap-7 text-base-black">
                        <h5 class="text-xl font-semibold">Kelas Naskah Film</h5>
                        <p class="text-base">
                            Kelas Naskah Film adalah program komprehensif yang dirancang untuk membimbing para peserta
                            melalui
                            proses penulisan naskah film dari awal hingga akhir. Melalui modul-modul yang terstruktur dengan
                            baik, peserta akan mempelajari teknik-teknik dasar dan lanjutan dalam penulisan naskah, memahami
                            struktur cerita yang efektif, serta mengembangkan keterampilan dalam menciptakan karakter dan
                            dialog
                            yang kuat.
                        </p>
                        <h5 class="text-xl font-semibold">Key Points</h5>
                        <ul class="grid grid-cols-2 gap-7">
                            <x-key-points text="Dasar Penulisan Naskah" />
                            <x-key-points text="Pengembangan Ide dan Konsep" />
                            <x-key-points text="Struktur Cerita Tiga Babak" />
                            <x-key-points text="Pengembangan Karakter" />
                            <x-key-points text="Penulisan Dialog dan Deskripsi" />
                            <x-key-points text="Penyusunan Draft Pertama" />
                        </ul>
                        <h5 class="text-xl font-semibold">Target Peserta</h5>
                        <p>
                            Kelas ini cocok untuk siapa saja yang memiliki minat dalam penulisan naskah film, baik pemula
                            yang baru memulai perjalanan mereka maupun penulis berpengalaman yang ingin memperdalam
                            pengetahuan dan keterampilan mereka.
                            <br><br>
                            Dengan mengikuti kelas Naskah Film, peserta akan memperoleh pengetahuan dan keterampilan yang
                            diperlukan untuk menulis naskah film yang profesional dan siap diproduksi, membuka jalan menuju
                            karier yang sukses di industri film.
                        </p>
                        <div class="mx-auto">
                            <x-button text="Daftar Sekarang" />
                        </div>
                    </div>
                </div>
                {{-- end overview --}}

                {{-- curriculum --}}
                <div class="hidden p-4 rounded-xl bg-gray-50" id="styled-curriculum" role="tabpanel"
                    aria-labelledby="curriculum-tab">
                    <p class="text-sm text-gray-500">This is some placeholder content the <strong
                            class="font-medium text-gray-800">Dashboard tab's associated content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                        classes to control the content visibility and styling.</p>
                </div>
                {{-- end curriculum --}}

                {{-- benefits --}}
                <div class="hidden p-8 rounded-xl bg-white" id="styled-benefits" role="tabpanel"
                    aria-labelledby="benefits-tab">
                    <div class="flex flex-col gap-7 text-base-black">
                        <h5 class="text-xl font-semibold">7 Benefits Yang Akan Kamu Dapatkan...</h5>
                        <ol class="list-decimal ps-8">
                            <li>Belajar LIVE dari TOP Creators</li>
                            <li>Dapat support alat multimedia</li>
                            <li>80% Praktek</li>
                            <li>Mudah ketemu teman kolaborasi</li>
                            <li>Lingkungan Positif</li>
                            <li>Dapat RAHASIA jadi terkenal</li>
                            <li>STRATEGI JITU mendapatkan banyak uang dengan menjadi Content Creator</li>
                        </ol>
                    </div>
                </div>
                {{-- end benefits --}}

                {{-- review --}}
                <div class="hidden p-4 rounded-xl bg-gray-50" id="styled-review" role="tabpanel"
                    aria-labelledby="review-tab">
                    <p class="text-sm text-gray-500">This is some placeholder content the <strong
                            class="font-medium text-gray-800">Contacts tab's associated content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                        classes to control the content visibility and styling.</p>
                </div>
                {{-- end review --}}
            </div>
        </div>

        {{-- similar course --}}
        @include('pages.programs.sections.similar_course')
        {{-- end similar course --}}
    </section>
    {{-- end description & similar course --}}
@endsection
