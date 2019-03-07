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


Auth::routes();

Route::middleware('CheckSuper')->prefix('super')->group(function(){

    Route::get('/failed-jobs','SuperController@failedJobsView');

    Route::get('/', 'SuperController@panel');

   
    Route::put('/metadata','MetadataController@update');
  
});


Route::middleware('CheckAdmin')->prefix('admin')->group(function(){

 

   
    Route::put('/config','ConfigController@update');

  
});

Route::get('/config','ConfigController@get');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function(){return redirect('/');});

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});
Auth::routes();


Route::get('/getUser','HomeController@getUser');

