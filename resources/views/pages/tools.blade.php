@extends('layouts.app')
@section('content')

    <main class="max-w-7xl mx-auto px-4 py-12">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-slate-800">Pilih Tools</h2>
            <div class="relative">
                <!-- ✅ tambah id -->
                <input id="searchInput" type="text" placeholder="Cari alat..." class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 w-64">
                <i class="fas fa-search absolute left-3 top-3 text-slate-400"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- ✅ tambah class tool-card -->
            <div class="tool-card bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all group cursor-pointer">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class="fas fa-calculator text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Scientific Calculator</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Selesaikan perhitungan matematika kompleks dengan antarmuka yang intuitif.</p>         
                <a href="{{ Route('calculator') }}">       
                <div class="mt-4 flex items-center text-indigo-600 font-semibold text-sm">
                    Buka Tool <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </div>
                </a>
            </div>

            <div class="tool-card bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all group cursor-pointer">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <i class="fas fa-qrcode text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">QR Code Generator</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Buat kode QR kustom untuk link, teks, atau WiFi dengan cepat dan gratis.</p>
                <a href="{{ Route('qrTools') }}">
                    <div class="mt-4 flex items-center text-indigo-600 font-semibold text-sm">
                    Buka Tool <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </div>
                </a>
            </div>

            <div class="tool-card bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all group cursor-pointer">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-green-600 mb-4 group-hover:bg-green-600 group-hover:text-white transition-colors">
                    <i class="fas fa-exchange-alt text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Unit Converter</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Konversi satuan berat, panjang, suhu, dan mata uang secara real-time.</p>
                <div class="mt-4 flex items-center text-indigo-600 font-semibold text-sm">
                    Buka Tool <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </div>
            </div>

            <div class="tool-card bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all group cursor-pointer">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ✅ SCRIPT SEARCH -->
<script>
const searchInput = document.getElementById("searchInput");
const cards = document.querySelectorAll(".tool-card");

searchInput.addEventListener("keyup", function() {
    const keyword = this.value.toLowerCase();

    cards.forEach(card => {
        const text = card.innerText.toLowerCase();

        if (text.includes(keyword)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});
</script>

</body>
</html>

@endsection