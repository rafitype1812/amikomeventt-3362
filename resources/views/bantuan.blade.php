@extends('layouts.app')

@section('title', 'Bantuan & FAQ - AmikomEventHub')

@section('content')

{{-- Page Header --}}
<div class="text-center mb-12">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
        <span class="bg-gradient-to-r from-amber-400 to-orange-400 bg-clip-text text-transparent">Pusat Bantuan</span>
    </h1>
    <p class="text-lg text-slate-400">Temukan jawaban atas pertanyaan yang sering diajukan</p>
</div>

{{-- FAQ Section --}}
<div class="max-w-3xl mx-auto space-y-4">

    {{-- FAQ 1 --}}
    <details class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden" open>
        <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-700/30 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shrink-0">
                    <span class="text-white font-bold">1</span>
                </div>
                <h3 class="text-lg font-semibold text-white">Apa itu AmikomEventHub?</h3>
            </div>
            <svg class="w-5 h-5 text-slate-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </summary>
        <div class="px-6 pb-6 pl-20">
            <p class="text-slate-400 leading-relaxed">AmikomEventHub adalah platform berbasis web yang dikembangkan untuk memudahkan mahasiswa AMIKOM Yogyakarta dalam menemukan, mendaftar, dan mengelola berbagai event kampus seperti seminar, workshop, kompetisi, dan kegiatan lainnya.</p>
        </div>
    </details>

    {{-- FAQ 2 --}}
    <details class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-700/30 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shrink-0">
                    <span class="text-white font-bold">2</span>
                </div>
                <h3 class="text-lg font-semibold text-white">Bagaimana cara mendaftar event?</h3>
            </div>
            <svg class="w-5 h-5 text-slate-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </summary>
        <div class="px-6 pb-6 pl-20">
            <p class="text-slate-400 leading-relaxed">Untuk mendaftar event, Anda cukup membuka halaman <strong class="text-white">Katalog</strong>, pilih event yang diminati, lalu klik tombol "Daftar Sekarang". Pastikan Anda sudah memiliki akun dan login terlebih dahulu.</p>
        </div>
    </details>

    {{-- FAQ 3 --}}
    <details class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-700/30 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center shrink-0">
                    <span class="text-white font-bold">3</span>
                </div>
                <h3 class="text-lg font-semibold text-white">Apakah semua event gratis?</h3>
            </div>
            <svg class="w-5 h-5 text-slate-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </summary>
        <div class="px-6 pb-6 pl-20">
            <p class="text-slate-400 leading-relaxed">Sebagian besar event kampus bersifat gratis untuk mahasiswa AMIKOM. Namun, beberapa event premium seperti sertifikasi atau workshop khusus mungkin memerlukan biaya pendaftaran. Informasi harga tertera di setiap detail event.</p>
        </div>
    </details>

    {{-- FAQ 4 --}}
    <details class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-700/30 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center shrink-0">
                    <span class="text-white font-bold">4</span>
                </div>
                <h3 class="text-lg font-semibold text-white">Bagaimana cara membatalkan pendaftaran?</h3>
            </div>
            <svg class="w-5 h-5 text-slate-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </summary>
        <div class="px-6 pb-6 pl-20">
            <p class="text-slate-400 leading-relaxed">Anda dapat membatalkan pendaftaran event melalui halaman profil Anda. Buka bagian "Event Saya", pilih event yang ingin dibatalkan, dan klik tombol "Batalkan Pendaftaran". Pembatalan hanya bisa dilakukan H-2 sebelum event berlangsung.</p>
        </div>
    </details>

    {{-- FAQ 5 --}}
    <details class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-700/30 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center shrink-0">
                    <span class="text-white font-bold">5</span>
                </div>
                <h3 class="text-lg font-semibold text-white">Siapa yang bisa mengajukan event baru?</h3>
            </div>
            <svg class="w-5 h-5 text-slate-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </summary>
        <div class="px-6 pb-6 pl-20">
            <p class="text-slate-400 leading-relaxed">Organisasi kemahasiswaan, UKM, himpunan mahasiswa, dan dosen yang terdaftar di sistem dapat mengajukan event baru. Event yang diajukan akan melalui proses verifikasi oleh admin sebelum dipublikasikan di platform.</p>
        </div>
    </details>

    {{-- FAQ 6 --}}
    <details class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl border border-slate-700/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-slate-700/30 transition-colors">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-fuchsia-600 flex items-center justify-center shrink-0">
                    <span class="text-white font-bold">6</span>
                </div>
                <h3 class="text-lg font-semibold text-white">Bagaimana cara menghubungi admin?</h3>
            </div>
            <svg class="w-5 h-5 text-slate-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </summary>
        <div class="px-6 pb-6 pl-20">
            <p class="text-slate-400 leading-relaxed">Anda bisa menghubungi admin melalui halaman <strong class="text-white">Kontak</strong> atau mengirim email langsung ke <span class="text-indigo-400">admin@amikomevenhub.ac.id</span>. Tim kami biasanya merespons dalam waktu 1x24 jam kerja.</p>
        </div>
    </details>

</div>

{{-- CTA Box --}}
<div class="max-w-3xl mx-auto mt-10 bg-gradient-to-r from-indigo-600/20 to-purple-600/20 rounded-2xl border border-indigo-500/20 p-8 text-center">
    <h3 class="text-xl font-bold text-white mb-2">Masih punya pertanyaan?</h3>
    <p class="text-slate-400 mb-6">Jangan ragu untuk menghubungi kami melalui halaman kontak.</p>
    <a href="/kontak" class="inline-block px-8 py-3.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
        📧 Hubungi Kami
    </a>
</div>

{{-- Navigation Buttons --}}
<div class="flex flex-wrap justify-center gap-4 mt-12">
    <a href="/" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        🏠 Home
    </a>
    <a href="/profil" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        👤 Profil
    </a>
    <a href="/katalog" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:scale-105 transition-all duration-300">
        📋 Katalog Event
    </a>
    <a href="/kontak" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold rounded-xl ring-1 ring-slate-700 hover:bg-slate-700 hover:text-white hover:scale-105 transition-all duration-300">
        📧 Kontak
    </a>
</div>

@endsection
