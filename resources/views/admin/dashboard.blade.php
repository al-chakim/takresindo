@extends('layouts.admin')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold">Total User</h3>
        <p class="text-3xl font-bold text-blue-600">{{ $totalUsers }}</p>
    </div>
</div>

<div class="mt-8">
    <h2 class="text-xl font-semibold mb-4">User Terbaru</h2>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-blue-500">
                <tr>
                    <th class="px-6 py-3 text-center text-white">No</th>
                    <th class="px-6 py-3 text-center text-white">Nama</th>
                    <th class="px-6 py-3 text-center text-white">Email</th>
                    <th class="px-6 py-3 text-center text-white">Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                <tr>
                    <td class="px-6 py-4 text-center">{{ $index + 1 }}</td>
                    <td class="px-6 py-4 text-center">{{ $user->name }}</td>
                    <td class="px-6 py-4 text-center">{{ $user->email }}</td>
                    <td class="px-6 py-4 text-center">{{ $user->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
