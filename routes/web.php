<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Student Module
    // Route::get('/students/index', [StudentController::class, 'index'])->name('students.index');
    // Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    // Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
    // Route::get('/students/edit', [StudentController::class, 'edit'])->name('students.edit');
    // Route::put('/students/update', [StudentController::class, 'create'])->name('students.create');
    // Route::delete('/students/delete', [StudentController::class, 'destroy'])->name('students.destroy');
    // Route::middleware(['auth'])->group(function () {
    //     Route::resource('students', StudentController::class);
    // });

    
    
});

Route::resource('students', StudentController::class)->middleware('auth:admin');




require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
