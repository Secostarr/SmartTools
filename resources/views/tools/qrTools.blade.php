@extends('layouts.app')
@section('content')

<div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md text-center">

            <h2 class="text-2xl font-bold mb-4 text-slate-800">
                QR Code Generator
            </h2>

            <!-- INPUT -->
            <input 
                type="text" 
                id="linkInput"
                placeholder="Masukkan link di sini..." 
                class="w-full p-3 border rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-indigo-500"
            >

            <!-- BUTTON -->
            <button onclick="generateQR()" 
                class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">
                Generate QR
            </button>

            <!-- QR RESULT -->
            <div class="mt-6 flex flex-col items-center gap-3">
                <img id="qrImage" class="hidden">

                <!-- tombol download -->
                <a id="downloadBtn" download="qrcode.png" 
                class="hidden bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                    Download QR
                </a>
            </div>

        </div>
    </div>

    <!-- SCRIPT QR -->
    <script>
    function generateQR() {
        const link = document.getElementById("linkInput").value;
        const qrImage = document.getElementById("qrImage");
        const downloadBtn = document.getElementById("downloadBtn");

        if (link.trim() === "") {
            alert("Masukkan link terlebih dahulu!");
            return;
        }

        const qrURL = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" + encodeURIComponent(link);

        // tampilkan QR
        qrImage.src = qrURL;
        qrImage.classList.remove("hidden");

        // aktifkan tombol download
        downloadBtn.href = qrURL;
        downloadBtn.classList.remove("hidden");
    }
    </script>

@endsection