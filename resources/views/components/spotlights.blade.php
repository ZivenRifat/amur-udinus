@php
    $spotlights = [
        [
            'image' => 'card-almulk.jpg',
            'title' => 'SURAH AL-MULK: PELINDUNG DARI SIKSA KUBUR.',
        ],
        [
            'image' => 'card-juzamma.jpg',
            'title' => 'JUZ AMMA: KOLEKSI AYAT-AYAT PENDEK.',
        ],
        [
            'image' => 'card-arrahman.jpg',
            'title' => 'SURAH AR-RAHMAN: NIKMAT TUHAN MANA YANG KAMU DUSTAKAN.',
        ],
    ];
@endphp

<section class="py-20 px-20 bg-gray-100">
    <div class="container mx-auto px-4 text-center">

        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
            AMUR UDINUS
            <span class="bg-gradient-to-r from-blue-500 to-indigo-600 bg-clip-text text-transparent">
                TERPOPULER.
            </span>
        </h2>

        <p class="text-gray-500 max-w-2xl mx-auto mb-12 text-sm md:text-base">
            Amur Udinus adalah pembuat beberapa properti intelektual yang menginspirasi iman dan menyentuh hati, telah
            dinikmati oleh jutaan orang di seluruh dunia.
        </p>

        <!-- Grid Video -->
        <div class="grid md:grid-cols-3 gap-6 mb-10">

            @foreach ($spotlights as $item)
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 cursor-pointer">

                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/' . $item['image']) }}"
                            class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                            <span class="text-white text-sm font-medium">
                                ▶ Tonton Sekarang
                            </span>
                        </div>
                    </div>

                    <div class="p-5 text-left">
                        <h3 class="font-bold text-gray-800 text-sm leading-relaxed">
                            {{ $item['title'] }}
                        </h3>
                    </div>

                </div>
            @endforeach

        </div>

        <!-- Button -->
        <a href="#"
            class="inline-block px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold rounded-full hover:from-blue-600 hover:to-blue-800 transition-all duration-300 text-sm shadow-lg hover:shadow-blue-500/50 hover:scale-105">
            EXPLORE MORE!
        </a>

    </div>
</section>
