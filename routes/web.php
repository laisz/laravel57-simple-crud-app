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

Route::get( "/", "StudentController@index" )->name( "home" );
Route::get( "/list", "StudentController@list" )->name( "list" );
Route::get( "/create", "StudentController@create" )->name( "create" );
Route::post( "/create", "StudentController@store" )->name( "store" );
Route::get( "/edit/{id}", "StudentController@edit" )->name( "edit" )->where( ["id"=> "[0-9]+"] );
Route::post( "/edit/{id}", "StudentController@update" )->name( "update" )->where( ["id"=> "[0-9]+"] );
Route::delete( "/delete/{id}", "StudentController@delete" )->name( "delete" )->where( ["id"=> "[0-9]+"] );  // If You Use Route::delete, You've to use {{ method_field( 'delete' ) }} inside <form></form>

//Route::post( "/delete/{id}", "StudentController@delete" )->name( "delete" )->where( ["id"=> "[0-9]+"] );	// If You Use Route::post, You don't need to use {{ method_field( 'delete' ) }} inside <form></form>
// And inside delete() method you should use like: delete( Request $request )