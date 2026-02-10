<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartTools - All in One Utility</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-slate-50 font-sans">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-2">
                    <div class="bg-indigo-600 p-2 rounded-lg">
                        <i class="fas fa-microchip text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold text-slate-800 tracking-tight">Smart<span class="text-indigo-600">Tools</span></span>
                </div>
                <div class="hidden md:flex space-x-8 text-slate-600 font-medium">
                    <a href="#" class="hover:text-indigo-600 transition">Beranda</a>
                    <a href="#" class="hover:text-indigo-600 transition">Semua Tools</a>
                    <a href="#" class="hover:text-indigo-600 transition">Tentang</a>
                </div>
                <button class="bg-indigo-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-indigo-700 transition shadow-md shadow-indigo-200">
                    Mulai Sekarang
                </button>
            </div>
        </div>
    </nav>

    <header class="py-16 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 text-center">
            @php
                $settings = \App\Models\SiteSetting::pluck('value', 'key');
            @endphp

            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4">
                {{ $settings['hero_title'] ?? 'Satu Tempat untuk Semua Kebutuhan' }}
            </h1>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto">
                {{ $settings['hero_desc'] ?? 'Akses berbagai alat produktivitas dalam satu dashboard.' }}
            </p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-12">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-slate-800">Pilih Tools</h2>
            <div class="relative">
                <input type="text" placeholder="Cari alat..." class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 w-64">
                <i class="fas fa-search absolute left-3 top-3 text-slate-400"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all group cursor-pointer">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-calculator text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Scientific Calculator</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Selesaikan perhitungan matematika kompleks dengan antarmuka yang intuitif.</p>
                <div class="mt-4 flex items-center text-indigo-600 font-semibold text-sm">
                    Buka Tool <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all group cursor-pointer">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <i class="fas fa-qrcode text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">QR Code Generator</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Buat kode QR kustom untuk link, teks, atau WiFi dengan cepat dan gratis.</p>
                <div class="mt-4 flex items-center text-indigo-600 font-semibold text-sm">
                    Buka Tool <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all group cursor-pointer">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-green-600 mb-4 group-hover:bg-green-600 group-hover:text-white transition-colors">
                    <i class="fas fa-exchange-alt text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Unit Converter</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Konversi satuan berat, panjang, suhu, dan mata uang secara real-time.</p>
                <div class="mt-4 flex items-center text-indigo-600 font-semibold text-sm">
                    Buka Tool <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all group cursor-pointer">
                <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center text-amber-600 mb-4 group-hover:bg-amber-600 group-hover:text-white transition-colors">
                    <i class="fas fa-key text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Password Generator</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Hasilkan kata sandi yang kuat dan aman untuk melindungi akun digital Anda.</p>
                <div class="mt-4 flex items-center text-indigo-600 font-semibold text-sm">
                    Buka Tool <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-slate-900 text-slate-400 py-10 mt-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2026 SmartTools Project.</p>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>