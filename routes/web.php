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

// Company
    Route::get('/company','CompanyProfileController@index')->name('company');
    Route::get('/company/view/{id}','CompanyProfileController@view');
    Route::get('/company/showemp/{id}','CompanyProfileController@view_employees');
    Route::delete('/company/destroy/{id}','CompanyProfileController@destroy');
    Route::post('/company/delete_all','CompanyProfileController@delete_all')->name('company.delete_all');

    // Profile
    Route::get('/profile','ProfileController@index')->name('profile');
    Route::get('/profile/view/{id}','ProfileController@view');
    Route::delete('/profile/destroy/{id}','ProfileController@destroy');
    Route::post('/profile/delete_all','ProfileController@delete_all')->name('profile.delete_all');

    // Individual
    Route::get('/individual','IndividualController@index')->name('individual');
    Route::post('/individual','IndividualController@create')->name('individual.create');
    Route::get('/individual/devices/{id}','IndividualController@view_devices');
    Route::get('/individual/view/{id}','IndividualController@view');
    Route::delete('/individual/destroy/{id}','IndividualController@destroy');
    Route::post('/individual/delete_all','IndividualController@delete_all')->name('individual.delete_all');

    //Devices
    Route::get('/device','DeviceController@index')->name('device');
    //update
    Route::get('/device/view/{id}','DeviceController@view');
    Route::post('/device/update/{id}','DeviceController@update');
    //create
    Route::post('/device','DeviceController@store')->name('device.create');
    //profile
    Route::get('/device/profile/{id}','DeviceController@get_profile_url');
    Route::post('/device/profile/{id}','DeviceController@link_profile_url');
    //delete
    Route::delete('/device/destroy/{id}','DeviceController@destroy');
    Route::post('/device/delete_all','DeviceController@delete_all')->name('device.delete_all');

    // Banner
    Route::get('/banner','BannerController@index')->name('banner');
    Route::post('/banner',"BannerController@store")->name('banner.create');
    Route::get('/banner/{id}',"BannerController@show");
    Route::post('/banner/{id}',"BannerController@update");
    Route::delete('/banner/destroy/{id}','BannerController@destroy');
//    Route::post('/banner','BannerController@create')->name('banner.create');


    //reset_password
    Route::post('/reset_account_password', "ProfileController@reset_account_password")->name("reset_account_pass");

    // Reseller
    Route::get('/reseller','ResellerController@index')->name('admin.reseller');
    Route::get('/reseller/view/{id}','ResellerController@view');
    Route::delete('/reseller/destroy/{id}','ResellerController@destroy');
    Route::post('/reseller/delete_all','ResellerController@delete_all')->name('reseller.delete_all');

    // Entrepreneurs
    Route::get('/entrepreneurs','EntrepreneursController@index')->name('admin.entrepreneurs');
    Route::get('/entrepreneurs/view/{id}','EntrepreneursController@view');
    Route::delete('/entrepreneurs/destroy/{id}','EntrepreneursController@destroy');
    Route::post('/entrepreneurs/delete_all','EntrepreneursController@delete_all')->name('entrepreneurs.delete_all');

});
Route::get("register",function (){
    return redirect("/");
})->name("register");

//Employees does not put into the admin b/c define the methods in Controllers\ProfileController
Route::post('/save_emp', "ProfileController@save_employees")->name("save-employees");
Route::post('/update_emp/{id}', "ProfileController@update_employees")->name("update-employees");
Route::post('/save_account', "ProfileController@save_account")->name("save_account");



Auth::routes(["register"=>false]);



Route::middleware(['allowguest'])->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::post("/register","HomeController@select_account")->name("account_select");
    Route::post('/subscribe', 'HomeController@subscribe')->name("subscribe");
    Route::get('/entrepreneurs','EntrepreneursController@index')->name("entrepreneurs");
    Route::post('/entrepreneurs','EntrepreneursController@store')->name("entrepreneurs.submit");
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
