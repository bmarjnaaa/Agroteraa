<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGROTERA - Dari Petani Gondang, Untuk Kesejahteraan Bersama</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lato:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6B8E23',
                        secondary: '#5D4037',
                        beige: '#F5F5DC',
                        cream: '#FFFEFA',
                        'brand-bg-gray': '#F5F5F5',
                    },
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                        lato: ['Lato', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-lato {
            font-family: 'Lato', sans-serif;
        }
        /* Additional custom styles if needed, extracted from inline for consistency */
        /* Card Produk */
        .card-produk {
            background-color: #F5F5DC;
            border-radius: 12px;
            box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            position: relative;
            font-family: 'Lato', sans-serif;
            color: #5D4037;
            max-width: 280px;
            width: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-produk:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .card-produk img {
            width: 100%;
            height: 224px;
            object-fit: cover;
        }

    /* Tag kategori produk dengan padding atas dan bawah diperbesar */
    .card-produk .tag {
      position: absolute;
      top: 8px;
      left: 16px;
      background: white;
      border-radius: 9999px;
      padding: 6px 12px; /* tambah padding vertikal */
      font-family: 'Inter', sans-serif;
      font-weight: 500;
      font-size: 10px;
      color: #6B8E23;
      line-height: 16px;
      display: inline-block;
      pointer-events: none;
    }

    .card-produk .card-title {
      font-weight: 700;
      font-size: 1.25rem; /* text-xl */
      margin-top: 1.5rem;
      margin-bottom: 0.25rem;
    }

    .card-produk .card-subtitle {
      font-family: 'Inter', sans-serif;
      font-weight: 400;
      font-size: 0.875rem; /* text-sm */
      line-height: 1.25rem;
      color: rgba(93, 64, 55, 0.8);
    }

        .testimonial-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .testimonial-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .location-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .location-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        /* Animasi slide-in dari kiri */
        .slide-in-left {
            opacity: 0;
            transform: translateX(-100%);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }
        .slide-in-left.animate {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
</head>

<body class="bg-beige">
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section id="beranda" class="bg-cream py-12 sm:py-16 lg:py-24 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 items-start">
                <!-- Hero Content -->
                <div class="flex flex-col gap-8 z-10 relative slide-in-left">
                    <div class="flex flex-col gap-5">
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary font-lato leading-tight">
                            Dari Petani Gondang,<br />Untuk Kesejahteraan Bersama
                        </h1>
                        <p class="text-base sm:text-lg text-secondary leading-relaxed">
                            Agrotera hadir untuk memajukan kesejahteraan petani lokal dengan menyalurkan hasil panen terbaik langsung ke tangan Anda, memutus rantai tengkulak yang tidak adil.
                        </p>
                    </div>
                    <a href="{{ url('/produk') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-cream rounded-full border border-primary hover:bg-cream hover:text-primary transition-all w-fit">
                        <span class="font-medium">Lihat Produk Kami</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Hero Image & Stats -->
                <div class="relative flex flex-col justify-center px-2">
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 mb-8">
                        <div class="text-center border-r border-secondary/100 last:border-none">
                            <div class="text-2xl sm:text-3xl font-bold text-secondary font-lato counter" data-target="20">0+</div>
                            <div class="text-sm sm:text-base text-secondary mt-1">Mitra</div>
                        </div>
                        <div class="text-center border-r border-secondary/100 last:border-none">
                            <div class="text-2xl sm:text-3xl font-bold text-secondary font-lato counter" data-target="30">0+</div>
                            <div class="text-sm sm:text-base text-secondary mt-1">Klien</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-bold text-secondary font-lato counter" data-target="150">0+</div>
                            <div class="text-sm sm:text-base text-secondary mt-1">Produk</div>
                        </div>
                    </div>

                    <!-- Image -->
                    <img src="aset/desaingraphicpetanisayur.png" alt="Petani Gondang sedang memanen sayuran segar..." class="w-full lg:w-[120%] max-w-none h-auto rounded-2xl object-cover lg:relative lg:-bottom-4 lg:left-1/2 lg:-translate-x-1/2 mx-auto hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-12 sm:py-16 lg:py-20 bg-beige">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- About Image -->
                <div class="order-2 lg:order-1">
                    <img src="aset/tentangkami1.png" alt="Suasana kebun sayuran Desa Gondang dengan petani bekerja di ladang hijau subur" class="w-full h-auto rounded-3xl shadow-xl">
                </div>

                <!-- About Content -->
                <div class="order-1 lg:order-2 flex flex-col gap-6">
                    <div class="flex flex-col gap-3">
                        <p class="text-secondary text-base sm:text-lg">Tentang Kami</p>
                        <h2 class="text-3xl sm:text-4xl font-bold text-secondary font-lato leading-tight">
                            AGROTERA Sebuah Gerakan untuk Petani di Desa Gondang
                        </h2>
                    </div>
                    <p class="text-secondary text-base leading-relaxed">
                        Dari kebun-kebun terbaik di Desa Gondang, kami hadirkan sayur mayur segar pilihan khusus untuk Anda di wilayah Semarang. Setiap helainya adalah bukti komitmen kami pada kualitas, sekaligus undangan bagi Anda untuk turut serta dalam gerakan memajukan petani lokal.
                    </p>
                    <a href="{{ url('/tentangkami') }}" class="inline-flex items-center px-6 py-3 bg-beige border border-primary text-primary rounded-full hover:bg-primary hover:text-cream transition-all w-fit">
                        <span class="font-medium">Tentang Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Banner -->
    <section class="py-8 sm:py-12 bg-beige">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-[1240px] mx-auto rounded-3xl shadow-lg border-secondary overflow-hidden">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/jFoAQatkAWo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produk" class="bg-brand-bg-gray py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <p class="text-secondary text-base sm:text-lg font-lato mb-4">Produk Kami</p>
                <h2 class="text-3xl sm:text-4xl font-semibold text-secondary font-lato max-w-2xl mx-auto">
                    Melangkapi keseharianmu dengan produk unggulan kami
                </h2>
            </div>

            <!-- Products Grid -->
            <div class="max-w-[1200px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 justify-center">
            <!-- Card Produk -->
            <article class="card-produk bg-beige rounded-lg shadow-lg overflow-hidden relative font-lato w-full max-w-[280px] mx-auto">
            <img src="aset/selada.png" alt="Selada Keriting" class="w-full h-[224px] object-cover" />
            <div class="p-4 text-brand-brown relative">
                <div class="tag absolute top-[8px] left-4 bg-white rounded-full px-3 py-[2px] font-inter font-medium text-xs text-primary inline-block">Sayur</div>
                <h3 class="card-title font-bold text-xl mt-6 mb-1">Selada Keriting</h3>
                <p class="card-subtitle text-sm font-inter text-brand-brown/80 leading-5">Lactuca sativa L</p>
            </div>
            </article>

            <article class="card-produk bg-beige rounded-lg shadow-lg overflow-hidden relative font-lato w-full max-w-[280px] mx-auto">
            <img src="aset/brokoli.png" alt="Brokoli Hijau" class="w-full h-[224px] object-cover" />
            <div class="p-4 text-brand-brown relative">
                <div class="tag absolute top-[8px] left-4 bg-white rounded-full px-3 py-[2px] font-inter font-medium text-xs text-primary inline-block">Sayur</div>
                <h3 class="card-title font-bold text-xl mt-6 mb-1">Brokoli Hijau</h3>
                <p class="card-subtitle text-sm font-inter text-brand-brown/80 leading-5">Brassica oleracea var</p>
            </div>
            </article>

            <article class="card-produk bg-beige rounded-lg shadow-lg overflow-hidden relative font-lato w-full max-w-[280px] mx-auto">
            <img src="aset/kentang.png" alt="Kentang" class="w-full h-[224px] object-cover" />
            <div class="p-4 text-brand-brown relative">
                <div class="tag absolute top-[8px] left-4 bg-white rounded-full px-3 py-[2px] font-inter font-medium text-xs text-primary inline-block">Umbi</div>
                <h3 class="card-title font-bold text-xl mt-6 mb-1">Kentang</h3>
                <p class="card-subtitle text-sm font-inter text-brand-brown/80 leading-5">Solanum tuberosum</p>
            </div>
            </article>

            <article class="card-produk bg-beige rounded-lg shadow-lg overflow-hidden relative font-lato w-full max-w-[280px] mx-auto">
            <img src="aset/alpukat.png" alt="Alpukat" class="w-full h-[224px] object-cover" />
            <div class="p-4 text-brand-brown relative">
                <div class="tag absolute top-[8px] left-4 bg-white rounded-full px-3 py-[2px] font-inter font-medium text-xs text-primary inline-block">Buah</div>
                <h3 class="card-title font-bold text-xl mt-6 mb-1">Alpukat</h3>
                <p class="card-subtitle text-sm font-inter text-brand-brown/80 leading-5">Persea americana</p>
            </div>
            </article>
        </div>

        <!-- CTA Button -->
        <div class="flex justify-start mt-10">
        <a href="{{ url('/produk') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-cream rounded-full border border-primary hover:bg-cream hover:text-primary transition-all">
            <span class="font-medium">Lihat Semua Produk</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
        </div>

    </section>

    <!-- News Section -->
    <section id="berita" class="py-12 sm:py-16 lg:py-20 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-8">
                <p class="text-secondary text-base sm:text-lg font-lato mb-4">Berita</p>
                <h2 class="text-3xl sm:text-4xl font-semibold text-secondary font-lato max-w-3xl mx-auto mb-6">
                    Agrotera Resmikan Rest Area, Perkuat Potensi Wisata Desa Gondang
                </h2>
                <p class="text-secondary text-base max-w-3xl mx-auto">
                    Sebuah Langkah Nyata untuk Mendukung Ekosistem Lokal di Luar Sektor Agrikultur
                </p>
            </div>

            <!-- News Card -->
            <div class="relative rounded-3xl overflow-hidden h-96 sm:h-[500px] mb-8">
                <img src="aset/berita1.png" alt="Grand opening Rest Area Agrotera dengan spanduk besar dan petani desa berkumpul merayakan pembukaan" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 lg:p-10">
                    <div class="max-w-4xl">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm">Artikel</span>
                            <span class="text-white text-sm">August 23, 2025</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-medium text-white mb-4">
                            Agrotera secara resmi membuka Rest Area pada 23 Agustus 2025, sebuah langkah besar untuk mengatasi masalah pemasaran (hilirisasi) bagi para petani sayur di Desa Gondang dan sekitarnya.
                        </h3>
                        <p class="text-white text-sm sm:text-base max-w-3xl">
                            Sejak 2022, inisiatif ini telah terbukti berhasil menstabilkan harga panen dan menarik 13 pemuda desa untuk kembali ke sektor agrikultur. Fasilitas baru ini akan menjadi pusat penjualan langsung untuk memperkuat dampak positif tersebut.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="flex justify-center">
                <a href="{{ url('/berita') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-cream rounded-full border border-primary hover:bg-cream hover:text-primary transition-all">
                    <span class="font-medium">Lihat Berita Lain</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimoni" class="py-12 sm:py-16 lg:py-20 bg-beige">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <p class="text-secondary text-base sm:text-lg font-lato mb-4">Testimoni</p>
                <h2 class="text-3xl sm:text-4xl font-semibold text-secondary font-lato mb-6 max-w-xl">
                    Apa Kata Mereka Tentang Kami
                </h2>
                <p class="text-secondary text-base leading-relaxed max-w-4xl">
                    Kepercayaan adalah fondasi kami. Simak beberapa cerita tulus dari para pelanggan dan mitra yang telah merasakan langsung kualitas produk serta dampak positif dari kehadiran Agrotera.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="bg-cream rounded-3xl shadow-lg p-6 testimonial-card">
                    <div class="flex items-center">
                        <img src="aset/logobaterhub.png" alt="Logo BatterHub Restoran" class="w-20 h-20 rounded-2xl object-cover flex-shrink-0">
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-secondary font-lato">BatterHub Restoran</h3>
                            <p class="text-lg text-primary font-medium font-lato">Bapak Hermawan</p>
                        </div>
                    </div>
                                        <hr class="my-4 border-secondary/30">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-secondary text-base leading-relaxed">
                        "Pasokan untuk restoran saya jadi andal dan berkualitas. Agrotera memberikan harga yang adil dan pelayanan profesional."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-cream rounded-3xl shadow-lg p-6 testimonial-card">
                    <div class="flex items-center">
                        <img src="aset/logobangmail.png" alt="Logo Mie Ayam Jakarta" class="w-20 h-20 rounded-2xl object-cover flex-shrink-0">
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-secondary font-lato">Mie Ayam Jakarta</h3>
                            <p class="text-lg text-primary font-medium font-lato">Bang Mail</p>
                        </div>
                    </div>
                    <hr class="my-4 border-secondary/30">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-secondary text-base leading-relaxed">
                        "Pasokan dari Agrotera selalu tepat waktu dan profesional. Mereka membuat operasional dapur kami berjalan lancar tanpa khawatir."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-cream rounded-3xl shadow-lg p-6 testimonial-card">
                    <div class="flex items-center">
                        <div class="w-20 h-20 bg-secondary rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-secondary font-lato">Pelanggan di Semarang</h3>
                            <p class="text-lg text-primary font-medium font-lato">Ibu Wulandari</p>
                        </div>
                    </div>
                    <hr class="my-4 border-secondary/30">
                    <div class="flex items-center mb-4">
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-secondary text-base leading-relaxed">
                        "Produknya selalu segar, beda dari yang lain. Bangga bisa ikut mendukung petani lokal Sumowono."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map/Location Section -->
    <section id="kontak" class="py-12 sm:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-3xl overflow-hidden bg-cover bg-center sm:h-[500px]" style="background-image: url('aset/ssmapsgede.png');">
                <div class="absolute top-8 left-8">
                    <div class="bg-white rounded-2xl shadow-xl p-6 max-w-sm location-card">
                        <img src="aset/ssmapskecil.png" alt="Tampilan depan kantor Agrotera dengan papan nama besar dan area parkir luas" class="w-full h-48 object-cover rounded-lg mb-4">
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-xl font-semibold mb-2">
                                    <a href="https://maps.app.goo.gl/2wKDnR1KBXhks5qPA?g_st=ic" target="_blank" class="text-black-600 hover:text-blue-600">Agrotera</a>
                                </h3>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <span>5.0</span>
                                    <span>(4,356)</span>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <p class="text-sm text-secondary">Jl. Sumowono-Limbangan Km. 7 Kab.Kendal, Kabupaten Semarang, Jawa Tengah 51383</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-sm font-medium text-green-700">Open 24 Hours</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <p class="text-sm text-secondary">0857-2369-2922</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script>
        // Aktifkan ikon Lucide
        if (typeof lucide !== 'undefined' && lucide.createIcons) {
            lucide.createIcons();
        }

        // JavaScript untuk animasi counter - taruh di bagian bawah sebelum </body>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');
            const speed = 220; // Kecepatan animasi (ms per update, sesuaikan jika terlalu cepat/lambat)
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target'); // Ambil angka target dari data-target
                let count = 0;
                const updateCount = () => {
                    const increment = target / speed;
                    if (count < target) {
                        count += increment;
                        counter.innerText = Math.ceil(count) + '+'; // Update teks dengan "+" tetap ada
                        setTimeout(updateCount, 1); // Loop sampai selesai
                    } else {
                        counter.innerText = target + '+'; // Pastikan akhirnya tepat
                    }
                };
                // Trigger animasi saat elemen masuk viewport (opsional, atau panggil langsung)
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCount();
                            observer.unobserve(entry.target); // Hentikan observasi setelah animasi
                        }
                    });
                });
                observer.observe(counter);
            });
        });

        // JavaScript untuk trigger animasi saat scroll - taruh di bagian bawah sebelum </body>
        document.addEventListener('DOMContentLoaded', () => {
            const slideElement = document.querySelector('.slide-in-left');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        observer.unobserve(entry.target); // Hentikan observasi setelah animasi
                    }
                });
            });
            observer.observe(slideElement);
        });
    </script>
</body>
</html>