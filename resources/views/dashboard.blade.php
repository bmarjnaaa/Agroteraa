<!DOCTYPE html>
<html lang="id">
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
                    },
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                        lato: ['Lato', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-beige font-inter">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-80 bg-white border-r border-gray-200 shadow-lg">
            <div class="p-8">
                <!-- Logo -->
                <div class="flex items-center mb-8">
                    <img src="aset/logo2.png" alt="AGROTERA Logo" class="w-15 h-12 mr-4" />
                    <h1 class="text-2xl font-bold text-secondary font-inter">AGROTERA</h1>
                </div>

                <!-- Menu Title -->
                <h2 class="text-secondary text-opacity-70 text-lg font-lato mb-4">MENU</h2>

                <nav class="space-y-2 font-lato text-secondary">
                  <!-- Item Dasbor -->
                  <div>
                    <button type="button" aria-expanded="false" aria-controls="submenu-dasbor"
                      class="flex items-center w-full px-4 py-3 rounded-lg text-secondary bg-secondary bg-opacity-10 hover:bg-secondary hover:bg-opacity-20 transition focus:outline-none"
                      onclick="toggleMenu('submenu-dasbor', this)">
                      
                      <!-- Icon Dasbor -->
                      <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                      </svg>

                      <span>Dasbor</span>

                      <!-- Panah -->
                      <svg class="w-4 h-4 ml-auto transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                      </svg>
                    </button>

                    <!-- Submenu Dasbor (Akun) -->
                    <div id="submenu-dasbor" class="hidden pl-12 mt-1 space-y-1">
                      <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-secondary hover:bg-opacity-20 transition">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Akun
                      </a>
                    </div>
                  </div>

                  <!-- Item Menambah Konten -->
                  <div>
                    <button type="button" aria-expanded="false" aria-controls="submenu-menambah"
                      class="flex items-center w-full px-4 py-3 rounded-lg text-secondary hover:bg-secondary hover:bg-opacity-20 transition focus:outline-none"
                      onclick="toggleMenu('submenu-menambah', this)">
                      
                      <!-- Icon Menambah Konten -->
                      <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                      </svg>

                      <span>Menambah Konten</span>

                      <!-- Panah -->
                      <svg class="w-4 h-4 ml-auto transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                      </svg>
                    </button>

                    <!-- Submenu Menambah Konten (Produk, Berita, Testimoni) -->
                    <div id="submenu-menambah" class="hidden pl-12 mt-1 space-y-1">
                      <a href="#" class="flex items-center px-4 py-3 rounded-lg text-secondary hover:bg-secondary hover:bg-opacity-20 transition">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        Produk
                      </a>
                      <a href="#" class="flex items-center px-4 py-3 rounded-lg text-secondary hover:bg-secondary hover:bg-opacity-20 transition">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        Berita
                      </a>
                      <a href="#" class="flex items-center px-4 py-3 rounded-lg text-secondary hover:bg-secondary hover:bg-opacity-20 transition">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Testimoni
                      </a>
                    </div>
                  </div>
                </nav>

                <!-- Tombol Keluar diletakkan di paling bawah dengan posisi sticky -->
              <div class="sticky bottom-0 mt-8 bg-white pt-4 border-t border-gray-200">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit"
                    class="flex items-center px-4 py-3 bg-primary bg-opacity-10 rounded-lg text-primary font-lato font-semibold w-full hover:bg-primary hover:text-cream transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Keluar
                  </button>
                </form>
              </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header yang di kanan atas -->
            <header class="bg-white border-b border-gray-200">
                <div class="flex items-center justify-end px-12 py-4">
                    <div class="flex items-center space-x-4">
                        <div class="w-8 h-8 bg-secondary rounded-full border-2 border-secondary"></div>
                        <span class="text-secondary font-lato font-semibold">Admin 1</span>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <main class="flex-1 p-8 bg-[#f7f6e7]">
                <!-- Lebar max lebih besar dan padding horizontal diperbesar -->
                <div class="max-w-6xl mx-auto bg-white rounded-2xl border border-gray-300">
                    <!-- Header card dengan padding horizontal diperbesar -->
                    <div class="flex justify-between items-center px-12 py-6 border-b border-gray-300">
                        <h2 class="text-2xl font-bold text-secondary font-lato">Akun</h2>

                        <!-- Tombol tambah akun -->
                        <button class="flex items-center bg-primary px-5 py-2 rounded-md text-white text-sm font-inter hover:bg-green-700 transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Tambah Akun
                        </button>
                    </div>

                    <!-- Account Table -->
                    <div class="p-6"> <!-- Mengurangi padding dari p-10 ke p-6 agar konten lebih dekat ke tengah -->
                        <!-- Table Header dengan padding horizontal dikurangi dan gap diperkecil -->
                        <div class="grid grid-cols-4 gap-x-4 mb-6 text-sm font-lato text-secondary text-opacity-50 border-b border-gray-300 pb-3 px-4 text-center"> <!-- Mengurangi gap-x-8 ke gap-x-4, px-2 ke px-4, dan menambah text-center untuk memusatkan -->
                            <div>Nama Akun</div>
                            <div>Gmail</div> <!-- Menghapus pl-6 agar lebih simetris -->
                            <div>Kata Sandi</div>
                            <div>Hapus Akun</div>
                        </div>

                        <!-- Table Rows dengan padding horizontal dikurangi, gap diperkecil, dan memusatkan konten -->
                        <div class="grid grid-cols-4 gap-x-4 items-center text-sm font-lato text-secondary px-4 text-center"> <!-- Mengurangi gap-x-8 ke gap-x-4, px-2 ke px-4, dan menambah text-center untuk memusatkan -->
                            <div class="py-2">Admin 1</div>
                            <div class="py-2 truncate">agroterasayurmayur@gmail.com</div> <!-- Menghapus pl-6 agar lebih simetris -->
                            <div class="flex items-center justify-center space-x-4 py-2"> <!-- Menambah justify-center untuk memusatkan konten di kolom -->
                                <span class="text-xl tracking-widest select-none">•••••••</span>
                                <button class="text-secondary hover:text-primary transition" aria-label="Toggle Password Visibility">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="py-2 flex justify-center"> <!-- Menambah justify-center untuk memusatkan tombol hapus -->
                                <button class="text-red-600 hover:text-red-700 transition" aria-label="Hapus Akun">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7L5 7M10 11v6M14 11v6M5 7l1-2h12l1 2M6 7v12a2 2 0 002 2h8a2 2 0 002-2V7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script>
      function toggleMenu(submenuId, btn) {
        const submenu = document.getElementById(submenuId)
        const isHidden = submenu.classList.contains('hidden')
        // Toggle submenu visibility
        submenu.classList.toggle('hidden')

        // Cari ikon panah svg pada tombol
        const arrowSvg = btn.querySelector('svg.w-4.h-4')
        if (arrowSvg) {
          if (isHidden) {
            // ubah panah ke bawah (rotasi 90 derajat)
            arrowSvg.style.transform = 'rotate(90deg)'
          } else {
            // panah ke samping normal
            arrowSvg.style.transform = 'rotate(0)'
          }
        }
      }
    </script>
</body>
</html>