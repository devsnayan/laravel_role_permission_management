<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Development\ArtisanController;

// Artisan Routes
Route::prefix('admin')->middleware('auth:admin')->group(function () {
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
        Route::get('/artisan/route-clear','artisanRouteClear')->name('artisan.route.clear');
        Route::get('/artisan/config-clear','artisanConfigClear')->name('artisan.config.clear');
        Route::get('/artisan/view-clear','artisanViewClear')->name('artisan.view.clear');
        Route::get('/artisan/clear-compiled','artisanClearCompiled')->name('artisan.clear.compiled.');
        Route::get('/artisan/dibi-install','dibiInstalll')->name('artisan.dibi.install');
    });
});