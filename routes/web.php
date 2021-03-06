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

Route::get('/', function () {
    return view('welcome');
})->name('base');

Auth::routes();




Route::get('/main', 'User\BaseController@main')->name('main');


Route::get('/test', 'User\TestController@show')->name('test');

Route::get('/new', 'User\NewController@add')->name('new');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/params/{id}', [\App\Http\Controllers\User\ParamsController::class, 'index'])->name('params');

Route::post('/params', [\App\Http\Controllers\User\ParamsController::class, 'indexPost'])->name('params-post');

Route::get('/forms/{id}', [\App\Http\Controllers\User\FormsController::class, 'index'])->name('forms');
Route::post('/forms', [\App\Http\Controllers\User\FormsController::class, 'indexPost'])->name('forms-post');




