<section x-data="{
    active: 0,
    slides: [
        { image: '{{ asset('assets/amur-hero.jpeg') }}', title: 'Membawa Keindahan Al-Quran Melalui Animasi' },
        { image: '{{ asset('assets/amur-hero.jpeg') }}', title: 'Kolaborasi Pendidikan & Teknologi' },
        { image: '{{ asset('assets/amur-hero.jpeg') }}', title: 'Membangun Generasi Qurani' }
    ],
    next() { this.active = (this.active + 1) % this.slides.length },
    prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length }
}" x-init="setInterval(() => next(), 5000)" class="relative min-h-[85vh] overflow-hidden bg-gray-900">

    <!-- SLIDES -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="active === index" x-transition.opacity.duration.1000ms class="absolute inset-0">
            <img :src="slide.image" class="w-full h-full object-cover opacity-80">
            <!-- Blue/Black Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-800/80 via-blue-900/60 to-black/200"></div>
        </div>
    </template>

    <!-- CONTENT -->
    <div class="relative z-10 flex flex-col items-center justify-center h-[85vh] text-center px-4 max-w-5xl mx-auto">
        {{-- <span class="text-accent font-semibold tracking-wider uppercase mb-4">Animasi Murottal Universitas Dian Nuswantoro</span> --}}
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white drop-shadow-lg leading-tight mb-8" x-text="slides[active].title"></h1>
        <a href="#tentang" class="px-8 py-3 bg-accent text-blue-900 font-bold rounded-full hover:bg-yellow-400 transition-all duration-300 shadow-lg hover:scale-105">
            Tentang Amur
        </a>
    </div>

    {{-- <!-- LEFT BUTTON -->
    <button @click="prev()" class="absolute left-4 md:left-10 top-1/2 -translate-y-1/2 bg-white/10 border border-white/20 backdrop-blur-sm text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-primary hover:border-primary transition-all duration-300 z-20">
        ❮
    </button>

    <!-- RIGHT BUTTON -->
    <button @click="next()" class="absolute right-4 md:right-10 top-1/2 -translate-y-1/2 bg-white/10 border border-white/20 backdrop-blur-sm text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-primary hover:border-primary transition-all duration-300 z-20">
        ❯
    </button> --}}

    <!-- INDICATOR -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-3 z-20">
        <template x-for="(slide, index) in slides">
            <div @click="active = index" class="w-10 h-1.5 rounded-full cursor-pointer transition-all duration-300"
                :class="active === index ? 'bg-accent' : 'bg-white/30 hover:bg-white/50'"></div>
        </template>
    </div>
</section>
