<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Daftar - AGROTERA</title>

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
      max-width: 260px;
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

    input[type="text"],
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
    input[type="text"]:focus,
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
      margin-top: 2.5rem;
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

      {{-- Error Validasi --}}
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
        <p class="login-subtitle">
          Buat akun baru untuk mulai menggunakan AGROTERA
        </p>
      </div>

      <!-- Form Register: mengikuti logic register.store -->
      <form method="POST" action="{{ route('register.store') }}">
        @csrf

        {{-- Name --}}
        <label for="name" class="input-label">Nama Lengkap</label>
        <input
          type="text"
          id="name"
          name="name"
          value="{{ old('name') }}"
          placeholder="Nama lengkap"
          required
          autocomplete="name"
          autofocus
        />
        @error('name')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- Email --}}
        <label for="email" class="input-label mt-6">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          value="{{ old('email') }}"
          placeholder="email@example.com"
          required
          autocomplete="email"
        />
        @error('email')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- Password --}}
        <label for="password" class="input-label mt-6">Kata Sandi</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Minimal 8 karakter"
          required
          autocomplete="new-password"
        />
        @error('password')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- Confirm Password --}}
        <label for="password_confirmation" class="input-label mt-6">Konfirmasi Kata Sandi</label>
        <input
          type="password"
          id="password_confirmation"
          name="password_confirmation"
          placeholder="Ulangi kata sandi"
          required
          autocomplete="new-password"
        />
        @error('password_confirmation')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- Tombol Register --}}
        <button
          type="submit"
          class="login-btn border border-primary hover:bg-cream hover:text-primary transition-all w-fit"
          data-test="register-user-button"
        >
          Buat Akun
        </button>
      </form>

      {{-- Link ke Login --}}
      <div class="mt-6 text-sm text-center text-zinc-600">
        <span>Sudah punya akun?</span>
        <a href="{{ route('login') }}" class="text-[var(--color-primary)] font-medium hover:underline">
          Masuk di sini
        </a>
      </div>
    </div>
  </div>
</body>
</html>
