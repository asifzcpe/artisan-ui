<?php

Route::get('artisan-ui','Asif\ArtisanUi\ArtisanUiController@cacheConfig');
Route::get('artisan-ui/cache_clear','Asif\ArtisanUi\ArtisanUiController@cacheClear');
Route::get('artisan-ui/config_clear','Asif\ArtisanUi\ArtisanUiController@configClear');
Route::get('artisan-ui/view_clear','Asif\ArtisanUi\ArtisanUiController@viewClear');
Route::get('artisan-ui/clear_compiled','Asif\ArtisanUi\ArtisanUiController@clearCompiled');
Route::get('artisan-ui/route_clear','Asif\ArtisanUi\ArtisanUiController@routeClear');
Route::get('artisan-ui/route_cache','Asif\ArtisanUi\ArtisanUiController@routeCache');
Route::get('artisan-ui/run_migration','Asif\ArtisanUi\ArtisanUiController@runMigration');
Route::get('artisan-ui/migration_rollback','Asif\ArtisanUi\ArtisanUiController@migrationRollback');
Route::get('artisan-ui/db_seed','Asif\ArtisanUi\ArtisanUiController@dbSeed');
