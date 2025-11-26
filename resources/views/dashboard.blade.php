<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Admin Panel')</title>

    {{-- CSS via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body
    x-data="{ page: 'dashboard', sidebarToggle: false }"
    class="bg-gray-100 dark:bg-black"
  >
    <div class="flex">
      {{-- SIDEBAR --}}
      @include('partials.sidebar')

      {{-- MAIN WRAPPER --}}
      <div class="relative flex flex-1 flex-col">
        {{-- HEADER / TOPBAR --}}
        @include('partials.header')

        {{-- KONTEN HALAMAN --}}
        <main class="p-6">
          @yield('content')
        </main>
      </div>
    </div>

    @stack('scripts')
  </body>
</html>
