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

Route::get('/', function () {
    return view('welcome');
});
Route::get('home',['as'=>'home',function() {
    return view('pages.home');
}]);
Route::group(['prefix' => 'length'], function() {
    Route::get('/',['as'=>'length' ,function(){
    	return view('pages.length.length');
    }]);
    Route::get('feet',['as'=>'feet' ,function(){
    	return view('pages.length.feet');
    }]);
    Route::get('yards',['as'=>'yards',function(){
    	return view('pages/length/yards');
    }]);
    Route::get('inches',['as'=>'inches', function(){
    	return view('pages/length/inches');
    }]);
    Route::get('miles',['as'=>'miles', function(){
    	return view('pages/length/miles');
    }]);
    Route::get('kilometers',['as'=>'kilometers', function(){
	return view('pages/length/kilometers');
    }]);
});		
Route::group(['prefix' => 'area'], function() {
    Route::get('/',['as'=>'area', function(){
    	return view('pages.area.area');
    }]);
    Route::get('acres',['as'=>'acres', function(){
    	return view('pages.area.acres');
    }]);
    Route::get('hectares',['as'=>'hectares', function(){
    	return view('pages/area/hectares');
    }]);
    Route::get('squarefeet',['as'=>'squarefeet', function(){
    	return view('pages.area.squarefeet');
    }]);
    Route::get('squareinches',['as'=>'squareinches', function(){
    	return view('pages.area.squareinches');
    }]);
    Route::get('squaremeters',['as'=>'squaremeters', function(){
    	return view('pages.area.squaremeters');
    }]);
    Route::get('squaremilimeters',['as'=>'squaremilimeters', function(){
    	return view('pages.area.squaremilimeters');
    }]);
});
Route::group(['prefix' => 'volume'], function() {
    Route::get('/',['as'=>'volume' , function() {
        return view('pages/volume/volume');
    }]);
    Route::get('cubicfeet',['as'=>'cubicfeet' , function() {
        return view('pages/volume/cubicfeet');
    }]);
    Route::get('cubicmeters',['as'=>'cubicmeters' , function() {
        return view('pages/volume/cubicmeters');
    }]);
    Route::get('cubicyards',['as'=>'cubicyards' , function() {
        return view('pages/volume/cubicyards');
    }]);
    Route::get('fluidounces',['as'=>'fluidounces' , function() {
        return view('pages/volume/fluidounces');
    }]);
    Route::get('gallons',['as'=>'gallons' , function() {
        return view('pages/volume/galons');
    }]);
    Route::get('liters',['as'=>'liters' , function() {
        return view('pages/volume/liters');
    }]);
    Route::get('milliliters',['as'=>'milliliters' , function() {
        return view('pages/volume/milliliters');
    }]);
});
Route::group(['prefix' => 'mass'], function() {
    Route::get('/',['as'=>'mass' , function() {
        return view('pages/mass/mass');
    }]);
    Route::get('grams',['as'=>'grams' , function() {
        return view('pages/mass/grams');
    }]);
    Route::get('kilograms',['as'=>'kilograms' , function() {
        return view('pages/mass/kilograms');
    }]);
    Route::get('megagrams',['as'=>'megagrams' , function() {
        return view('pages/mass/megagrams');
    }]);
    Route::get('ounces',['as'=>'ounces' , function() {
        return view('pages/mass/ounces');
    }]);
    Route::get('pounds',['as'=>'pounds' , function() {
        return view('pages/mass/pounds');
    }]);
    Route::get('shorttons',['as'=>'shorttons' , function() {
        return view('pages/mass/shorttons');
    }]);
});
Route::group(['prefix'=>'temperature'], function(){
	Route::get('/',['as'=>'temperature', function () {
		return view('pages/temperature/temperature');
	}]);
	Route::get('celsius',['as'=>'celsius', function () {
		return view('pages/temperature/celsius');
	}]);
	Route::get('fahrenheit',['as'=>'fahrenheit', function () {
		return view('pages/temperature/fahrenheit');
	}]);
	Route::get('kelvin',['as'=>'kelvin', function () {
		return view('pages/temperature/kelvin');
	}]);
});
Route::group(['prefix' => 'currency'], function() {
    Route::get('/', ['as'=>'currency', function () {
    	return view('pages/currency/currency');
    }]);
    Route::get('britishpound', ['as'=>'britishpound', function () {
    	return view('pages/currency/britishpound');
    }]);
    Route::get('euro', ['as'=>'euro', function () {
    	return view('pages/currency/euro');
    }]);
    Route::get('japaneseyen', ['as'=>'japaneseyen', function () {
    	return view('pages/currency/japaneseyen');
    }]);
    Route::get('usdollar', ['as'=>'usdollar', function () {
    	return view('pages/currency/usdollar');
    }]);
}); 
Route::get('contact', ['as'=>'contact', function(){
    return view('pages/contact');
}]);
Route::get('blog', ['as'=>'blog', function(){
    return view('pages/blog');  
}]);
Route::get('about', ['as'=>'about', function (){
    return view('pages/about');
}]);