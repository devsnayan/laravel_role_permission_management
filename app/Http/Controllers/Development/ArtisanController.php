<?php

namespace App\Http\Controllers\Development;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use DB;

class ArtisanController extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        return view('welcome');
    }

    public function runQuery(Request $request)
    {
        if(!env('DB_DEBUG'))
        {
            abort(403, 'Access denied.');
        }
        // Retrieve the query from the request
        $query = $request->input('query');

        // Execute the query
        $result = DB::select($query);

        // Return the result
        return response()->json($result);
    }

    public function artisanMigrate()
    {
        Artisan::call('migrate');
        return back()->with('success',"Migrated");
    }

    public function artisanMigrateSeed()
    {
        Artisan::call('migrate:fresh --seed');
        return back()->with('success',"Migrated & Seeded");
    }

    public function artisanStorageLink()
    {
        Artisan::call('storage:link');
        return back()->with('success',"Storage Linked");
    }

    public function artisanOptimizeClear()
    {
        Artisan::call('optimize:clear');
        return back()->with('success',"Optimize Cleared");
    }
    
    public function artisanCacheClear()
    {
        Artisan::call('config:cache');
        // return back()->with('success',"Cache Cleared");
        return "Cache Cleared";
    }
    
    public function dibiInstalll()
    {
        Artisan::call('dibi:install');
        return back()->with('success',"Dibi Installed");
    }
}
