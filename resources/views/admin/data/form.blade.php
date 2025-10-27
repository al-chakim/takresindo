@extends('layouts.admin')

@section('content')

<div class="flex flex-col">
    <h2 class="text-xl font-semibold mb-4">Tambah Data Baru</h2>
    <a href="{{ route('admin.data.views') }}" class=" mb-2 items-center bg-blue-600 hover:bg-blue-500 text-white rounded-md w-auto p-4 text-center">Tambah Data Brand</a>
    <a href="#" class=" mb-2 items-center bg-blue-600 hover:bg-blue-500 text-white rounded-md w-auto p-4 text-center">Tambah Data Size</a>
    <a href="#" class=" mb-2 items-center bg-blue-600 hover:bg-blue-500 text-white rounded-md w-auto p-4 text-center">Tambah Data PO</a>
</div>

{{-- <div class="w-2xl mx-auto bg-slate-100 p-8 rounded-xl shadow-lg">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-3 flex items-center gap-2">
        <!-- Ikon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Tambah Data Baru
    </h2>

    <form action="{{ route('admin.data.store') }}" method="POST" class="space-y-5">
        <h3 class="text-lg font-semibold text-gray-700">Tambah Data Brand Baru</h3>
        @csrf

        <!-- Brand -->
        <div>
            <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Nama Brand</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                value="{{ old('name') }}" required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Code -->
        <div>
            <label for="code" class="block text-sm font-semibold text-gray-700 mb-1">Kode Brand</label>
            <input type="code" name="code" id="code" placeholder="Masukkan Code"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                value="{{ old('code') }}" required>
            @error('code')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-end gap-3 pt-4 border-t">
            <a href="{{ route('admin.data.views') }}"
                class="px-4 py-2 rounded-lg bg-gray-300 hover:bg-red-700 text-slate-800 hover:text-white font-medium transition">
                Batal
            </a>
            <button type="submit"
                class="px-5 py-2 rounded-lg bg-green-600 hover:bg-blue-700 text-white font-semibold shadow transition">
                Simpan
            </button>
        </div>
    </form>
</div> --}}

@endsection
