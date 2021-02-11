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

use Illuminate\Http\Request;
use App\Cheques;
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/cheques', 'ChequeController@index')->name('cheques');
/*
Route::group(['middleware'=>['auth']], function () {
	Route::get('/cheques', function () {
		return view('welcome');

	});


});
*/

Route::resource('cheques','ChequeController');
