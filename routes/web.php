<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/play', 'mainController@getData');

Route::post('/play', 'mainController@postData');

Route::get('/', function () {
	session()->flush();
    // return view('welcome');
    $a = rand(1,9);
	$b=$a;
	while ($b==$a) {
		$b = rand(1,9);		
	}
	$c=$a;
	while ($c==$a || $c== $b) {
		$c = rand(1,9);
	}
	$number = $a.$b.$c;

    session()->put('number',$number);
    echo "<div style='text-align: center;'><a style='font-size:100px;' href = '/play' >Start </a></div>";
});

Route::get('/try/{a}', function($aa){
	$i=0;
	while(session()->has($i)){
		$i++;
	}
	session()->put($i,$aa);
	return redirect('play');

});




