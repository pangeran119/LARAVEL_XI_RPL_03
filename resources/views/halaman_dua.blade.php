<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Showcase | Terminal Hub</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Plus Jakarta Sans & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-mono-code { font-family: 'JetBrains Mono', monospace; }

        @keyframes assembleText {
            to { opacity: 1; transform: translate(0, 0) rotate(0deg) scale(1); }
        }
        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-r { opacity: 0; transform: translate(-250px, -150px) rotate(-45deg) scale(0.3); animation: assembleText 1s cubic-bezier(0.16, 1, 0.3, 1) 0.1s forwards; }
        .animate-p { opacity: 0; transform: translate(0px, 200px) rotate(90deg) scale(0.3); animation: assembleText 1s cubic-bezier(0.16, 1, 0.3, 1) 0.3s forwards; }
        .animate-l { opacity: 0; transform: translate(250px, -150px) rotate(45deg) scale(0.3); animation: assembleText 1s cubic-bezier(0.16, 1, 0.3, 1) 0.5s forwards; }
        
        .animate-ui { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.8s ease-out 0.8s forwards; }
    </style>
</head>
<body class="bg-zinc-950 text-zinc-100 min-h-screen flex flex-col justify-between selection:bg-emerald-500 selection:text-black">

    <!-- Grid Background Effect -->
    <div class="fixed inset-0 bg-[linear-gradient(to_right,#18181b_1px,transparent_1px),linear-gradient(to_bottom,#18181b_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] -z-10"></div>

    <!-- Header Navigation -->
    <header class="w-full border-b border-zinc-800/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></div>
                <span class="font-mono-code font-semibold tracking-wider text-sm text-zinc-300">RPL.DEV // v1.0</span>
            </div>
            <nav class="flex items-center gap-2 text-xs font-mono-code">
                <span class="px-3 py-1 rounded-md text-zinc-500">01. Overview</span>
                <span class="px-3 py-1 rounded-md bg-zinc-800 text-emerald-400 border border-zinc-700">02. Projects</span>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-12 flex-1 flex flex-col justify-center items-center">
        
        <!-- Animated Title -->
        <div class="mb-6 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-emerald-500/30 bg-emerald-500/10 text-emerald-400 text-xs font-mono-code mb-6">
                <span>PROJECT_SHOWCASE</span>
            </div>
            <div class="flex justify-center text-8xl sm:text-9xl font-extrabold tracking-tighter bg-gradient-to-b from-white via-zinc-200 to-zinc-600 bg-clip-text text-transparent drop-shadow-2xl">
                <span class="inline-block animate-r">R</span>
                <span class="inline-block animate-p">P</span>
                <span class="inline-block animate-l">L</span>
            </div>
        </div>

        <!-- Card Container -->
        <div class="animate-ui w-full max-w-2xl bg-zinc-900/60 border border-zinc-800 rounded-2xl p-6 sm:p-8 backdrop-blur-xl shadow-2xl shadow-emerald-950/20">
            <h1 class="text-2xl font-bold text-white mb-2 tracking-tight text-center">Featured Projects</h1>
            <p class="text-zinc-400 text-sm text-center mb-6">Daftar sistem dan aplikasi yang dikembangkan dengan arsitektur modern.</p>

            <!-- Project Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 my-6">
                
                <!-- Project 1 -->
                <div class="bg-zinc-950/80 border border-zinc-800 rounded-xl overflow-hidden flex flex-col group hover:border-emerald-500/50 transition-colors duration-300">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80" 
                             alt="Analytics Dashboard Project" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-zinc-950/90 text-emerald-400 border border-emerald-800/80 text-[10px] font-mono-code px-2 py-0.5 rounded">
                            PROJECT_01
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h2 class="text-sm font-bold text-zinc-100 mb-1">UI/UX</h2>
                            <p class="text-xs text-zinc-400 leading-relaxed mb-3">
                                Berfokus pada pembuatan antarmuka web dan aplikasi yang tidak hanya estetis secara visual, tetapi juga efisien, responsif, dan mudah digunakan.
                            </p>
                        </div>
                        <div class="flex gap-2 text-[10px] font-mono-code text-zinc-500">
                            <span class="px-2 py-0.5 rounded bg-zinc-900 border border-zinc-800">Figma</span>
                            <span class="px-2 py-0.5 rounded bg-zinc-900 border border-zinc-800">Tailwindcss</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-zinc-950/80 border border-zinc-800 rounded-xl overflow-hidden flex flex-col group hover:border-emerald-500/50 transition-colors duration-300">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80" 
                             alt="REST API Engine Project" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2 left-2 bg-zinc-950/90 text-emerald-400 border border-emerald-800/80 text-[10px] font-mono-code px-2 py-0.5 rounded">
                            PROJECT_02
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h2 class="text-sm font-bold text-zinc-100 mb-1">Web Programming</h2>
                            <p class="text-xs text-zinc-400 leading-relaxed mb-3">
                                Spesialis dalam menerjemahkan kebutuhan bisnis menjadi kode yang bersih (clean code), terstruktur, dan siap berkembang (scalable).
                            </p>
                        </div>
                        <div class="flex gap-2 text-[10px] font-mono-code text-zinc-500">
                            <span class="px-2 py-0.5 rounded bg-zinc-900 border border-zinc-800">PHP 8.2</span>
                            <span class="px-2 py-0.5 rounded bg-zinc-900 border border-zinc-800">Tailwindcss</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Back Button -->
            <a href="{{ route('halaman1') }}" 
               class="group relative inline-flex items-center justify-center w-full py-3.5 px-6 rounded-xl font-semibold text-sm bg-zinc-800 text-zinc-200 hover:bg-zinc-700 hover:text-white border border-zinc-700 transition-all duration-200 mt-2">
                <svg class="w-4 h-4 mr-2 transition-transform duration-200 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span>Kembali ke Halaman 1</span>
            </a>
        </div>

    </main>

    <!-- Footer -->
    <footer class="w-full border-t border-zinc-900 py-6 text-center text-xs font-mono-code text-zinc-600">
        BUILD_WITH_LARAVEL_12 // TAILWIND_CSS
    </footer>

</body>
</html>