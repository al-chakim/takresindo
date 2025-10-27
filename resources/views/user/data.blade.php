@extends('layouts.user')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-1 gap-6">
    <div class="bg-slate-100 px-6 py-4 rounded-lg shadow flex items-center justify-between">
        <h3 class="text-lg font-semibold">Data Utama</h3>
        <a href="{{ route('user.form.data') }}"
            class="inline-flex items-center bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
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

@endsection
