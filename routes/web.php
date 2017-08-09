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
use App\Daira;
use App\Baladia;
Route::get('/', function () {
    return view('Les pages.page_principale');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cv', 'HomeController@cv')->middleware('auth');
Route::get('/demend_de_emp', 'HomeController@demend_de_emp')->middleware('auth');

Route::get('/travaille', 'travailleController@travaille');
Route::post('/travaille', 'travailleController@travaille');
Route::post('/recherche_travaille','travailleController@recherche_travaille' );
Route::get('/show_demend/{id}', 'travailleController@show_demend')->middleware('auth');

Route::post('/uploaded', 'HomeController@uploaded');

Route::get('/employes', 'employesController@employes');
Route::post('/employes', 'employesController@employes');
Route::get('/show_cv/{id}', 'employesController@show_cv')->middleware('auth');
Route::post('/recherche_employes','employesController@recherche_employes');

Route::get('/personel', 'personelController@personel')->middleware('auth');
Route::get('/page_principale', 'HomeController@page_principale');



Route::get('/ajaxDaira',function(){
	$wil_id= $_GET['wil'];
	$BD_daira=Daira::where('id_wilaya','=',$wil_id)->get();
	return Response::json($BD_daira);
});

Route::get('/ajaxCommune',function(){
	$daira_id= $_GET['daira'];
	$BD_commune=Baladia::where('id_daira','=',$daira_id)->get();
	return Response::json($BD_commune);
});

Route::get('admin','adminController@index');