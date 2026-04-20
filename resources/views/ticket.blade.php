@extends('layouts.app')

@section('title', 'E-Tiket Saya - AmikomEventHub')

@section('content')

<div class="max-w-2xl mx-auto">

    {{-- Success Banner --}}
    <div class="text-center mb-10">
        <div class="w-20 h-20 rounded-full bg-green-500/20 border-2 border-green-400 flex items-center justify-center mx-auto mb-4">
            <svg class="w-10 h-10 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
        </div>
        <h1 class="text-3xl font-extrabold text-white mb-2">Pembayaran Berhasil! 🎉</h1>
        <p class="text-slate-400">Tiket Anda telah dikonfirmasi. Selamat datang di event!</p>
    </div>

    {{-- E-Ticket Card --}}
    <div class="relative bg-gradient-to-br from-indigo-900 to-purple-900 rounded-3xl overflow-hidden border border-indigo-500/30 shadow-2xl shadow-indigo-900/50">

        {{-- Top Section --}}
        <div class="relative px-8 pt-8 pb-6 bg-gradient-to-r from-indigo-600 to-purple-700">
            <div class="absolute top-0 right-0 w-40 h-40 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <span class="inline-block px-3 py-1 rounded-full bg-white/20 text-white text-xs font-bold uppercase tracking-wide mb-4">
                E-Ticket Resmi
            </span>
            <h2 class="text-2xl font-extrabold text-white mb-1">National Tech Summit 2025</h2>
            <p class="text-indigo-200 text-sm">by Universitas AMIKOM Yogyakarta</p>

            <div class="flex items-center gap-1 mt-3">
                <span class="px-2 py-0.5 rounded-full bg-amber-400/20 text-amber-300 text-xs font-semibold ring-1 ring-amber-400/30">
                    🎯 Seminar Teknologi
                </span>
            </div>
        </div>

        {{-- Ticket Body --}}
        <div class="relative px-8 py-6">
            {{-- Decorative dashed line --}}
            <div class="absolute left-0 right-0 -top-0 flex items-center">
                <div class="w-8 h-8 rounded-full bg-slate-900 -ml-4 shrink-0"></div>
                <div class="flex-1 border-t-2 border-dashed border-slate-600/60 mx-2"></div>
                <div class="w-8 h-8 rounded-full bg-slate-900 -mr-4 shrink-0"></div>
            </div>

            <div class="grid grid-cols-2 gap-x-8 gap-y-5 mt-4">
                <div>
                    <p class="text-slate-400 text-xs uppercase tracking-wider mb-1">Nama Pemesan</p>
                    <p class="text-white font-semibold">Budi Santoso</p>
                </div>
                <div>
                    <p class="text-slate-400 text-xs uppercase tracking-wider mb-1">NIM</p>
                    <p class="text-white font-semibold">24.11.3362</p>
                </div>
                <div>
                    <p class="text-slate-400 text-xs uppercase tracking-wider mb-1">Tanggal</p>
                    <p class="text-white font-semibold">Sabtu, 25 Oktober 2025</p>
                </div>
                <div>
                    <p class="text-slate-400 text-xs uppercase tracking-wider mb-1">Waktu</p>
                    <p class="text-white font-semibold">08:00 – 16:00 WIB</p>
                </div>
                <div>
                    <p class="text-slate-400 text-xs uppercase tracking-wider mb-1">Lokasi</p>
                    <p class="text-white font-semibold">Auditorium AMIKOM, Yogyakarta</p>
                </div>
                <div>
                    <p class="text-slate-400 text-xs uppercase tracking-wider mb-1">Jenis Tiket</p>
                    <p class="text-white font-semibold">Regular</p>
                </div>
            </div>
        </div>

        {{-- Ticket Footer & QR --}}
        <div class="relative px-8 pb-8">
            <div class="absolute left-0 right-0 top-0 flex items-center">
                <div class="w-8 h-8 rounded-full bg-slate-900 -ml-4 shrink-0"></div>
                <div class="flex-1 border-t-2 border-dashed border-slate-600/60 mx-2"></div>
                <div class="w-8 h-8 rounded-full bg-slate-900 -mr-4 shrink-0"></div>
            </div>

            <div class="flex items-center justify-between mt-6">
                <div>
                    <p class="text-slate-400 text-xs uppercase tracking-wider mb-1">Kode Tiket</p>
                    <p class="text-indigo-300 font-mono font-bold text-lg tracking-widest">AEH-2025-3362</p>
                    <p class="text-slate-500 text-xs mt-1">Tunjukkan kode ini saat registrasi</p>
                </div>
                {{-- QR Code Placeholder --}}
                <div class="w-24 h-24 bg-white rounded-xl p-2 flex items-center justify-center">
                    <div class="w-full h-full grid grid-cols-5 grid-rows-5 gap-0.5">
                        @for($i = 0; $i < 25; $i++)
                            <div class="{{ in_array($i, [0,1,2,5,10,4,9,14,15,16,17,20,21,22,7,12,13,18,23,24]) ? 'bg-slate-900' : 'bg-white' }} rounded-sm"></div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Action buttons --}}
    <div class="flex gap-4 mt-6">
        <button onclick="window.print()"
                class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-slate-700 hover:bg-slate-600 text-white font-semibold rounded-xl transition-all">
            🖨️ Cetak Tiket
        </button>
        <a href="/"
           class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600
                  text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:scale-105 transition-all">
            🏠 Kembali ke Home
        </a>
    </div>

</div>

@endsection
