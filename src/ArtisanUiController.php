<?php
namespace Asif\ArtisanUi;
use App\Http\Controllers\Controller;
use Artisan;
use Exception;
class ArtisanUiController extends Controller
{
	public function cacheConfig()
	{
		return view('ArtisanUi::welcome');
	}

	public function cacheClear()
	{
		try
		{
			Artisan::call('cache:clear');
			return response()->json(Artisan::output());
		}
		catch(Exception $e)
		{
			return response()->json($e->getMessage());
		}
    }

    public function configClear()
    {
        try
		{
			Artisan::call('config:clear');
			return response()->json(Artisan::output());
		}
		catch(Exception $e)
		{
			return response()->json($e->getMessage());
		}
    }

    public function viewClear()
    {
        try
		{
			Artisan::call('view:clear');
			return response()->json(Artisan::output());
		}
		catch(Exception $e)
		{
			return response()->json($e->getMessage());
		}
    }

    public function clearCompiled()
    {
        try
		{
			Artisan::call('clear-compiled');
			return response()->json(Artisan::output());
		}
		catch(Exception $e)
		{
			return response()->json($e->getMessage());
		}
    }

    public function routeClear()
    {
        try
		{
			Artisan::call('route:clear');
			return response()->json(Artisan::output());
		}
		catch(Exception $e)
		{
			return response()->json($e->getMessage());
		}
    }

    public function routeCache()
    {
        try
		{
			Artisan::call('route:cache');
			return response()->json(Artisan::output());
		}
		catch(Exception $e)
		{
			return response()->json($e->getMessage());
        }
    }

    public function runMigration()
    {
        try
		{
			Artisan::call('migrate');
			return response()->json(Artisan::output());
		}
		catch(Exception $e)
		{
			return response()->json($e->getMessage());
        }
    }

    public function migrationRollback()
    {
        try
		{
			Artisan::call('migrate:rollback');
			return response()->json(Artisan::output());
		}
		catch(Exception $e)
		{
			return response()->json($e->getMessage());
        }
    }

    public function dbSeed()
    {
        try
		{
			Artisan::call('db:seed');
			return response()->json(Artisan::output());
		}
		catch(Exception $e)
		{
			return response()->json($e->getMessage());
        }
    }
}
