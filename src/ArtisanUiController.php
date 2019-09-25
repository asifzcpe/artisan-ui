<?php
namespace Asif\ArtisanUi;
use App\Http\Controllers\Controller;
class ArtisanUiController extends Controller
{
	public function cacheConfig()
	{
		return view('ArtisanUi::app');
	}
}