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
    Route::post('/users/delete_all','UserController@delete_all')->name('users.delete_all');

//    Setting
    Route::get('/setting','SettingController@index')->name('setting');
    Route::post('/setting/edit','SettingController@update')->name('setting.edit');

    //    Home
    Route::get('/home','HomeController@index')->name('admin.home');
    Route::post('/home/edit','HomeController@update')->name('home.edit');

    // Role
    Route::get('/role','RoleController@index')->name('role');
    Route::any('/role/form/{form}','RoleController@form');
    Route::any('/role/form/{form}/{id}','RoleController@form');
    Route::get('/role/view/{id}','RoleController@view');
    Route::delete('/role/destroy/{id}','RoleController@destroy');
    Route::post('/role/delete_all','RoleController@delete_all')->name('role.delete_all');

    // Profile
    Route::get('/profile','ProfileController@index')->name('profile');
    Route::get('/profile/view/{id}','ProfileController@view');
    Route::delete('/profile/destroy/{id}','ProfileController@destroy');
    Route::post('/profile/delete_all','ProfileController@delete_all')->name('profile.delete_all');

    // Reseller
    Route::get('/reseller','ResellerController@index')->name('admin.reseller');
    Route::get('/reseller/view/{id}','ResellerController@view');
    Route::delete('/reseller/destroy/{id}','ResellerController@destroy');
    Route::post('/reseller/delete_all','ResellerController@delete_all')->name('reseller.delete_all');

});
Auth::routes();



Route::middleware(['allowguest'])->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/subscribe', 'HomeController@subscribe');
    Route::get('/profile/{id?}','ProfileController@index')->name('pro');
    Route::get('/vcards','ProfileController@vcards')->name('vcards');
    Route::post('/profile/register','ProfileController@register')->name('profile-register');
    Route::post('/upload-cover-pic/{id}','ProfileController@uploadCoverPic')->name('upload-cover-pic');
    Route::post('/upload-profile-pic/{id}','ProfileController@uploadProfilePic')->name('upload-profile-pic');
    Route::view('/reseller','front.reseller')->name('reseller');
    Route::post('/reseller-submit', 'ResellerController@index')->name('reseller.submit');
});

Route::middleware(['customer'])->group(function () {
    Route::get('/edit-profile/{id}','ProfileController@editProfile')->name('edit-profile');
    Route::patch('/update-profile/{id}', 'ProfileController@updateProfile')->name('update-profile');
    Route::get('/changepassword/{id}','ProfileController@viewChangePassword')->name('changepassword');
    Route::put('/change-password/{id}', 'ProfileController@changePassword')->name('change-password');
});
Route::fallback(function(){
    return "404 not found";
});
