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
		$this->loadViewsFrom(__DIR__.'/views','ArtisanUi');
		$this->publishes([__DIR__.'/dist/'=>public_path('/vendor/artisan-ui')],'artisan-ui');
	}
}
