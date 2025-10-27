<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\InputMainDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DataController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Routes untuk authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Redirect setelah login berdasarkan role
    Route::get('/dashboard', function () {
        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('user.dashboard');
    })->name('dashboard');
});

// Routes khusus admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {

    // basic admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
    Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{user}', [AdminController::class, 'destroyUser'])->name('users.destroy');

    // main menu input
    Route::get('/maindata', [InputMainDataController::class, 'mainData'])->name('data.views');
    Route::get('/adddata', [InputMainDataController::class, 'addData'])->name('data.add');
    // Route::get('/datas', [InputMainDataController::class, 'dataAdmin'])->name('datas');
    Route::post('/data', [InputMainDataController::class, 'storeDataBrand'])->name('data.store');
});

// Routes khusus user biasa
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {

    // route bawaan
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    // route tambahan
    Route::get('/data', [DataController::class, 'index'])->name('main.data');
    Route::get('/form', [DataController::class, 'addForm'])->name('form.data');
});

require __DIR__.'/auth.php';
