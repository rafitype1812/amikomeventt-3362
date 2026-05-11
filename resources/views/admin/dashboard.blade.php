@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('page_subtitle', 'Ringkasan data dan statistik event')

@section('content')

{{-- Stats Grid --}}
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">

    @foreach([
        ['Total Event',      '24',   '+3 bulan ini',  'from-blue-600 to-cyan-500',   'bg-blue-500/10',   'text-blue-300',  'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
        ['Total Pengguna',   '312',  '+18 minggu ini', 'from-indigo-600 to-violet-500','bg-indigo-500/10', 'text-indigo-300','M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
        ['Tiket Terjual',   '1.248','Rp 93.6Jt',     'from-purple-600 to-pink-500',  'bg-purple-500/10', 'text-purple-300','M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z'],
        ['Pendapatan',      'Rp 93.6Jt','Bulan April', 'from-amber-500 to-orange-500','bg-amber-500/10',  'text-amber-300', 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 8h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
    ] as $stat)
    <div class="stat-card bg-slate-800/50 border border-slate-700/50 rounded-2xl p-5">
        <div class="flex items-start justify-between mb-4">
            <div class="{{ $stat[4] }} w-11 h-11 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 {{ $stat[5] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat[6] }}"/>
                </svg>
            </div>
            <span class="text-xs text-green-400 bg-green-400/10 px-2 py-0.5 rounded-full font-medium">↑</span>
        </div>
        <p class="text-3xl font-extrabold text-white mb-1">{{ $stat[1] }}</p>
        <p class="text-slate-300 text-sm font-medium">{{ $stat[0] }}</p>
        <p class="text-slate-500 text-xs mt-0.5">{{ $stat[2] }}</p>
    </div>
    @endforeach

</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- Recent Transactions Table --}}
    <div class="lg:col-span-2 bg-slate-800/50 border border-slate-700/50 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-5">
            <h2 class="text-white font-bold text-base">Transaksi Terbaru</h2>
            <a href="/admin/transactions" class="text-indigo-400 hover:text-indigo-300 text-xs font-medium transition-colors">Lihat Semua →</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-slate-700">
                        <th class="text-left py-2 text-slate-400 font-medium text-xs uppercase tracking-wider">Nama</th>
                        <th class="text-left py-2 text-slate-400 font-medium text-xs uppercase tracking-wider">Event</th>
                        <th class="text-left py-2 text-slate-400 font-medium text-xs uppercase tracking-wider">Total</th>
                        <th class="text-left py-2 text-slate-400 font-medium text-xs uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-700/50">
                    @foreach([
                        ['Budi Santoso',   'National Tech Summit',  'Rp 80.000', 'Lunas'],
                        ['Dewi Rahayu',    'Workshop AI Pemula',    'Rp 50.000', 'Lunas'],
                        ['Ahmad Fauzi',    'Konser Akbar Kampus',   'Rp 120.000','Pending'],
                        ['Siti Nurhaliza', 'Seminar Kewirausahaan', 'Rp 75.000', 'Lunas'],
                        ['Rizky Prabowo',  'Hackathon AMIKOM',      'Rp 0',      'Gratis'],
                    ] as $tx)
                    <tr class="hover:bg-slate-700/20 transition-colors">
                        <td class="py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-xs text-white font-bold shrink-0">
                                    {{ substr($tx[0], 0, 1) }}
                                </div>
                                <span class="text-slate-200">{{ $tx[0] }}</span>
                            </div>
                        </td>
                        <td class="py-3 text-slate-400 text-xs">{{ $tx[1] }}</td>
                        <td class="py-3 text-white font-semibold">{{ $tx[2] }}</td>
                        <td class="py-3">
                            <span class="px-2 py-0.5 rounded-full text-xs font-semibold
                                {{ $tx[3] === 'Lunas' ? 'bg-green-400/10 text-green-400' : ($tx[3] === 'Pending' ? 'bg-amber-400/10 text-amber-400' : 'bg-slate-600/50 text-slate-300') }}">
                                {{ $tx[3] }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Upcoming Events --}}
    <div class="bg-slate-800/50 border border-slate-700/50 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-5">
            <h2 class="text-white font-bold text-base">Event Mendatang</h2>
            <a href="/admin/events" class="text-indigo-400 hover:text-indigo-300 text-xs font-medium transition-colors">Kelola →</a>
        </div>
        <div class="space-y-4">
            @foreach([
                ['National Tech Summit',  '25 Okt 2025', '24 tiket', 'from-blue-500 to-cyan-400'],
                ['Workshop AI Pemula',    '02 Nov 2025', '46 tiket', 'from-purple-500 to-pink-400'],
                ['Seminar Wirausaha',     '15 Nov 2025', '60 tiket', 'from-amber-500 to-orange-400'],
                ['Hackathon AMIKOM',      '01 Des 2025', '8 tim',   'from-green-500 to-teal-400'],
            ] as $ev)
            <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-700/30 hover:bg-slate-700/50 transition-colors">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br {{ $ev[3] }} flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-white text-sm font-semibold truncate">{{ $ev[0] }}</p>
                    <p class="text-slate-400 text-xs">{{ $ev[1] }} · {{ $ev[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
