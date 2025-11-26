<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - AGROTERA</title>
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
                        brown: '#A0522D',
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
        
        /* Style hover untuk tombol Kirim pesan */
        .submit-button {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .submit-button:hover {
            background-color: #FFFEFA; /* cream */
            color: #5D4037; /* secondary */
        }
    </style>
</head>

<body class="bg-beige">
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Hero Section with Form -->
    <section class="relative bg-cream py-12 sm:py-16 lg:py-20">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('aset/bgkontakkami.png');"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12 max-w-3xl mx-auto">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 font-lato mb-4">
                    Kontak Kami
                </h1>
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                    Punya pertanyaan atau butuh informasi lebih lanjut?<br class="hidden sm:block"/>
                    Silakan isi formulir di bawah ini untuk berbicara dengan tim kami. Kami siap membantu Anda.
                </p>
            </div>

            <!-- Contact Form Card -->
            <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-2xl p-6 sm:p-8 lg:p-16">
                <div class="text-center mb-8">
                    <h2 class="text-2xl sm:text-3xl font-semibold text-gray-900 font-lato">
                        Sampaikan Pesan Anda
                    </h2>
                </div>

                <form class="space-y-6" method="POST" action="">
                    <!-- Nama Lengkap -->
                    <div>
                        <input 
                            type="text" 
                            name="nama" 
                            placeholder="Nama Lengkap"
                            class="w-full px-6 py-4 bg-white border border-gray-200 rounded-3xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-base"
                            required
                        >
                    </div>

                    <!-- Email -->
                    <div>
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="Email"
                            class="w-full px-6 py-4 bg-white border border-gray-200 rounded-3xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-base"
                            required
                        >
                    </div>

                    <!-- Pesan -->
                    <div>
                        <textarea 
                            name="pesan" 
                            placeholder="Pesan"
                            rows="6"
                            class="w-full px-6 py-4 bg-white border border-gray-200 rounded-3xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-base resize-none"
                            required
                        ></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button 
                            type="submit"
                            class="px-8 py-3 bg-brown text-white rounded-full border border-secondary submit-button font-medium text-base"
                        >
                            Kirim pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script>
        // Form handling (optional - tambahkan PHP processing di sini)
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = htmlspecialchars($_POST['nama'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $pesan = htmlspecialchars($_POST['pesan'] ?? '');

            // Di sini Anda bisa menambahkan logika untuk:
            // - Simpan ke database
            // - Kirim email
            // - Validasi data

            echo "
            // Show success message
            alert('Terima kasih! Pesan Anda telah terkirim.');
            ";
        }
        ?>
    </script>
</body>
</html>
