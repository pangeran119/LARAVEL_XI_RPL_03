<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Engineering | Terminal Hub</title>

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
<body class="bg-zinc-950 text-zinc-100 min-h-screen flex flex-col justify-between selection:bg-cyan-500 selection:text-black">

    <!-- Grid Background Effect -->
    <div class="fixed inset-0 bg-[linear-gradient(to_right,#18181b_1px,transparent_1px),linear-gradient(to_bottom,#18181b_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] -z-10"></div>

    <!-- Header Navigation -->
    <header class="w-full border-b border-zinc-800/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-cyan-500 animate-pulse"></div>
                <span class="font-mono-code font-semibold tracking-wider text-sm text-zinc-300">RPL.DEV // v1.0</span>
            </div>
            <nav class="flex items-center gap-2 text-xs font-mono-code">
                <span class="px-3 py-1 rounded-md bg-zinc-800 text-cyan-400 border border-zinc-700">01. Overview</span>
                <span class="px-3 py-1 rounded-md text-zinc-500">02. Projects</span>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-12 flex-1 flex flex-col justify-center items-center text-center">
        
        <!-- Animated Title -->
        <div class="mb-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-400 text-xs font-mono-code mb-6">
                <span>SYSTEM_READY</span>
            </div>
            <div class="flex justify-center text-8xl sm:text-9xl font-extrabold tracking-tighter bg-gradient-to-b from-white via-zinc-200 to-zinc-600 bg-clip-text text-transparent drop-shadow-2xl">
                <span class="inline-block animate-r">R</span>
                <span class="inline-block animate-p">P</span>
                <span class="inline-block animate-l">L</span>
            </div>
        </div>

        <!-- Card Content -->
        <div class="animate-ui w-full max-w-xl bg-zinc-900/60 border border-zinc-800 rounded-2xl p-6 sm:p-8 backdrop-blur-xl shadow-2xl shadow-cyan-950/20 text-left">
            
            <!-- Code Block Visual -->
            <div class="w-full mb-6 rounded-xl overflow-hidden border border-zinc-800 bg-zinc-950/90 font-mono-code shadow-inner">
                <!-- Window Header -->
                <div class="bg-zinc-900 px-4 py-2 border-b border-zinc-800 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-rose-500/80"></div>
                        <div class="w-3 h-3 rounded-full bg-amber-500/80"></div>
                        <div class="w-3 h-3 rounded-full bg-emerald-500/80"></div>
                    </div>
                    <span class="text-[11px] text-zinc-500">web.php — Controller</span>
                </div>
                <!-- Code Snippet -->
                <div class="p-4 text-xs sm:text-sm leading-relaxed overflow-x-auto text-zinc-300">
                    <span class="text-pink-400">Route</span>::<span class="text-sky-400">get</span>(<span class="text-emerald-400">'/'</span>, <span class="text-amber-300">function</span> () {<br>
                    &nbsp;&nbsp;<span class="text-purple-400">return</span> <span class="text-sky-400">view</span>(<span class="text-emerald-400">'halaman_satu'</span>);<br>
                    });
                </div>
            </div>

            <h1 class="text-2xl font-bold text-white mb-2 tracking-tight text-center sm:text-left">Software Engineering Workspace</h1>
            <p class="text-zinc-400 text-sm leading-relaxed mb-6 text-center sm:text-left">
                Pusat kendali arsitektur perangkat lunak, sistem logika, dan optimasi pemrosesan logika tingkat tinggi.
            </p>

            <!-- Action Button -->
            <a href="{{ route('halaman2') }}" 
               class="group relative inline-flex items-center justify-center w-full py-3.5 px-6 rounded-xl font-semibold text-sm bg-cyan-500 text-zinc-950 hover:bg-cyan-400 transition-all duration-200 shadow-[0_0_20px_rgba(6,182,212,0.3)]">
                <span>Lihat Project Showcase (Halaman 2)</span>
                <svg class="w-4 h-4 ml-2 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>

    </main>

    <!-- Footer -->
    <footer class="w-full border-t border-zinc-900 py-6 text-center text-xs font-mono-code text-zinc-600">
        BUILD_WITH_LARAVEL_12 // TAILWIND_CSS
    </footer>

</body>
</html>