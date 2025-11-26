<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGROTERA - Dari Petani Gondang, Untuk Kesejahteraan Bersama</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lato:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>

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
                        'brand-brown': '#5D4037',
                        'brand-green': '#6B8E23',
                        'brand-olive': '#A0522D',
                        'brand-bg-light': '#FFFEFA',
                        'brand-bg-medium': '#F5F5DC',
                        'brand-bg-gray': '#F5F5F5',
                        'brand-footer': '#200E0D',
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
<body class="bg-beige">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <script>
        lucide.createIcons();
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });
        });
    </script>
</body>
</html>
