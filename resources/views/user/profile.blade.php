{{-- @extends('layouts.user') --}}

@extends('layouts.user')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Profile Saya</h2>
        <p class="text-gray-600">Informasi detail tentang akun Anda</p>
    </div>

    <!-- Profile Information -->
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 mb-6">
        <div class="flex items-center mb-4">
            <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center text-white text-2xl font-bold mr-6">
                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
            </div>
            <div>
                <h3 class="text-2xl font-semibold text-gray-800">{{ auth()->user()->name }}</h3>
                <p class="text-gray-600">{{ auth()->user()->email }}</p>
                <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mt-1">
                    {{ ucfirst(auth()->user()->role) }}
                </span>
            </div>
        </div>
    </div>

    <!-- Detailed Information -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-gray-50 rounded-lg p-6">
            <h4 class="text-lg font-semibold text-gray-800 mb-4">Informasi Personal</h4>
            <div class="space-y-4">
                <div>
                    <label class="text-sm font-medium text-gray-600">Nama Lengkap</label>
                    <p class="text-gray-800 font-semibold">{{ auth()->user()->name }}</p>
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-600">Email</label>
                    <p class="text-gray-800 font-semibold">{{ auth()->user()->email }}</p>
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-600">Role</label>
                    <p class="text-gray-800 font-semibold capitalize">{{ auth()->user()->role }}</p>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg p-6">
            <h4 class="text-lg font-semibold text-gray-800 mb-4">Informasi Akun</h4>
            <div class="space-y-4">
                <div>
                    <label class="text-sm font-medium text-gray-600">Akun dibuat</label>
                    <p class="text-gray-800 font-semibold">{{ auth()->user()->created_at->format('d F Y, H:i') }}</p>
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-600">Terakhir diupdate</label>
                    <p class="text-gray-800 font-semibold">{{ auth()->user()->updated_at->format('d F Y, H:i') }}</p>
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-600">Status</label>
                    <span class="inline-block bg-green-100 text-green-800 text-sm font-semibold px-3 py-1 rounded-full">
                        Aktif
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    {{-- <div class="mt-8 flex flex-wrap gap-4">
        <a href="{{ route('profile.edit') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-200 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            Edit Profile
        </a>

        <a href="{{ route('user.dashboard') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-3 rounded-lg font-medium transition duration-200 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali ke Dashboard
        </a>
    </div> --}}

</div>
@endsection
