<?php
//use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;

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




///////// Home
Route::get('/home', 'RouteController@ToHome')->name('home.show');

///////// Home



Auth::routes();
Route::resource('post', 'PostController');

Route::get('/', 'RouteController@index');

Route::get('/profile', 'ProfileController@ownProfile');
Route::get('/profile/{userid}', 'ProfileController@index')->name('profile.show');
Route::get('/profile/{userid}/{nama}', 'ProfileController@testMultiParameter')->name('profile.show.multi'); //test multi parameter
