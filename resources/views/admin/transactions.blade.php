@extends('layouts.admin')

@section('title', 'Manajemen Transaksi')
@section('page_title', 'Manajemen Transaksi')
@section('page_subtitle', 'Riwayat dan status seluruh transaksi tiket')

@section('content')

{{-- Summary Bar --}}
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
    @foreach([
        ['Total Transaksi', '1.248',      'bg-indigo-500/10 text-indigo-300 ring-indigo-500/20'],
        ['Berhasil',        '1.152',      'bg-green-400/10 text-green-400 ring-green-400/20'],
        ['Pending',         '96',         'bg-amber-400/10 text-amber-400 ring-amber-400/20'],
    ] as $s)
    <div class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 flex items-center gap-3">
        <span class="text-2xl font-extrabold {{ explode(' ', $s[2])[1] }}">{{ $s[1] }}</span>
        <span class="text-slate-400 text-sm">{{ $s[0] }}</span>
    </div>
    @endforeach
</div>

{{-- Header Actions --}}
<div class="flex items-center justify-between mb-4">
    <div class="relative">
        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
        <input type="text" id="search-tx" placeholder="Cari transaksi / nama..."
               class="pl-9 pr-4 py-2 rounded-xl bg-slate-800 border border-slate-700 text-white text-sm placeholder-slate-400
                      focus:outline-none focus:ring-2 focus:ring-indigo-500 w-64 transition-all">
    </div>
    <button class="flex items-center gap-2 px-4 py-2 bg-slate-700 hover:bg-slate-600 text-slate-200 text-sm font-medium rounded-xl transition-all">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
        </svg>
        Export CSV
    </button>
</div>

{{-- Transactions Table --}}
<div class="bg-slate-800/50 border border-slate-700/50 rounded-2xl overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-slate-700/40 border-b border-slate-700">
            <tr>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">ID Transaksi</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Nama Pembeli</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Event</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Metode</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Total</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Tanggal</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-700/50">
            @foreach([
                ['TRX-001', 'Budi Santoso',    'National Tech Summit',  'QRIS',          'Rp 80.000',  '20 Apr 2025', 'Lunas'],
                ['TRX-002', 'Dewi Rahayu',     'Workshop AI Pemula',    'Transfer Bank', 'Rp 50.000',  '19 Apr 2025', 'Lunas'],
                ['TRX-003', 'Ahmad Fauzi',     'Konser Akbar Kampus',   'E-Wallet',      'Rp 120.000', '18 Apr 2025', 'Pending'],
                ['TRX-004', 'Siti Nurhaliza',  'Seminar Wirausaha',     'Transfer Bank', 'Rp 75.000',  '17 Apr 2025', 'Lunas'],
                ['TRX-005', 'Rizky Prabowo',   'Hackathon AMIKOM',      '-',             'Rp 0',       '16 Apr 2025', 'Gratis'],
                ['TRX-006', 'Anisa Putri',     'National Tech Summit',  'QRIS',          'Rp 80.000',  '15 Apr 2025', 'Lunas'],
                ['TRX-007', 'Danu Prasetyo',   'Workshop AI Pemula',    'E-Wallet',      'Rp 50.000',  '14 Apr 2025', 'Gagal'],
            ] as $tx)
            <tr class="hover:bg-slate-700/20 transition-colors">
                <td class="px-5 py-4 text-indigo-300 font-mono text-xs">{{ $tx[0] }}</td>
                <td class="px-5 py-4">
                    <div class="flex items-center gap-2">
                        <div class="w-7 h-7 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-xs text-white font-bold shrink-0">
                            {{ substr($tx[1], 0, 1) }}
                        </div>
                        <span class="text-slate-200">{{ $tx[1] }}</span>
                    </div>
                </td>
                <td class="px-5 py-4 text-slate-300 text-xs">{{ $tx[2] }}</td>
                <td class="px-5 py-4 text-slate-400 text-xs">{{ $tx[3] }}</td>
                <td class="px-5 py-4 text-white font-semibold">{{ $tx[4] }}</td>
                <td class="px-5 py-4 text-slate-400 text-xs">{{ $tx[5] }}</td>
                <td class="px-5 py-4">
                    <span class="px-2 py-0.5 rounded-full text-xs font-semibold
                        {{ $tx[6] === 'Lunas'  ? 'bg-green-400/10 text-green-400'  :
                          ($tx[6] === 'Pending' ? 'bg-amber-400/10 text-amber-400'  :
                          ($tx[6] === 'Gratis'  ? 'bg-slate-600/50 text-slate-300'  :
                                                  'bg-red-400/10 text-red-400')) }}">
                        {{ $tx[6] }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="px-5 py-4 border-t border-slate-700/50 flex items-center justify-between">
        <p class="text-slate-400 text-xs">Menampilkan 7 dari 1.248 transaksi</p>
        <div class="flex items-center gap-1">
            <button class="w-8 h-8 rounded-lg bg-slate-700/50 text-slate-300 hover:bg-slate-700 flex items-center justify-center text-sm transition-all">‹</button>
            <button class="w-8 h-8 rounded-lg bg-indigo-600 text-white flex items-center justify-center text-sm font-semibold">1</button>
            <button class="w-8 h-8 rounded-lg bg-slate-700/50 text-slate-300 hover:bg-slate-700 flex items-center justify-center text-sm transition-all">2</button>
            <button class="w-8 h-8 rounded-lg bg-slate-700/50 text-slate-300 hover:bg-slate-700 flex items-center justify-center text-sm transition-all">›</button>
        </div>
    </div>
</div>

@endsection
