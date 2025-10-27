@extends('layouts.admin')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-1 gap-6">
    <div class="bg-slate-100 px-6 py-4 rounded-lg shadow flex items-center justify-between">
        <h3 class="text-lg font-semibold">Kelola User</h3>
        <a href="{{ route('admin.users.create') }}"
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


<div class="mt-8">
    <h2 class="text-xl font-semibold mb-4">User Terbaru</h2>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-blue-500">
                <tr>
                    <th class="px-3 py-3 text-center text-white">No</th>
                    <th class="px-6 py-3 text-center text-white">Nama</th>
                    <th class="px-6 py-3 text-center text-white">Role</th>
                    <th class="px-6 py-3 text-center text-white">Dibuat</th>
                    <th class="px-4 py-3 text-center text-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                <tr>
                    <td class="px-3 py-3 text-center">{{ $index + 1 }}</td>
                    <td class="px-6 py-4 text-center">{{ $user->name }}</td>
                    <td class="px-6 py-4 text-center">{{ $user->role }}</td>
                    <td class="px-6 py-4 text-center">{{ $user->created_at->format('d/m/Y') }}</td>
                    <td class="px-4 py-3 text-center">
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md mr-2">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded-md">Hapus</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
