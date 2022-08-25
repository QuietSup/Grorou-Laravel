<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlashcardController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', "UserController@index");

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', "SetController@my_space");


Route::get('/saved/{saved}/edit', "SavedController@edit")->name('saved.edit');
Route::delete('/saved/{saved}', "SavedController@destroy")->name('saved.destroy');


Route::get('/flashcards/{flashcard}', "FlashcardController@show")->name('flashcards.show');


Route::get('/sets/find', "SetController@find")->name('sets.find');

Route::get('/sets/create', "SetController@create")->name('sets.create');
Route::post('/sets/store', "SetController@store")->name('sets.store');

Route::get('/sets/{set}', "SetController@show")->name('sets.show');

Route::get('/sets/{set}/edit', "SetController@edit")->name('sets.edit');
Route::patch('/sets/{set}', "SetController@update")->name('sets.update');

Route::delete('/sets/{set}', "SetController@destroy")->name('sets.destroy');

Route::patch('/users', "UserController@update")->name('users.update');
Route::get('/users/edit', "UserController@edit")->name('users.edit');
