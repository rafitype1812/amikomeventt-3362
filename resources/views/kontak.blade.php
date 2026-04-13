@extends('layouts.app')

@section('title', 'Kontak - AmikomEventHub')

@section('content')

{{-- Page Header --}}
<div class="text-center mb-12">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
        <span class="bg-gradient-to-r from-pink-400 to-rose-400 bg-clip-text text-transparent">Hubungi Kami</span>
    </h1>
    <p class="text-lg text-slate-400">Jangan ragu untuk menghubungi tim AmikomEventHub</p>
</div>

<div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

    {{-- Contact Info --}}
    <div class="space-y-6">
        <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shrink-0 shadow-lg shadow-indigo-500/20">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-1">Email</h3>
                    <p class="text-indigo-400">rafiaqil18@students.amikom.ac.id</p>
                    <p class="text-sm text-slate-500 mt-1">Respons dalam 1x24 jam</p>
                </div>
            </div>
        </div>

        <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shrink-0 shadow-lg shadow-emerald-500/20">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-1">Telepon</h3>
                    <p class="text-emerald-400">0831-0781-9553</p>
                    <p class="text-sm text-slate-500 mt-1">Senin - Jumat, 08:00 - 16:00 WIB</p>
                </div>
            </div>
        </div>

        <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center shrink-0 shadow-lg shadow-amber-500/20">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-1">Alamat</h3>
                    <p class="text-amber-400">Universitas AMIKOM Yogyakarta</p>
                    <p class="text-sm text-slate-500 mt-1">Jl. Ring Road Utara, Condong Catur, Sleman, Yogyakarta 55283</p>
                </div>
            </div>
        </div>

        <div class="card-hover bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center shrink-0 shadow-lg shadow-pink-500/20">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-1">Media Sosial</h3>
                    <div class="flex gap-3 mt-2">
                        <span class="px-3 py-1.5 bg-blue-500/10 text-blue-400 rounded-lg text-sm font-medium ring-1 ring-blue-500/20">Instagram</span>
                        <span class="px-3 py-1.5 bg-sky-500/10 text-sky-400 rounded-lg text-sm font-medium ring-1 ring-sky-500/20">Twitter</span>
                        <span class="px-3 py-1.5 bg-indigo-500/10 text-indigo-400 rounded-lg text-sm font-medium ring-1 ring-indigo-500/20">LinkedIn</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact Form --}}
    <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
        <h2 class="text-2xl font-bold text-white mb-6">Kirim Pesan</h2>
        <form class="space-y-5">
            <div>
                <label class="block text-sm font-medium text-slate-400 mb-2">Nama Lengkap</label>
                <input type="text" placeholder="Masukkan nama Anda"
                       class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600/50 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-400 mb-2">Email</label>
                <input type="email" placeholder="Masukkan email Anda"
                       class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600/50 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-400 mb-2">Subjek</label>
                <input type="text" placeholder="Subjek pesan"
                       class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600/50 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-400 mb-2">Pesan</label>
                <textarea rows="5" placeholder="Tulis pesan Anda di sini..."
                          class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600/50 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all resize-none"></textarea>
            </div>
            <button type="submit"
                    class="w-full px-8 py-3.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-[1.02] transition-all duration-300">
                Kirim Pesan →
            </button>
        </form>
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
    <a href="/katalog" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
        📋 Katalog Event
    </a>
    <a href="/bantuan" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        ❓ Bantuan
    </a>
</div>

@endsection
