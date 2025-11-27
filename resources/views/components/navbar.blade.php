<!-- Header/Navigation -->
<header class="bg-cream backdrop-blur-md sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 sm:py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('aset/logo2.png') }}" alt="Logo AGROTERA dengan simbol pertanian hijau dan coklat" class="w-15 h-12 sm:w-15 sm:h-12">
                <span class="text-base sm:text-lg lg:text-xl font-bold text-secondary font-inter">AGROTERA</span>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-3">
                <a href="{{ url('/') }}" class="px-4 py-2 {{ request()->is('/') ? 'text-primary' : 'text-secondary' }} hover:text-primary transition-colors">Beranda</a>
                <a href="{{ url('/tentangkami') }}" class="px-4 py-2 {{ request()->is('tentangkami') ? 'text-primary' : 'text-secondary' }} hover:text-primary transition-colors">Tentang Kami</a>
                <a href="{{ url('/produk') }}" class="px-4 py-2 {{ request()->is('produk') ? 'text-primary' : 'text-secondary' }} hover:text-primary transition-colors">Produk</a>
                <a href="{{ url('/berita') }}" class="px-4 py-2 {{ request()->is('berita') ? 'text-primary' : 'text-secondary' }} hover:text-primary transition-colors">Berita</a>
                <a href="https://api.whatsapp.com/send/?phone=6285723692922&text=Halo%2C+Saya+Tertarik+Dengan+Produk+Anda%21&type=phone_number&app_absent=0" class="px-4 py-2 bg-primary text-cream rounded-lg hover:bg-opacity-90 transition-all">Hubungi Kami</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden p-2 bg-cream text-secondary rounded" id="mobile-menu-btn" aria-label="Toggle menu">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="hidden absolute top-full left-0 right-0 bg-cream shadow-lg flex flex-col gap-2 p-4">
            <a href="{{ url('/') }}" class="px-4 py-2 {{ request()->is('/') ? 'text-primary' : 'text-secondary' }} hover:bg-beige rounded">Beranda</a>
            <a href="{{ url('/tentangkami') }}" class="px-4 py-2 {{ request()->is('tentangkami') ? 'text-primary' : 'text-secondary' }} hover:bg-beige rounded">Tentang Kami</a>
            <a href="{{ url('/produk') }}" class="px-4 py-2 {{ request()->is('produk') ? 'text-primary' : 'text-secondary' }} hover:bg-beige rounded">Produk</a>
            <a href="{{ url('/berita') }}" class="px-4 py-2 {{ request()->is('berita') ? 'text-primary' : 'text-secondary' }} hover:bg-beige rounded">Berita</a>
            <a href="https://api.whatsapp.com/send/?phone=6285723692922&text=Halo%2C+Saya+Tertarik+Dengan+Produk+Anda%21&type=phone_number&app_absent=0" class="px-4 py-2 bg-primary text-cream rounded text-center">Hubungi Kami</a>
        </nav>
    </div>
</header>

<!-- Memuat ikon Lucide -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi ikon Lucide untuk tombol menu
        if (typeof lucide !== '' && lucide.createIcons) {
            lucide.createIcons();
        } else {
            console.warn('Lucide tidak dimuat – ikon menu mungkin tidak muncul.');
        }

        // Toggle menu mobile
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                // Ganti ikon menu
                const icon = mobileMenuBtn.querySelector('i');
                if (icon) {
                    icon.setAttribute('data-lucide', mobileMenu.classList.contains('hidden') ? 'menu' : 'x');
                    if (typeof lucide !== 'undefined' && lucide.createIcons) {
                        lucide.createIcons(); // Gambar ulang ikon
                    }
                }
            });
        } else {
            console.error('Elemen mobile menu tidak ditemukan – periksa ID.');
        }

        // Hide mobile menu when resizing to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) { // lg breakpoint
                mobileMenu.classList.add('hidden');
                // Reset icon to menu
                const icon = mobileMenuBtn.querySelector('i');
                if (icon) {
                    icon.setAttribute('data-lucide', 'menu');
                    if (typeof lucide !== 'undefined' && lucide.createIcons) {
                        lucide.createIcons();
                    }
                }
            }
        });
    });
</script>