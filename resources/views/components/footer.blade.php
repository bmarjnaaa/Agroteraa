<footer class="bg-[#200E0D] text-white py-8 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12 mb-8">
            <!-- Company Info -->
            <div class="lg:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <img src="{{ asset('aset/logo2.png') }}" alt="Logo AGROTERA putih untuk footer dengan desain minimalis modern" class="w-15 h-12">
                    <span class="text-xl font-bold font-inter">AGROTERA</span>
                </div>
                <p class="text-white/90 mb-4 leading-relaxed">
                    Agrotera adalah sebuah inisiatif sosial yang berfokus pada pemberdayaan petani di Desa Gondang dan sekitarnya. Kami menyalurkan hasil panen segar berkualitas langsung dari kebun petani ke tangan Anda.
                </p>
                <div class="flex gap-4">
                    <a href="https://www.youtube.com/@AgroteraSayurMayur" class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/agrotera.official.id?igsh=MXhtNWM1bGkwNzAydg==" class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div>
                <h3 class="text-lg font-bold mb-4 font-lato">Navigasi</h3>
                <nav class="flex flex-col gap-2">
                    <a href="{{ url('/') }}" class="text-white/80 hover:text-white transition-colors">Beranda</a>
                    <a href="{{ url('/tentangkami') }}" class="text-white/80 hover:text-white transition-colors">Tentang Kami</a>
                    <a href="{{ url('/produk') }}" class="text-white/80 hover:text-white transition-colors">Produk</a>
                    <a href="{{ url('/berita') }}" class="text-white/80 hover:text-white transition-colors">Berita</a>
                    <a href="{{ url('/kontak') }}" class="text-white/80 hover:text-white transition-colors">Kontak Kami</a>
                    <a href="{{ url('/login') }}" class="text-white/80 hover:text-white transition-colors">Masuk Admin</a>
                </nav>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-bold mb-4 font-lato">Kontak Kami</h3>
                <div class="flex flex-col gap-3">
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-white/90 leading-relaxed">Jl. Sumowono-Limbangan Km. 7 Kab.Kendal, Kabupaten Semarang, Jawa Tengah 51383</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:085723692922" class="text-white/90 hover:text-white underline">0857-2369-2922</a>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <a href="mailto:AGROTERA@Gmail.com" class="text-white/90 hover:text-white">agroteraindonesia@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="pt-6 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="text-white/80 text-sm">© 2025 Agrotera. Semua Hak Dilindungi.</p>
            <a href="#" class="text-white/80 hover:text-white text-sm">Privacy Policy</a>
        </div>
    </div>
</footer>
