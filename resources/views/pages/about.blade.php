@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-slate-50">
    <div class="relative py-20 overflow-hidden bg-white border-b border-slate-100">
        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-indigo-50 rounded-full blur-3xl opacity-50"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="inline-block px-4 py-1.5 mb-4 text-xs font-bold tracking-widest text-indigo-600 uppercase bg-indigo-50 rounded-full">
                    Mengenal Lebih Dekat
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">
                    Satu Platform, <span class="text-indigo-600">Segala Solusi Digital.</span>
                </h1>
                <p class="text-lg text-slate-600 leading-relaxed">
                    SmartTools lahir dari visi untuk menyederhanakan tugas digital harian Anda melalui alat yang cepat, efisien, dan tanpa biaya.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 gap-16 items-center max-w-6xl mx-auto">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 mb-4">Apa itu SmartTools?</h2>
                <div class="space-y-4 text-slate-600 leading-relaxed text-justify">
                    <p>
                        <strong>SmartTools</strong> adalah kumpulan perangkat lunak berbasis web (web-based tools) yang dirancang khusus untuk mempermudah pekerjaan mahasiswa, pengembang, hingga profesional. Mulai dari perhitungan matematika rumit, pembuatan QR Code, hingga konversi satuan—semuanya ada di sini.
                    </p>
                    <p>
                        Kami percaya bahwa teknologi harus dapat diakses oleh siapa saja. Itulah mengapa SmartTools dibangun dengan antarmuka yang intuitif dan performa yang ringan, memastikan pengalaman pengguna yang mulus di perangkat apa pun.
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-12 max-w-3xl mx-auto py-10">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 relative group w-full">
                    <div class="absolute -top-6 left-8">
                        <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-indigo-200">
                            BK
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-slate-800 mb-1">Bintang Kesuma Mahardika</h3>
                        <p class="text-indigo-600 text-sm font-medium mb-4">Software Engineering & UI/UX Designer</p>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">
                            Seorang pengembang yang bersemangat dalam membangun solusi digital yang fungsional dan indah secara visual. Fokus utama saya adalah menciptakan aplikasi yang memberikan nilai nyata bagi penggunanya.
                        </p>
                        
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-indigo-600 hover:text-white transition-all">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-blue-600 hover:text-white transition-all">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-pink-600 hover:text-white transition-all">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 relative group w-full">
                    <div class="absolute -top-6 left-8">
                        <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-indigo-200">
                            YA
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-slate-800 mb-1">Yudhas Agali Arya Cogati</h3>
                        <p class="text-indigo-600 text-sm font-medium mb-4">Software Engineering</p>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">
                            Seorang pengembang yang bersemangat dalam membangun solusi digital yang fungsional dan indah secara visual. Fokus utama saya adalah menciptakan aplikasi yang memberikan nilai nyata bagi penggunanya.
                        </p>
                        
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-indigo-600 hover:text-white transition-all">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-blue-600 hover:text-white transition-all">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-pink-600 hover:text-white transition-all">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-24 max-w-5xl mx-auto">
            <h2 class="text-2xl font-bold text-slate-800 mb-12 text-center">Kenapa Memilih Kami?</h2>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-bolt text-xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2">Cepat & Ringan</h4>
                    <p class="text-slate-500 text-sm">Tidak ada loading lama. Setiap tool dioptimalkan untuk performa maksimal.</p>
                </div>
                <div>
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2">Privasi Terjamin</h4>
                    <p class="text-slate-500 text-sm">Data Anda diproses secara lokal di browser dan tidak disimpan di server kami.</p>
                </div>
                <div>
                    <div class="w-14 h-14 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-magic text-xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2">Desain Modern</h4>
                    <p class="text-slate-500 text-sm">Antarmuka bersih tanpa iklan yang mengganggu kenyamanan Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-indigo-600 py-12 mt-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-white mb-4">Ingin berkolaborasi atau memberikan masukan?</h2>
            <p class="text-indigo-100 mb-8">Saya selalu terbuka untuk ide-ide baru dan pengembangan tool lainnya.</p>
            <a href="mailto:agalicogati@gmail.com" class="px-8 py-3 bg-white text-indigo-600 font-bold rounded-xl hover:bg-slate-100 transition-all">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>
@endsection