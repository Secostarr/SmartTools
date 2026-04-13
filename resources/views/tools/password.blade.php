@extends('layouts.app')
@section('content')

<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md text-center">

        <h2 class="text-2xl font-bold mb-4 text-slate-800">
            Password Generator
        </h2>

        <!-- INPUT -->
        <input 
            type="text" 
            id="userInput"
            placeholder="Masukkan kata dasar..." 
            class="w-full p-3 border rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        >

        <!-- BUTTON -->
        <button onclick="generatePassword()" 
            class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">
            Generate Password
        </button>

        <!-- RESULT -->
        <div id="resultBox" class="mt-6 flex flex-col gap-3"></div>

    </div>
</div>

<script>
function randomChar(str) {
    return str[Math.floor(Math.random() * str.length)];
}

function generateStrongPassword(base) {
    const upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const lower = "abcdefghijklmnopqrstuvwxyz";
    const number = "0123456789";
    const symbol = "!@#$%^&*";

    let password = "";

    // ambil base dan modifikasi
    password += base.charAt(0).toUpperCase();
    password += base.slice(1);

    // tambah random
    password += randomChar(upper);
    password += randomChar(lower);
    password += randomChar(number);
    password += randomChar(symbol);

    // acak urutan
    return password.split('').sort(() => 0.5 - Math.random()).join('');
}

function generatePassword() {
    const input = document.getElementById("userInput").value;
    const resultBox = document.getElementById("resultBox");

    if (input.trim() === "") {
        alert("Masukkan kata terlebih dahulu!");
        return;
    }

    resultBox.innerHTML = "";

    for (let i = 0; i < 4; i++) {
        let pwd = generateStrongPassword(input);

        const div = document.createElement("div");
        div.className = "flex justify-between items-center bg-gray-100 p-2 rounded-lg";

        div.innerHTML = `
            <span class="font-mono">${pwd}</span>
            <button onclick="copyText('${pwd}')" 
                class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">
                Copy
            </button>
        `;

        resultBox.appendChild(div);
    }
}

function copyText(text) {
    navigator.clipboard.writeText(text);
    alert("Password disalin!");
}
</script>

@endsection