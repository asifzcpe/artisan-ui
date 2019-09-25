<?php
namespace Asif\ArtisanUi;
use Illuminate\Support\ServiceProvider;
class ArtisanUiServiceProvider extends ServiceProvider
{
	public function register()
	{

	}

	public function boot()
	{
		include 'route.php';
		$this->loadViewsFrom(__DIR__.'/resources/views','ArtisanUi');
	}
}