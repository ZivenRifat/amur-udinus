@php
    $mainPartner = [
        'name' => 'Universitas Dian Nuswantoro',
        'logo' => 'udinus-logo.png',
    ];

    $partners = [
        [
            'name' => 'TVKU',
            'logo' => 'tvku-logo.png',
        ],
        [
            'name' => 'AGPAII',
            'logo' => 'agpaii-logo.png',
        ],
        [
            'name' => 'Jawa Tengah',
            'logo' => 'jateng-logo.png',
        ],
        [
            'name' => 'Kementerian Agama',
            'logo' => 'kemenag-logo.jpeg',
        ],
    ];
@endphp

<section class="py-20 px-20 bg-gray-100">
    <div class="container mx-auto px-4 text-center">

        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
            MITRA
        </h2>

        <p class="text-gray-500 max-w-2xl mx-auto mb-12 text-sm md:text-base">
            Amur Udinus telah berkolaborasi dengan berbagai institusi terkemuka, organisasi keagamaan, dan korporasi
            untuk mempromosikan nilai-nilai kebaikan dan keislaman di seluruh negeri.
        </p>

        <!-- LOGO UTAMA -->
        <div class="flex justify-center mb-12">

            <div class="flex flex-col items-center gap-4 group">

                <div
    class="w-24 h-24 rounded-full bg-white shadow-xl flex items-center justify-center
           group-hover:scale-110 transition overflow-hidden">

    <img src="{{ asset('assets/' . $mainPartner['logo']) }}"
        class="w-14 h-14 object-contain">

</div>

                <span class="text-sm text-gray-700 font-semibold">
                    {{ $mainPartner['name'] }}
                </span>

            </div>

        </div>

        <!-- 4 LOGO BAWAH -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center">

            @foreach ($partners as $partner)
                <div class="flex flex-col items-center gap-3 p-4 rounded-xl hover:bg-white transition group">

                    <div
                        class="w-24 h-24 rounded-full bg-white shadow flex items-center justify-center
                               group-hover:scale-110 transition overflow-hidden">

                        <img src="{{ asset('assets/' . $partner['logo']) }}"
                            class="w-14 h-14 object-contain">

                    </div>

                    <span class="text-xs text-gray-500 text-center font-medium leading-tight">
                        {{ $partner['name'] }}
                    </span>

                </div>
            @endforeach

        </div>

        <!-- BUTTON -->
        <div class="mt-10">
            <a href="#"
                class="inline-block px-8 py-3 bg-gradient-to-r from-blue-500 to-indigo-600
                       text-white font-semibold rounded-full hover:from-blue-600
                       hover:to-indigo-700 transition-all duration-300 text-sm
                       shadow-lg hover:shadow-blue-500/50 hover:scale-105">

                DAFTAR MITRA

            </a>
        </div>

    </div>
</section>
