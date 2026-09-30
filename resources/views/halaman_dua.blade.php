<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Suasana Kafe - Wonorejo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 text-slate-100 font-sans">

    <!-- Navigasi -->
    <nav class="border-b border-slate-800 bg-slate-900 fixed w-full top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 h-16 flex justify-between items-center">
            <a href="{{ route('kafe.satu') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/wnj.jpeg') }}" alt="Logo" class="h-8 w-auto">
                <span class="font-bold text-lg text-amber-400">Wonorejo Spot</span>
            </a>
            <div class="flex gap-6 text-sm">
                <a href="{{ route('kafe.satu') }}" class="text-slate-300 hover:text-amber-400 transition">Daftar Kafe</a>
                <a href="{{ route('kafe.dua') }}" class="text-amber-400 font-medium">Galeri Suasana</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-28 pb-16 max-w-5xl mx-auto px-6">
        <div class="mb-8 border-b border-slate-800 pb-4">
            <h1 class="text-2xl font-bold text-white">Galeri Suasana & Dokumentasi</h1>
            <p class="text-slate-400 text-sm mt-1">Potret suasana tempat dan fasilitas kafe di kawasan Wonorejo.</p>
        </div>

        <!-- Grid Galeri Gambar -->
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">

            <div class="bg-slate-800 border border-slate-700/60 rounded-lg overflow-hidden">
                <img src="{{ asset('images/image.png') }}" alt="Area Outdoor Cafe" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-white">Area Outdoor Sawah</h3>
                    <p class="text-slate-400 text-xs mt-1">Suasana santai terbuka dengan pemandangan alami.</p>
                </div>
            </div>

            <div class="bg-slate-800 border border-slate-700/60 rounded-lg overflow-hidden">
                <img src="{{ asset('images/mr.jpeg') }}" alt="Warkop & Gaming" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-white">Area Gaming & Rental PS</h3>
                    <p class="text-slate-400 text-xs mt-1">Fasilitas bermain konsol game untuk pengunjung.</p>
                </div>
            </div>

            <div class="bg-slate-800 border border-slate-700/60 rounded-lg overflow-hidden">
                <img src="{{ asset('images/menu.jpeg') }}" alt="Kedai Kopi" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-white">Menu Kopi & Camilan</h3>
                    <p class="text-slate-400 text-xs mt-1">Sajian olahan kopi dan cemilan hangat malam hari.</p>
                </div>
            </div>

        </div>

        <div class="border-t border-slate-800 pt-6">
            <a href="{{ route('kafe.satu') }}" class="text-xs text-amber-400 hover:underline">
                &larr; Kembali ke Daftar Kafe
            </a>
        </div>
    </main>

    <footer class="border-t border-slate-800 py-6 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} Wonorejo Cafe & Drinking
    </footer>

</body>
</html>