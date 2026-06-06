@extends('layouts.app')
@section('title', 'Berita & Artikel')

@php
    // Data dummy Berita Utama (Featured News)
    $featuredNews = [
        'title' => 'A-Mur Udinus Mendapatkan Penghargaan Inovasi Edukasi Digital Nasional',
        'slug' => 'penghargaan-inovasi-edukasi-digital-nasional',
        'date' => '5 Juni 2026',
        'category' => 'Penghargaan',
        'author' => 'Tim Humas A-Mur',
        'excerpt' => 'Universitas Dian Nuswantoro melalui inisiatif Animasi Murottal (A-Mur) berhasil menyabet penghargaan bergengsi dalam kategori Inovasi Edukasi Digital. Penghargaan ini diberikan atas dedikasi tim dalam menggabungkan teknologi animasi 3D dengan syiar Al-Quran...',
        'image' => 'news-featured.jpg'
    ];

    // Data dummy Daftar Berita (News Grid)
    $newsList = [
        [
            'title' => 'Kolaborasi Bersama MGMP PAI Jawa Tengah Resmi Dimulai',
            'slug' => 'kolaborasi-mgmp-pai-jateng',
            'date' => '28 Mei 2026',
            'category' => 'Kolaborasi',
            'image' => 'news-1.jpg'
        ],
        [
            'title' => 'Penyelesaian Produksi Animasi Juz 30 Tahap Pertama',
            'slug' => 'produksi-juz-30-tahap-1',
            'date' => '15 Mei 2026',
            'category' => 'Produksi',
            'image' => 'news-2.jpg'
        ],
        [
            'title' => 'Workshop Pembuatan Animasi untuk Santri Pondok Pesantren',
            'slug' => 'workshop-animasi-santri',
            'date' => '2 Mei 2026',
            'category' => 'Edukasi',
            'image' => 'news-3.jpg'
        ],
        [
            'title' => 'Rilis Fitur Teks Terjemahan Multibahasa pada Video A-Mur',
            'slug' => 'rilis-fitur-terjemahan',
            'date' => '20 April 2026',
            'category' => 'Teknologi',
            'image' => 'news-4.jpg'
        ]
    ];

    // Data dummy Kategori Sidebar
    $categories = ['Produksi' => 12, 'Edukasi' => 8, 'Kolaborasi' => 5, 'Penghargaan' => 3, 'Teknologi' => 7];
@endphp

@section('content')

<section class="relative bg-gray-900 py-16 overflow-hidden">
    <div class="absolute inset-0 bg-blue-900/90 z-10"></div>
    <div class="container mx-auto px-6 lg:px-20 relative z-20 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
            Kabar <span class="text-accent">A-Mur Udinus</span>
        </h1>
        <p class="text-blue-100 max-w-2xl mx-auto text-lg">
            Ikuti perkembangan terbaru, pencapaian, dan liputan kegiatan seputar produksi animasi murottal kami.
        </p>
    </div>
</section>

<section class="py-12 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6 lg:px-20">

        <div class="flex flex-col lg:flex-row gap-10">

            <div class="lg:w-2/3">

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-10 group cursor-pointer hover:shadow-lg transition-all">
                    <div class="relative h-72 md:h-96 overflow-hidden bg-gray-200">
                        <div class="absolute inset-0 flex items-center justify-center text-gray-400 bg-gray-200 group-hover:scale-105 transition-transform duration-700">
                            [Gambar Berita Utama]
                        </div>
                        <div class="absolute top-4 left-4 bg-accent text-blue-900 font-bold px-4 py-1 rounded-full text-xs uppercase tracking-wider z-10">
                            Berita Utama
                        </div>
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                            <span class="font-semibold text-primary">{{ $featuredNews['category'] }}</span>
                            <span>•</span>
                            <span>{{ $featuredNews['date'] }}</span>
                            <span>•</span>
                            <span>Oleh {{ $featuredNews['author'] }}</span>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 leading-tight group-hover:text-primary transition-colors">
                            <a href="{{ route('news.show', $featuredNews['slug']) }}">{{ $featuredNews['title'] }}</a>
                        </h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            {{ $featuredNews['excerpt'] }}
                        </p>
                        <a href="{{ route('news.show', $featuredNews['slug']) }}" class="inline-flex items-center font-semibold text-primary hover:text-blue-800 transition-colors">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-6 border-b border-gray-200 pb-4">
                    <h3 class="text-2xl font-bold text-gray-800 border-l-4 border-primary pl-3">Berita Terbaru</h3>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    @foreach ($newsList as $news)
                        <div class="bg-white rounded-xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                            <div class="h-48 bg-gray-200 relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center text-gray-400 group-hover:scale-110 transition-transform duration-500">
                                    [Gambar]
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xs font-bold text-secondary uppercase tracking-wider">{{ $news['category'] }}</span>
                                    <span class="text-xs text-gray-400">{{ $news['date'] }}</span>
                                </div>
                                <h4 class="font-bold text-lg text-gray-800 mb-3 leading-snug group-hover:text-primary transition-colors line-clamp-2">
                                    <a href="{{ route('news.show', $news['slug']) }}">{{ $news['title'] }}</a>
                                </h4>
                                <a href="{{ route('news.show', $news['slug']) }}" class="text-sm font-medium text-primary hover:underline">Baca selengkapnya &rarr;</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center gap-2">
                        <button class="px-4 py-2 border border-gray-200 bg-white rounded-lg text-gray-400 cursor-not-allowed">Sebelumnya</button>
                        <button class="w-10 h-10 bg-primary text-white rounded-lg font-semibold shadow-md">1</button>
                        <button class="w-10 h-10 border border-gray-200 bg-white text-gray-600 rounded-lg hover:bg-gray-50 transition-colors">2</button>
                        <button class="w-10 h-10 border border-gray-200 bg-white text-gray-600 rounded-lg hover:bg-gray-50 transition-colors">3</button>
                        <button class="px-4 py-2 border border-gray-200 bg-white rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">Selanjutnya</button>
                    </nav>
                </div>

            </div>

            <div class="lg:w-1/3 space-y-8">

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h4 class="font-bold text-lg text-gray-800 mb-4">Cari Berita</h4>
                    <form class="relative">
                        <input type="text" placeholder="Masukkan kata kunci..." class="w-full pl-4 pr-10 py-3 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-blue-100 outline-none transition-all text-sm">
                        <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                    </form>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h4 class="font-bold text-lg text-gray-800 mb-4">Kategori</h4>
                    <ul class="space-y-2">
                        @foreach ($categories as $cat => $count)
                            <li>
                                <a href="#" class="flex items-center justify-between p-3 rounded-lg hover:bg-blue-50 transition-colors group text-gray-600 hover:text-primary">
                                    <span class="font-medium">{{ $cat }}</span>
                                    <span class="bg-gray-100 group-hover:bg-blue-200 text-gray-500 group-hover:text-blue-800 text-xs font-bold px-2 py-1 rounded-full transition-colors">{{ $count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-primary rounded-2xl p-6 text-white text-center relative overflow-hidden shadow-lg">
                    <div class="absolute -right-6 -top-6 w-24 h-24 bg-white opacity-10 rounded-full"></div>
                    <div class="absolute -left-6 -bottom-6 w-20 h-20 bg-accent opacity-20 rounded-full"></div>

                    <svg class="w-12 h-12 mx-auto mb-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    <h4 class="font-bold text-xl mb-2">Tertarik Berkolaborasi?</h4>
                    <p class="text-blue-100 text-sm mb-6">Jadilah bagian dari mitra pembuat animasi murottal bersama tim A-Mur Udinus.</p>
                    <a href="{{ url('/#kontak') }}" class="inline-block px-6 py-2 bg-accent text-blue-900 font-bold rounded-full hover:bg-yellow-400 transition-colors shadow-md text-sm">
                        Hubungi Tim Kami
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
