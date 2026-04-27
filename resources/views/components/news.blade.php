@php
    $news = [
        [
            'title' => 'Amur Udinus Mencapai 1 Miliar Penayangan di YouTube.',
            'date' => '15 Maret 2027',
            'category' => 'Pencapaian'
        ],
        [
            'title' => 'Rilis Spesial Ramadhan: Seluruh Juz Amma Telah Selesai.',
            'date' => '1 Maret 2027',
            'category' => 'Rilis'
        ],
        [
            'title' => 'Amur Udinus Berkolaborasi dengan Universitas di Seluruh Nusantara.',
            'date' => '20 Februari 2027',
            'category' => 'Kolaborasi'
        ]
    ];
@endphp

<section class="py-20 px-20 bg-white">
    <div class="container mx-auto px-4 text-center">

        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
            BERITA & <span class="bg-gradient-to-r from-blue-500 to-indigo-600 bg-clip-text text-transparent">PEMBARUAN.</span>
        </h2>

        <!-- Grid News -->
        <div class="grid md:grid-cols-3 gap-6 mt-12 mb-10">

            @foreach($news as $item)
                <div class="bg-white rounded-2xl border p-6 text-left hover:shadow-xl transition-all hover:-translate-y-1 cursor-pointer group">

                    <span class="inline-block px-3 py-1 text-xs font-medium bg-green-100 text-green-600 rounded-full mb-4">
                        {{ $item['category'] }}
                    </span>

                    <h3 class="font-bold text-gray-800 mb-3 leading-relaxed group-hover:text-green-600 transition">
                        {{ $item['title'] }}
                    </h3>

                    <p class="text-xs text-gray-500">
                        {{ $item['date'] }}
                    </p>

                </div>
            @endforeach

        </div>

        <!-- Button -->
        <a href="#" class="inline-block px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold rounded-full hover:from-blue-600 hover:to-blue-800 transition-all duration-300 text-sm shadow-lg hover:shadow-blue-500/50 hover:scale-105">
            MORE NEWS+
        </a>

    </div>
</section>
