@php
    $berita = [
    [
        'title' => 'Manfaatkan Generative-AI, Udinus Luncurkan Inovasi A-Mur sebagai Pembelajaran Al-Qur’an Digital untuk Gen Z',
        'date' => '06 Maret 2026',
        'category' => 'Pencapaian',
        'link' => 'https://dinus.ac.id/2026/03/manfaatkan-generative-ai-udinus-luncurkan-inovasi-a-mur-sebagai-pembelajaran-al-quran-digital-untuk-gen-z/'
    ],
    [
        'title' => 'Tim PKM Amur Berfoto Bersama dengan Guru dan Siswa Setelah Memberikan Pelatihan di SMAN 3 Semarang',
        'date' => '26 Mei 2026',
        'category' => 'Rilis',
        'link' => 'https://dinus.ac.id/2026/05/melalui-pkm-pusat-studi-csac-udinus-uji-skalabilitas-produksi-animasi-murottal-di-sekolah/tim-pkm-a-mur-berforo-bersama-dengan-guru-dan-siswa-setelah-memberikan-pelatihan-di-sman-3-semarang/'
    ],
    [
        'title' => 'Melalui PKM, Pusat Studi CSAC Udinus Uji Skalabilitas Produksi Animasi Murottal di Sekolah',
        'date' => '26 Mei 2026',
        'category' => 'Kolaborasi',
        'link' => 'https://dinus.ac.id/2026/05/melalui-pkm-pusat-studi-csac-udinus-uji-skalabilitas-produksi-animasi-murottal-di-sekolah/'
    ],
    [
        'title' => 'Udinus Gandeng PP Pergunu, Hadirkan Training Animasi Murottal untuk Dakwah Digital',
        'date' => '04 Maret 2026',
        'category' => 'Kolaborasi',
        'link' => 'https://dinus.ac.id/2026/03/udinus-gandeng-pp-pergunu-hadirkan-training-animasi-murottal-untuk-dakwah-digital/'
    ],
    [
        'title' => 'Kumpulan Berita dan Informasi Animasi Murottal (A-MUR)',
        'date' => '06 Maret 2026',
        'category' => 'Kolaborasi',
        'link' => 'https://dinus.ac.id/tag/murottal/'
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

<section id="berita" class="py-20 px-20 bg-white scroll-mt-20">

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
<a href="{{ $item['link'] }}" target="_blank" rel="noopener noreferrer">
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
</a>
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