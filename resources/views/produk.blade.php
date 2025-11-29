<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AGROTERA - Dari Petani Gondang, Untuk Kesejahteraan Bersama</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lato:wght@400;500;600;700&display=swap" rel="stylesheet" />

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
            'brand-brown': '#5D4037',
          },
          fontFamily: {
            inter: ['Inter', 'sans-serif'],
            lato: ['Lato', 'sans-serif'],
          },
        },
      },
    };
  </script>

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    .font-lato {
      font-family: 'Lato', sans-serif;
    }

    /* Animasi slide-in dari kanan */
    .slide-in-right {
        opacity: 0;
        transform: translateX(100%);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }
    .slide-in-right.animate {
        opacity: 1;
        transform: translateX(0);
    }

    /* Gaya untuk card produk */
    .filter-btn {
      padding: 0.5rem 1.5rem; /* py-2 px-6 */
      border-radius: 9999px;
      font-family: 'Inter', sans-serif;
      font-weight: 500;
      font-size: 0.875rem; /* text-sm */
      cursor: pointer;
      box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.18);
      transition: background-color 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
      background-color: white;
      color: #5D4037;
    }
    .filter-btn.active {
      background-color: #6B8E23;
      color: white;
      box-shadow: 0 4px 15px rgba(107, 142, 35, 0.8);
    }
    .filter-btn:hover:not(.active) {
      background-color: #5D4037; /* Ganti warna background saat hover */
      color: white; /* Warna teks putih saat hover */
      box-shadow: 0 6px 20px rgba(107, 142, 35, 0.15);
    }

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

  </style>
</head>

<body class="bg-cream text-brand-brown min-h-screen flex flex-col">

  <!-- Navbar -->
  @include('components.navbar')
  

  <!-- Hero Section -->
<section class="relative h-[500px] w-full flex">
  <img src="aset/bannerproduk.png" alt="Banner" class="absolute inset-0 w-full h-full object-cover"/>
  <div class="absolute inset-0"></div>
  <div class="relative z-10 max-w-7xl w-full mx-auto flex slide-in-right">
    <div class="w-full lg:w flex flex-col justify-center items-end px-6 py-10 text-left">
      <div class="relative max-w-xl text-brand-brown font-lato text-[40px] sm:text-5xl leading-tight pr-8">
        <p>
          <span class="font-bold">Lihat lebih dekat</span>
          <span class="font-normal"> produk </span>
          <span class="font-light">segar kami untuk</span> <br />
          <span class="font-semibold">bisnis kuliner dan kebutuhan dapur Anda.</span>
        </p>
      </div>
    </div>
  </div>
</section>

  <!-- Products Section -->
<section class="bg-cream flex-grow max-w-screen-xl mx-auto w-full px- pt-20 pb-20">
  <h2 class="text-center text-brand-brown font-semibold mb-6 font-lato text-xl sm:text-2xl md:text-3xl">
    Lihat Pilihan Produk Kami
  </h2>

  <div class="flex flex-wrap justify-center gap-2 sm:gap-4 mb-10 p-2">
    <button class="filter-btn active">All Products</button>
    <button class="filter-btn">Sayuran</button>
    <button class="filter-btn">Buah</button>
    <button class="filter-btn">Bumbu</button>
    <button class="filter-btn">Umbi - Umbian</button>
    <button class="filter-btn">Rempah</button>
  </div>

  <div class="max-w-[1200px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 justify-center">
    <!-- Loop dinamis untuk produk dari database -->
    @foreach($products as $product)
    <article class="card-produk bg-beige rounded-lg shadow-lg overflow-hidden relative font-lato w-full max-w-[280px] mx-auto" data-category="{{ $product->category }}">
      <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-[224px] object-cover" />
      <div class="p-4 text-brand-brown relative">
        <div class="tag absolute top-[8px] left-4 bg-white rounded-full px-3 py-[2px] font-inter font-medium text-xs text-primary inline-block">{{ $product->category }}</div>
        <h3 class="card-title font-bold text-xl mt-6 mb-1">{{ $product->name }}</h3>
        <p class="card-subtitle text-sm font-inter text-brand-brown/80 leading-5">{{ $product->description ?? 'Deskripsi tidak tersedia' }}</p>
      </div>
    </article>
    @endforeach
  </div>
</section>


    <!-- Footer -->
    @include('components.footer')

    <script>
      // JavaScript untuk trigger animasi saat scroll - taruh di bagian bawah sebelum </body>
      document.addEventListener('DOMContentLoaded', () => {
          const slideElement = document.querySelector('.slide-in-right');
          const observer = new IntersectionObserver((entries) => {
              entries.forEach(entry => {
                  if (entry.isIntersecting) {
                      entry.target.classList.add('animate');
                      observer.unobserve(entry.target); // Hentikan observasi setelah animasi
                  }
              });
          });
          if(slideElement) observer.observe(slideElement);
      });

      // Kode baru untuk filter produk
      document.addEventListener('DOMContentLoaded', () => {
          const filterButtons = document.querySelectorAll('.filter-btn'); // Ambil semua tombol filter
          const productCards = document.querySelectorAll('.card-produk'); // Ambil semua card produk

          // Fungsi untuk menyaring produk
          function filterProducts(category) {
              productCards.forEach(card => {
                  const tagElement = card.querySelector('.tag'); // Ambil elemen tag di dalam card
                  const cardCategory = tagElement ? tagElement.textContent.trim() : ''; // Ambil teks tag (misalnya "Sayur")

                  // Jika kategori adalah "All Products" atau cocok dengan tag, tampilkan; jika tidak, sembunyikan
                  if (category === 'All Products' || 
                      (category === 'Sayuran' && cardCategory === 'Sayur') ||
                      (category === 'Buah' && cardCategory === 'Buah') ||
                      (category === 'Bumbu' && cardCategory === 'Bumbu') ||
                      (category === 'Umbi - Umbian' && cardCategory === 'Umbi') ||
                      (category === 'Rempah' && cardCategory === 'Rempah')) {
                      card.style.display = 'block'; // Tampilkan card
                  } else {
                      card.style.display = 'none'; // Sembunyikan card
                  }
              });
          }

          // Tambahkan event listener ke setiap tombol filter
          filterButtons.forEach(button => {
              button.addEventListener('click', () => {
                  // Hapus class 'active' dari semua tombol
                  filterButtons.forEach(btn => btn.classList.remove('active'));
                  // Tambahkan class 'active' ke tombol yang diklik
                  button.classList.add('active');

                  // Ambil teks tombol sebagai kategori
                  const category = button.textContent.trim();
                  // Panggil fungsi filter
                  filterProducts(category);
              });
          });

          // Secara default, tampilkan semua produk (karena "All Products" aktif)
          filterProducts('All Products');
      });
      
      // JavaScript untuk trigger animasi saat scroll - taruh di bagian bawah sebelum </body>
      document.addEventListener('DOMContentLoaded', () => {
          const slideElement = document.querySelector('.slide-in-right');
          const observer = new IntersectionObserver((entries) => {
              entries.forEach(entry => {
                  if (entry.isIntersecting) {
                      entry.target.classList.add('animate');
                      observer.unobserve(entry.target); // Hentikan observasi setelah animasi
                  }
              });
          });
          if(slideElement) observer.observe(slideElement);
      });
    </script>

</body>
</html>