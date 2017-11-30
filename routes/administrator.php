<?php


Route::get('/','AdminController@index')
    ->name('admin.dashboard');

Route::get('/admins','AdminController@adminList')
    ->name('admin.admins.list');

Route::post('/admins/new','AdminController@createAdmin')
    ->name('admin.create');

Route::get('/admins/create','AdminController@createAdminForm')
    ->name('admin.form.create');

Route::get('admin/edit/{id}','AdminController@editAdminForm')
    ->where('id', '[1-9]+')
    ->name('admin.edit.form');

Route::post('admin/update/{id}','AdminController@editAdmin')
    ->where('id', '[1-9]+')
    ->name('admin.edit');