@extends('layouts.admin') @section('content')
<div class="p-8 bg-slate-50 min-h-screen">
    <h1 class="text-3xl font-bold text-slate-800 mb-8">Admin Dashboard - SmartTools</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                <i class="fas fa-edit text-indigo-600"></i> Kelola Tampilan Depan
            </h2>
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700">Hero Title</label>
                        <input type="text" name="settings[hero_title]" value="{{ $settings['hero_title'] ?? '' }}" class="w-full mt-1 p-2 border rounded-lg">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700">Hero Description</label>
                        <textarea name="settings[hero_desc]" class="w-full mt-1 p-2 border rounded-lg" rows="3">{{ $settings['hero_desc'] ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                <i class="fas fa-users text-indigo-600"></i> Daftar User
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-slate-100">
                            <th class="py-2">Nama</th>
                            <th class="py-2">Email</th>
                            <th class="py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="border-b border-slate-50 text-sm">
                            <td class="py-3">{{ $user->name }}</td>
                            <td class="py-3">{{ $user->email }}</td>
                            <td class="py-3">
                                <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection