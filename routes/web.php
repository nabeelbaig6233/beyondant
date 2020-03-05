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

Route::middleware(['admin'])->prefix('admin')->namespace('admin')->group(function(){
    Route::get('/', 'DashboardController@index');
    Route::get('/users','UserController@index')->name('users');
    Route::get('/user/register','UserController@register')->name('user.register');
    Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
    Route::put('/user/update/{id}','UserController@update')->name('post.update');

//    Setting
    Route::get('/setting','SettingController@index')->name('setting');
    Route::post('/setting/edit','SettingController@update')->name('setting.edit');

    // Role
    Route::get('/role','RoleController@index')->name('role');
    Route::any('/role/form/{form}','RoleController@form');
    Route::any('/role/form/{form}/{id}','RoleController@form');
    Route::get('/role/view/{id}','RoleController@view');
    Route::delete('/role/destroy/{id}','RoleController@destroy');
    Route::post('/role/delete_all','RoleController@delete_all')->name('role.delete_all');

    // Profile
    Route::get('/profile','ProfileController@index')->name('profile');
    Route::any('/profile/form/{form}','ProfileController@form');
    Route::any('/profile/form/{form}/{id}','ProfileController@form');
    Route::get('/profile/view/{id}','ProfileController@view');
    Route::delete('/profile/destroy/{id}','ProfileController@destroy');
    Route::post('/profile/delete_all','ProfileController@delete_all')->name('profile.delete_all');

});
Auth::routes();

Route::middleware(['allowguest'])->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/profile/{id}','ProfileController@index')->name('pro');
});

Route::fallback(function(){
    return "404 not found";
});
