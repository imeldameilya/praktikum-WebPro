<?php
session_start();
if (!isset($_SESSION['laporan_banjir'])) {
    $_SESSION['laporan_banjir'] = [
        ['lokasi' => 'Jl. Sudirman', 'ketinggian' => '20cm', 'status' => 'Waspada'],
        ['lokasi' => 'Kec. Lowokwaru', 'ketinggian' => '50cm', 'status' => 'Siaga'],
    ];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambah_laporan'])) {
    $lokasi = $_POST['lokasi'] ?? '';
    $ketinggian = $_POST['ketinggian'] ?? '';
    $status = $_POST['status'] ?? '';
    if (!empty($lokasi) && !empty($ketinggian)) {
        $data_baru = [
            'lokasi' => htmlspecialchars($lokasi),
            'ketinggian' => htmlspecialchars($ketinggian),
            'status' => htmlspecialchars($status)
        ];
        array_push($_SESSION['laporan_banjir'], $data_baru);
    }
}
?>


<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beranda - Flood Sense</title>
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
<body class="bg-white min-h-screen font-sans pt-20">
    <header>
        <nav class="fixed top-0 left-0 w-full bg-[var(--glass-bg)] backdrop-blur-xl border-b border-[var(--glass-border)] shadow-[var(--shadow-modern)] z-50">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex items-center justify-between py-3">
                    <a href="beranda.php" class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold bg-[var(--primary-gradient)] shadow-[var(--glow-effect)]">FS</div>
                        <span class="text-xl font-bold text-gray-800">Flood Sense</span>
                    </a>
                    <div class="hidden md:flex items-center gap-6">
                        <a href="beranda.php" class="text-gray-700 hover:text-pink-500">Beranda</a>
                        <a href="notifikasi.html" class="text-gray-700 hover:text-pink-500">Notifikasi</a>
                        <a href="berita.html" class="text-gray-700 hover:text-pink-500">Berita</a>
                        <a href="peta.html" class="text-gray-700 hover:text-pink-500">Peta</a>
                        <a href="kamera.html" class="text-gray-700 hover:text-pink-500">Kamera</a>
                        <a href="laporan.html" class="text-gray-700 hover:text-pink-500">Laporan</a>
                        <a href="evakuasi.html" class="text-gray-700 hover:text-pink-500">Evakuasi</a>
                        <a href="about us.html" class="text-gray-700 hover:text-pink-500">About Us</a>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="login.php" class="px-3 py-1 rounded-md text-sm bg-secondary-gradient text-white shadow-[var(--glow-effect)]">Logout</a>
                        <button class="md:hidden text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="w-full bg-primary-gradient py-32 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 relative">
            <div class="rounded-3xl p-16 md:p-24 relative flex flex-col md:flex-row items-center gap-12 bg-[var(--glass-bg)] backdrop-blur-xl border border-[var(--glass-border)] shadow-[var(--shadow-modern)]">
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-4xl md:text-6xl font-extrabold text-white">Flood Sense</h2>
                    <p class="mt-4 text-white/90 max-w-2xl mx-auto md:mx-0">Pantau banjir secara real-time, kirim laporan, lihat lokasi evakuasi, dan dapatkan notifikasi penting.</p>
                </div>
                <div class="flex-1 flex justify-center md:justify-end">
                    <div class="w-full max-w-md md:max-w-lg h-56 bg-white/90 rounded-xl flex items-center justify-center soft-card overflow-hidden relative">
                        <svg class="w-full h-full" viewBox="0 0 320 170" xmlns="http://www.w3.org/2000/svg">
                            <rect width="320" height="170" rx="16" fill="#E6F6FF" />
                            <g fill="#8ED0FF"><ellipse cx="110" cy="125" rx="110" ry="24" /></g>
                            <g fill="#FFB46E"><rect x="44" y="66" width="74" height="48" rx="6" /><rect x="190" y="50" width="64" height="36" rx="6" /></g>
                            <g fill="#74C69D"><circle cx="260" cy="74" r="16" /></g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <svg class="absolute bottom-0 left-0 w-full" viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg"><path fill="#ffffff" d="M0,32 C240,96 480,0 720,32 C960,64 1200,16 1440,64 L1440,120 L0,120 Z"></path></svg>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">Pantauan & Laporan Banjir</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-lg p-8 soft-card">
                    <h5 class="text-xl font-semibold mb-4 text-gray-800">Input Laporan Banjir</h5>
                    <form method="POST">
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Lokasi Kejadian</label>
                            <input type="text" name="lokasi" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:outline-none" placeholder="Contoh: Jl. Mawar" required>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Ketinggian Air</label>
                            <input type="text" name="ketinggian" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:outline-none" placeholder="Contoh: 40cm" required>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-gray-700">Status</label>
                            <select name="status" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:outline-none">
                                <option value="Aman">Aman</option>
                                <option value="Waspada">Waspada</option>
                                <option value="Siaga">Siaga</option>
                                <option value="Darurat">Darurat</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah_laporan" class="w-full py-2 rounded-lg bg-primary-gradient text-white font-semibold shadow">Tambah Laporan</button>
                    </form>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8 soft-card">
                    <h5 class="text-xl font-semibold mb-4 text-gray-800">Data Pantauan Banjir Terkini</h5>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2">#</th>
                                    <th class="px-4 py-2">Lokasi</th>
                                    <th class="px-4 py-2">Ketinggian</th>
                                    <th class="px-4 py-2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION['laporan_banjir'] as $index => $laporan): ?>
                                <tr class="border-b">
                                    <td class="px-4 py-2"><?php echo $index + 1; ?></td>
                                    <td class="px-4 py-2"><?php echo $laporan['lokasi']; ?></td>
                                    <td class="px-4 py-2"><?php echo $laporan['ketinggian']; ?></td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 py-1 rounded text-xs font-semibold <?php 
                                            echo ($laporan['status'] == 'Darurat') ? 'bg-red-500 text-white' : 
                                                (($laporan['status'] == 'Siaga') ? 'bg-yellow-400 text-gray-800' : 
                                                (($laporan['status'] == 'Waspada') ? 'bg-orange-400 text-white' : 'bg-green-500 text-white'));
                                        ?>">
                                            <?php echo $laporan['status']; ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php if(count($_SESSION['laporan_banjir']) == 0): ?>
                            <p class="text-center text-gray-500 mt-4">Belum ada data laporan.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>