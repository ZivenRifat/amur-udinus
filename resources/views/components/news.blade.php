@php
    $berita = [
        [
            'title' => 'A-Mur Udinus Mendapatkan Penghargaan Inovasi Edukasi Digital',
            'date' => '15 Maret 2026',
            'category' => 'Penghargaan'
        ],
        [
            'title' => 'Kolaborasi Bersama MGMP PAI Jawa Tengah Resmi Dimulai',
            'date' => '1 Maret 2026',
            'category' => 'Kolaborasi'
        ],
        [
            'title' => 'Penyelesaian Produksi Animasi Juz 30 Tahap Pertama',
            'date' => '20 Februari 2026',
            'category' => 'Produksi'
        ]
    ];

    $agenda = [
        [
            'title' => 'Workshop Animasi Murottal Bersama Sekolah Mitra',
            'date' => '25 April 2026',
            'category' => 'Workshop'
        ]
    ];
@endphp

<section id="berita" class="py-20 px-6 lg:px-20 bg-gray-50 scroll-mt-20">
    <div class="container mx-auto">
        <div class="grid lg:grid-cols-4 gap-12">

            <!-- BERITA -->
            <div class="lg:col-span-3">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 border-l-4 border-primary pl-4">
                        BERITA TERKINI
                    </h2>
                    <a href="{{ route('news.index') }}" class="text-primary font-semibold hover:underline hidden md:block">Lihat Semua Berita &rarr;</a>
                </div>

                <div class="space-y-6">
                    @foreach($berita as $item)
                        <div class="bg-white rounded-xl border border-gray-100 p-6 flex flex-col md:flex-row gap-6 items-start hover:shadow-lg transition-shadow cursor-pointer group">
                            <!-- Placeholder Image -->
                            <div class="w-full md:w-48 h-32 bg-gray-200 rounded-lg shrink-0"></div>

                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="px-3 py-1 text-xs font-bold bg-blue-50 text-primary rounded-full">
                                        {{ $item['category'] }}
                                    </span>
                                    <span class="text-sm text-gray-400 font-medium">{{ $item['date'] }}</span>
                                </div>
                                <h3 class="font-bold text-gray-800 text-xl leading-relaxed group-hover:text-primary transition-colors">
                                    {{ $item['title'] }}
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- AGENDA -->
            <div>
                <h2 class="text-2xl font-extrabold mb-8 text-gray-800 border-l-4 border-accent pl-4">
                    AGENDA
                </h2>

                <div class="space-y-6 sticky top-28">
                    @foreach($agenda as $item)
                        <div class="bg-primary rounded-2xl p-6 text-white hover:shadow-xl transition-all cursor-pointer relative overflow-hidden group">
                            <!-- Background Pattern -->
                            <div class="absolute -right-6 -top-6 w-24 h-24 bg-white opacity-10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>

                            <span class="inline-block px-3 py-1 text-xs font-bold bg-accent text-blue-900 rounded-full mb-4 relative z-10">
                                {{ $item['category'] }}
                            </span>
                            <h3 class="font-bold text-lg mb-3 leading-snug relative z-10">
                                {{ $item['title'] }}
                            </h3>
                            <div class="flex items-center gap-2 text-blue-200 text-sm relative z-10">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                {{ $item['date'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
