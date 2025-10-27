@extends('layouts.user')

@section('content')

{{-- <div class="w-2xl mx-auto bg-slate-100 p-8 rounded-xl shadow-lg">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-3 flex items-center gap-2">
        <!-- Ikon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Tambah Data Baru
    </h2>
</div> --}}

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

@endsection
