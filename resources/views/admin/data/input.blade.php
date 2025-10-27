@extends('layouts.admin')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-1 gap-6">
    <div class="bg-slate-100 px-6 py-4 rounded-lg shadow flex items-center justify-between">
        <h3 class="text-lg font-semibold">Data Utama</h3>
        <a href="{{ route('admin.data.add') }}"
            class="inline-flex items-center bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded-md">
            <!-- Ikon Plus -->
            <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-5 h-5 mr-2">
                <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Tambah Data
        </a>
    </div>
</div>

<div class="mt-8">
    <h2 class="text-xl font-semibold mb-4">Data Brand</h2>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-blue-600">
                <tr>
                    <th class="px-3 py-3 text-center text-white">No</th>
                    <th class="px-6 py-3 text-center text-white">Nama</th>
                    <th class="px-6 py-3 text-center text-white">Kode</th>
                    {{-- <th class="px-6 py-3 text-center text-white">Dibuat</th> --}}
                    {{-- <th class="px-4 py-3 text-center text-white">Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $index => $brand)
                <tr>
                    <td class="px-3 py-3 text-center">{{ $index + 1 }}</td>
                    <td class="px-6 py-4 text-center">{{ $brand->name }}</td>
                    <td class="px-6 py-4 text-center">{{ $brand->code }}</td>
                    {{-- <td class="px-6 py-4 text-center">{{ $user->created_at->format('d/m/Y') }}</td> --}}
                    {{-- <td class="px-4 py-3 text-center">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md mr-2">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded-md">Hapus</button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- <div class="flex items-center justify-center min-h-screen bg-slate-100 dark:bg-gray-700 p-4 rounded-lg">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-2xl p-8 transition-all duration-500 ease-in-out transform hover:scale-105">
        <div class="flex flex-col items-center text-center">
            <div class="bg-blue-500 rounded-full p-4 mb-4 animate-bounce">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-8a1 1 0 112 0v4a1 1 0 11-2 0v-4zm1-3a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-2">Segera Hadir!</h1>
            <p class="text-gray-600 dark:text-gray-400 text-lg mb-4">
                Mohon maaf, fitur yang Anda cari saat ini sedang dalam proses pengembangan untuk memberikan pengalaman terbaik.
            </p>
            <p class="text-gray-500 dark:text-gray-500 text-sm">
                Kami akan mengumumkannya di media sosial kami saat sudah siap.
            </p>
        </div>
    </div>
</div> --}}

{{-- <div class="mt-5"></div>

<div class="bg-yellow-100 dark:bg-yellow-900 border-l-4 border-yellow-500 p-4" role="alert">
    <div class="flex">
        <div class="py-1">
            <svg class="h-6 w-6 text-yellow-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.487 0l5.58 9.92c.758 1.346-.26 3.02-1.743 3.02H4.42c-1.483 0-2.501-1.674-1.743-3.02l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
        </div>
        <div>
            <p class="font-bold text-yellow-800 dark:text-yellow-200">Fitur Sedang Proses Pengembangan</p>
            <p class="text-sm text-yellow-700 dark:text-yellow-300">Mohon maaf atas ketidaknyamanannya. Kami akan segera menyelesaikannya.</p>
        </div>
    </div>
</div>

<div class="mt-5"></div>

<div class="flex items-center justify-center min-h-screen bg-slate-100 rounded-lg">
    <div class="text-center p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-sm mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-yellow-500 mx-auto mb-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="12"></line>
            <line x1="12" y1="16" x2="12.01" y2="16"></line>
        </svg>
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Pemberitahuan</h2>
        <p class="text-gray-600 dark:text-gray-400">Fitur ini sedang dalam proses pengembangan. Mohon bersabar ya!</p>
    </div>
</div> --}}

@endsection
