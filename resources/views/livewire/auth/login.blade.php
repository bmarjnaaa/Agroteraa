<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - AGROTERA</title>

  <!-- TailwindCSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />

  <style>
    :root {
      --color-primary: #6B8E23; /* hijau */
      --color-secondary: #5D4037;
      --color-beige: #F5F5DC;
      --color-cream: #FFFEFA;
    }
    body {
      font-family: 'Inter', sans-serif;
      background: var(--color-beige);
    }
    .bg-login {
      background: url("{{ asset('aset/bgkontakkami.png') }}") no-repeat center center/cover;
      min-height: 944px;
    }

    .login-card {
      background: white;
      border-radius: 1.5rem;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
      width: 100%;
      max-width: 500px;
      padding: 3rem 2.5rem;
    }

    .logo-title {
      font-size: 2.125rem;
      font-weight: 700;
      color: black;
      word-wrap: break-word;
    }

    .login-subtitle {
      color: var(--color-secondary);
      font-size: 0.875rem;
      font-weight: 400;
      line-height: 1.625rem;
      text-align: center;
      max-width: 240px;
      margin-top: 0.5rem;
      margin-left: auto;
      margin-right: auto;
    }

    .input-label {
      font-size: 1rem;
      font-weight: 500;
      color: var(--color-secondary);
      line-height: 1.625rem;
      margin-bottom: 0.4rem;
      display: block;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      height: 55px;
      padding: 0 1rem;
      border-radius: 10px;
      border: 1.5px solid rgba(101, 112, 123, 0.45);
      outline-offset: -0.75px;
      font-size: 1rem;
      font-family: 'Inter', sans-serif;
      color: var(--color-secondary);
      background: white;
      box-sizing: border-box;
      transition: border-color 0.3s ease;
    }
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: var(--color-primary);
      outline: none;
    }

    button.login-btn {
      background: var(--color-primary);
      color: white;
      border-radius: 30px;
      height: 60px;
      width: 100%;
      font-size: 1rem;
      font-weight: 500;
      line-height: 1.625rem;
      margin-top: 4rem;
      cursor: pointer;
      transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
      display: inline-flex;
      justify-content: center;
      align-items: center;
    }
    button.login-btn:hover {
      background-color: var(--color-cream);
      color: var(--color-primary);
      border-color: var(--color-primary);
    }

    .logo-icon {
      width: 70px;
      height: 56px;
      background: url("{{ asset('aset/logo2.png') }}") no-repeat center center;
      background-size: contain;
      flex-shrink: 0;
    }
  </style>
</head>

<body>
  <div class="bg-login flex items-center justify-center min-h-screen p-6">
    <div class="login-card">
      {{-- Session Status (logic lama) --}}
      @if (session('status'))
        <div class="mb-4 text-sm text-green-600 text-center">
          {{ session('status') }}
        </div>
      @endif

      {{-- Error Validasi (email/password) --}}
      @if ($errors->any())
        <div class="mb-4 text-sm text-red-600">
          <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- Logo & Title -->
      <div class="flex flex-col items-center mb-8 gap-2">
        <div class="flex items-center gap-2">
          <div class="logo-icon"></div>
          <div class="logo-title">AGROTERA</div>
        </div>
        <p class="login-subtitle">Siap untuk memulai aktivitas hari ini</p>
      </div>

      <!-- Form: logic login pakai route & field lama -->
      <form method="POST" action="{{ route('login.store') }}">
        @csrf

        {{-- Email --}}
        <label for="email" class="input-label">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          value="{{ old('email') }}"
          placeholder="email@example.com"
          required
          autocomplete="email"
          autofocus
        />
        @error('email')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- Password --}}
        <label for="password" class="input-label mt-6">Kata Sandi</label>
        <div class="relative">
          <input
            type="password"
            id="password"
            name="password"
            placeholder="masukkan kata sandi"
            required
            autocomplete="current-password"
            class="w-full h-14 px-4 pr-12 rounded-lg border border-gray-300 text-secondary text-opacity-90 focus:outline-none focus:ring-2 focus:ring-primary"
          />
          <button type="button" id="togglePassword" aria-label="Tampilkan sembunyikan kata sandi" 
            class="absolute inset-y-0 right-3 flex items-center text-secondary opacity-70 hover:opacity-100 transition">
            <!-- Icon Mata Tertutup (default) -->
            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 block">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.99 9.99 0 015.449-5.916m3.976-1.23A9.97 9.97 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.99 9.99 0 01-1.581 3.019M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
            </svg>
            <!-- Icon Mata Terbuka (disembunyikan default) -->
            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 hidden">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </button>
        </div>
        @error('password')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- Tombol Login --}}
        <button type="submit" class="login-btn border border-primary hover:bg-cream hover:text-primary transition-all w-fit" data-test="login-button">Masuk</button>
      </form>

    </div>
  </div>

  <!-- Script Toggle Password -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const togglePassword = document.getElementById('togglePassword');
      const passwordInput = document.getElementById('password');
      const eyeOpen = document.getElementById('eyeOpen');
      const eyeClosed = document.getElementById('eyeClosed');
      togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        if(type === 'text') {
          eyeOpen.classList.remove('hidden');
          eyeClosed.classList.add('hidden');
        } else {
          eyeOpen.classList.add('hidden');
          eyeClosed.classList.remove('hidden');
        }
      });
    });
  </script>
</body>
</html>
