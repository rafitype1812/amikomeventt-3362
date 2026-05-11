@extends('layouts.admin')

@section('title', 'Manajemen Kategori')
@section('page_title', 'Manajemen Kategori')
@section('page_subtitle', 'Kelola kategori event yang tersedia')

@section('content')

{{-- Header Actions --}}
<div class="flex items-center justify-between mb-6">
    <div class="relative">
        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
        <input type="text" id="search-category" placeholder="Cari kategori..."
               class="pl-9 pr-4 py-2 rounded-xl bg-slate-800 border border-slate-700 text-white text-sm
                      placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 w-60 transition-all">
    </div>
    <button id="btn-tambah-kategori"
            onclick="document.getElementById('modal-tambah').classList.remove('hidden')"
            class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600
                   text-white text-sm font-semibold rounded-xl shadow-lg shadow-indigo-500/30
                   hover:shadow-indigo-500/50 hover:scale-105 transition-all">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Tambah Kategori
    </button>
</div>

{{-- Summary Cards --}}
<div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
    @foreach([
        ['Total Kategori', '8',  'bg-indigo-500/10', 'text-indigo-300'],
        ['Aktif',          '8',  'bg-green-400/10',  'text-green-400'],
        ['Total Event',    '24', 'bg-amber-400/10',  'text-amber-400'],
        ['Paling Populer', 'Seminar', 'bg-purple-400/10', 'text-purple-300'],
    ] as $s)
    <div class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-4 py-3">
        <p class="text-slate-400 text-xs mb-1">{{ $s[0] }}</p>
        <p class="text-xl font-bold {{ $s[3] }}">{{ $s[1] }}</p>
    </div>
    @endforeach
</div>

{{-- Categories Table --}}
<div class="bg-slate-800/50 border border-slate-700/50 rounded-2xl overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-slate-700/40 border-b border-slate-700">
            <tr>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider w-12">#</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Nama Kategori</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Slug</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Jumlah Event</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Warna Badge</th>
                <th class="text-center px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-700/50">
            @php
            $categories = [
                [1, 'Seminar',    'seminar',    8, 'bg-blue-500/10 text-blue-300 ring-blue-500/20',     'Biru'],
                [2, 'Workshop',   'workshop',   5, 'bg-purple-500/10 text-purple-300 ring-purple-500/20','Ungu'],
                [3, 'Konser',     'konser',     3, 'bg-pink-500/10 text-pink-300 ring-pink-500/20',      'Pink'],
                [4, 'Kompetisi',  'kompetisi',  4, 'bg-amber-500/10 text-amber-300 ring-amber-500/20',   'Amber'],
                [5, 'Pameran',    'pameran',    1, 'bg-teal-500/10 text-teal-300 ring-teal-500/20',      'Teal'],
                [6, 'Olahraga',   'olahraga',   1, 'bg-green-500/10 text-green-300 ring-green-500/20',   'Hijau'],
                [7, 'Seni & Budaya','seni-budaya',1,'bg-orange-500/10 text-orange-300 ring-orange-500/20','Oranye'],
                [8, 'Teknologi',  'teknologi',  1, 'bg-cyan-500/10 text-cyan-300 ring-cyan-500/20',      'Cyan'],
            ];
            @endphp

            @foreach($categories as $cat)
            <tr class="hover:bg-slate-700/20 transition-colors group">
                <td class="px-5 py-4 text-slate-500 text-xs font-mono">{{ $cat[0] }}</td>
                <td class="px-5 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-500/30 to-purple-500/30
                                    flex items-center justify-center text-lg">
                            @php
                            $icons = ['Seminar'=>'🎙️','Workshop'=>'🔧','Konser'=>'🎵','Kompetisi'=>'🏆',
                                      'Pameran'=>'🖼️','Olahraga'=>'⚽','Seni & Budaya'=>'🎭','Teknologi'=>'💻'];
                            @endphp
                            {{ $icons[$cat[1]] ?? '📌' }}
                        </div>
                        <span class="text-white font-semibold">{{ $cat[1] }}</span>
                    </div>
                </td>
                <td class="px-5 py-4">
                    <code class="text-slate-400 text-xs bg-slate-700/50 px-2 py-0.5 rounded">{{ $cat[2] }}</code>
                </td>
                <td class="px-5 py-4">
                    <span class="text-white font-semibold">{{ $cat[3] }}</span>
                    <span class="text-slate-500 text-xs ml-1">event</span>
                </td>
                <td class="px-5 py-4">
                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold ring-1 {{ $cat[4] }}">
                        {{ $cat[5] }}
                    </span>
                </td>
                <td class="px-5 py-4">
                    <div class="flex items-center justify-center gap-2">
                        {{-- Tombol Edit --}}
                        <button id="btn-edit-{{ $cat[0] }}" title="Edit Kategori"
                                class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-500/10 text-indigo-400
                                       hover:bg-indigo-500/20 text-xs font-medium transition-all">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit
                        </button>
                        {{-- Tombol Hapus --}}
                        <button id="btn-hapus-{{ $cat[0] }}" title="Hapus Kategori"
                                class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-red-500/10 text-red-400
                                       hover:bg-red-500/20 text-xs font-medium transition-all">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="px-5 py-4 border-t border-slate-700/50 flex items-center justify-between">
        <p class="text-slate-400 text-xs">Menampilkan 8 kategori</p>
        <p class="text-slate-500 text-xs italic">* Fungsi database belum diaktifkan (UI Prototype)</p>
    </div>
</div>

{{-- ===== MODAL TAMBAH KATEGORI ===== --}}
<div id="modal-tambah"
     class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
    <div class="bg-slate-800 border border-slate-700 rounded-2xl p-6 w-full max-w-md shadow-2xl">
        <div class="flex items-center justify-between mb-5">
            <h3 class="text-white font-bold text-lg">Tambah Kategori Baru</h3>
            <button onclick="document.getElementById('modal-tambah').classList.add('hidden')"
                    class="w-8 h-8 rounded-lg bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-all">
                ✕
            </button>
        </div>

        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nama_kategori" class="block text-sm font-medium text-slate-300 mb-1.5">Nama Kategori *</label>
                <input type="text" id="nama_kategori" name="nama_kategori" placeholder="Contoh: Seminar"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white
                              placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
            </div>
            <div>
                <label for="slug_kategori" class="block text-sm font-medium text-slate-300 mb-1.5">Slug</label>
                <input type="text" id="slug_kategori" name="slug" placeholder="seminar (auto-generate)"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white
                              placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
            </div>
            <div>
                <label for="icon_kategori" class="block text-sm font-medium text-slate-300 mb-1.5">Icon / Emoji</label>
                <input type="text" id="icon_kategori" name="icon" placeholder="🎯"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white
                              placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
            </div>

            <div class="flex gap-3 pt-2">
                <button type="button"
                        onclick="document.getElementById('modal-tambah').classList.add('hidden')"
                        class="flex-1 px-4 py-2.5 rounded-xl bg-slate-700 text-slate-300 hover:bg-slate-600 text-sm font-medium transition-all">
                    Batal
                </button>
                <button type="submit" id="btn-simpan-kategori"
                        class="flex-1 px-4 py-2.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600
                               text-white text-sm font-semibold hover:scale-105 shadow-lg shadow-indigo-500/30 transition-all">
                    Simpan Kategori
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
