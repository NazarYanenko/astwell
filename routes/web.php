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

        Route::get('/','AdminController@index')
            ->name('admin.dashboard');

        Route::get('/admins','AdminController@adminList')
            ->name('admin.admins.list');

        Route::post('/admins/new','AdminController@createAdmin')
            ->name('admin.create');

        Route::get('/admins/create','AdminController@createAdminForm')
            ->name('admin.form.create');

        Route::get('admin/edit/{id}','AdminController@editAdminForm')
            ->where('id', '[0-9]+')
            ->name('admin.edit.form');

        Route::post('admin/edit','AdminController@editAdmin')
            ->name('admin.edit');


        Route::get('users','AdminUserController@showUsers')
            ->name('admin.users.show');

        Route::get('users/edit/{id}','AdminUserController@editUsersForm')
            ->where('id','[0-9]+')
            ->name('admin.users.edit.form');

        Route::post('users/edit','AdminUserController@editUser')
            ->name('admin.users.edit');

        Route::get('users/delete/{id}','AdminUserController@deleteUser')
            ->where('id', '[0-9]+')
            ->name('admin.users.delete');

        Route::get('shops','AdminShopsController@index')
            ->name('admin.shops.index');

    });

    Route::post('/login','Auth\AdminLoginController@login')
        ->name('admin.login.submit');

    Route::get('/login','Auth\AdminLoginController@showLoginForm')
        ->name('admin.login');

    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
//    Route::resource('shops','ShopController');




});



