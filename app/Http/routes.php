<?php

Route::get('/', function(){

	return view('artikel');
});

Route::resource('/api/artikel', 'ArtikelController');

Route::post('/api/search', function(){


	$query = Request::input('query');

	$artikel = App\Artikel::where('title', 'LIKE', "%{$query}%")->get()->toArray();

	return resource()->json([
			'artikel' => $artikel
		]);
});	

Route::group(['middleware' => ['web']], function () {
    //
});
