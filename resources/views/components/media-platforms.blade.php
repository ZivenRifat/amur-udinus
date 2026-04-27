@php
    $socials = [['label' => 'Instagram'], ['label' => 'TikTok'], ['label' => 'YouTube']];
@endphp

<section class="py-20 px-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- LEFT -->
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
                    PLATFORM <span class="bg-gradient-to-r from-blue-500 to-indigo-600 bg-clip-text text-transparent">MEDIA SOSIAL.</span>
                </h2>

                <p class="text-gray-500 mb-8 text-sm md:text-base leading-relaxed">
                    Amur Udinus memiliki kehadiran digital yang kuat di berbagai platform media sosial.
                </p>

                <div class="flex items-center gap-8">

                    @foreach ($socials as $s)
                        <div class="flex flex-col items-center gap-2 group">

                            <!-- ICON CONTAINER -->
                            <div
                                class="w-20 h-20 rounded-full bg-white shadow flex items-center justify-center
                                        hover:scale-110 hover:shadow-xl hover:-translate-y-1 transition duration-300">

                                @if ($s['label'] == 'Instagram')
                                    <!-- INSTAGRAM -->
                                    <svg class="w-10 h-10" viewBox="0 0 24 24">
                                        <defs>
                                            <linearGradient id="ig-gradient" x1="0%" y1="0%"
                                                x2="100%" y2="100%">
                                                <stop offset="0%" stop-color="#feda75" />
                                                <stop offset="25%" stop-color="#fa7e1e" />
                                                <stop offset="50%" stop-color="#d62976" />
                                                <stop offset="75%" stop-color="#962fbf" />
                                                <stop offset="100%" stop-color="#4f5bd5" />
                                            </linearGradient>
                                        </defs>
                                        <rect x="3" y="3" width="18" height="18" rx="5"
                                            fill="url(#ig-gradient)" />
                                        <circle cx="12" cy="12" r="4" fill="white" />
                                        <circle cx="17" cy="7" r="1.5" fill="white" />
                                    </svg>
                                @elseif($s['label'] == 'TikTok')
                                    <!-- TIKTOK -->
                                    <svg class="w-10 h-10" viewBox="0 0 24 24">
                                        <!-- cyan shadow -->
                                        <path fill="#25F4EE"
                                            d="M12 2v14a3 3 0 11-3-3c.3 0 .6 0 .9.1V10a6 6 0 106 6V8.3c1.2.8 2.6 1.3 4.1 1.3V6.5c-2.3-.2-4.1-2.1-4.3-4.5H12z"
                                            transform="translate(-1,1)" />
                                        <!-- pink shadow -->
                                        <path fill="#FE2C55"
                                            d="M12 2v14a3 3 0 11-3-3c.3 0 .6 0 .9.1V10a6 6 0 106 6V8.3c1.2.8 2.6 1.3 4.1 1.3V6.5c-2.3-.2-4.1-2.1-4.3-4.5H12z"
                                            transform="translate(1,-1)" />
                                        <!-- main -->
                                        <path fill="#000000"
                                            d="M12 2v14a3 3 0 11-3-3c.3 0 .6 0 .9.1V10a6 6 0 106 6V8.3c1.2.8 2.6 1.3 4.1 1.3V6.5c-2.3-.2-4.1-2.1-4.3-4.5H12z" />
                                    </svg>
                                @elseif($s['label'] == 'YouTube')
                                    <!-- YOUTUBE -->
                                    <svg class="w-10 h-10" viewBox="0 0 24 24">
                                        <rect x="2" y="6" width="20" height="12" rx="3" fill="#FF0000" />
                                        <polygon points="10 9 16 12 10 15" fill="white" />
                                    </svg>
                                @endif

                            </div>

                            <!-- LABEL -->
                            <span class="text-xs text-gray-500 group-hover:text-green-600">
                                {{ $s['label'] }}
                            </span>

                        </div>
                    @endforeach

                </div>
            </div>

            <!-- RIGHT -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/phone-mockup.jpg') }}" class="w-72 md:w-80 rounded-3xl shadow-2xl">
            </div>

        </div>
    </div>
</section>
