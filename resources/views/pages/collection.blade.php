@extends('layouts.app')
@section('title', 'Koleksi Animasi Murottal')

@php
    // Data dummy untuk daftar video animasi
    $collections = [
        [
            'surah' => 'Surah Al-Mulk',
            'juz' => 'Juz 29',
            'student' => 'Muhammad Tariq',
            'school' => 'SMA Semesta Boarding School',
            'duration' => '06:45',
            'thumbnail' => 'thumb-almulk.jpg'
        ],
        [
            'surah' => 'Surah Ar-Rahman',
            'juz' => 'Juz 27',
            'student' => 'Ahmad Muzakki',
            'school' => 'SD Islam Al-Azhar 14',
            'duration' => '08:20',
            'thumbnail' => 'thumb-arrahman.jpg'
        ],
        [
            'surah' => 'Surah Al-Waqi\'ah',
            'juz' => 'Juz 27',
            'student' => 'Farhan Maulana',
            'school' => 'SMP IT Bina Amal',
            'duration' => '07:15',
            'thumbnail' => 'thumb-alwaqiah.jpg'
        ],
        [
            'surah' => 'Surah Yasin',
            'juz' => 'Juz 22 & 23',
            'student' => 'Siti Aisyah',
            'school' => 'SD Islam Al-Azhar 14',
            'duration' => '12:30',
            'thumbnail' => 'thumb-yasin.jpg'
        ],
        [
            'surah' => 'Surah Ad-Duha',
            'juz' => 'Juz 30',
            'student' => 'Dina Amalia',
            'school' => 'SMP IT Bina Amal',
            'duration' => '02:10',
            'thumbnail' => 'thumb-adduha.jpg'
        ],
        [
            'surah' => 'Surah Al-Kahf (1-10)',
            'juz' => 'Juz 15',
            'student' => 'Nisa Sabyan',
            'school' => 'SMP IT Bina Amal',
            'duration' => '05:00',
            'thumbnail' => 'thumb-alkahf.jpg'
        ],
    ];
@endphp

@section('content')

<section class="relative bg-gray-900 py-20 overflow-hidden">
    <div class="absolute inset-0 bg-blue-900/90 z-10"></div>
    <div class="container mx-auto px-6 lg:px-20 relative z-20 text-center">
        <span class="inline-block px-4 py-1 bg-accent text-blue-900 font-bold rounded-full text-xs uppercase tracking-wider mb-4 shadow-sm">
            Karya Mahakarya
        </span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
            Galeri Animasi Murottal
        </h1>
        <p class="text-blue-100 max-w-2xl mx-auto text-lg">
            Kumpulan karya visualisasi Al-Quran hasil kolaborasi tim A-Mur Udinus bersama siswa-siswi berprestasi dari berbagai sekolah mitra.
        </p>
    </div>
</section>

<section class="py-6 bg-white border-b border-gray-100 sticky top-20 z-40 shadow-sm">
    <div class="container mx-auto px-6 lg:px-20">
        <form class="flex flex-col md:flex-row gap-4 items-center justify-between">

            <div class="flex gap-4 w-full md:w-auto">
                <select class="w-full md:w-40 px-4 py-2.5 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-blue-100 outline-none transition-all text-sm text-gray-600 bg-white">
                    <option value="">Semua Kategori</option>
                    <option value="Juz 30">Juz 30 (Juz Amma)</option>
                    <option value="Juz 29">Juz 29</option>
                    <option value="Pilihan">Surah Pilihan</option>
                </select>

                <select class="w-full md:w-48 px-4 py-2.5 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-blue-100 outline-none transition-all text-sm text-gray-600 bg-white">
                    <option value="">Semua Sekolah</option>
                    <option value="SMA Semesta">SMA Semesta</option>
                    <option value="SMP IT Bina Amal">SMP IT Bina Amal</option>
                    <option value="SD Al-Azhar 14">SD Al-Azhar 14</option>
                </select>
            </div>

            <div class="relative w-full md:w-80">
                <input type="text" placeholder="Cari surah atau nama siswa..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-blue-100 outline-none transition-all text-sm">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>

        </form>
    </div>
</section>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6 lg:px-20">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($collections as $item)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group flex flex-col">

                    <div class="relative h-56 bg-gray-200 overflow-hidden cursor-pointer">
                        <div class="absolute inset-0 bg-blue-900 flex items-center justify-center text-white/50 group-hover:scale-105 transition-transform duration-700">
                            [Thumbnail {{ $item['surah'] }}]
                        </div>

                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors flex items-center justify-center">
                            <div class="w-14 h-14 bg-white/90 rounded-full flex items-center justify-center text-primary group-hover:scale-110 group-hover:bg-accent transition-all duration-300 shadow-lg pl-1">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                            </div>
                        </div>

                        <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs font-semibold px-2 py-1 rounded-md backdrop-blur-sm">
                            {{ $item['duration'] }}
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-bold text-primary bg-blue-50 px-3 py-1 rounded-full uppercase tracking-wider">
                                {{ $item['juz'] }}
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-800 mb-4 group-hover:text-primary transition-colors cursor-pointer">
                            {{ $item['surah'] }}
                        </h3>

                        <div class="mt-auto space-y-2 pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-3 text-sm text-gray-600">
                                <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                                <div>
                                    <span class="block text-xs text-gray-400">Pengisi Suara</span>
                                    <span class="font-semibold text-gray-700">{{ $item['student'] }}</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 text-sm text-gray-600">
                                <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                </div>
                                <div>
                                    <span class="block text-xs text-gray-400">Asal Sekolah</span>
                                    <span class="font-medium text-gray-700 line-clamp-1">{{ $item['school'] }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            <nav class="flex items-center gap-2">
                <button class="px-4 py-2 border border-gray-200 bg-white rounded-lg text-gray-400 cursor-not-allowed shadow-sm">Sebelumnya</button>
                <button class="w-10 h-10 bg-primary text-white rounded-lg font-semibold shadow-md">1</button>
                <button class="w-10 h-10 border border-gray-200 bg-white text-gray-600 rounded-lg hover:bg-gray-50 transition-colors shadow-sm">2</button>
                <button class="w-10 h-10 border border-gray-200 bg-white text-gray-600 rounded-lg hover:bg-gray-50 transition-colors shadow-sm">3</button>
                <span class="text-gray-400 px-2">...</span>
                <button class="px-4 py-2 border border-gray-200 bg-white rounded-lg text-gray-600 hover:bg-gray-50 transition-colors shadow-sm">Selanjutnya</button>
            </nav>
        </div>

    </div>
</section>

@endsection
