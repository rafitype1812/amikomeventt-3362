@extends('layouts.admin')

@section('title', 'Manajemen Events')
@section('page-title', 'Manajemen Events')
@section('page-subtitle', 'Kelola daftar event yang tersedia')

@section('content')

{{-- Header Actions --}}
<div class="flex items-center justify-between mb-6">
    <div class="flex items-center gap-3">
        <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input type="text" id="search-events" placeholder="Cari event..."
                   class="pl-9 pr-4 py-2 rounded-xl bg-slate-800 border border-slate-700 text-white text-sm placeholder-slate-400
                          focus:outline-none focus:ring-2 focus:ring-indigo-500 w-60 transition-all">
        </div>
        <select id="filter-status" class="px-3 py-2 rounded-xl bg-slate-800 border border-slate-700 text-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
            <option value="">Semua Status</option>
            <option value="aktif">Aktif</option>
            <option value="selesai">Selesai</option>
            <option value="draft">Draft</option>
        </select>
    </div>
    <button id="btn-tambah-event"
            class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-semibold rounded-xl
                   shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Tambah Event
    </button>
</div>

{{-- Events Table --}}
<div class="bg-slate-800/50 border border-slate-700/50 rounded-2xl overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-slate-700/40 border-b border-slate-700">
            <tr>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Event</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Kategori</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Tanggal</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Harga</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Tiket</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Status</th>
                <th class="text-center px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-700/50">
            @foreach([
                ['National Tech Summit 2025',       'Seminar',    '25 Okt 2025', 'Rp 75.000',  '100/124', 'Aktif'],
                ['Workshop AI untuk Pemula',         'Workshop',   '02 Nov 2025', 'Rp 50.000',  '54/100',  'Aktif'],
                ['Seminar Kewirausahaan Kampus',     'Seminar',    '15 Nov 2025', 'Rp 75.000',  '40/100',  'Aktif'],
                ['Konser Akbar AMIKOM 2025',         'Konser',     '20 Nov 2025', 'Rp 120.000', '250/500', 'Aktif'],
                ['Hackathon AMIKOM #3',              'Kompetisi',  '01 Des 2025', 'Gratis',     '8/30 tim','Draft'],
                ['Seminar Keamanan Siber',           'Seminar',    '13 Okt 2025', 'Rp 60.000',  '200/200', 'Selesai'],
            ] as $event)
            <tr class="hover:bg-slate-700/20 transition-colors">
                <td class="px-5 py-4">
                    <p class="text-white font-semibold">{{ $event[0] }}</p>
                </td>
                <td class="px-5 py-4">
                    <span class="px-2 py-0.5 rounded-full text-xs font-medium bg-indigo-500/10 text-indigo-300 ring-1 ring-indigo-500/20">{{ $event[1] }}</span>
                </td>
                <td class="px-5 py-4 text-slate-300 text-xs">{{ $event[2] }}</td>
                <td class="px-5 py-4 text-white font-semibold">{{ $event[3] }}</td>
                <td class="px-5 py-4 text-slate-300 text-xs font-mono">{{ $event[4] }}</td>
                <td class="px-5 py-4">
                    <span class="px-2 py-0.5 rounded-full text-xs font-semibold
                        {{ $event[5] === 'Aktif' ? 'bg-green-400/10 text-green-400' : ($event[5] === 'Draft' ? 'bg-amber-400/10 text-amber-400' : 'bg-slate-600/50 text-slate-300') }}">
                        {{ $event[5] }}
                    </span>
                </td>
                <td class="px-5 py-4">
                    <div class="flex items-center justify-center gap-2">
                        <button title="Edit" class="w-8 h-8 rounded-lg bg-indigo-500/10 text-indigo-400 hover:bg-indigo-500/20 flex items-center justify-center transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </button>
                        <button title="Hapus" class="w-8 h-8 rounded-lg bg-red-500/10 text-red-400 hover:bg-red-500/20 flex items-center justify-center transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Table Footer --}}
    <div class="px-5 py-4 border-t border-slate-700/50 flex items-center justify-between">
        <p class="text-slate-400 text-xs">Menampilkan 6 dari 24 event</p>
        <div class="flex items-center gap-1">
            <button class="w-8 h-8 rounded-lg bg-slate-700/50 text-slate-300 hover:bg-slate-700 flex items-center justify-center text-sm transition-all">‹</button>
            <button class="w-8 h-8 rounded-lg bg-indigo-600 text-white flex items-center justify-center text-sm font-semibold">1</button>
            <button class="w-8 h-8 rounded-lg bg-slate-700/50 text-slate-300 hover:bg-slate-700 flex items-center justify-center text-sm transition-all">2</button>
            <button class="w-8 h-8 rounded-lg bg-slate-700/50 text-slate-300 hover:bg-slate-700 flex items-center justify-center text-sm transition-all">3</button>
            <button class="w-8 h-8 rounded-lg bg-slate-700/50 text-slate-300 hover:bg-slate-700 flex items-center justify-center text-sm transition-all">›</button>
        </div>
    </div>
</div>

@endsection
