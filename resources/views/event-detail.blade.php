@extends('layouts.app')

@section('title', 'Detail Event - AmikomEventHub')

@section('content')

{{-- Breadcrumb --}}
<div class="flex items-center gap-2 text-sm text-slate-400 mb-8">
    <a href="/" class="hover:text-indigo-400 transition-colors">Home</a>
    <span>/</span>
    <span class="text-white">Detail Event</span>
</div>

{{-- Event Header --}}
<div class="rounded-3xl overflow-hidden bg-gradient-to-br from-indigo-900/60 to-purple-900/60 border border-slate-700/50 mb-8">
    <div class="relative h-64 bg-gradient-to-br from-indigo-600 to-purple-700 flex items-center justify-center">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative text-center px-8">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/20 text-white text-xs font-semibold mb-4">
                🎯 Seminar Teknologi
            </span>
            <h1 class="text-4xl font-extrabold text-white mb-2">National Tech Summit 2025</h1>
            <p class="text-indigo-200">by AMIKOM Yogyakarta</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    {{-- Main Info --}}
    <div class="lg:col-span-2 space-y-6">

        {{-- Description Card --}}
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <h2 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                <span class="w-7 h-7 bg-indigo-500/20 rounded-lg flex items-center justify-center text-indigo-300">📋</span>
                Deskripsi Event
            </h2>
            <p class="text-slate-300 leading-relaxed mb-4">
                National Tech Summit 2025 adalah ajang bergengsi yang menghadirkan para pakar teknologi, inovator, dan pemimpin industri untuk berbagi wawasan terkini tentang kecerdasan buatan, blockchain, dan masa depan digital.
            </p>
            <p class="text-slate-300 leading-relaxed">
                Acara ini terbuka untuk seluruh mahasiswa AMIKOM Yogyakarta dan umum. Dapatkan sertifikat kehadiran, networking session bersama para profesional, serta doorprize menarik!
            </p>
        </div>

        {{-- Schedule Card --}}
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <h2 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                <span class="w-7 h-7 bg-green-500/20 rounded-lg flex items-center justify-center text-green-300">🗓️</span>
                Jadwal Acara
            </h2>
            <div class="space-y-3">
                @foreach([
                    ['08:00 – 09:00', 'Registrasi & Coffee Break'],
                    ['09:00 – 10:30', 'Opening Ceremony & Keynote Speaker'],
                    ['10:30 – 12:00', 'Panel Discussion: AI Revolution'],
                    ['12:00 – 13:00', 'Istirahat & Makan Siang'],
                    ['13:00 – 15:00', 'Workshop: Blockchain for Business'],
                    ['15:00 – 16:00', 'Networking Session & Closing'],
                ] as $schedule)
                <div class="flex items-start gap-4 p-3 rounded-xl bg-slate-700/30">
                    <span class="text-indigo-300 text-sm font-mono w-32 shrink-0">{{ $schedule[0] }}</span>
                    <span class="text-slate-200 text-sm">{{ $schedule[1] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Speakers --}}
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <h2 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                <span class="w-7 h-7 bg-amber-500/20 rounded-lg flex items-center justify-center text-amber-300">🎤</span>
                Pembicara
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach([
                    ['Dr. Ahmad Rifai', 'AI Research Lead, Google Indonesia', 'AR'],
                    ['Sari Dewi, M.Kom', 'Blockchain Expert, BRIN', 'SD'],
                ] as $speaker)
                <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-700/30">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm shrink-0">
                        {{ $speaker[2] }}
                    </div>
                    <div>
                        <p class="text-white font-semibold text-sm">{{ $speaker[0] }}</p>
                        <p class="text-slate-400 text-xs">{{ $speaker[1] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

    {{-- Sidebar Ticket Box --}}
    <div class="space-y-4">
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 sticky top-20">
            <div class="text-center mb-6">
                <p class="text-slate-400 text-sm mb-1">Harga Tiket</p>
                <p class="text-4xl font-extrabold text-white">Rp 75.000</p>
                <p class="text-green-400 text-xs mt-1">✔ Termasuk Sertifikat</p>
            </div>

            <div class="space-y-3 mb-6 text-sm">
                <div class="flex items-center gap-3 text-slate-300">
                    <span class="text-indigo-400">📅</span>
                    <span>Sabtu, 25 Oktober 2025</span>
                </div>
                <div class="flex items-center gap-3 text-slate-300">
                    <span class="text-indigo-400">🕗</span>
                    <span>08:00 – 16:00 WIB</span>
                </div>
                <div class="flex items-center gap-3 text-slate-300">
                    <span class="text-indigo-400">📍</span>
                    <span>Auditorium AMIKOM, Yogyakarta</span>
                </div>
                <div class="flex items-center gap-3 text-slate-300">
                    <span class="text-indigo-400">👥</span>
                    <span>Sisa <strong class="text-amber-400">24</strong> kursi</span>
                </div>
            </div>

            <a href="/checkout"
               class="block w-full text-center px-6 py-3.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
                Beli Tiket Sekarang
            </a>
            <p class="text-center text-slate-500 text-xs mt-3">Pembayaran aman & terpercaya</p>
        </div>
    </div>

</div>

@endsection
