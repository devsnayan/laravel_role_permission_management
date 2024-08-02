<?php

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


Route::resource('students', StudentController::class)->middleware('auth:admin');

// Route::middleware('auth:web')->group(function () {
//     Route::resource('/students', StudentController::class);
// });

// Route::middleware('auth:admin')->group(function () {
//     Route::resource('admin/students', StudentController::class);
// });


require __DIR__.'/artisan.php';
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
