<?php

Route::get('package','Asif\ArtisanUi\ArtisanUiController@cacheConfig');
Route::get('artisan-ui/cache_clear','Asif\ArtisanUi\ArtisanUiController@cacheClear');