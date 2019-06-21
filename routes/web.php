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

// CREATE
Route::get('/add', 'PianoController@addPiano')->name('addPiano');
Route::post('/store', 'PianoController@storePiano')->name('store');

// READ
Route::get('/pianos', 'PublicPianoController@readPianos')->name('pianos');


// UPDATE
Route::get('/edit/{id}', 'PianoController@editPiano')->name('edit');
Route::post('/update/{id}', 'PianoController@updatePiano')->name('update');

//DELETE
Route::post('/delete/{id}', 'PianoController@deletePiano')->name('delete');
