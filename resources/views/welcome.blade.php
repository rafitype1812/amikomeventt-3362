@extends('layouts.app')

@section('title', 'Home - AmikomEventHub')

@section('content')

{{-- Hero Section --}}
<div class="text-center py-16">
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 ring-1 ring-indigo-500/20 text-indigo-300 text-sm font-medium mb-6">
        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
        Platform Event Mahasiswa
    </div>
    <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
        Selamat Datang di<br>
        <span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">AmikomEventHub</span>
    </h1>
    <p class="text-xl text-slate-400 max-w-2xl mx-auto mb-10">
        Platform terpusat untuk menemukan, mengikuti, dan mengelola event-event menarik di lingkungan kampus AMIKOM Yogyakarta.
    </p>
    <div class="flex items-center justify-center gap-4">
        <a href="/katalog"
           class="px-8 py-3.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
            Jelajahi Event →
        </a>
        <a href="/profil"
           class="px-8 py-3.5 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
            Lihat Profil
        </a>
    </div>
</div>

{{-- Feature Cards --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center mb-5 shadow-lg shadow-blue-500/20">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-3">Katalog Event</h3>
        <p class="text-slate-400 leading-relaxed">Temukan beragam event kampus mulai dari seminar, workshop, hingga kompetisi yang menarik.</p>
    </div>

    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-500 to-pink-400 flex items-center justify-center mb-5 shadow-lg shadow-purple-500/20">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-3">Profil Praktikan</h3>
        <p class="text-slate-400 leading-relaxed">Lihat informasi lengkap tentang praktikan yang mengembangkan aplikasi ini.</p>
    </div>

    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-amber-500 to-orange-400 flex items-center justify-center mb-5 shadow-lg shadow-amber-500/20">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>
        <h3 class="text-xl font-bold text-white mb-3">Pusat Bantuan</h3>
        <p class="text-slate-400 leading-relaxed">Punya pertanyaan? Temukan jawaban di halaman FAQ dan pusat bantuan kami.</p>
    </div>
</div>

@endsection
