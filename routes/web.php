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

// Admin Only
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['admin'])->prefix('admin')->group(function(){
    Route::get('/', 'admin\DashboardController@index');
    Route::get('/users','admin\UserController@index')->name('users');
    Route::get('/user/register','admin\UserController@register')->name('user.register');
    Route::get('/user/edit/{id}','admin\UserController@edit')->name('user.edit');
    Route::put('/user/update/{id}','admin\UserController@update')->name('post.update');

//    Setting
    Route::get('/setting','admin\SettingController@index')->name('setting');
    Route::post('/setting/edit','admin\SettingController@update')->name('setting.edit');

    // Role
    Route::get('/role','admin\RoleController@index')->name('role');
    Route::any('/role/form/{form}','admin\RoleController@form');
    Route::any('/role/form/{form}/{id}','admin\RoleController@form');
    Route::get('/role/view/{id}','admin\RoleController@view');
    Route::delete('/role/destroy/{id}','admin\RoleController@destroy');
    Route::post('/role/delete_all','admin\RoleController@delete_all')->name('role.delete_all');
});
Auth::routes();

Route::middleware(['allowguest'])->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::view('/profile','front.profile');
});

Route::fallback(function(){
    return "404 not found";
});
