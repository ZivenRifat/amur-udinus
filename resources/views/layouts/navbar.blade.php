<header x-data="{ mobileOpen: false, searchOpen: false }" class="sticky top-0 z-50 bg-white border-b">
    <div class="container mx-auto flex items-center justify-between h-16 px-20">

        <!-- Logo -->
        <div class="flex items-center gap-3">

            <!-- Logo UDINUS -->
            <img src="{{ asset('assets/udinus-logo.png') }}"
                class="h-10 w-10 object-contain">

            <!-- Logo AMUR -->
            <img src="{{ asset('assets/amur-logo.png') }}"
                class="h-10 w-10 object-contain">

            <!-- Text -->
            <span class="font-bold text-lg">
                AMUR UDINUS
            </span>

        </div>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-8">
            @php
                $navItems = ['BERANDA', 'KOLEKSI', 'BERITA', 'MITRA', 'KONTRIBUTOR'];
            @endphp

            @foreach ($navItems as $item)
                <a href="{{ $item == 'BERITA' ? '#berita' : '#' }}"
                    class="text-sm font-medium text-gray-600 hover:text-blue-500 transition">
                    {{ $item }}
                </a>
            @endforeach
        </nav>

        <!-- Right -->
        <div class="flex items-center gap-3">

            <!-- Search Button -->
            <button class="p-2 rounded-full hover:bg-gray-100 transition" @click="searchOpen = !searchOpen">
                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7" />
                    <path d="M20 20l-3-3" />
                </svg>
            </button>

            <!-- CTA -->
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfNexmA98-QOGQhvnDBmTc1Cb6kyo8QjWSlBdQuidlMYW23hw/viewform?usp=dialog"
                class="inline-block px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold rounded-full hover:from-blue-600 hover:to-blue-800 transition-all duration-300 text-sm shadow-lg hover:shadow-blue-500/50 hover:scale-105">
                GABUNG MITRA
            </a>

            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2" @click="mobileOpen = !mobileOpen">
                <span x-show="!mobileOpen">☰</span>
                <span x-show="mobileOpen">✖</span>
            </button>
        </div>
    </div>

    <!-- Search Bar -->
    <div x-show="searchOpen" class="border-t px-4 py-3 bg-white">
        <div class="container mx-auto">
            <form class="flex gap-2">
                <input type="text" placeholder="Cari..."
                    class="flex-1 px-4 py-2 rounded-lg border text-sm">
                <button class="px-4 py-2 bg-green-600 text-white rounded-lg text-sm">
                    Cari
                </button>
            </form>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div x-show="mobileOpen" class="md:hidden border-t bg-white px-4 py-4 space-y-3">
        @foreach ($navItems as $item)
            <a href="{{ $item == 'BERITA' ? '#berita' : '#' }}"
                class="block text-sm text-gray-600 hover:text-green-600">
                {{ $item }}
            </a>
        @endforeach

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfNexmA98-QOGQhvnDBmTc1Cb6kyo8QjWSlBdQuidlMYW23hw/viewform?usp=dialog" class="block text-center px-5 py-2 bg-green-600 text-white rounded-full">
            GABUNG MITRA
        </a>
    </div>
</header>