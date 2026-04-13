@extends('layouts.app')

@section('title', 'Profil Praktikan - AmikomEventHub')

@section('content')

{{-- Page Header --}}
<div class="text-center mb-12">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
        <span class="bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Profil Praktikan</span>
    </h1>
    <p class="text-lg text-slate-400">Informasi lengkap mengenai praktikan AmikomEventHub</p>
</div>

{{-- Profile Card --}}
<div class="max-w-3xl mx-auto">
    <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden">

        {{-- Card Header / Banner --}}
        <div class="h-36 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 relative">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.08%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')] opacity-30"></div>
        </div>

        {{-- Avatar --}}
        <div class="flex justify-center -mt-16 relative z-10">
            <div class="w-32 h-32 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 p-1 shadow-xl shadow-indigo-500/30">
                <div class="w-full h-full rounded-full bg-slate-800 flex items-center justify-center">
                    <span class="text-4xl font-bold text-indigo-400"> PROFIL </span>
                </div>
            </div>
        </div>

        {{-- Profile Info --}}
        <div class="p-8 pt-6 text-center">
            <h2 class="text-2xl font-bold text-white mb-1">Praktikan NIM 3362</h2>
            <p class="text-indigo-400 font-medium mb-6">Mahasiswa Informatika &mdash; Universitas AMIKOM Yogyakarta</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left mt-8">
                <div class="bg-slate-700/30 rounded-xl p-5 border border-slate-600/30">
                    <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold mb-1">Nama Lengkap</p>
                    <p class="text-white font-medium">MUHAMAD RAFI AQIL FARRUK</p>
                </div>
                <div class="bg-slate-700/30 rounded-xl p-5 border border-slate-600/30">
                    <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold mb-1">NIM</p>
                    <p class="text-white font-medium">3362</p>
                </div>
                <div class="bg-slate-700/30 rounded-xl p-5 border border-slate-600/30">
                    <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold mb-1">Program Studi</p>
                    <p class="text-white font-medium">Sistem Informasi</p>
                </div>
                <div class="bg-slate-700/30 rounded-xl p-5 border border-slate-600/30">
                    <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold mb-1">Mata Kuliah</p>
                    <p class="text-white font-medium">Digital Bisnis</p>
                </div>
                <div class="bg-slate-700/30 rounded-xl p-5 border border-slate-600/30 md:col-span-2">
                    <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold mb-1">Tentang Saya</p>
                    <p class="text-slate-300 leading-relaxed">Seorang mahasiswa Sistem Informasi di Universitas AMIKOM Yogyakarta yang memiliki minat di bidang pengembangan web. Saat ini sedang mempelajari framework Laravel untuk membangun aplikasi web modern.</p>
                </div>
            </div>

            {{-- Skills --}}
            <div class="mt-8">
                <h3 class="text-sm text-slate-500 uppercase tracking-wider font-semibold mb-4">Keahlian</h3>
                <div class="flex flex-wrap justify-center gap-2">
                    <span class="px-4 py-1.5 bg-indigo-500/10 text-indigo-300 rounded-full text-sm font-medium ring-1 ring-indigo-500/20">PHP</span>
                    <span class="px-4 py-1.5 bg-purple-500/10 text-purple-300 rounded-full text-sm font-medium ring-1 ring-purple-500/20">Laravel</span>
                    <span class="px-4 py-1.5 bg-cyan-500/10 text-cyan-300 rounded-full text-sm font-medium ring-1 ring-cyan-500/20">Tailwind CSS</span>
                    <span class="px-4 py-1.5 bg-amber-500/10 text-amber-300 rounded-full text-sm font-medium ring-1 ring-amber-500/20">JavaScript</span>
                    <span class="px-4 py-1.5 bg-green-500/10 text-green-300 rounded-full text-sm font-medium ring-1 ring-green-500/20">MySQL</span>
                    <span class="px-4 py-1.5 bg-pink-500/10 text-pink-300 rounded-full text-sm font-medium ring-1 ring-pink-500/20">HTML & CSS</span>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Navigation Buttons --}}
<div class="flex flex-wrap justify-center gap-4 mt-12">
    <a href="/" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        🏠 Home
    </a>
    <a href="/katalog" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
        📋 Katalog Event
    </a>
    <a href="/bantuan" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        ❓ Bantuan
    </a>
    <a href="/kontak" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        📧 Kontak
    </a>
</div>

@endsection
