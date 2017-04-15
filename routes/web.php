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


Route::group(['middleware'=>'auth'],function(){
    Route::get('/', function () {
        return view('index');
    });

   /* Route::get('/notebook',['as'=>'notebook.index','uses'=>'NotbookController@index']);
    Route::post('/notebook','NotbookController@store');
    Route::get('/notebook/create','NotbookController@create');
    Route::get('/notebook/{notebook}/edit','NotbookController@edit')->name('notebook.edit');
    Route::put('/notebook/{notebook}','NotbookController@update');
    Route::delete('/notebook/{notebook}','NotbookController@destroy');
    Route::get('/notebook/{notebook}','NotbookController@show')->name('notebook.show');*/

   Route::resource('notebook','NotbookController');
   Route::resource('notes','NotesController');

   Route::get('notes/{notebookId}/createNote','NotesController@createNote')->name('notes.createNote');
});



Auth::routes();

Route::get('/home', 'HomeController@index');
