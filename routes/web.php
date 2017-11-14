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
    return view('welcome');
});

Route::get('/mypostcards', 'HomeController@index');

Route::get('/mypostcards/{id}', 'HomeController@mypostcards_single');

Route::get('mypostcards/{id}/delete', 'HomeController@delete');




Route::get('/explore', 'ArticleController@explore');

Route::get('/explore/{id}', 'ArticleController@explore_single');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::get('/dashboard', 'ArticleController@dashboard');

Route::get('/dashboard/{id}', 'ArticleController@dashboard_single');

Route::get('/profile', function(){
	return view('dashboard.profile_page');
});

Route::get('/profile/create', 'ArticleController@create');
Route::post('/profile/create', 'ArticleController@store');

Route::get('/dashboard/{id}/delete', 'ArticleController@delete');

Route::get('/dashboard/{id}/edit', 'ArticleController@edit_postcard');
Route::post('/dashboard/{id}/edit', 'ArticleController@edit');

Route::post('/dashboard/{id}', 'CommentController@store');

// admin
Route::get('/admin/{id}/single_postcard/', 'ArticleController@dashboard_single');


Auth::routes();
// Route::group(['middleware' => ['preventbackbutton','auth']], function(){
	
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/users', 
	'UserController@showUsers');
Route::get('/admin/postcards', 
	'ArticleController@showpostcards');
Route::get('/admin/{id}', 
	'ArticleController@showArticlesByAuthor');


Route::get('/home', 'HomeController@index')->name('home');
// });