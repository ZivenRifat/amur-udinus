@php
    $spotlights = [
        [
            'image' => 'card-almulk.jpg',
            'title' => 'Dokumentasi Produksi: Surah Al-Mulk',
            'category' => 'Animasi 3D',
        ],
        [
            'image' => 'card-juzamma.jpg',
            'title' => 'Koleksi Lengkap: Juz Amma',
            'category' => 'Edukasi Anak',
        ],
        [
            'image' => 'card-arrahman.jpg',
            'title' => 'Project Kolaborasi: Surah Ar-Rahman',
            'category' => 'Animasi 2D',
        ],
    ];
@endphp

<section id="koleksi" class="py-20 px-6 lg:px-20 bg-white">
    <div class="container mx-auto text-center">

        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
            SOROTAN <span class="text-primary">KARYA KAMI</span>
        </h2>

        <p class="text-gray-500 max-w-2xl mx-auto mb-16 text-sm md:text-base">
            Melihat lebih dekat hasil produksi animasi murottal yang dikerjakan bersama siswa-siswi dan mahasiswa berbakat sebagai bentuk syiar Islam digital.
        </p>

        <!-- Grid Karya -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            @foreach ($spotlights as $item)
                <div class="group bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 text-left">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/' . $item['image']) }}" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                            <span class="text-white text-sm font-semibold flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Lihat Detail Produksi
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold text-secondary uppercase tracking-wider mb-2 block">{{ $item['category'] }}</span>
                        <h3 class="font-bold text-gray-800 text-lg leading-snug group-hover:text-primary transition-colors">
                            {{ $item['title'] }}
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="#" class="inline-block px-8 py-3 bg-primary text-white font-semibold rounded-full hover:bg-blue-700 transition-all shadow-md hover:shadow-xl hover:-translate-y-1">
            Jelajahi Seluruh Koleksi
        </a>

    </div>
</section>
