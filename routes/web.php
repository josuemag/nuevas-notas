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

Route::get('/notes/index', [
            'uses' => 'NoteController@index',
            'as' => 'notes.home'
]);

Route::get('/createNote', 'createNoteController@index');

Route::resource('note', 'NoteController');

Route::get('/notes/show/{id}','NoteController@edit')
            ->where('id','[0-9]+')->name('notes.show');

Route::resource('note', 'createNoteController');

Route::post('registrar','createNoteController@store');

Route::put('/notes/show/{id}', 'NoteController@update')
            ->where('id', '[0-9]+')->name('notes.update');

Route::get('/updateNote','createNoteController@ver');

Route::get('/deleteOneNote/{id}','createNoteController@verDeleteNote')->where('id','[0-9]+')->name('note.verEliminar');

Route::delete('/destroyer/{id}','createNoteController@deleteNote')->where('id','[0-9]+')->name('note.delete');
