<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Reset Password - AGROTERA</title>

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
      max-width: 280px;
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
      {{-- Session Status --}}
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
          Silakan masukkan email dan kata sandi baru Anda
        </p>
      </div>

      <!-- Form Reset Password: mengikuti logic password.update -->
      <form method="POST" action="{{ route('password.update') }}">
        @csrf

        {{-- Token hidden (wajib dari link reset) --}}
        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        {{-- Email --}}
        <label for="email" class="input-label">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          value="{{ request('email') }}"
          required
          autocomplete="email"
        />
        @error('email')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- Password baru --}}
        <label for="password" class="input-label mt-6">Kata Sandi Baru</label>
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

        {{-- Konfirmasi Password --}}
        <label for="password_confirmation" class="input-label mt-6">Konfirmasi Kata Sandi Baru</label>
        <input
          type="password"
          id="password_confirmation"
          name="password_confirmation"
          placeholder="Ulangi kata sandi baru"
          required
          autocomplete="new-password"
        />
        @error('password_confirmation')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- Tombol Reset --}}
        <button
          type="submit"
          class="login-btn border border-primary hover:bg-cream hover:text-primary transition-all w-fit"
          data-test="reset-password-button"
        >
          Reset Password
        </button>
      </form>

      {{-- Opsional: link kembali ke login --}}
      <div class="mt-6 text-sm text-center text-zinc-600">
        <span>Kembali ke</span>
        <a href="{{ route('login') }}" class="text-[var(--color-primary)] font-medium hover:underline">
          halaman masuk
        </a>
      </div>
    </div>
  </div>
</body>
</html>
