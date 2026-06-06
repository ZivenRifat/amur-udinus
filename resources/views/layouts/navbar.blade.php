<header x-data="{ mobileOpen: false, searchOpen: false }" class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
    <div class="container mx-auto flex items-center justify-between h-20 px-6 lg:px-20">

        <!-- Logo -->
        <div class="flex items-center gap-3">
            <!-- Logo UDINUS -->
            <img src="{{ asset('assets/udinus-logo.png') }}" alt="Udinus" class="h-10 w-10 object-contain">
            <!-- Logo AMUR -->
            <img src="{{ asset('assets/amur-logo.png') }}" alt="A-Mur" class="h-10 w-10 object-contain">
            <!-- Text -->
            <a href="{{ url('/') }}" class="font-bold text-xl">A-Mur Udinus</a>
        </div>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-8">
            @php
                // Diperbarui agar navigasi berjalan baik dari halaman mana pun
                $navItems = [
                    'Beranda' => url('/'),
                    'Koleksi' => route('collection.index'),
                    'Berita' => route('news.index'),
                    'Mitra' => route('partners'), // Mengarah ke halaman mitra
                    'Kontributor' => route('contributors.index') // Mengarah ke halaman kontributor
                ];
            @endphp

            @foreach ($navItems as $label => $link)
                @php
                    // Mengecek apakah URL saat ini sama dengan URL pada link navbar
                    $isActive = request()->url() == $link;
                @endphp
                <a href="{{ $link }}" class="text-sm font-semibold transition-colors {{ $isActive ? 'text-primary' : 'text-gray-600 hover:text-primary' }}">
                    {{ $label }}
                </a>
            @endforeach
        </nav>

        <!-- Right -->
        <div class="flex items-center gap-4">
            <!-- CTA -->
            <a href="{{ url('/#kontak') }}" class="hidden md:inline-block px-6 py-2.5 bg-primary text-white font-semibold rounded-full hover:bg-blue-700 transition-all shadow-md hover:shadow-lg text-sm">
                Gabung Mitra
            </a>

            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2 text-gray-600" @click="mobileOpen = !mobileOpen">
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div x-show="mobileOpen" class="md:hidden border-t border-gray-100 bg-white px-6 py-4 space-y-4 shadow-lg absolute w-full">
        @foreach ($navItems as $label => $link)
            @php
                $isActive = request()->url() == $link;
            @endphp
            <a href="{{ $link }}" class="block text-sm font-medium transition-colors {{ $isActive ? 'text-primary' : 'text-gray-700 hover:text-primary' }}">
                {{ $label }}
            </a>
        @endforeach
        <a href="{{ url('/#kontak') }}" class="block text-center px-5 py-3 bg-primary text-white rounded-full font-semibold">
            Hubungi Kami
        </a>
    </div>
</header>
