<?php
namespace Asif\ArtisanUi;
use App\Http\Controllers\Controller;
use Artisan;
use Exception;
class ArtisanUiController extends Controller
{
	public function cacheConfig()
	{
		return view('ArtisanUi::app');
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
}