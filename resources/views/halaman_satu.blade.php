<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Pangeran.Com</title>
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
                <a href="{{ route('home') }}" class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 bg-indigo-600 text-white shadow-md shadow-indigo-500/20">
                   Beranda
                </a>
                <a href="{{ route('fitur') }}" class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 text-slate-400 hover:text-slate-200">
                   Layanan & Fitur
                </a>
            </nav>
        </div>
    </header>

    <!-- Konten Utama Halaman 1 -->
    <main class="flex-grow">
        <section class="max-w-6xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
            <div class="flex-1 space-y-6 text-center md:text-left">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span> Platform Masa Depan
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-[1.15]">
                    Mengubah Baris Kode  <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400">Menjadi Solusi Masa Depan.</span>
                </h1>
                <p class="text-slate-400 text-base sm:text-lg max-w-xl">
                    Menghubungkan logika, kreativitas, dan teknologi modern untuk merancang serta membangun aplikasi berkualitas tinggi yang siap menjawab tantangan dunia digital. Klik tombol di bawah untuk menuju ke Halaman 2.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4 pt-2">
                    <a href="{{ route('fitur') }}" class="w-full sm:w-auto px-7 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 font-semibold text-white shadow-lg shadow-indigo-600/30 transition-all text-sm flex items-center justify-center gap-2 group">
                        Pergi ke Halaman 2 (Fitur)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Gambar Halaman 1 -->
            <div class="flex-1 relative w-full">
                <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl blur-2xl opacity-25"></div>
                <div class="relative rounded-2xl border border-slate-800 bg-slate-900/80 p-2 overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" alt="Dashboard" class="rounded-xl w-full object-cover h-[350px]">
                </div>
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