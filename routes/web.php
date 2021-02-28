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
use App\Cheque;
Auth::routes();

 
Route::get('/',function(){
	return view('welcome');
}); //nessa tela é mostrado o botao que redireciona ao login

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil',function(){
	return view('perfil');
})->name('perfil'); 

Route::resource('cheques','ChequeController'); //especifica que terão várias rotas p esse controller (é controlador de recursos)



//Route::get('/cheques', 'ChequeController@index')->name('cheques');//minha página home do sistema é a própria pagina de cheques


/*
Route::group(['middleware'=>['auth']], function () {
	Route::get('/cheques', function () {
		$cheques=Cheque::paginate(10);
		return view('cheques.home',['cheques'=>$cheques]);

	});

});
Route::get('/login',function(){
	return view('auth.login');

})->name('login');


Route::get('/',function(){
	return view('auth.login');
}
);
Route::resource('cheques','ChequeController'); //especifica que terão várias rotas p esse controller (é controlador de recursos)
Route::get('/', 'HomeController@index')->name('home');
Route::get('/cheques', 'ChequeController@index')->name('cheques');
*/



