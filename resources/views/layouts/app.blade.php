<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AmikomEventHub - Platform Event Mahasiswa AMIKOM">
    <title>@yield('title', 'AmikomEventHub')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        * { font-family: 'Inter', sans-serif; }
        .nav-link {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bg-mesh {
            background-color: #0f172a;
            background-image:
                radial-gradient(at 47% 33%, #1e3a5f 0, transparent 59%),
                radial-gradient(at 82% 65%, #1a1a4e 0, transparent 55%);
        }
    </style>
</head>
<body class="bg-mesh min-h-screen text-white font-inter">

    {{-- Navbar --}}
    <nav class="sticky top-0 z-50 backdrop-blur-xl bg-slate-900/80 border-b border-slate-700/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                {{-- Logo --}}
                <a href="/" class="flex items-center gap-2 group">
                    <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/30 group-hover:shadow-indigo-500/50 transition-shadow">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <span class="text-lg font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">AmikomEventHub</span>
                </a>

                {{-- Navigation Links --}}
                <div class="flex items-center gap-1">
                    <a href="/"
                       class="nav-link px-4 py-2 rounded-lg text-sm font-medium {{ request()->is('/') ? 'bg-indigo-500/20 text-indigo-300 ring-1 ring-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                        🏠 Home
                    </a>
                    <a href="/profil"
                       class="nav-link px-4 py-2 rounded-lg text-sm font-medium {{ request()->is('profil') ? 'bg-indigo-500/20 text-indigo-300 ring-1 ring-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                        👤 Profil
                    </a>
                    <a href="/katalog"
                       class="nav-link px-4 py-2 rounded-lg text-sm font-medium {{ request()->is('katalog') ? 'bg-indigo-500/20 text-indigo-300 ring-1 ring-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                        📋 Katalog
                    </a>
                    <a href="/bantuan"
                       class="nav-link px-4 py-2 rounded-lg text-sm font-medium {{ request()->is('bantuan') ? 'bg-indigo-500/20 text-indigo-300 ring-1 ring-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                        ❓ Bantuan
                    </a>
                    <a href="/kontak"
                       class="nav-link px-4 py-2 rounded-lg text-sm font-medium {{ request()->is('kontak') ? 'bg-indigo-500/20 text-indigo-300 ring-1 ring-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                        📧 Kontak
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="border-t border-slate-700/50 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center text-slate-500 text-sm">
                <p>&copy; 2026 AmikomEventHub &mdash; NIM 3362 | Laravel App</p>
                <p class="mt-1">Dibuat dengan ❤️ menggunakan Laravel & Tailwind CSS</p>
            </div>
        </div>
    </footer>

</body>
</html>
