@php
    $berita = [
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

    $agenda = [
        [
            'title' => 'Kajian Akbar Ramadhan Bersama Mahasiswa Udinus.',
            'date' => '25 Maret 2027',
            'category' => 'Event'
        ]
    ];
@endphp

<section class="py-20 px-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="grid lg:grid-cols-4 gap-8">

            <!-- BERITA -->
            <div class="lg:col-span-3">

                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
                BERITA
                </h2>

                <!-- CARD BERITA KE BAWAH -->
                <div class="space-y-6">

                    @foreach($berita as $item)
                        <div class="bg-white rounded-2xl border p-6 text-left
                                    hover:shadow-xl transition-all
                                    hover:-translate-y-1 cursor-pointer group">

                            <span class="inline-block px-3 py-1 text-xs font-medium
                                        bg-green-100 text-green-600 rounded-full mb-4">
                                {{ $item['category'] }}
                            </span>

                            <h3 class="font-bold text-gray-800 mb-4 leading-relaxed
                                    group-hover:text-green-600 transition text-xl">
                                {{ $item['title'] }}
                            </h3>

                            <p class="text-sm text-gray-500">
                                {{ $item['date'] }}
                            </p>

                        </div>
                    @endforeach

                </div>

            </div>

            <!-- AGENDA -->
            <div>

                <h2 class="text-3xl md:text-4xl font-extrabold mb-8
                     bg-gradient-to-r from-blue-500 to-indigo-600
                     bg-clip-text text-transparent">
                    AGENDA
                </h2>

                @foreach($agenda as $item)
                    <div class="bg-white rounded-2xl border p-6 text-left
                                hover:shadow-xl transition-all
                                hover:-translate-y-1 cursor-pointer group sticky top-10">

                        <span class="inline-block px-3 py-1 text-xs font-medium
                                    bg-purple-100 text-purple-600 rounded-full mb-4">
                            {{ $item['category'] }}
                        </span>

                        <h3 class="font-bold text-gray-800 mb-4 leading-relaxed
                                group-hover:text-purple-600 transition">
                            {{ $item['title'] }}
                        </h3>

                        <p class="text-sm text-gray-500">
                            {{ $item['date'] }}
                        </p>

                    </div>
                @endforeach

            </div>

        </div>

    </div>

</section>