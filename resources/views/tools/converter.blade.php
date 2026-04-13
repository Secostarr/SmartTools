@extends('layouts.app')
@section('content')

<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">

        <h2 class="text-2xl font-bold mb-2 text-slate-800 text-center">
            Unit Converter
        </h2>
        <p class="text-sm text-gray-500 text-center mb-6">
            Konversi panjang, berat, suhu, dan mata uang dengan mudah & cepat
        </p>

        <!-- INPUT -->
        <label class="text-sm font-semibold text-gray-600">Nilai</label>
        <input 
            type="number" 
            id="inputValue"
            placeholder="Contoh: 100" 
            class="w-full p-3 border rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        >

        <!-- CATEGORY -->
        <label class="text-sm font-semibold text-gray-600">Kategori</label>
        <select id="category" onchange="updateUnits()" 
            class="w-full p-3 border rounded-lg mb-2">
            <option value="length">📏 Panjang</option>
            <option value="weight">⚖️ Berat</option>
            <option value="temperature">🌡️ Suhu</option>
            <option value="currency">💱 Mata Uang</option>
        </select>

        <!-- DESKRIPSI -->
        <p id="desc" class="text-xs text-gray-500 mb-4"></p>

        <!-- FROM -->
        <label class="text-sm font-semibold text-gray-600">Dari</label>
        <select id="fromUnit" class="w-full p-3 border rounded-lg mb-3"></select>

        <!-- SWAP BUTTON -->
        <div class="flex justify-center my-2">
            <button onclick="swapUnits()" 
                class="bg-gray-200 px-3 py-1 rounded-full hover:bg-gray-300">
                ↔
            </button>
        </div>

        <!-- TO -->
        <label class="text-sm font-semibold text-gray-600">Ke</label>
        <select id="toUnit" class="w-full p-3 border rounded-lg mb-4"></select>

        <!-- BUTTON -->
        <button onclick="convert()" 
            class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition">
            Convert Sekarang
        </button>

        <!-- RESULT -->
        <div id="result" 
            class="mt-6 text-center text-lg font-semibold text-indigo-600">
        </div>

    </div>
</div>

<script>
const units = {
    length: ["meter", "km", "cm"],
    weight: ["kg", "gram"],
    temperature: ["celsius", "fahrenheit", "kelvin"],
    currency: ["IDR", "USD", "EUR"]
};

const descriptions = {
    length: "Konversi satuan panjang seperti meter, kilometer, dan centimeter.",
    weight: "Konversi berat seperti kilogram dan gram.",
    temperature: "Konversi suhu antara Celsius, Fahrenheit, dan Kelvin.",
    currency: "Konversi mata uang (nilai estimasi, belum real-time)."
};

function updateUnits() {
    const category = document.getElementById("category").value;
    const from = document.getElementById("fromUnit");
    const to = document.getElementById("toUnit");
    const desc = document.getElementById("desc");

    from.innerHTML = "";
    to.innerHTML = "";

    desc.innerText = descriptions[category];

    units[category].forEach(unit => {
        from.innerHTML += `<option value="${unit}">${unit}</option>`;
        to.innerHTML += `<option value="${unit}">${unit}</option>`;
    });
}

// INIT
updateUnits();

// SWAP
function swapUnits() {
    const from = document.getElementById("fromUnit");
    const to = document.getElementById("toUnit");

    let temp = from.value;
    from.value = to.value;
    to.value = temp;
}

// CONVERT
function convert() {
    const value = parseFloat(document.getElementById("inputValue").value);
    const category = document.getElementById("category").value;
    const from = document.getElementById("fromUnit").value;
    const to = document.getElementById("toUnit").value;
    const resultDiv = document.getElementById("result");

    if (isNaN(value)) {
        alert("Masukkan angka terlebih dahulu!");
        return;
    }

    let result;

    // PANJANG
    if (category === "length") {
        let meter;
        if (from === "km") meter = value * 1000;
        else if (from === "cm") meter = value / 100;
        else meter = value;

        if (to === "km") result = meter / 1000;
        else if (to === "cm") result = meter * 100;
        else result = meter;
    }

    // BERAT
    else if (category === "weight") {
        let kg = (from === "gram") ? value / 1000 : value;
        result = (to === "gram") ? kg * 1000 : kg;
    }

    // SUHU
    else if (category === "temperature") {
        if (from === "celsius") {
            if (to === "fahrenheit") result = (value * 9/5) + 32;
            else if (to === "kelvin") result = value + 273;
            else result = value;
        } 
        else if (from === "fahrenheit") {
            if (to === "celsius") result = (value - 32) * 5/9;
            else if (to === "kelvin") result = (value - 32) * 5/9 + 273;
            else result = value;
        } 
        else {
            if (to === "celsius") result = value - 273;
            else if (to === "fahrenheit") result = (value - 273) * 9/5 + 32;
            else result = value;
        }
    }

    // MATA UANG
    else if (category === "currency") {
        const rate = { IDR: 1, USD: 15500, EUR: 17000 };
        let idr = value * rate[from];
        result = idr / rate[to];
    }

    resultDiv.innerText = `${value} ${from} = ${result.toFixed(2)} ${to}`;
}
</script>

@endsection