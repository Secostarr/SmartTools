@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<div class="min-h-screen bg-slate-50 overflow-x-hidden">
    
    <div class="relative py-24 overflow-hidden bg-white border-b border-slate-100">
        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-indigo-50 rounded-full blur-3xl opacity-50 animate-pulse"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="animate__animated animate__fadeInDown inline-block px-4 py-1.5 mb-4 text-xs font-bold tracking-widest text-indigo-600 uppercase bg-indigo-50 rounded-full">
                    Mengenal Lebih Dekat
                </span>
                <h1 class="animate__animated animate__zoomIn text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">
                    Satu Platform, <span class="text-indigo-600">Segala Solusi Digital.</span>
                </h1>
                <p class="animate__animated animate__fadeInUp animate__delay-1s text-lg text-slate-600 leading-relaxed">
                    SmartTools lahir dari visi untuk menyederhanakan tugas digital harian Anda melalui alat yang cepat, efisien, dan tanpa biaya.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 gap-16 items-start max-w-6xl mx-auto">
            
            <div data-aos="fade-right">
                <h2 class="text-2xl font-bold text-slate-800 mb-6 flex items-center">
                    <span class="w-8 h-1 bg-indigo-600 inline-block mr-3 rounded-full"></span>
                    Apa itu SmartTools?
                </h2>
                <div class="space-y-4 text-slate-600 leading-relaxed text-justify">
                    <p class="bg-white p-6 rounded-2xl shadow-sm border border-slate-50 transition-transform hover:scale-[1.02]">
                        <strong>SmartTools</strong> adalah kumpulan perangkat lunak berbasis web yang dirancang khusus untuk mempermudah pekerjaan mahasiswa, pengembang, hingga profesional. Mulai dari perhitungan matematika rumit, pembuatan QR Code, hingga konversi satuan—semuanya ada di sini.
                    </p>
                    <p class="bg-white p-6 rounded-2xl shadow-sm border border-slate-50 transition-transform hover:scale-[1.02]">
                        Kami percaya bahwa teknologi harus dapat diakses oleh siapa saja. Itulah mengapa SmartTools dibangun dengan antarmuka yang intuitif dan performa yang ringan.
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-10">
                <div data-aos="fade-up" data-aos-delay="100" class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 relative group transition-all hover:shadow-xl hover:-translate-y-2">
                    <div class="absolute -top-6 left-8">
                        <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-indigo-200 group-hover:rotate-12 transition-transform">
                            BK
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-slate-800 mb-1">Bintang Kesuma Mahardika</h3>
                        <p class="text-indigo-600 text-sm font-medium mb-4">UI/UX Designer</p>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">
                            Bersemangat membangun solusi digital fungsional dan indah. Fokus menciptakan aplikasi bernilai nyata.
                        </p>
                        <div class="flex gap-4">
                            <a href="#" class="social-btn"><i class="fab fa-github"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 relative group transition-all hover:shadow-xl hover:-translate-y-2">
                    <div class="absolute -top-6 left-8">
                        <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-indigo-200 group-hover:rotate-12 transition-transform">
                            YA
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-slate-800 mb-1">Yudhas Agali Arya Cogati</h3>
                        <p class="text-indigo-600 text-sm font-medium mb-4">Software Engineering</p>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">
                            Fokus pada pengembangan sistem yang efisien dan skalabel untuk mempermudah aksesibilitas teknologi.
                        </p>
                        <div class="flex gap-4">
                            <a href="#" class="social-btn"><i class="fab fa-github"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-32 max-w-5xl mx-auto">
            <h2 data-aos="fade-down" class="text-2xl font-bold text-slate-800 mb-16 text-center italic">Kenapa Memilih Kami?</h2>
            <div class="grid md:grid-cols-3 gap-12 text-center">
                <div data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 animate-bounce">
                        <i class="fas fa-bolt text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2 uppercase">Cepat</h4>
                    <p class="text-slate-500 text-sm">Optimasi performa maksimal tanpa loading lama.</p>
                </div>
                <div data-aos="zoom-in" data-aos-delay="200">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 animate-pulse">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2 uppercase">Aman</h4>
                    <p class="text-slate-500 text-sm">Privasi data pengguna diproses secara lokal.</p>
                </div>
                <div data-aos="zoom-in" data-aos-delay="300">
                    <div class="w-16 h-16 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-magic text-2xl animate-spin-slow"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2 uppercase">Modern</h4>
                    <p class="text-slate-500 text-sm">Desain bersih dan pengalaman pengguna terbaik.</p>
                </div>
            </div>
        </div>
    </div>

    <div data-aos="fade-up" class="bg-indigo-600 py-16 mt-20 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
            <div class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl font-bold text-white mb-4 animate__animated animate__pulse animate__infinite">Siap berkolaborasi?</h2>
            <p class="text-indigo-100 mb-10 text-lg">Mari kembangkan SmartTools menjadi lebih baik bersama kami.</p>
            <a href="mailto:agalicogati@gmail.com" class="px-10 py-4 bg-white text-indigo-600 font-extrabold rounded-2xl hover:bg-slate-50 hover:scale-110 transition-all shadow-2xl">
                Hubungi Kami Sekarang
            </a>
        </div>
    </div>
</div>

<style>
    .social-btn {
        @apply w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-indigo-600 hover:text-white transition-all duration-300;
    }
    .animate-spin-slow {
        animation: spin 8s linear infinite;
    }
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
</style>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>
@endsection