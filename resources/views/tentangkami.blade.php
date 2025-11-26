<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrotera - Tentang Kami</title>
    
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Memuat font Inter dan Lato dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    
    <!-- Memuat ikon Lucide -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>

    <script>
        // Konfigurasi kustom untuk Tailwind CSS
        tailwind.config = {
            theme: {
                extend: {
                    // Menambahkan font kustom
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                        lato: ['Lato', 'sans-serif'],
                    },
                    // Menambahkan warna kustom
                    colors: {
                        primary: '#6B8E23',
                        secondary: '#5D4037',
                        beige: '#F5F5DC',
                        cream: '#FFFEFA',
                        'brand-brown': '#5D4037',
                        'brand-green': '#6B8E23',
                        'brand-olive': '#A0522D',
                        'brand-bg-light': '#FFFEFA',
                        'brand-bg-medium': '#F5F5DC',
                        'brand-bg-gray': '#F5F5F5',
                        'brand-footer': '#200E0D',
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-lato {
            font-family: 'Lato', sans-serif;
        }

        /* Animasi flip-card (unik, jadi dipertahankan) */
        .flip-card {
            perspective: 1000px;
            width: 12rem;
            height: 12rem;
        }
        
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .flip-card-front {
            background-color: #fffefa;
            color: #6B8E23;
        }
        
        .flip-card-back {
            background-color: #6B8E23;
            color: white;
            transform: rotateY(180deg);
        }
        
        .flip-card-front i, .flip-card-back i {
            transition: color 0.3s ease;
        }

        /* Style hover untuk bagian Mengapa Memilih Kami */
        .advantage-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .advantage-card:hover {
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

<body class="bg-brand-bg-light text-brand-brown">
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="tentangkami" class="relative h-[500px] w-full flex bg-black">
            <img src="aset/bannertentangkami.png" alt="Banner" class="absolute inset-0 w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black bg-opacity-45"></div>
            <div class="relative z-10 max-w-7xl w-full mx-auto flex slide-in-left">
                <div class="w-full lg:w-1/2 flex flex-col justify-center px-6 py-10 text-left text-white" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">
                    <h1 class="text-5xl sm:text-5xl font-semibold font-lato mb-4 leading-tight">
                        Lebih dari Sekadar UMKM<br/>
                        Kami adalah Gerakan Sosial.
                    </h1>
                    <p class="text-base sm:text-lg max-w-md" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">
                        Agrotera hadir sebagai gerakan sosial untuk memajukan kesejahteraan petani dari Desa Gondang langsung ke tangan Anda.
                    </p>
                </div>
                <div class="hidden lg:block lg:w-1/2"></div>
            </div>
        </section>

        <!-- Bagian Inisiatif Sosial -->
        <section class="bg-brand-bg-light py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl lg:text-4xl font-bold font-lato text-center mb-12">
                    Berawal dari Sebuah Inisiatif Sosial
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-base leading-relaxed text-justify">
                    <div class="space-y-6">
                        <p>Agrotera adalah sebuah UMKM yang bergerak di bidang agrokultur, dengan fokus utama pada penjualan sayur-mayur dan buah segar langsung dari petani lokal. Usaha ini kami dirikan di Desa Gondang pada tahun 2022.</p>
                        <p>Namun, Agrotera lahir bukan hanya sebagai bisnis. Kami berdiri sebagai inisiatif sosial untuk memperbaiki kesejahteraan petani. Kami prihatin melihat rantai distribusi yang panjang seringkali tidak berpihak pada mereka, para pahlawan pangan kita, sehingga harga jual hasil panen mereka tidak sepadan.</p>
                    </div>
                    <div class="space-y-6">
                        <p>Kami percaya ini harus diubah. Karena itu, kami membangun usaha ini dengan tujuan mulia: memutus rantai tersebut agar petani mendapatkan harga jual yang lebih layak. Perjalanan ini tidak kami lalui sendirian; kami tumbuh bersama rekan-rekan seperjuangan dan mendapat dukungan operasional awal dari mitra kami, LAZIS Jawa Tengah.</p>
                        <p>Apa yang dimulai sebagai sebuah gerakan, kini telah bertransformasi menjadi perusahaan sosial yang solid. Dengan dukungan 4 pemegang saham dan kekuatan Para karyawan Kami, Agrotera terus berkomitmen menghadirkan dampak sosial dan ekonomi yang nyata bagi masyarakat desa Gondang.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Visi & Misi -->
        <section class="bg-brand-bg-medium py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <!-- Visi -->
                <div class="flex flex-col md:flex-row gap-4 md:gap-12">
                    <h3 class="text-5xl font-bold font-lato w-full md:w-1/4 flex-shrink-0">Visi Kami</h3>
                    <p class="text-base leading-relaxed text-justify md:w-3/4">
                        Agrotera memiliki impian untuk menjadi perusahaan agrokultur yang memberikan dampak nyata bagi kesejahteraan masyarakat serta memberdayakan petani lokal. Kami percaya bahwa kemajuan pertanian tidak hanya diukur dari hasil panen, tetapi juga dari meningkatnya kualitas hidup para petani dan tumbuhnya kemandirian di desa.
                    </p>
                </div>
                <!-- Misi -->
                <div class="flex flex-col md:flex-row gap-4 md:gap-12">
                    <h3 class="text-5xl font-bold font-lato w-full md:w-1/4 flex-shrink-0">Misi Kami</h3>
                    <p class="text-base leading-relaxed text-justify md:w-3/4">
                        Agrotera berkomitmen untuk menjaga stabilitas harga hasil pertanian agar para petani memperoleh keuntungan yang adil di setiap kondisi pasar. Kami juga terus membangun sistem distribusi yang efisien, memastikan setiap hasil panen dapat sampai ke tangan pelanggan dengan cepat dan tetap segar. Selain itu, Agrotera aktif melibatkan generasi muda desa dalam berbagai kegiatan pertanian dan kewirausahaan lokal, sebagai upaya menciptakan regenerasi petani dan membuka peluang ekonomi baru di pedesaan.
                    </p>
                </div>
            </div>
        </section>

        <!-- Bagian Nilai-Nilai Utama -->
        <section class="bg-brand-bg-gray py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Judul -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold font-lato">Nilai-Nilai Utama Kami</h2>
                    <p class="text-base lg:text-lg leading-relaxed mt-4">
                        Tiga nilai ini adalah kompas yang memandu setiap keputusan dan tindakan kami dalam menjalankan misi kami.
                    </p>
                </div>
                
                <!-- Kartu Nilai-Nilai -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Nilai 1: Bertumbuh & Dinamis -->
                    <div class="flex flex-col items-center text-center">
                        <div class="flip-card mb-6">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <i data-lucide="trending-up" class="w-20 h-20"></i>
                                </div>
                                <div class="flip-card-back">
                                    <i data-lucide="trending-up" class="w-20 h-20"></i>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Bertumbuh & Dinamis</h3>
                        <p class="text-base leading-relaxed max-w-xs">
                            Kami terus berkembang dan beradaptasi menghadapi perubahan untuk memberikan yang terbaik.
                        </p>
                    </div>
                    
                    <!-- Nilai 2: Inovatif -->
                    <div class="flex flex-col items-center text-center">
                        <div class="flip-card mb-6">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <i data-lucide="lightbulb" class="w-20 h-20"></i>
                                </div>
                                <div class="flip-card-back">
                                    <i data-lucide="lightbulb" class="w-20 h-20"></i>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Inovatif</h3>
                        <p class="text-base leading-relaxed max-w-xs">
                            Selalu mencari cara baru untuk menciptakan kemajuan bersama.
                        </p>
                    </div>
                    
                    <!-- Nilai 3: Pemberdayaan -->
                    <div class="flex flex-col items-center text-center">
                        <div class="flip-card mb-6">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <i data-lucide="users" class="w-20 h-20"></i>
                                </div>
                                <div class="flip-card-back">
                                    <i data-lucide="users" class="w-20 h-20"></i>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Pemberdayaan</h3>
                        <p class="text-base leading-relaxed max-w-xs">
                            Fokus utama kami adalah meningkatkan kesejahteraan petani dan memberdayakan masyarakat desa.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Mengapa Memilih Kami -->
        <section class="bg-brand-bg-light py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Judul -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold font-lato">Mengapa Memilih Kami?</h2>
                    <p class="text-base lg:text-lg leading-relaxed mt-4">
                        Saat Anda memilih Agrotera, Anda tidak hanya mendapatkan produk terbaik, tapi juga menjadi bagian dari gerakan kebaikan bersama.
                    </p>
                </div>
                
                <!-- Daftar Keunggulan -->
                <div class="max-w-4xl mx-auto space-y-6">
                    <!-- Item 1: Harga Terjangkau -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col sm:flex-row items-start gap-6 advantage-card">
                        <div class="bg-brand-green text-white p-4 rounded-xl flex-shrink-0">
                            <i data-lucide="tag" class="w-10 h-10"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold font-lato mb-2">Harga Lebih Terjangkau</h3>
                            <p class="text-base leading-relaxed">
                                Kami memutus rantai perantara dan mengambil produk langsung dari petani. Ini membuat harga kami lebih adil untuk Anda dan lebih layak untuk petani.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Item 2: Produk Dijamin Segar -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col sm:flex-row items-start gap-6 advantage-card">
                        <div class="bg-brand-green text-white p-4 rounded-xl flex-shrink-0">
                            <i data-lucide="leaf" class="w-10 h-10"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold font-lato mb-2">Produk Dijamin Segar</h3>
                            <p class="text-base leading-relaxed">
                                Hasil panen tidak perlu disimpan lama. Produk kami kirimkan segera setelah panen untuk menjaga kesegaran alaminya saat tiba di tangan Anda.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3: Dampak Sosial Nyata -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col sm:flex-row items-start gap-6 advantage-card">
                        <div class="bg-brand-green text-white p-4 rounded-xl flex-shrink-0">
                            <i data-lucide="heart-handshake" class="w-10 h-10"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold font-lato mb-2">Dampak Sosial Nyata</h3>
                            <p class="text-base leading-relaxed">
                                Setiap transaksi Anda berkontribusi langsung pada kesejahteraan petani dan pengembangan masyarakat desa.
                            </p>
                        </div>
                    </div>

                    <!-- Item 4: Layanan Sangat Praktis -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col sm:flex-row items-start gap-6 advantage-card">
                        <div class="bg-brand-green text-white p-4 rounded-xl flex-shrink-0">
                            <i data-lucide="truck" class="w-10 h-10"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold font-lato mb-2">Layanan Sangat Praktis</h3>
                            <p class="text-base leading-relaxed">
                                Kami memberikan kemudahan maksimal untuk Anda dengan layanan bebas ongkos kirim tanpa minimal pembelian.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    @include('components.footer')

    <script>
        // Skrip untuk mengaktifkan ikon Lucide
        lucide.createIcons();

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