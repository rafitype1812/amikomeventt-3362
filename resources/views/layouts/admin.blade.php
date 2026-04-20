<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AmikomEventHub - Admin Panel">
    <title>@yield('title', 'Admin Panel') | AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { 'inter': ['Inter', 'sans-serif'] },
                }
            }
        }
    </script>
    <style>
        * { font-family: 'Inter', sans-serif; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0f172a; }
        ::-webkit-scrollbar-thumb { background: #334155; border-radius: 3px; }
        .sidebar-link {
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .sidebar-link:hover, .sidebar-link.active {
            background: rgba(99, 102, 241, 0.15);
            color: #a5b4fc;
            transform: translateX(4px);
        }
        .sidebar-link.active {
            border-left: 3px solid #6366f1;
        }
        .stat-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="bg-slate-950 text-white min-h-screen flex">

    {{-- ========== SIDEBAR ========== --}}
    <aside class="w-64 shrink-0 min-h-screen bg-slate-900 border-r border-slate-700/50 flex flex-col fixed top-0 left-0 h-full z-30">

        {{-- Logo --}}
        <div class="px-6 py-5 border-b border-slate-700/50">
            <a href="/" class="flex items-center gap-2.5 group">
                <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-500/30">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-white text-sm font-bold">AmikomEventHub</p>
                    <p class="text-indigo-400 text-xs font-medium">Admin Panel</p>
                </div>
            </a>
        </div>

        {{-- Navigation Menu --}}
        <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">

            <p class="text-slate-500 text-xs font-semibold uppercase tracking-wider px-2 mb-3">Utama</p>

            <a href="/admin"
               class="sidebar-link {{ request()->is('admin') ? 'active' : '' }} flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 text-sm font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                </svg>
                Dashboard
            </a>

            <p class="text-slate-500 text-xs font-semibold uppercase tracking-wider px-2 mt-5 mb-3">Manajemen</p>

            <a href="/admin/events"
               class="sidebar-link {{ request()->is('admin/events') ? 'active' : '' }} flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 text-sm font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Events
            </a>

            <a href="/admin/categories"
               class="sidebar-link {{ request()->is('admin/categories') ? 'active' : '' }} flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 text-sm font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
                Kategori
            </a>

            <a href="/admin/transactions"
               class="sidebar-link {{ request()->is('admin/transactions') ? 'active' : '' }} flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 text-sm font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                Transaksi
            </a>

        </nav>

        {{-- Bottom: Back to site --}}
        <div class="px-4 py-4 border-t border-slate-700/50">
            <a href="/"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/50 text-sm font-medium transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Situs
            </a>
        </div>
    </aside>

    {{-- ========== MAIN WRAPPER ========== --}}
    <div class="flex-1 flex flex-col ml-64 min-h-screen">

        {{-- Top Navbar --}}
        <header class="sticky top-0 z-20 h-16 bg-slate-900/80 backdrop-blur-xl border-b border-slate-700/50 flex items-center px-6 justify-between">
            <div>
                <h1 class="text-white font-bold text-lg">@yield('page-title', 'Dashboard')</h1>
                <p class="text-slate-400 text-xs">@yield('page-subtitle', 'Selamat datang di panel admin')</p>
            </div>

            <div class="flex items-center gap-3">
                {{-- Notifications --}}
                <button class="relative w-9 h-9 rounded-lg bg-slate-700/50 flex items-center justify-center text-slate-300 hover:text-white hover:bg-slate-700 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-red-500"></span>
                </button>

                {{-- Avatar --}}
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-slate-700/50 cursor-pointer hover:bg-slate-700 transition-all">
                    <div class="w-7 h-7 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white text-xs font-bold">A</div>
                    <span class="text-slate-200 text-sm font-medium">Admin</span>
                </div>
            </div>
        </header>

        {{-- Page Content --}}
        <main class="flex-1 p-6 overflow-y-auto">
            @yield('content')
        </main>

    </div>

</body>
</html>
