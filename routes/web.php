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
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/notes/index', 'NoteController@index');

Route::get('/createNote', 'createNoteController@index');

Route::resource('note', 'NoteController');

Route::resource('note', 'createNoteController');

Route::post('registrar','createNoteController@store');

Route::get('/updateNote','createNoteController@ver');

Route::get('/deleteOneNote/{id}','createNoteController@verDeleteNote')->where('id','[0-9]+');

Route::delete('/destroyer/{id}','createNoteController@deleteNote')->where('id','[0-9]+')->name('note.delete');
