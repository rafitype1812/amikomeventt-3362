@extends('layouts.app')

@section('title', 'Checkout - AmikomEventHub')

@section('content')

{{-- Breadcrumb --}}
<div class="flex items-center gap-2 text-sm text-slate-400 mb-8">
    <a href="/" class="hover:text-indigo-400 transition-colors">Home</a>
    <span>/</span>
    <a href="/event/1" class="hover:text-indigo-400 transition-colors">Detail Event</a>
    <span>/</span>
    <span class="text-white">Checkout</span>
</div>

{{-- Step Indicator --}}
<div class="flex items-center justify-center gap-2 mb-10">
    <div class="flex items-center gap-2">
        <div class="w-8 h-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-sm font-bold">1</div>
        <span class="text-white text-sm font-medium">Detail</span>
    </div>
    <div class="w-12 h-0.5 bg-indigo-500"></div>
    <div class="flex items-center gap-2">
        <div class="w-8 h-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-sm font-bold">2</div>
        <span class="text-white text-sm font-medium">Checkout</span>
    </div>
    <div class="w-12 h-0.5 bg-slate-600"></div>
    <div class="flex items-center gap-2">
        <div class="w-8 h-8 rounded-full bg-slate-700 flex items-center justify-center text-slate-400 text-sm font-bold">3</div>
        <span class="text-slate-400 text-sm font-medium">Tiket</span>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    {{-- Form Section --}}
    <div class="lg:col-span-2 space-y-6">

        {{-- Personal Data --}}
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                <span class="w-7 h-7 bg-indigo-500/20 rounded-lg flex items-center justify-center text-indigo-300">👤</span>
                Data Pemesan
            </h2>

            <form id="checkout-form" action="#" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="nama_lengkap" class="block text-sm font-medium text-slate-300 mb-1.5">Nama Lengkap *</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white placeholder-slate-400
                                      focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                    </div>
                    <div>
                        <label for="nim" class="block text-sm font-medium text-slate-300 mb-1.5">NIM / No. Identitas *</label>
                        <input type="text" id="nim" name="nim" placeholder="Contoh: 24.11.XXXX"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white placeholder-slate-400
                                      focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-1.5">Email Aktif *</label>
                    <input type="email" id="email" name="email" placeholder="email@amikom.ac.id"
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white placeholder-slate-400
                                  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                </div>

                <div>
                    <label for="no_hp" class="block text-sm font-medium text-slate-300 mb-1.5">No. HP / WhatsApp *</label>
                    <input type="tel" id="no_hp" name="no_hp" placeholder="08xxxxxxxxxx"
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white placeholder-slate-400
                                  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                </div>

                <div>
                    <label for="prodi" class="block text-sm font-medium text-slate-300 mb-1.5">Program Studi</label>
                    <select id="prodi" name="prodi"
                            class="w-full px-4 py-2.5 rounded-xl bg-slate-700/50 border border-slate-600 text-white
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        <option value="" class="bg-slate-800">-- Pilih Prodi --</option>
                        <option value="si" class="bg-slate-800">S1 Sistem Informasi</option>
                        <option value="ti" class="bg-slate-800">S1 Teknik Informatika</option>
                        <option value="dkv" class="bg-slate-800">S1 Desain Komunikasi Visual</option>
                        <option value="umum" class="bg-slate-800">Umum / Non-Mahasiswa</option>
                    </select>
                </div>
            </form>
        </div>

        {{-- Payment Method --}}
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                <span class="w-7 h-7 bg-green-500/20 rounded-lg flex items-center justify-center text-green-300">💳</span>
                Metode Pembayaran
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                @foreach([
                    ['transfer', '🏦', 'Transfer Bank', 'BCA / Mandiri / BNI'],
                    ['qris',     '📱', 'QRIS',          'Scan & Pay'],
                    ['ewallet',  '💰', 'E-Wallet',      'GoPay / OVO / Dana'],
                ] as $method)
                <label for="pay_{{ $method[0] }}"
                       class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-600 cursor-pointer
                              hover:border-indigo-500 has-[:checked]:border-indigo-500 has-[:checked]:bg-indigo-500/10 transition-all">
                    <input type="radio" id="pay_{{ $method[0] }}" name="payment_method" value="{{ $method[0] }}" class="sr-only">
                    <span class="text-2xl">{{ $method[1] }}</span>
                    <span class="text-white text-sm font-semibold">{{ $method[2] }}</span>
                    <span class="text-slate-400 text-xs">{{ $method[3] }}</span>
                </label>
                @endforeach
            </div>
        </div>

    </div>

    {{-- Order Summary --}}
    <div>
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 sticky top-20">
            <h2 class="text-lg font-bold text-white mb-5">Ringkasan Pesanan</h2>

            <div class="bg-slate-700/40 rounded-xl p-4 mb-5">
                <p class="text-white font-semibold text-sm mb-1">National Tech Summit 2025</p>
                <p class="text-slate-400 text-xs">Sabtu, 25 Oktober 2025</p>
                <p class="text-slate-400 text-xs">Auditorium AMIKOM</p>
            </div>

            <div class="space-y-3 text-sm mb-5">
                <div class="flex justify-between text-slate-300">
                    <span>Harga Tiket</span>
                    <span>Rp 75.000</span>
                </div>
                <div class="flex justify-between text-slate-300">
                    <span>Biaya Layanan</span>
                    <span>Rp 5.000</span>
                </div>
                <div class="border-t border-slate-600 pt-3 flex justify-between font-bold text-white text-base">
                    <span>Total</span>
                    <span class="text-indigo-300">Rp 80.000</span>
                </div>
            </div>

            <a href="/my-ticket"
               class="block w-full text-center px-6 py-3.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
                Konfirmasi Pembayaran
            </a>
            <p class="text-center text-slate-500 text-xs mt-3">Tiket dikirim ke email Anda</p>
        </div>
    </div>

</div>

@endsection
