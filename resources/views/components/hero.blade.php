<section x-data="{
    active: 0,
    slides: [
        { image: '{{ asset('assets/hero1.png') }}', title: '' },
        { image: '{{ asset('assets/hero2.png') }}', title: '' },
        { image: '{{ asset('assets/hero3.png') }}', title: '' }
    ],
    next() {
        this.active = (this.active + 1) % this.slides.length
    },
    prev() {
        this.active = (this.active - 1 + this.slides.length) % this.slides.length
    }
}" x-init="setInterval(() => next(), 4000)" class="relative min-h-[90vh] overflow-hidden">

    <!-- SLIDES -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="active === index" x-transition.opacity.duration.700ms class="absolute inset-0">
            <img :src="slide.image" class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-black/70"></div>
        </div>
    </template>

    <!-- CONTENT -->
    <div class="relative z-10 flex flex-col items-center justify-center h-[90vh] text-center px-4">

        <button
            class="flex items-center justify-center w-20 h-20 rounded-full bg-transparent border-2 border-white hover:bg-white/10 transition-all duration-300 hover:scale-110 mb-6">

            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" />
            </svg>

        </button>

        <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white drop-shadow-lg"
            x-text="slides[active].title"></h1>

    </div>

    <!-- LEFT BUTTON -->
    <button @click="prev()"
        class="absolute left-5 top-1/2 -translate-y-1/2 bg-black/50 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-black hover:scale-110 transition-all duration-200 z-20">
        ❮
    </button>

    <!-- RIGHT BUTTON -->
    <button @click="next()"
        class="absolute right-5 top-1/2 -translate-y-1/2 bg-black/50 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-black hover:scale-110 transition-all duration-200 z-20">
        ❯
    </button>

    <!-- INDICATOR -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-20">
        <template x-for="(slide, index) in slides">
            <div @click="active = index" class="w-3 h-3 rounded-full cursor-pointer transition-all"
                :class="active === index ? 'bg-white scale-125' : 'bg-white/40'"></div>
        </template>
    </div>

</section>
