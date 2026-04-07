@extends('layouts.app') {{-- Asumsi kamu punya layout utama, jika tidak hapus baris ini --}}

@section('content')
<div class="min-h-screen bg-cover bg-center flex items-center justify-center p-6" 
     style="background-image: url('{{ asset('images/your-background.jpg') }}');"> {{-- Sesuaikan background dengan gambar gunung di screenshot --}}
    
    <div class="w-full max-w-md bg-white/90 backdrop-blur-md p-8 rounded-3xl shadow-2xl border border-white/20">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-slate-800">Scientific Calculator</h1>
            <p class="text-slate-500 text-sm">SmartTools - Precision Suite</p>
        </div>
        
        <div class="mb-6">
            <input type="text" id="display" 
                   class="w-full bg-slate-50 text-right text-3xl p-5 rounded-2xl text-indigo-600 font-mono border border-slate-200 focus:outline-none shadow-inner" 
                   placeholder="0" readonly>
        </div>

        <div class="grid grid-cols-4 gap-3">
            <button onclick="appendValue('Math.sin(')" class="btn-func">sin</button>
            <button onclick="appendValue('Math.cos(')" class="btn-func">cos</button>
            <button onclick="appendValue('Math.tan(')" class="btn-func">tan</button>
            <button onclick="clearDisplay()" class="btn-danger">AC</button>

            <button onclick="appendValue('Math.log10(')" class="btn-func">log</button>
            <button onclick="appendValue('Math.sqrt(')" class="btn-func">√</button>
            <button onclick="appendValue('**')" class="btn-func">xⁿ</button>
            <button onclick="deleteLast()" class="btn-danger">DEL</button>

            @foreach(['7','8','9','/','4','5','6','*','1','2','3','-'] as $item)
                <button onclick="appendValue('{{ $item }}')" 
                        class="{{ in_array($item, ['/','*','-']) ? 'btn-operator' : 'btn-number' }}">
                    {{ $item == '*' ? '×' : ($item == '/' ? '÷' : $item) }}
                </button>
            @endforeach

            <button onclick="appendValue('0')" class="btn-number">0</button>
            <button onclick="appendValue('.')" class="btn-number">.</button>
            <button onclick="appendValue('(')" class="btn-operator">(</button>
            <button onclick="appendValue(')')" class="btn-operator">)</button>

            <button onclick="appendValue('+')" class="btn-operator">+</button>
            <button onclick="calculate()" class="col-span-3 btn-equal">=</button>
        </div>
    </div>
</div>

<style>
    .btn-func { @apply h-12 bg-indigo-50 text-indigo-700 font-semibold rounded-xl hover:bg-indigo-100 transition-all active:scale-95 text-sm; }
    .btn-number { @apply h-14 bg-white text-slate-700 font-bold rounded-xl shadow-sm hover:bg-slate-50 border border-slate-100 transition-all active:scale-95 text-xl; }
    .btn-operator { @apply h-14 bg-slate-100 text-slate-600 font-bold rounded-xl hover:bg-slate-200 transition-all active:scale-95 text-xl; }
    .btn-danger { @apply h-12 bg-rose-500 text-white font-bold rounded-xl hover:bg-rose-600 transition-all active:scale-95; }
    .btn-equal { @apply h-14 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 shadow-lg shadow-indigo-200 transition-all active:scale-95 text-2xl; }
</style>

<script>
    const display = document.getElementById('display');

    function appendValue(value) {
        if (display.value === 'Error') clearDisplay();
        display.value += value;
    }

    function clearDisplay() {
        display.value = '';
    }

    function deleteLast() {
        display.value = display.value.slice(0, -1);
    }

    function calculate() {
        try {
            let expression = display.value;
            
            // Auto-close brackets
            const openBrackets = (expression.match(/\(/g) || []).length;
            const closeBrackets = (expression.match(/\)/g) || []).length;
            for (let i = 0; i < openBrackets - closeBrackets; i++) {
                expression += ')';
            }

            const result = eval(expression);
            
            if (result === undefined || isNaN(result) || !isFinite(result)) {
                display.value = "Error";
            } else {
                // Formatting hasil agar tidak terlalu panjang
                display.value = Number(result.toPrecision(10)).toString();
            }
        } catch (error) {
            display.value = "Error";
        }
    }

    // Keyboard support
    document.addEventListener('keydown', (e) => {
        const key = e.key;
        if (/[0-9\.\+\-\*\/\(\)]/.test(key)) {
            appendValue(key);
        } else if (key === 'Enter') {
            e.preventDefault();
            calculate();
        } else if (key === 'Backspace') {
            deleteLast();
        } else if (key === 'Escape') {
            clearDisplay();
        }
    });
</script>
@endsection