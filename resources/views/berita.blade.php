<?php
?>

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
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-lato {
            font-family: 'Lato', sans-serif;
        }

        /* Container */
    .container {
        max-width: 1440px;
        margin: 0 auto;
        background: #F5F5DC;
        font-family: 'Inter', sans-serif;
        position: relative;
        color: #200E0D;
    }

    /* Hero Section */
    .hero {
        position: relative;
        height: 500px;
        margin-bottom: 0px;
    }

    .hero-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .hero-overlay {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .hero-text {
        position: absolute;
        top: 187px;
        left: 200px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        color: white;
        max-width: 1040px;
    }

    .hero-text h1 {
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        font-size: 50px;
        margin: 0;
        text-align: center;
    }

    .hero-text p {
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        font-size: 22px;
        margin: 0;
        text-align: center;
    }

    /* Style dasar card Featured News dan Latest News */
    .featured-news-card,
    .news-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* transition duration-300 */
    }

    /* Efek hover: naik sedikit dan shadow lebih besar */
    .featured-news-card:hover,
    .news-card:hover {
        transform: translateY(-4px); /* hover:-translate-y-1 (sekitar -0.25rem = -4px) */
        box-shadow: 0 0px 10px rgba(0, 0, 0, 0.25); /* hover:shadow-xl */
        cursor: pointer; /* opsional, agar pointer berubah saat hover */
    }


    /* Featured News Section */
    .featured-news-section {
        padding: 48px 0px 60px 0px;
        background-color: #F5F5DC;
    }

    .featured-news-section h2 {
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .featured-news-card {
        display: flex;
        background: white;
        border-radius: 20px;
        box-shadow: 0px 0px 6px rgba(0,0,0,0.25);
        overflow: hidden;
        gap: 20px;
        padding: 20px;
    }

    .featured-news-card img {
        flex: 0 0 439px;
        height: 320px;
        margin: 20px 20px 20px 20px;
        padding-bottom: 4px;
        object-fit: cover;
    }

    .featured-news-content {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .tag-date {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-bottom: 15px;
    }

    .tag {
        background: rgba(166, 134, 94, 0.1);
        color: #A6865E;
        padding: 4px 12px;
        border-radius: 9999px;
        font-weight: 500;
        font-size: 14px;
    }

    time {
        color: #A6865E;
        font-size: 14px;
        font-weight: 500;
    }

    .featured-news-content h3 {
        font-weight: 700;
        font-size: 20px;
        color: #1F2937;
        margin: 0 0 15px 0;
    }

    .featured-news-content p {
        font-weight: 400;
        font-size: 14px;
        line-height: 24px;
        color: #5D4037;
        flex-grow: 1;
    }

    .btn-read-more { 
    background: #6B8E23;
    color: white;
    border-radius: 9999px;
    padding: 10px 20px;
    font-weight: 500;
    font-size: 14px;
    text-align: center;
    width: fit-content;
    margin-top: 20px;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    display: inline-flex;
    max-width: max-content;
}

/* Hover untuk tombol "Baca selengkapnya" */
.btn-read-more:hover {
    background-color: #FFFEFA; /* Warna latar belakang saat hover */
    color: #6B8E23; /* Warna teks berubah */
    border: 1px solid #6B8E23; /* Tambahkan border */
}


    /* Latest News Section */
    .latest-news-section {
        padding: 2px 100px 80px 100px;
        background-color: #F5F5DC;
    }

    .latest-news-section h2 {
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .latest-news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .news-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0px 0px 6px rgba(0,0,0,0.25);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .news-card img {
        width: 100%;
        height: 192px;
        object-fit: cover;
    }

    .news-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .news-content h3 {
        font-weight: 700;
        font-size: 15.3px;
        color: #1F2937;
        margin: 0;
    }

    .news-content p {
        font-weight: 400;
        font-size: 14px;
        line-height: 24px;
        color: #5D4037;
        margin: 0;
    }

    .btn-read-news {
        font-weight: 500;
        font-size: 11.9px;
        color: #A6865E;
        text-decoration: none;
        align-self: flex-start;
        display: inline-flex;
        gap: 6px;
        cursor: pointer;
        margin-top: auto;
    }
    .btn-read-news:hover {
        text-decoration: underline;
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

    /* Responsive */
    @media (max-width: 768px) {
        .header-content,
        .footer-content {
        flex-direction: column;
        align-items: center;
        text-align: center;
        }
        .footer-bottom {
        flex-direction: column;
        gap: 10px;
        }
        .hero-text {
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        max-width: 90%;
        }
        .btn-contact {
        padding: 10px 15px;
        }
    }
    </style>
</head>

<body class="bg-beige">
    
    <!-- navbar -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section id="bannerberita" class="relative h-[500px] flex justify-center items-center text-center text-white mb-8">
        <img src="aset/bannerberita.png" alt="Banner" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-10"></div>
        <div class="relative max-w-5xl px-6 slide-in-left">
            <h1 class="text-5xl font-semibold font-lato mb-3" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">Berita Agrotera & Cerita Komunitas</h1>
            <p class="text-lg" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">Update, inisiatif, dan kisah nyata gerakan pertanian Desa Gondang.</p>
        </div>
    </section>

    <!-- Berita Unggulan -->
    <section class="py-0 sm:py-2 lg:py-6 bg-beige mb-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-2xl font-semibold text-secondary font-lato mb-6">Berita Unggulan</h2>
            <article class="featured-news-card">
                <img src="aset/beritaunggulan.png" alt="Berita Unggulan" />
                <div class="featured-news-content">
                    <div class="tag-date">
                        <span class="tag">Artikel</span>
                        <time datetime="2025-08-23">August 23, 2025</time>
                    </div>
                    <h3>Agrotera secara resmi membuka Rest Area pada 23 Agustus 2025, sebuah langkah besar untuk mengatasi masalah pemasaran (hilirisasi) bagi para petani sayur di Desa Gondang dan sekitarnya.</h3>
                    <p>Sejak 2022, inisiatif ini telah terbukti berhasil menstabilkan harga panen dan menarik 13 pemuda desa untuk kembali ke sektor agrikultur. Fasilitas baru ini akan menjadi pusat penjualan langsung untuk memperkuat dampak positif tersebut.</p>
                    <a href="https://kendal.suaramerdeka.com/kendal-raya/103615788788/resmi-dibuka-rest-area-agrotera-jadi-solusi-hilirisasi-petani-sayur-kendal" class="btn-read-more" target="_blank" rel="noopener noreferrer">Baca selengkapnya</a>
                </div>
            </article>
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section class="py-0 sm:py-2 lg:py-6 bg-beige mb-12 mt-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-2xl font-semibold text-secondary font-lato mb-6">Berita Terbaru</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <article class="news-card">
                    <img src="https://placehold.co/380x192" alt="Praktik Pertanian Berkelanjutan" />
                    <div class="news-content">
                        <div class="tag-date">
                            <span class="tag">Artikel</span>
                            <time datetime="2025-08-23">August 23, 2025</time>
                        </div>
                        <h3>Praktik Pertanian Berkelanjutan</h3>
                        <p>inisiatif ini telah terbukti berhasil menstabilkan harga panen dan menarik 13 pemuda desa untuk kembali ke sektor agrikultur.</p>
                        <a href="https://example.com/berita2" class="btn-read-news" target="_blank" rel="noopener noreferrer">Baca Berita &rarr;</a>
                    </div>
                </article>

                <article class="news-card">
                    <img src="https://placehold.co/380x192" alt="Praktik Pertanian Berkelanjutan" />
                    <div class="news-content">
                        <div class="tag-date">
                            <span class="tag">Artikel</span>
                            <time datetime="2025-08-23">August 23, 2025</time>
                        </div>
                        <h3>Praktik Pertanian Berkelanjutan</h3>
                        <p>inisiatif ini telah terbukti berhasil menstabilkan harga panen dan menarik 13 pemuda desa untuk kembali ke sektor agrikultur.</p>
                        <a href="https://example.com/berita3" class="btn-read-news" target="_blank" rel="noopener noreferrer">Baca Berita &rarr;</a>
                    </div>
                </article>

                <article class="news-card">
                    <img src="https://placehold.co/380x192" alt="Praktik Pertanian Berkelanjutan" />
                    <div class="news-content">
                        <div class="tag-date">
                            <span class="tag">Artikel</span>
                            <time datetime="2025-08-23">August 23, 2025</time>
                        </div>
                        <h3>Praktik Pertanian Berkelanjutan</h3>
                        <p>inisiatif ini telah terbukti berhasil menstabilkan harga panen dan menarik 13 pemuda desa untuk kembali ke sektor agrikultur.</p>
                        <a href="https://example.com/berita4" class="btn-read-news" target="_blank" rel="noopener noreferrer">Baca Berita &rarr;</a>
                    </div>
                </article>

                <article class="news-card">
                    <img src="https://placehold.co/380x192" alt="Praktik Pertanian Berkelanjutan" />
                    <div class="news-content">
                        <div class="tag-date">
                            <span class="tag">Artikel</span>
                            <time datetime="2025-08-23">August 23, 2025</time>
                        </div>
                        <h3>Praktik Pertanian Berkelanjutan</h3>
                        <p>inisiatif ini telah terbukti berhasil menstabilkan harga panen dan menarik 13 pemuda desa untuk kembali ke sektor agrikultur.</p>
                        <a href="https://example.com/berita5" class="btn-read-news" target="_blank" rel="noopener noreferrer">Baca Berita &rarr;</a>
                    </div>
                </article>

                <article class="news-card">
                    <img src="https://placehold.co/380x192" alt="Praktik Pertanian Berkelanjutan" />
                    <div class="news-content">
                        <div class="tag-date">
                            <span class="tag">Artikel</span>
                            <time datetime="2025-08-23">August 23, 2025</time>
                        </div>
                        <h3>Praktik Pertanian Berkelanjutan</h3>
                        <p>inisiatif ini telah terbukti berhasil menstabilkan harga panen dan menarik 13 pemuda desa untuk kembali ke sektor agrikultur.</p>
                        <a href="https://example.com/berita6" class="btn-read-news" target="_blank" rel="noopener noreferrer">Baca Berita &rarr;</a>
                    </div>
                </article>

                <article class="news-card">
                    <img src="https://placehold.co/380x192" alt="Praktik Pertanian Berkelanjutan" />
                    <div class="news-content">
                        <div class="tag-date">
                            <span class="tag">Artikel</span>
                            <time datetime="2025-08-23">August 23, 2025</time>
                        </div>
                        <h3>Praktik Pertanian Berkelanjutan</h3>
                        <p>inisiatif ini telah terbukti berhasil menstabilkan harga panen dan menarik 13 pemuda desa untuk kembali ke sektor agrikultur.</p>
                        <a href="https://example.com/berita7" class="btn-read-news" target="_blank" rel="noopener noreferrer">Baca Berita &rarr;</a> <!-- Mengubah link ke berita7 untuk menghindari duplikasi -->
                    </div>
                </article>
            </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script>
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