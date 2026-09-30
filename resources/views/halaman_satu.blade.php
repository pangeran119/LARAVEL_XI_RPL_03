<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kafe & Tempat Nongkrong Wonorejo</title>
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
                <a href="{{ route('kafe.satu') }}" class="text-amber-400 font-medium">Daftar Kafe</a>
                <a href="{{ route('kafe.dua') }}" class="text-slate-300 hover:text-amber-400 transition">Galeri Suasana</a>
            </div>
        </div>
    </nav>

    <!-- Header / Banner -->
    <header class="pt-28 pb-12 border-b border-slate-800 bg-slate-950">
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="text-3xl font-bold text-white mb-3">Rekomendasi Kafe & Tempat Nongkrong Wonorejo</h1>
            <p class="text-slate-400 text-sm max-w-2xl leading-relaxed">
                Pilihan tempat bersantai, nikmati kopi, hingga tempat main game bersama teman di kawasan Wonorejo, Pasuruan.
            </p>
        </div>
    </header>

    <!-- Content / Grid Kafe -->
    <main class="py-12 max-w-5xl mx-auto px-6">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-slate-800/50 border border-slate-800 p-5 rounded-lg flex flex-col justify-between">
                <div>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-amber-400 bg-amber-400/10 px-2 py-0.5 rounded">Outdoor & Sawah</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2">Kedai Kopi Oemah Sawah</h3>
                    <p class="text-slate-300 text-xs leading-relaxed mb-4">
                        Konsep santai dengan pemandangan area persawahan yang sejuk. Cocok untuk minum kopi di sore hari.
                    </p>
                </div>
                <div class="border-t border-slate-700/60 pt-3 text-[11px] text-slate-400">
                    Lokasi: Dusun Tumpuk Sambisirah
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-slate-800/50 border border-slate-800 p-5 rounded-lg flex flex-col justify-between">
                <div>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-amber-400 bg-amber-400/10 px-2 py-0.5 rounded">Teh & Kopi</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2">Demi Kopi Wonorejo</h3>
                    <p class="text-slate-300 text-xs leading-relaxed mb-4">
                        Menyediakan varian Demikopi, Sehatea, dan Demikriuk. Tempat luas untuk kumpul bersama komunitas.
                    </p>
                </div>
                <div class="border-t border-slate-700/60 pt-3 text-[11px] text-slate-400">
                    Lokasi: Mulyorejo Wonorejo
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-slate-800/50 border border-slate-800 p-5 rounded-lg flex flex-col justify-between">
                <div>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-amber-400 bg-amber-400/10 px-2 py-0.5 rounded">Makanan & Minuman Ringan</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2">Angkringan Wonorejo</h3>
                    <p class="text-slate-300 text-xs leading-relaxed mb-4">
                        Perpaduan tempat makan dan ruang santai di tepi jalan utama dengan aneka menu hidangan lokal.
                    </p>
                </div>
                <div class="border-t border-slate-700/60 pt-3 text-[11px] text-slate-400">
                    Lokasi: Jalan Utama Wonorejo
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-slate-800/50 border border-slate-800 p-5 rounded-lg flex flex-col justify-between">
                <div>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-amber-400 bg-amber-400/10 px-2 py-0.5 rounded">Gaming Cafe</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2">CAFE MR KOPI & AL GAMING</h3>
                    <p class="text-slate-300 text-xs leading-relaxed mb-4">
                        Tempat warkop/kopi yang dilengkapi fasilitas rental PS3 & PS4. Buka hingga larut malam.
                    </p>
                </div>
                <div class="border-t border-slate-700/60 pt-3 text-[11px] text-slate-400">
                    Lokasi: Alun Alun Besaran Wonorejo 
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-slate-800/50 border border-slate-800 p-5 rounded-lg flex flex-col justify-between">
                <div>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-amber-400 bg-amber-400/10 px-2 py-0.5 rounded">Nongkrong Hemat</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2">Teras Omah</h3>
                    <p class="text-slate-300 text-xs leading-relaxed mb-4">
                        Tempat makan sederhana yang memasak aneka macam masakan desa.
                    </p>
                </div>
                <div class="border-t border-slate-700/60 pt-3 text-[11px] text-slate-400">
                    Lokasi: Jalan Kandangan Pakijangan
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-slate-800/50 border border-slate-800 p-5 rounded-lg flex flex-col justify-between">
                <div>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-amber-400 bg-amber-400/10 px-2 py-0.5 rounded">Nongki Casual</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2">Warung Brick</h3>
                    <p class="text-slate-300 text-xs leading-relaxed mb-4">
                        Tempat nongkrong kasual dengan harga makanan dan minuman yang ramah di kantong.
                    </p>
                </div>
                <div class="border-t border-slate-700/60 pt-3 text-[11px] text-slate-400">
                    Lokasi: Jalan Utama Wonorejo
                </div>
            </div>

        </div>

        <div class="mt-10 border-t border-slate-800 pt-6 flex justify-end">
            <a href="{{ route('kafe.dua') }}" class="text-xs text-amber-400 hover:underline flex items-center gap-1">
                Lihat Galeri Foto & Suasana &rarr;
            </a>
        </div>
    </main>

    <footer class="border-t border-slate-800 py-6 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} Wonorejo Cafe & Drinking
    </footer>

</body>
</html>