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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// C.R.U.D.
// READ
Route::get('/pianos', 'PianoController@readPianos')->name('pianos');


Route::middleware(['auth'])->group(function () {
    // CREATE
    Route::get('/add', 'PianoController@addPiano')->name('addPiano');
    Route::post('/store', 'PianoController@storePiano')->name('store');

    // UPDATE
    Route::get('/edit/{id}', 'PianoController@editPiano')->name('edit');
    Route::post('/update/{id}', 'PianoController@updatePiano')->name('update');

    //DELETE
    Route::post('/delete/{id}', 'PianoController@deletePiano')->name('delete');
});


