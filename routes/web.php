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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','CatalogController@index')->name('catalog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function (){
    Route::group(['middleware' => 'auth:admin'], function (){
        Route::group(['namespace' => 'Administrator'], function (){
            require_once __DIR__ . '/administrator.php';
         });
    });

    Route::group(['namespace' => 'Auth'], function () {

        Route::post('/login', 'AdminLoginController@login')
            ->name('admin.login.submit');

        Route::get('/login', 'AdminLoginController@showLoginForm')
            ->name('admin.login');

        Route::get('/logout', 'AdminLoginController@logout')
            ->name('admin.logout');

    });


});



