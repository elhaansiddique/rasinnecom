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
    return view('index');
})->name('base.path');

Route::get('logout',function(){
    \Auth::logout();
    return \redirect()->route('base.path');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('raslogin', function(){
    return view('raslogin');
});

Route::get('rasregister', function(){
    return view('rasregister');
});

Route::get('rasforget', function(){
    return view('rasforget');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dash', 'HomeController@dash')->name('dash');

Route::prefix('users')->group(function(){
    Route::get('/view', 'backend\UserController@view')->name('users.view');
    Route::get('/add', 'backend\UserController@add')->name('users.add');
    Route::post('/store', 'backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}', 'backend\UserController@delete')->name('users.delete');
});

