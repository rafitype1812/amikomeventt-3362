@extends('layouts.admin')

@section('title', 'Manajemen Partner')
@section('page_title', 'Manajemen Partner')
@section('page_subtitle', 'Kelola partner sponsor dan pendukung event')

@section('content')

{{-- Header Actions --}}
<div class="flex items-center justify-between mb-6">
    <div class="relative">
        <form action="{{ route('admin.partners.index') }}" method="GET">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input type="text" name="search" id="search-partner" placeholder="Cari partner..."
                   value="{{ $search }}"
                   class="pl-9 pr-4 py-2 rounded-xl bg-slate-800 border border-slate-700 text-white text-sm
                          placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 w-60 transition-all">
        </form>
    </div>
    <button id="btn-tambah-partner"
            onclick="document.getElementById('modal-tambah-partner').classList.remove('hidden')"
            class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600
                   text-white text-sm font-semibold rounded-xl shadow-lg shadow-indigo-500/30
                   hover:shadow-indigo-500/50 hover:scale-105 transition-all">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Tambah Partner
    </button>
</div>

{{-- Summary Cards --}}
<div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
    @php
        $totalPartners = $partners->count();
    @endphp
    @foreach([
        ['Total Partner', $totalPartners,  'bg-indigo-500/10', 'text-indigo-300'],
        ['Aktif',          $totalPartners,  'bg-green-400/10',  'text-green-400'],
        ['Tipe Kolaborasi','Sponsorship', 'bg-amber-400/10',  'text-amber-400'],
        ['Tingkat Kepuasan', '98%', 'bg-purple-400/10', 'text-purple-300'],
    ] as $s)
    <div class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-4 py-3">
        <p class="text-slate-400 text-xs mb-1">{{ $s[0] }}</p>
        <p class="text-xl font-bold {{ $s[3] }}">{{ $s[1] }}</p>
    </div>
    @endforeach
</div>

{{-- Partners Table --}}
<div class="bg-slate-800/50 border border-slate-700/50 rounded-2xl overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-slate-700/40 border-b border-slate-700">
            <tr>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider w-12">#</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Logo</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Nama Partner</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">URL Logo</th>
                <th class="text-left px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Terdaftar Pada</th>
                <th class="text-center px-5 py-3.5 text-slate-400 font-semibold text-xs uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-700/50">
            @forelse($partners as $partner)
            <tr class="hover:bg-slate-700/20 transition-colors group">
                <td class="px-5 py-4 text-slate-500 text-xs font-mono">{{ $partner->id }}</td>
                <td class="px-5 py-4">
                    <div class="w-10 h-10 rounded-lg bg-slate-700/50 flex items-center justify-center overflow-hidden border border-slate-600/50 p-1">
                        @if($partner->logo_url)
                            <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}" class="object-contain w-full h-full">
                        @else
                            <span class="text-white text-xs font-bold">{{ substr($partner->name, 0, 2) }}</span>
                        @endif
                    </div>
                </td>
                <td class="px-5 py-4">
                    <span class="text-white font-semibold">{{ $partner->name }}</span>
                </td>
                <td class="px-5 py-4">
                    @if($partner->logo_url)
                        <code class="text-slate-400 text-xs bg-slate-700/50 px-2 py-0.5 rounded truncate max-w-xs block" title="{{ $partner->logo_url }}">{{ $partner->logo_url }}</code>
                    @else
                        <span class="text-slate-500 italic text-xs">-</span>
                    @endif
                </td>
                <td class="px-5 py-4 text-slate-400 text-xs">
                    {{ $partner->created_at->format('d M Y H:i') }}
                </td>
                <td class="px-5 py-4">
                    <div class="flex items-center justify-center gap-2">
                        {{-- Tombol Edit --}}
                        <button id="btn-edit-partner-{{ $partner->id }}" title="Edit Partner"
                                onclick="openEditPartnerModal({{ $partner->id }}, '{{ addslashes($partner->name) }}', '{{ addslashes($partner->logo_url) }}')"
                                class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-500/10 text-indigo-400
                                       hover:bg-indigo-500/20 text-xs font-medium transition-all">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit
                        </button>
                        {{-- Tombol Hapus --}}
                        <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus partner ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="btn-hapus-partner-{{ $partner->id }}" title="Hapus Partner"
                                    class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-red-500/10 text-red-400
                                           hover:bg-red-500/20 text-xs font-medium transition-all">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-5 py-8 text-center text-slate-500">
                    Tidak ada partner ditemukan.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="px-5 py-4 border-t border-slate-700/50 flex items-center justify-between">
        <p class="text-slate-400 text-xs">Menampilkan {{ $partners->count() }} partner</p>
    </div>
</div>

{{-- ===== MODAL TAMBAH PARTNER ===== --}}
<div id="modal-tambah-partner"
     class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
    <div class="bg-slate-800 border border-slate-700 rounded-2xl p-6 w-full max-w-md shadow-2xl">
        <div class="flex items-center justify-between mb-5">
            <h3 class="text-white font-bold text-lg">Tambah Partner Baru</h3>
            <button onclick="document.getElementById('modal-tambah-partner').classList.add('hidden')"
                    class="w-8 h-8 rounded-lg bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-all">
                ✕
            </button>
        </div>

        <form action="{{ route('admin.partners.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-slate-300 mb-1.5">Nama Partner *</label>
                <input type="text" id="name" name="name" required placeholder="Contoh: PT. Sumber Jaya"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white
                              placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
            </div>
            <div>
                <label for="logo_url" class="block text-sm font-medium text-slate-300 mb-1.5">URL Logo Partner</label>
                <input type="url" id="logo_url" name="logo_url" placeholder="https://example.com/logo.png"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white
                              placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
            </div>

            <div class="flex gap-3 pt-2">
                <button type="button"
                        onclick="document.getElementById('modal-tambah-partner').classList.add('hidden')"
                        class="flex-1 px-4 py-2.5 rounded-xl bg-slate-700 text-slate-300 hover:bg-slate-600 text-sm font-medium transition-all">
                    Batal
                </button>
                <button type="submit" id="btn-simpan-partner"
                        class="flex-1 px-4 py-2.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600
                               text-white text-sm font-semibold hover:scale-105 shadow-lg shadow-indigo-500/30 transition-all">
                    Simpan Partner
                </button>
            </div>
        </form>
    </div>
</div>

{{-- ===== MODAL EDIT PARTNER ===== --}}
<div id="modal-edit-partner"
     class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
    <div class="bg-slate-800 border border-slate-700 rounded-2xl p-6 w-full max-w-md shadow-2xl">
        <div class="flex items-center justify-between mb-5">
            <h3 class="text-white font-bold text-lg">Edit Partner</h3>
            <button onclick="document.getElementById('modal-edit-partner').classList.add('hidden')"
                    class="w-8 h-8 rounded-lg bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-all">
                ✕
            </button>
        </div>

        <form id="form-edit-partner" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="edit_partner_name" class="block text-sm font-medium text-slate-300 mb-1.5">Nama Partner *</label>
                <input type="text" id="edit_partner_name" name="name" required placeholder="Contoh: PT. Sumber Jaya"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white
                              placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
            </div>
            <div>
                <label for="edit_partner_logo" class="block text-sm font-medium text-slate-300 mb-1.5">URL Logo Partner</label>
                <input type="url" id="edit_partner_logo" name="logo_url" placeholder="https://example.com/logo.png"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white
                              placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
            </div>

            <div class="flex gap-3 pt-2">
                <button type="button"
                        onclick="document.getElementById('modal-edit-partner').classList.add('hidden')"
                        class="flex-1 px-4 py-2.5 rounded-xl bg-slate-700 text-slate-300 hover:bg-slate-600 text-sm font-medium transition-all">
                    Batal
                </button>
                <button type="submit" id="btn-update-partner"
                        class="flex-1 px-4 py-2.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600
                               text-white text-sm font-semibold hover:scale-105 shadow-lg shadow-indigo-500/30 transition-all">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function openEditPartnerModal(id, name, logoUrl) {
    const form = document.getElementById('form-edit-partner');
    form.action = `/admin/partners/${id}`;
    document.getElementById('edit_partner_name').value = name;
    document.getElementById('edit_partner_logo').value = logoUrl;
    document.getElementById('modal-edit-partner').classList.remove('hidden');
}
</script>

@endsection
