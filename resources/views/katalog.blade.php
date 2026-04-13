@extends('layouts.app')

@section('title', 'Katalog Event - AmikomEventHub')

@section('content')

{{-- Page Header --}}
<div class="text-center mb-12">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
        <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Katalog Event</span>
    </h1>
    <p class="text-lg text-slate-400">Daftar event yang tersedia di AmikomEventHub</p>
</div>

{{-- Stats Bar --}}
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
    <div class="bg-slate-800/50 backdrop-blur-sm rounded-xl p-5 border border-slate-700/50 text-center">
        <p class="text-3xl font-bold text-white">12</p>
        <p class="text-sm text-slate-400 mt-1">Total Event</p>
    </div>
    <div class="bg-slate-800/50 backdrop-blur-sm rounded-xl p-5 border border-slate-700/50 text-center">
        <p class="text-3xl font-bold text-green-400">5</p>
        <p class="text-sm text-slate-400 mt-1">Sedang Berlangsung</p>
    </div>
    <div class="bg-slate-800/50 backdrop-blur-sm rounded-xl p-5 border border-slate-700/50 text-center">
        <p class="text-3xl font-bold text-amber-400">4</p>
        <p class="text-sm text-slate-400 mt-1">Akan Datang</p>
    </div>
    <div class="bg-slate-800/50 backdrop-blur-sm rounded-xl p-5 border border-slate-700/50 text-center">
        <p class="text-3xl font-bold text-slate-400">3</p>
        <p class="text-sm text-slate-400 mt-1">Selesai</p>
    </div>
</div>

{{-- Event Cards --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    {{-- Event 1 --}}
    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden group">
        <div class="h-44 bg-gradient-to-br from-indigo-600 to-purple-700 relative flex items-center justify-center">
            <svg class="w-16 h-16 text-white/20 group-hover:text-white/30 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <div class="absolute top-4 right-4 px-3 py-1 bg-green-500/90 text-white text-xs font-bold rounded-full">ONGOING</div>
        </div>
        <div class="p-6">
            <p class="text-xs text-indigo-400 font-semibold uppercase tracking-wider mb-2">Seminar</p>
            <h3 class="text-lg font-bold text-white mb-2">Seminar Nasional IT 2026</h3>
            <p class="text-sm text-slate-400 mb-4">Membahas tren teknologi terkini dan masa depan industri digital Indonesia.</p>
            <div class="flex items-center gap-4 text-xs text-slate-500">
                <span class="flex items-center gap-1">📅 15 Apr 2026</span>
                <span class="flex items-center gap-1">📍 Auditorium AMIKOM</span>
            </div>
        </div>
    </div>

    {{-- Event 2 --}}
    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden group">
        <div class="h-44 bg-gradient-to-br from-emerald-600 to-teal-700 relative flex items-center justify-center">
            <svg class="w-16 h-16 text-white/20 group-hover:text-white/30 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
            <div class="absolute top-4 right-4 px-3 py-1 bg-green-500/90 text-white text-xs font-bold rounded-full">ONGOING</div>
        </div>
        <div class="p-6">
            <p class="text-xs text-emerald-400 font-semibold uppercase tracking-wider mb-2">Workshop</p>
            <h3 class="text-lg font-bold text-white mb-2">Workshop Laravel & Vue.js</h3>
            <p class="text-sm text-slate-400 mb-4">Belajar membangun full-stack modern web app dengan Laravel dan Vue.js.</p>
            <div class="flex items-center gap-4 text-xs text-slate-500">
                <span class="flex items-center gap-1">📅 20 Apr 2026</span>
                <span class="flex items-center gap-1">📍 Lab Komputer 3</span>
            </div>
        </div>
    </div>

    {{-- Event 3 --}}
    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden group">
        <div class="h-44 bg-gradient-to-br from-amber-600 to-orange-700 relative flex items-center justify-center">
            <svg class="w-16 h-16 text-white/20 group-hover:text-white/30 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
            <div class="absolute top-4 right-4 px-3 py-1 bg-amber-500/90 text-white text-xs font-bold rounded-full">UPCOMING</div>
        </div>
        <div class="p-6">
            <p class="text-xs text-amber-400 font-semibold uppercase tracking-wider mb-2">Kompetisi</p>
            <h3 class="text-lg font-bold text-white mb-2">Hackathon AMIKOM 2026</h3>
            <p class="text-sm text-slate-400 mb-4">Kompetisi coding 48 jam untuk memecahkan permasalahan dunia nyata.</p>
            <div class="flex items-center gap-4 text-xs text-slate-500">
                <span class="flex items-center gap-1">📅 1 Mei 2026</span>
                <span class="flex items-center gap-1">📍 Gedung Serbaguna</span>
            </div>
        </div>
    </div>

    {{-- Event 4 --}}
    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden group">
        <div class="h-44 bg-gradient-to-br from-pink-600 to-rose-700 relative flex items-center justify-center">
            <svg class="w-16 h-16 text-white/20 group-hover:text-white/30 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
            </svg>
            <div class="absolute top-4 right-4 px-3 py-1 bg-green-500/90 text-white text-xs font-bold rounded-full">ONGOING</div>
        </div>
        <div class="p-6">
            <p class="text-xs text-pink-400 font-semibold uppercase tracking-wider mb-2">Webinar</p>
            <h3 class="text-lg font-bold text-white mb-2">Webinar UI/UX Design</h3>
            <p class="text-sm text-slate-400 mb-4">Pelajari prinsip desain modern dan teknik prototyping menggunakan Figma.</p>
            <div class="flex items-center gap-4 text-xs text-slate-500">
                <span class="flex items-center gap-1">📅 18 Apr 2026</span>
                <span class="flex items-center gap-1">📍 Online (Zoom)</span>
            </div>
        </div>
    </div>

    {{-- Event 5 --}}
    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden group">
        <div class="h-44 bg-gradient-to-br from-cyan-600 to-blue-700 relative flex items-center justify-center">
            <svg class="w-16 h-16 text-white/20 group-hover:text-white/30 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <div class="absolute top-4 right-4 px-3 py-1 bg-amber-500/90 text-white text-xs font-bold rounded-full">UPCOMING</div>
        </div>
        <div class="p-6">
            <p class="text-xs text-cyan-400 font-semibold uppercase tracking-wider mb-2">Meetup</p>
            <h3 class="text-lg font-bold text-white mb-2">Community Meetup Tech</h3>
            <p class="text-sm text-slate-400 mb-4">Bertemu dan berdiskusi bersama komunitas developer AMIKOM.</p>
            <div class="flex items-center gap-4 text-xs text-slate-500">
                <span class="flex items-center gap-1">📅 25 Apr 2026</span>
                <span class="flex items-center gap-1">📍 Cafeteria Kampus</span>
            </div>
        </div>
    </div>

    {{-- Event 6 --}}
    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden group">
        <div class="h-44 bg-gradient-to-br from-violet-600 to-fuchsia-700 relative flex items-center justify-center">
            <svg class="w-16 h-16 text-white/20 group-hover:text-white/30 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
            </svg>
            <div class="absolute top-4 right-4 px-3 py-1 bg-slate-500/90 text-white text-xs font-bold rounded-full">SELESAI</div>
        </div>
        <div class="p-6">
            <p class="text-xs text-violet-400 font-semibold uppercase tracking-wider mb-2">Sertifikasi</p>
            <h3 class="text-lg font-bold text-white mb-2">Sertifikasi Web Developer</h3>
            <p class="text-sm text-slate-400 mb-4">Program sertifikasi kompetensi web development berskala nasional.</p>
            <div class="flex items-center gap-4 text-xs text-slate-500">
                <span class="flex items-center gap-1">📅 10 Mar 2026</span>
                <span class="flex items-center gap-1">📍 Lab Komputer 1</span>
            </div>
        </div>
    </div>

</div>

{{-- Navigation Buttons --}}
<div class="flex flex-wrap justify-center gap-4 mt-12">
    <a href="/" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        🏠 Home
    </a>
    <a href="/profil" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        👤 Profil
    </a>
    <a href="/bantuan" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
        ❓ Bantuan
    </a>
    <a href="/kontak" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        📧 Kontak
    </a>
</div>

@endsection
