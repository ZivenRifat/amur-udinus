@extends('layouts.app')
@section('title', 'Direktori Kontributor')

@php
    // Data dummy untuk keperluan tampilan UI
    $contributors = [
        [
            'school' => 'SD Islam Al-Azhar 14',
            'city' => 'Semarang',
            'province' => 'Jawa Tengah',
            'students' => [
                ['name' => 'Ahmad Muzakki', 'supervisor' => 'Ustadz Budi Santoso', 'surah' => 'Surah Al-Qadr'],
                ['name' => 'Siti Aisyah', 'supervisor' => 'Ustadzah Nur Fitri', 'surah' => 'Surah Al-Zalzalah'],
            ]
        ],
        [
            'school' => 'SMP IT Bina Amal',
            'city' => 'Semarang',
            'province' => 'Jawa Tengah',
            'students' => [
                ['name' => 'Farhan Maulana', 'supervisor' => 'Ustadz Riza Fadli', 'surah' => 'Surah Ad-Duha'],
                ['name' => 'Nisa Sabyan', 'supervisor' => 'Ustadz Riza Fadli', 'surah' => 'Surah Al-Insyirah'],
                ['name' => 'Dina Amalia', 'supervisor' => 'Ustadzah Halimah', 'surah' => 'Surah At-Tin'],
            ]
        ],
        [
            'school' => 'SMA Semesta Boarding School',
            'city' => 'Semarang',
            'province' => 'Jawa Tengah',
            'students' => [
                ['name' => 'Muhammad Tariq', 'supervisor' => 'Ustadz Anwar', 'surah' => 'Surah Al-Mulk (Ayat 1-10)'],
            ]
        ],
    ];
@endphp

@section('content')

<!-- Header Section -->
<section class="relative bg-blue-900 py-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M0 40V0H40" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid-pattern)"/>
        </svg>
    </div>

    <div class="container mx-auto px-6 lg:px-20 relative z-10 text-center">
        <span class="inline-block px-4 py-1 bg-accent text-blue-900 font-bold rounded-full text-xs uppercase tracking-wider mb-4">
            A-Mur Udinus
        </span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
            Direktori Kontributor
        </h1>
        <p class="text-blue-100 max-w-2xl mx-auto text-lg">
            Apresiasi dan dokumentasi bagi sekolah, pembimbing, serta siswa-siswi berprestasi yang telah berkontribusi dalam produksi animasi murottal digital.
        </p>
    </div>
</section>

<!-- Filter & Search Section -->
<section class="py-8 bg-white border-b border-gray-100 sticky top-20 z-40 shadow-sm">
    <div class="container mx-auto px-6 lg:px-20">
        <form class="grid grid-cols-1 md:grid-cols-4 gap-4">

            <!-- Search Input -->
            <div class="md:col-span-2 relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" placeholder="Cari nama sekolah, siswa, atau surah..." class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-blue-100 outline-none transition-all text-sm">
            </div>

            <!-- Filter City -->
            <div>
                <select class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-blue-100 outline-none transition-all text-sm text-gray-600 appearance-none bg-white">
                    <option value="">Semua Kota</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Demak">Demak</option>
                    <option value="Kendal">Kendal</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="button" class="w-full bg-primary text-white font-semibold py-3 rounded-xl hover:bg-blue-700 transition-all shadow-md hover:shadow-lg text-sm">
                    Terapkan Filter
                </button>
            </div>

        </form>
    </div>
</section>

<!-- Data Kontributor Section -->
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6 lg:px-20">

        <div class="space-y-10">
            @foreach ($contributors as $data)
                <!-- School Card Group -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow">

                    <!-- School Header -->
                    <div class="bg-blue-50/50 border-b border-gray-100 p-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                {{ $data['school'] }}
                            </h2>
                            <div class="flex items-center gap-2 text-sm text-gray-500 mt-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                {{ $data['city'] }}, {{ $data['province'] }}
                            </div>
                        </div>
                        <div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-primary">
                                {{ count($data['students']) }} Kontributor
                            </span>
                        </div>
                    </div>

                    <!-- Students Table (Desktop) & Cards (Mobile) -->
                    <div class="p-0">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-50 text-gray-500 text-sm uppercase tracking-wider">
                                        <th class="px-6 py-4 font-semibold w-1/3">Nama Siswa</th>
                                        <th class="px-6 py-4 font-semibold w-1/3">Guru Pembimbing</th>
                                        <th class="px-6 py-4 font-semibold w-1/3">Surah yang Dibaca</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @foreach ($data['students'] as $student)
                                    <tr class="hover:bg-blue-50/30 transition-colors group">
                                        <td class="px-6 py-5">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-full bg-blue-100 text-primary flex items-center justify-center font-bold text-sm shrink-0">
                                                    {{ substr($student['name'], 0, 1) }}
                                                </div>
                                                <span class="font-semibold text-gray-800">{{ $student['name'] }}</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-5">
                                            <div class="flex items-center gap-2 text-gray-600 text-sm">
                                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                                {{ $student['supervisor'] }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-5">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                                <span class="font-medium text-gray-700">{{ $student['surah'] }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- Pagination Placeholder -->
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center gap-2">
                <button class="px-4 py-2 border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Sebelumnya</button>
                <button class="w-10 h-10 bg-primary text-white rounded-lg font-semibold shadow-md">1</button>
                <button class="w-10 h-10 border border-gray-200 text-gray-600 rounded-lg hover:bg-gray-50 transition-colors">2</button>
                <button class="w-10 h-10 border border-gray-200 text-gray-600 rounded-lg hover:bg-gray-50 transition-colors">3</button>
                <span class="text-gray-400">...</span>
                <button class="px-4 py-2 border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Selanjutnya</button>
            </nav>
        </div>

    </div>
</section>

@endsection
