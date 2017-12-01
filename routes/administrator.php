<?php


Route::get('/','AdminController@index')
    ->name('admin.dashboard');

Route::get('/list','AdminController@show')
    ->name('admin.list');

Route::post('/new','AdminController@create')
    ->name('admin.create');

Route::get('/create','AdminController@form')
    ->name('admin.form.create');

Route::get('edit/{id}','AdminController@editForm')
    ->where('id', '[1-9]+')
    ->name('admin.edit.form');

Route::post('admin/update/{id}','AdminController@edit')
    ->where('id', '[1-9]+')
    ->name('admin.edit');

Route::get('shops','ShopsController@index')
    ->name('admin.shops');

Route::get('shops/shedule/{id}','ShopsController@shedule')
    ->where('id', '[1-9]+')
    ->name('admin.shops.shedule');

Route::post('shops/edit/{id}','ShopsController@edit')
    ->where('id', '[1-9]+')
    ->name('admin.shops.edit');

Route::get('shop/delete/{id}','ShopsController@delete')
    ->where('id', '[1-9]+')
    ->name('admin.shop.delete');

Route::get('users','UserController@show')
    ->name('admin.users.show');

Route::get('users/edit/{id}','UserController@form')
    ->where('id','[1-9]+')
    ->name('admin.users.form');

Route::post('users/update/{id}','UserController@edit')
    ->where('id','[1-9]+')
    ->name('admin.users.edit');

Route::get('users/delete/{id}','UserController@delete')
    ->where('id', '[1-9]+')
    ->name('admin.users.delete');