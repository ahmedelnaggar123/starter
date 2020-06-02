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
    return view('welcome')-> with(['string' => '7amasa bedan','age' => 23]);
});

Route::get('index','Front\UserController@getIndex');

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about',function(){
	return view('about');

});

Route::get('/show-number/{id}', function ($id) {
    return $id;
})-> name('a');


Route::get('/show-string/{id?}', function () {
    return 'welcome';
}) -> name('b');
//route parameters
// Route::namespace('Front')->group(function(){

// 	//all routes access only controller or methods in folder name Front.
// 	Route::get('users','UserController@showUserName');
// });

// Route::prefix('users')->group(function(){

// 	Route::get('show','UserController@showUserName');
// 	Route::delete('delete','UserController@showUserName');
// 	Route::get('edit','UserController@showUserName');
// 	Route::put('update','UserController@showUserName'); 

// });

// Route::group(['prefix' => 'users','middleware'=>'auth'],function(){

// 	Route::get('/',function(){

// 		return 'work';
// 	});
// 	Route::get('show','UserController@showUserName');
// 	Route::delete('delete','UserController@showUserName');
// 	Route::get('edit','UserController@showUserName');
// 	Route::put('update','UserController@showUserName');


// });

Route::get('check',function(){

return 'middleware';

})->middleware('auth');


Route::group(['namespace'=> 'Admin'],function(){
 
	Route::get('second','SecondController@showString')->middleware('auth');
});

Route::get('login',function(){

	return 'a3mel register ya metnak';
})->name('login');

Route::resource('news','NewsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){

	return 'Home';
});
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
