<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Flood Sense</title>
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
<body class="bg-primary-gradient min-h-screen font-sans flex items-center justify-center">

    <div class="w-full max-w-md mx-auto p-6 rounded-3xl bg-[var(--glass-bg)] backdrop-blur-xl border border-[var(--glass-border)] soft-card shadow-lg">
        <div class="flex flex-col items-center">
            <div class="w-14 h-14 rounded-full flex items-center justify-center text-white font-bold bg-[var(--primary-gradient)] shadow-[var(--glow-effect)] mb-4">FS</div>
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Login ke Flood Sense</h3>
        </div>
        <form onsubmit="login(event)" class="space-y-6">
            <div>
                <label class="block mb-2 text-gray-700">Email</label>
                <input type="email" id="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:outline-none bg-white/80" placeholder="contoh@email.com" required>
            </div>
            <div>
                <label class="block mb-2 text-gray-700">Kata Sandi</label>
                <div class="relative">
                    <input type="password" id="password" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:outline-none bg-white/80 pr-10" placeholder="Masukkan kata sandi" required>
                    <button type="button" onclick="togglePassword()" class="absolute right-2 top-2 text-gray-500 hover:text-blue-500 focus:outline-none">
                        👁️
                    </button>
                </div>
            </div>
            <button type="submit" class="w-full py-2 rounded-lg bg-secondary-gradient text-white font-semibold shadow">Masuk</button>
        </form>
        <p class="text-center mt-6">
            <a href="welcome-page.php" class="text-blue-600 hover:text-pink-500">Kembali ke Halaman Awal</a>
        </p>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            password.type = password.type === "password" ? "text" : "password";
        }
        function login(event) {
            event.preventDefault();
            // login berhasil (simulasi)
            window.location.href = "beranda.php";
        }
    </script>
</body>
</html>