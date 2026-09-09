<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur - Pangeran.Com</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col justify-between selection:bg-indigo-500 selection:text-white">

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 backdrop-blur-md bg-slate-950/80 border-b border-slate-800/80">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-xl tracking-tight text-white">
                <span class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center text-sm font-extrabold shadow-lg shadow-indigo-500/30">P</span>
                Pangeran.Com<span class="text-indigo-400">.</span>
            </a>
            
            <nav class="flex items-center gap-1 bg-slate-900/90 p-1.5 rounded-full border border-slate-800">
                <a href="{{ route('home') }}" class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 text-slate-400 hover:text-slate-200">
                   Beranda
                </a>
                <a href="{{ route('fitur') }}" class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 bg-indigo-600 text-white shadow-md shadow-indigo-500/20">
                   Layanan & Fitur
                </a>
            </nav>
        </div>
    </header>

    <!-- Konten Utama Halaman 2 -->
    <main class="flex-grow">
        <section class="max-w-6xl mx-auto px-6 py-16">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Layanan Unggulan RPL</h2>
                <p class="text-slate-400 text-sm sm:text-base">Kamu berada di Halaman 2. Berikut fitur dan kemampuan utama tim pengembang kami.</p>
            </div>

            <!-- Grid Kartu Gambar Halaman 2 -->
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <div class="bg-slate-900/60 border border-slate-800/80 rounded-2xl p-6 hover:border-slate-700 transition-all group">
                    <div class="space-y-4">
                        <div class="overflow-hidden rounded-xl h-48 border border-slate-800">
                            <img src="https://images.pexels.com/photos/31343288/pexels-photo-31343288/free-photo-of-kode-javascript-berwarna-pada-layar.jpeg?cs=tinysrgb&dpr=1&w=500" alt="Cloud Data" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="text-xl font-bold text-white">Pengembangan Web & Frontend</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Membangun antarmuka web yang interaktif, responsif, dan dinamis menggunakan standar JavaScript modern.</p>
                    </div>
                </div>

                <div class="bg-slate-900/60 border border-slate-800/80 rounded-2xl p-6 hover:border-slate-700 transition-all group">
                    <div class="space-y-4">
                        <div class="overflow-hidden rounded-xl h-48 border border-slate-800">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRibmsQqn6jAmZ-Uk0_47ul3-NA9-XdOLQLnRMApnE47A&s=10" alt="Security System" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="text-xl font-bold text-white">Pengembangan Aplikasi Mobile</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Pembuatan aplikasi Android dan iOS yang efisien, handal, serta terintegrasi langsung dengan backend.</p>
                    </div>
                </div>
            </div>

            <!-- Tombol Kembali ke Halaman 1 -->
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-800 bg-slate-900 hover:bg-slate-800 text-slate-300 font-medium text-sm transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Kembali ke Halaman 1 (Beranda)
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-900 bg-slate-950 py-8">
        <div class="max-w-6xl mx-auto px-6 text-center text-xs text-slate-500">
            &copy; 2026 Pangeran.Com Inc. Dibuat dengan Laravel & Tailwind CSS.
        </div>
    </footer>

</body>
</html>