@extends('layouts.app')
@section('title', 'Mitra Kami')

@php
    // Data dummy untuk logo mitra
    $partners = [
        ['name' => 'Universitas Dian Nuswantoro', 'logo' => 'udinus-logo.png', 'type' => 'Pendidikan'],
        ['name' => 'TVKU Semarang', 'logo' => 'tvku-logo.png', 'type' => 'Media'],
        ['name' => 'Kementerian Agama RI', 'logo' => 'kemenag-logo.jpeg', 'type' => 'Pemerintahan'],
        ['name' => 'AGPAII', 'logo' => 'agpaii-logo.png', 'type' => 'Organisasi'],
        ['name' => 'Pemprov Jawa Tengah', 'logo' => 'jateng-logo.png', 'type' => 'Pemerintahan'],
        ['name' => 'SD Islam Al-Azhar 14', 'logo' => 'kemenag-logo.jpeg', 'type' => 'Sekolah Mitra'], // Ganti gambar sesuai aset
        ['name' => 'SMP IT Bina Amal', 'logo' => 'agpaii-logo.png', 'type' => 'Sekolah Mitra'], // Ganti gambar sesuai aset
        ['name' => 'SMA Semesta', 'logo' => 'udinus-logo.png', 'type' => 'Sekolah Mitra'], // Ganti gambar sesuai aset
    ];
@endphp

@section('content')

<!-- Header Section -->
<section class="relative bg-gray-900 py-16 overflow-hidden">
    <div class="absolute inset-0 bg-blue-900/90 z-10"></div>
    <div class="container mx-auto px-6 lg:px-20 relative z-20 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
            Jaringan <span class="text-accent">Mitra Kami</span>
        </h1>
        <p class="text-blue-100 max-w-2xl mx-auto text-lg">
            Terima kasih kepada seluruh institusi, sekolah, dan organisasi yang telah berkolaborasi dalam mewujudkan ekosistem edukasi animasi murottal digital.
        </p>
    </div>
</section>

<!-- Logo Grid Section -->
<section class="py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6 lg:px-20 text-center">

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($partners as $partner)
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 group flex flex-col items-center justify-center gap-4 cursor-pointer">

                    <!-- Logo Container -->
                    <div class="w-24 h-24 flex items-center justify-center overflow-hidden">
                        <img
                            src="{{ asset('assets/' . $partner['logo']) }}"
                            alt="{{ $partner['name'] }}"
                            class="max-w-full max-h-full object-contain group-hover:grayscale-0 group-hover:opacity-100 transition duration-500 transform group-hover:scale-110"
                        >
                    </div>

                    <!-- Partner Info -->
                    <div>
                        <h3 class="text-sm font-bold text-gray-800 group-hover:text-primary transition-colors">
                            {{ $partner['name'] }}
                        </h3>
                        <span class="text-xs font-medium text-gray-400">
                            {{ $partner['type'] }}
                        </span>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- Call to Action -->
        <div class="mt-20 bg-white p-10 rounded-2xl shadow-sm border border-gray-100 max-w-3xl mx-auto">
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Tertarik Menjadi Bagian dari Kami?</h3>
            <p class="text-gray-500 mb-8">
                Mari bersama-sama membangun generasi Qurani melalui inovasi teknologi animasi. Kami membuka pintu kolaborasi bagi sekolah, instansi, maupun media.
            </p>
            <a href="{{ url('/#kontak') }}" class="inline-block px-8 py-3 bg-primary text-white font-semibold rounded-full hover:bg-blue-700 transition-all shadow-md hover:shadow-lg">
                Ajukan Kerjasama
            </a>
        </div>

    </div>
</section>

@endsection
