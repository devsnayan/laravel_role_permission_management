<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\Development\ArtisanController;
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

// Development
Route::controller(ArtisanController::class)->group(function () {
    if(env('DB_DEBUG'))
    {
        Route::get('/run-query','runQuery')->name('run.query');
        Route::get('/artisan/migrate','artisanMigrate')->name('artisan.migrate');
        Route::get('/artisan/migrate-seed','artisanMigrateSeed')->name('artisan.migrate.seed');
    }
    
    Route::get('/artisan/storage-link','artisanStorageLink')->name('artisan.storage.link');
    Route::get('/artisan/optimize-clear','artisanOptimizeClear')->name('artisan.optimize.clear');
    Route::get('/artisan/cache-clear','artisanCacheClear')->name('artisan.cache.clear');
    Route::get('/artisan/dibi-install','dibiInstalll')->name('artisan.dibi.install');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
