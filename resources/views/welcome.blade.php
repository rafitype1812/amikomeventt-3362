@extends('layouts.app')

@section('title', 'Home - AmikomEventHub')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<div class="relative text-center py-20 mb-4">
    {{-- Glow background --}}
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px]
                    bg-indigo-600/20 rounded-full blur-3xl"></div>
    </div>

    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 ring-1
                ring-indigo-500/20 text-indigo-300 text-sm font-medium mb-6">
        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
        Platform Event Mahasiswa AMIKOM Yogyakarta
    </div>

    <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
        Temukan &amp; Ikuti<br>
        <span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
            Event Kampus Terbaik
        </span>
    </h1>

    <p class="text-xl text-slate-400 max-w-2xl mx-auto mb-10">
        Jelajahi seminar, workshop, konser, dan kompetisi menarik di AMIKOM.
        Daftar, bayar, dan dapatkan e-tiketmu dalam hitungan menit.
    </p>

    <div class="flex flex-wrap items-center justify-center gap-4">
        <a href="#event-grid"
           class="px-8 py-3.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold
                  rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
            Jelajahi Event →
        </a>
        <a href="/admin"
           class="px-8 py-3.5 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700
                  hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
            🛡️ Panel Admin
        </a>
    </div>
</div>

{{-- ===== QUICK NAV SHORTCUTS ===== --}}
<div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-14">
    @foreach([
        ['/event/1',      '🎯', 'Detail Event',   'Lihat info lengkap event',    'from-blue-600 to-cyan-500'],
        ['/checkout',     '🛒', 'Checkout',        'Proses pembelian tiket',      'from-indigo-600 to-violet-500'],
        ['/my-ticket',    '🎫', 'E-Tiket Saya',   'Lihat tiket yang dimiliki',   'from-purple-600 to-pink-500'],
        ['/admin',        '⚙️', 'Admin Panel',    'Kelola event &amp; transaksi', 'from-amber-500 to-orange-500'],
    ] as $nav)
    <a href="{{ $nav[0] }}"
       class="group flex flex-col items-center gap-3 p-5 rounded-2xl bg-slate-800/50 border border-slate-700/50
              hover:border-indigo-500/40 hover:bg-slate-800 hover:scale-105 transition-all duration-300 text-center">
        <div class="w-12 h-12 rounded-xl bg-gradient-to-br {{ $nav[4] }} flex items-center justify-center
                    text-2xl shadow-lg group-hover:shadow-indigo-500/20 transition-shadow">
            {{ $nav[1] }}
        </div>
        <div>
            <p class="text-white font-semibold text-sm">{{ $nav[2] }}</p>
            <p class="text-slate-400 text-xs mt-0.5">{!! $nav[3] !!}</p>
        </div>
    </a>
    @endforeach
</div>

{{-- ===== CATEGORY GRID ===== --}}
<div class="mb-14">
    <h2 class="text-2xl font-bold text-white mb-6">🏷️ Kategori Event</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @forelse($categories as $cat)
        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-800/50 border border-slate-700/50 hover:border-indigo-500/40 hover:bg-slate-800 transition-all duration-300">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-2xl shadow-lg shrink-0">
                @php
                $icons = [
                    'Seminar IT' => '🎙️',
                    'Entertainment' => '🎵',
                    'E-Sport' => '🏆',
                    'Workshop Design' => '🔧',
                ];
                @endphp
                {{ $icons[$cat->name] ?? '📌' }}
            </div>
            <div>
                <p class="text-white font-semibold text-sm">{{ $cat->name }}</p>
                <p class="text-slate-400 text-xs mt-0.5">{{ $cat->events_count }} Event</p>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center text-slate-500 py-4">Belum ada kategori yang tersedia.</div>
        @endforelse
    </div>
</div>

{{-- ===== EVENT GRID ===== --}}
<div id="event-grid">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-2xl font-bold text-white">📅 Event Mendatang</h2>
            <p class="text-slate-400 text-sm mt-1">Klik event untuk melihat detail &amp; membeli tiket</p>
        </div>
        <span class="px-3 py-1 rounded-full bg-indigo-500/10 text-indigo-300 text-xs font-semibold ring-1 ring-indigo-500/20">
            24 Event Aktif
        </span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @php
        $events = [
            [
                'title'    => 'National Tech Summit 2025',
                'category' => 'Seminar',
                'date'     => 'Sabtu, 25 Oktober 2025',
                'time'     => '08:00 – 16:00 WIB',
                'location' => 'Auditorium AMIKOM',
                'price'    => 'Rp 75.000',
                'seats'    => 24,
                'gradient' => 'from-blue-600 to-cyan-500',
                'emoji'    => '🎙️',
                'badge'    => 'bg-blue-500/10 text-blue-300 ring-blue-500/20',
            ],
            [
                'title'    => 'Workshop AI untuk Pemula',
                'category' => 'Workshop',
                'date'     => 'Minggu, 2 November 2025',
                'time'     => '09:00 – 15:00 WIB',
                'location' => 'Lab Komputer C2',
                'price'    => 'Rp 50.000',
                'seats'    => 46,
                'gradient' => 'from-purple-600 to-pink-500',
                'emoji'    => '🤖',
                'badge'    => 'bg-purple-500/10 text-purple-300 ring-purple-500/20',
            ],
            [
                'title'    => 'Konser Akbar AMIKOM 2025',
                'category' => 'Konser',
                'date'     => 'Kamis, 20 November 2025',
                'time'     => '18:00 – 23:00 WIB',
                'location' => 'Lapangan Parkir AMIKOM',
                'price'    => 'Rp 120.000',
                'seats'    => 250,
                'gradient' => 'from-pink-600 to-rose-500',
                'emoji'    => '🎵',
                'badge'    => 'bg-pink-500/10 text-pink-300 ring-pink-500/20',
            ],
            [
                'title'    => 'Seminar Kewirausahaan Kampus',
                'category' => 'Seminar',
                'date'     => 'Sabtu, 15 November 2025',
                'time'     => '08:30 – 12:00 WIB',
                'location' => 'Aula Gedung D',
                'price'    => 'Rp 75.000',
                'seats'    => 60,
                'gradient' => 'from-amber-500 to-orange-500',
                'emoji'    => '💼',
                'badge'    => 'bg-amber-500/10 text-amber-300 ring-amber-500/20',
            ],
            [
                'title'    => 'Hackathon AMIKOM #3',
                'category' => 'Kompetisi',
                'date'     => 'Senin, 1 Desember 2025',
                'time'     => '08:00 – selesai',
                'location' => 'Gedung Serba Guna',
                'price'    => 'GRATIS',
                'seats'    => 22,
                'gradient' => 'from-green-600 to-teal-500',
                'emoji'    => '🏆',
                'badge'    => 'bg-green-500/10 text-green-300 ring-green-500/20',
            ],
            [
                'title'    => 'Pameran Seni &amp; Desain 2025',
                'category' => 'Pameran',
                'date'     => 'Jumat, 12 Desember 2025',
                'time'     => '10:00 – 20:00 WIB',
                'location' => 'Lobby Gedung Rektorat',
                'price'    => 'Rp 25.000',
                'seats'    => 100,
                'gradient' => 'from-violet-600 to-indigo-500',
                'emoji'    => '🎨',
                'badge'    => 'bg-violet-500/10 text-violet-300 ring-violet-500/20',
            ],
        ];
        @endphp

        @foreach($events as $event)
        <div class="group bg-slate-800/50 border border-slate-700/50 rounded-2xl overflow-hidden
                    hover:border-indigo-500/40 hover:shadow-xl hover:shadow-indigo-900/30
                    hover:-translate-y-1.5 transition-all duration-300">

            {{-- Event banner --}}
            <div class="relative h-36 bg-gradient-to-br {{ $event['gradient'] }} flex items-center justify-center">
                <span class="text-5xl group-hover:scale-110 transition-transform duration-300">{{ $event['emoji'] }}</span>
                <div class="absolute top-3 left-3">
                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold ring-1 {{ $event['badge'] }}">
                        {{ $event['category'] }}
                    </span>
                </div>
                @if($event['seats'] < 30)
                <div class="absolute top-3 right-3">
                    <span class="px-2 py-0.5 rounded-full bg-red-500/20 text-red-300 text-xs font-semibold ring-1 ring-red-500/30 animate-pulse">
                        ⚠️ Hampir penuh
                    </span>
                </div>
                @endif
            </div>

            {{-- Event info --}}
            <div class="p-5">
                <h3 class="text-white font-bold text-base mb-3 line-clamp-2 group-hover:text-indigo-300 transition-colors">
                    {!! $event['title'] !!}
                </h3>

                <div class="space-y-1.5 mb-4">
                    <div class="flex items-center gap-2 text-slate-400 text-xs">
                        <span>📅</span><span>{{ $event['date'] }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-400 text-xs">
                        <span>🕗</span><span>{{ $event['time'] }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-400 text-xs">
                        <span>📍</span><span>{{ $event['location'] }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-400 text-xs">
                        <span>👥</span><span>Sisa <strong class="text-amber-400">{{ $event['seats'] }}</strong> kursi</span>
                    </div>
                </div>

                <div class="flex items-center justify-between pt-3 border-t border-slate-700/50">
                    <span class="text-white font-bold text-base">{{ $event['price'] }}</span>
                    <a href="/event/1"
                       class="flex items-center gap-1.5 px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600
                              text-white text-xs font-semibold rounded-lg shadow-md shadow-indigo-500/20
                              hover:shadow-indigo-500/40 hover:scale-105 transition-all duration-200">
                        Lihat Detail
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

{{-- ===== FLOW BANNER (Cara Beli Tiket) ===== --}}
<div class="mt-16 bg-gradient-to-r from-indigo-900/40 to-purple-900/40 border border-indigo-500/20 rounded-2xl p-8">
    <h2 class="text-center text-xl font-bold text-white mb-8">🎫 Cara Mendapatkan Tiket</h2>
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
        @foreach([
            ['1', '🔍', 'Pilih Event',      'Jelajahi event yang tersedia',   '/event/1'],
            ['2', '🛒', 'Beli Tiket',       'Isi data &amp; pilih pembayaran','/checkout'],
            ['3', '💳', 'Bayar',            'Konfirmasi pembayaran online',   '/checkout'],
            ['4', '🎫', 'Dapatkan E-Tiket', 'Tiket digital siap digunakan',  '/my-ticket'],
        ] as $step)
        <a href="{{ $step[4] }}" class="group flex flex-col items-center text-center gap-3 p-4 rounded-xl hover:bg-slate-800/50 transition-all">
            <div class="relative">
                <div class="w-14 h-14 rounded-full bg-slate-700/50 border-2 border-slate-600 group-hover:border-indigo-500
                            flex items-center justify-center text-2xl transition-colors">
                    {{ $step[1] }}
                </div>
                <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-indigo-600 text-white text-[10px] font-bold flex items-center justify-center">
                    {{ $step[0] }}
                </span>
            </div>
            <div>
                <p class="text-white font-semibold text-sm group-hover:text-indigo-300 transition-colors">{{ $step[2] }}</p>
                <p class="text-slate-400 text-xs mt-0.5">{!! $step[3] !!}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>

{{-- ===== PARTNERS SECTION ===== --}}
<div class="mt-16 bg-slate-800/30 border border-slate-700/50 rounded-2xl p-8">
    <h2 class="text-center text-xl font-bold text-white mb-8">🤝 Partner Pendukung</h2>
    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-6 items-center justify-center">
        @forelse($partners as $partner)
        <div class="flex flex-col items-center justify-center p-4 bg-slate-800/40 border border-slate-700/50 rounded-xl hover:scale-105 transition-all duration-300">
            <div class="w-16 h-16 rounded-lg bg-slate-700/30 flex items-center justify-center overflow-hidden mb-2 border border-slate-600/30 p-1">
                @if($partner->logo_url)
                    <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}" class="object-contain w-full h-full">
                @else
                    <span class="text-white font-bold text-sm">{{ substr($partner->name, 0, 2) }}</span>
                @endif
            </div>
            <p class="text-slate-300 text-xs font-semibold text-center truncate w-full">{{ $partner->name }}</p>
        </div>
        @empty
        <div class="col-span-full text-center text-slate-500">Belum ada partner pendukung.</div>
        @endforelse
    </div>
</div>

@endsection
