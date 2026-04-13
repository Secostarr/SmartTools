<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartTools</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <div class="bg-indigo-600 p-2 rounded-lg">
                    <i class="fas fa-microchip text-white text-xl"></i>
                </div>
                <span class="text-2xl font-bold text-slate-800 tracking-tight">
                    Smart<span class="text-indigo-600">Tools</span>
                </span>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex space-x-8 text-slate-600 font-medium">
                <a href="/smarttools" class="hover:text-indigo-600 transition">Beranda</a>
                <a href="{{ route('tools') }}" class="hover:text-indigo-600 transition">Semua Tools</a>
                <a href="{{ route('about') }}" class="hover:text-indigo-600 transition">Tentang</a>
            </div>

            <!-- Button Mobile -->
            <button id="menu-btn" class="md:hidden text-slate-700 text-xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Menu Mobile -->
        <div id="menu" class="hidden md:hidden flex-col mt-4 space-y-2 text-slate-600 font-medium">
            <a href="/smarttools" class="block py-2 hover:text-indigo-600">Beranda</a>
            <a href="{{ route('tools') }}" class="block py-2 hover:text-indigo-600">Semua Tools</a>
            <a href="{{ route('about') }}" class="block py-2 hover:text-indigo-600">Tentang</a>
        </div>
    </div>
</nav>

@yield('content')

    <script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>