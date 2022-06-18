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
Route::Group(['middleware'=>'News'],function (){
    Route::get('all_news', 'Newscontroller@all_news');
    Route::post('insert/news', 'Newscontroller@insert_news');
    Route::delete('delete/news/{id?}', 'Newscontroller@delete_news');
});


Route::Group(['middleware'=>'guest'],function ()
{
    Route::get('manual_login', 'Users@manual_login_get');
    Route::post('manual_login', 'Users@manual_login_post');
});
Route::get('admin_path', function ()
{
    return 'admin__path';
})->middleware('auth_Admin:web_admin');
Route::get('admin/login', 'Admin@login_get');
Route::post('admin/login', 'Admin@login_post');
Route::post('file/upload', 'Upload@upload_file');
Route::post('text/upload', 'Upload@upload_text');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//////////////////admin/////////

//////////////////admin/////////
