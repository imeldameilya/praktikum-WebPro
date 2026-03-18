<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome | FloodSense</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
      --glass-bg: rgba(255, 255, 255, 0.15);
      --glass-border: rgba(255, 255, 255, 0.25);
      --shadow-modern: 0 10px 30px rgba(2,6,23,0.12);
      --glow-effect: 0 0 20px rgba(102, 126, 234, 0.45);
    }
    .bg-primary-gradient { background: var(--primary-gradient); }
    .bg-secondary-gradient { background: var(--secondary-gradient); }
    .soft-card { box-shadow: var(--shadow-modern); }
  </style>
</head>
<body>

  <div class="min-h-screen bg-primary-gradient flex items-center justify-center font-sans">
    <div class="w-full max-w-md mx-auto p-8 rounded-3xl bg-[var(--glass-bg)] backdrop-blur-xl border border-[var(--glass-border)] soft-card shadow-lg text-center">
      <img src="logo-removebg-preview.png" alt="Logo FloodSense" class="mx-auto mb-6" style="width: 120px;">
      <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-6">Selamat Datang di FloodSense</h1>
      <div class="flex justify-center gap-4 mb-8">
        <a href="login.php" class="w-32 py-3 rounded-lg bg-secondary-gradient text-white font-semibold shadow text-lg">Login</a>
        <a href="registrasi.php" class="w-32 py-3 rounded-lg bg-primary-gradient text-white font-semibold shadow text-lg">Register</a>
      </div>
      <p class="text-gray-700 text-sm opacity-80">Sistem informasi untuk pemantauan dan peringatan dini banjir</p>
    </div>
  </div>

</body>
</html>
