<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MessageController@index')->middleware(['auth']);

Route::get('/message', 'MessageController@index')->name('message');
Route::post('/message', 'MessageController@store')->name('messageStore');
Route::put('/message/{message}', 'MessageController@update')->name('messageStore');
Route::delete('/message/{message}', 'MessageController@destroy')->name('messageStore');

//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
