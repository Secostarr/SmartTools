@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<div class="relative min-h-screen overflow-hidden bg-slate-50">
    
    <section class="relative pt-20 pb-32 overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-orange-500/10 rounded-full blur-[120px] -z-10 animate__animated animate__fadeIn"></div>

        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center text-center">
                <span class="animate__animated animate__fadeInDown inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-indigo-600 uppercase bg-indigo-50 rounded-full">
                    🚀 All-in-One Digital Toolbox
                </span>

                <h1 class="animate__animated animate__fadeInUp animate__delay-1s text-5xl md:text-7xl font-extrabold text-slate-900 mb-8 tracking-tight">
                    Bekerja Lebih <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-500">Cerdas</span>,<br>Bukan Lebih Keras.
                </h1>

                <p class="animate__animated animate__fadeInUp animate__delay-1s text-lg text-slate-600 mb-10 max-w-2xl leading-relaxed">
                    SmartTools menyediakan berbagai alat produktivitas gratis untuk membantu tugas harian Anda—mulai dari kalkulator saintifik hingga generator kode QR.
                </p>

                <div class="animate__animated animate__zoomIn animate__delay-2s flex flex-wrap justify-center gap-4">
                    <a href="#pilih-tools" class="px-8 py-4 bg-indigo-600 text-white font-bold rounded-2xl hover:bg-indigo-700 hover:shadow-xl hover:shadow-indigo-200 transition-all transform hover:-translate-y-1">
                        Jelajahi Tools
                    </a>
                    <a href="{{ route('about') }}" class="px-8 py-4 bg-white text-slate-700 font-bold rounded-2xl border border-slate-200 hover:bg-slate-50 transition-all">
                        Pelajari Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 border-y border-slate-100 bg-white/50 backdrop-blur-sm">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="animate__animated animate__fadeInLeft">
                    <h3 class="text-3xl font-bold text-slate-900">10+</h3>
                    <p class="text-slate-500 text-sm">Tools Gratis</p>
                </div>
                <div class="animate__animated animate__fadeInLeft animate__delay-1s">
                    <h3 class="text-3xl font-bold text-slate-900">100%</h3>
                    <p class="text-slate-500 text-sm">Privasi Aman</p>
                </div>
                <div class="animate__animated animate__fadeInRight animate__delay-1s">
                    <h3 class="text-3xl font-bold text-slate-900">Fast</h3>
                    <p class="text-slate-500 text-sm">Respon Cepat</p>
                </div>
                <div class="animate__animated animate__fadeInRight">
                    <h3 class="text-3xl font-bold text-slate-900">Free</h3>
                    <p class="text-slate-500 text-sm">Selamanya</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pilih-tools" class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-slate-800">Pilih Tools</h2>
                    <p class="text-slate-500 mt-2">Gunakan alat yang Anda butuhkan secara instan.</p>
                </div>
                <div class="hidden md:block relative">
                    <input type="text" placeholder="Cari alat..." class="pl-10 pr-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                    <i class="fas fa-search absolute left-4 top-3 text-slate-400"></i>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="animate__animated animate__fadeInUp bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-calculator text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Scientific Calculator</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Hitung persamaan matematika kompleks dengan cepat dan akurat.</p>
                    <a href="{{ Route('tool.calculator') }}" class="text-indigo-600 font-bold inline-flex items-center group-hover:gap-2 transition-all">
                        Buka Tool <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="animate__animated animate__fadeInUp animate__delay-1s bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-qrcode text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">QR Code Generator</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Buat kode QR kustom untuk link, teks, atau WiFi secara instan.</p>
                    <a href="{{ Route('qrTools') }}" class="text-indigo-600 font-bold inline-flex items-center group-hover:gap-2 transition-all">
                        Buka Tool <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="animate__animated animate__fadeInUp animate__delay-2s bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-amber-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-key text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Password Generator</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Hasilkan kata sandi kuat dan aman untuk akun digital Anda.</p>
                    <a href="#" class="text-indigo-600 font-bold inline-flex items-center group-hover:gap-2 transition-all">
                        Buka Tool <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>
</div>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endsection