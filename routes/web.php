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

Route::get('/', 'MusicController@index')->name('index');

Route::get('/new', function () {
    return view('new');
})->middleware('auth');

Route::post('/new/post', 'MusicController@store')->name('post.store')->middleware('auth');
Route::get('/new/destroy/{id}', 'MusicController@destroy')->name('destroy.destroy')->middleware('auth');
Route::post('/new/update/{id}', 'MusicController@update')->name('update.update')->middleware('auth');
Route::get('/new/edit/{id}', 'MusicController@show')->name('edit.show')->middleware('auth');

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
