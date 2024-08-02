<?php

namespace App\Http\Controllers\Development;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class ArtisanController extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        return view('admin.debug.artisan');
    }

    public function runQuery(Request $request)
    {
        if (!config('app.db_debug')) {
            abort(403, 'Access denied.');
        }

        // Retrieve the query from the request
        $query = $request->input('query');

        // Use prepared statements to prevent SQL injection
        try {
            $result = DB::select(DB::raw($query));
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function artisanMigrate()
    {
        try {
            Artisan::call('migrate');
            return back()->with('success', "Database migrated successfully.");
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function artisanMigrateSeed()
    {
        try {
            Artisan::call('migrate:fresh --seed');
            return back()->with('success', "Database migrated and seeded successfully.");
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    // cache clear

    public function artisanStorageLink(): JsonResponse
    {
        Artisan::call('storage:link');
        return response()->json(['message' => 'Storage link created successfully']);
    }

    public function artisanOptimizeClear(): JsonResponse
    {
        Artisan::call('optimize:clear');
        return response()->json(['message' => 'Optimization cleared successfully']);
    }

    public function artisanCacheClear(): JsonResponse
    {
        Artisan::call('config:cache');
        return response()->json(['message' => 'Configuration cache cleared successfully']);
    }

    public function artisanRouteClear(): JsonResponse
    {
        Artisan::call('route:clear');
        return response()->json(['message' => 'Route cache cleared successfully']);
    }

    public function artisanConfigClear(): JsonResponse
    {
        Artisan::call('config:clear');
        return response()->json(['message' => 'Configuration cache cleared successfully']);
    }

    public function artisanViewClear(): JsonResponse
    {
        Artisan::call('view:clear');
        return response()->json(['message' => 'View cache cleared successfully']);
    }

    public function artisanClearCompiled(): JsonResponse
    {
        Artisan::call('clear-compiled');
        return response()->json(['message' => 'Compiled services cleared successfully']);
    }

    public function dibiInstall(): JsonResponse
    {
        Artisan::call('dibi:install');
        return response()->json(['message' => 'Dibi installed successfully']);
    }
}
