<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    // Dashboard admin
    public function dashboard()
    {
        $totalUsers = User::count();
        $users = User::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalUsers', 'users'));
    }

    // Daftar semua user
    public function users()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    // Form tambah user baru
    public function createUser()
    {
        return view('admin.users.create');
    }

    // Store user baru
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect()->route('admin.users')->with('success', 'User berhasil ditambahkan!');
    }

    // Edit user
    public function editUser(User $user)
    {
        // Pastikan yang diedit bukan admin
        // if ($user->role === 'admin') {
        //     return redirect()->route('admin.users')->with('error', 'Tidak bisa mengedit admin!');
        // }

        return view('admin.users.edit', compact('user'));
    }

    // Update user
    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['string', 'lowercase', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'role' => ['string', 'max:255'],
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', 'User berhasil diupdate!');
    }

    // Delete user
    public function destroyUser(User $user)
    {
        if ($user->role === 'admin') {
            return redirect()->route('admin.users')->with('error', 'Tidak bisa menghapus admin!');
        }

        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User berhasil dihapus!');
    }
}
