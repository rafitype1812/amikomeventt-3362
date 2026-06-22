@extends('layouts.admin')
@section('title', 'Laporan Transaksi - Admin')
@section('page_title', 'Laporan Transaksi')
@section('page_subtitle', 'Pantau arus kas dan penjualan tiket Anda.')

@section('content')
<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest border-b border-slate-100">
                <tr>
                    <th class="px-8 py-5">Order ID</th>
                    <th class="px-8 py-5">Detail Pembeli</th>
                    <th class="px-8 py-5">Event</th>
                    <th class="px-8 py-5">Tgl Transaksi</th>
                    <th class="px-8 py-5">Status</th>
                    <th class="px-8 py-5 text-right">Total Tagihan</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t border-slate-100">
                @forelse($transactions as $trx)
                <tr class="hover:bg-slate-50/50 transition duration-150 {{ strtolower($trx->status) == 'pending' ? 'bg-slate-50/10' : '' }}">
                    <td class="px-8 py-6">
                        <span class="font-mono font-bold px-3 py-1.5 rounded-xl text-xs {{ strtolower($trx->status) == 'pending' ? 'bg-slate-100 text-slate-600 border border-slate-200' : 'text-indigo-600 bg-indigo-50 border border-indigo-100' }}">
                            {{ $trx->order_id }}
                        </span>
                    </td>
                    <td class="px-8 py-6">
                        <div class="space-y-1">
                            <p class="font-bold text-slate-800 flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                {{ $trx->customer_name }}
                            </p>
                            <p class="text-xs text-slate-500 flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                {{ $trx->customer_email }}
                            </p>
                            <p class="text-xs text-slate-500 flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                {{ $trx->customer_phone }}
                            </p>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-slate-800">{{ $trx->event->title ?? '-' }}</p>
                        <p class="text-xs text-slate-400 flex items-center gap-1 mt-0.5">
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            {{ $trx->event->location ?? '-' }}
                        </p>
                    </td>
                    <td class="px-8 py-6 text-sm">
                        <p class="font-semibold text-slate-700">{{ $trx->created_at->format('d M Y') }}</p>
                        <p class="text-xs text-slate-400 mt-0.5">{{ $trx->created_at->format('H:i') }} WIB</p>
                    </td>
                    <td class="px-8 py-6">
                        @if(in_array(strtolower($trx->status), ['settlement', 'success']))
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-emerald-50 text-emerald-700 rounded-xl text-xs font-bold uppercase tracking-wider ring-1 ring-inset ring-emerald-600/10">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            Success
                        </span>
                        @elseif(strtolower($trx->status) === 'pending')
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-amber-50 text-amber-700 rounded-xl text-xs font-bold uppercase tracking-wider ring-1 ring-inset ring-amber-600/10 animate-pulse">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                            Pending
                        </span>
                        @else
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-rose-50 text-rose-700 rounded-xl text-xs font-bold uppercase tracking-wider ring-1 ring-inset ring-rose-600/10">
                            <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                            {{ $trx->status }}
                        </span>
                        @endif
                    </td>
                    <td class="px-8 py-6 text-right font-black text-slate-900 text-lg">
                        Rp {{ number_format($trx->total_price, 0, ',', '.') }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-8 py-12 text-center text-slate-400 font-medium">
                        <div class="flex flex-col items-center justify-center space-y-2">
                            <span class="text-3xl">📥</span>
                            <p>Belum ada transaksi tercatat</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-8 py-6 bg-slate-50/50 border-t border-slate-100 items-center">
        {{ $transactions->links() }}
    </div>
</div>
@endsection
