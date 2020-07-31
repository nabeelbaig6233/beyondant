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
    Route::get('/analytics/{id}', 'DashboardController@getAnalyticsData')->name('google-analytics');
    Route::post('/analytics/filter','DashboardController@getFilterAnalyticsData')->name('google-filter-analytics');
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
    Route::post('/profile/link/update/{id}','ProfileController@profile_url')->name('profile_link.update');
    Route::patch('/profile/override/all_employees/{id}','ProfileController@override_profiles')->name('profile.override.all');
    Route::get('/profile/override/allow_employee/{id}','ProfileController@allow_employee_profile')->name('profile.allow.employee');

    //All Profiles
    Route::get('/allProfiles','AllProfilesController@index')->name('allProfiles');
    Route::post('/allProfiles','AllProfilesController@delete_all')->name('allProfiles.delete_all');

    // Individual
    Route::get('/individual','IndividualController@index')->name('individual');
    Route::post('/individual','IndividualController@create')->name('individual.create');
    Route::get('/individual/devices/{id}','IndividualController@view_devices');
    Route::get('/individual/view/{id}','IndividualController@view');
    Route::delete('/individual/destroy/{id}','IndividualController@destroy');
    Route::post('/individual/delete_all','IndividualController@delete_all')->name('individual.delete_all');

    //Upgrade Account
    Route::patch('/upgrade/account/{id}','ProfileController@upgrade_profile');

    //Devices
    Route::get('/device','DeviceController@index')->name('device');
    Route::get('/device/view_devices/{id}','DeviceController@view_devices');
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


    //contact
    Route::get('/contact','ContactController@index')->name('contact');
    //reset_password
    Route::post('/reset_account_password', "ProfileController@reset_account_password")->name("reset_account_pass");

    // Reseller
    Route::get('/reseller','ResellerController@index')->name('admin.reseller');
    Route::post('/reseller','ResellerController@save')->name('admin.create.reseller');
    Route::get('/reseller/view/{id}','ResellerController@view');
    Route::delete('/reseller/destroy/{id}','ResellerController@destroy');
    Route::post('/reseller/delete_all','ResellerController@delete_all')->name('reseller.delete_all');
    Route::get('/reseller/update/{id}',"ResellerController@edit")->name('reseller.edit');
    Route::patch('/reseller/update/{id}',"ResellerController@update")->name('reseller.update');

    // Entrepreneurs
    Route::get('/entrepreneurs','EntrepreneursController@index')->name('admin.entrepreneurs');
    Route::get('/entrepreneurs/view/{id}','EntrepreneursController@view');
    Route::delete('/entrepreneurs/destroy/{id}','EntrepreneursController@destroy');
    Route::post('/entrepreneurs/delete_all','EntrepreneursController@delete_all')->name('entrepreneurs.delete_all');

    //Login As Different User
    Route::get('/login_diff_user/{id}','ProfileController@login_user_account')->name('login_as_user');

});
Route::get("register",function (){
    return redirect("/");
})->name("register");

//Employees does not put into the admin b/c define the methods in Controllers\ProfileController
Route::post('/save_emp', "ProfileController@save_employees")->name("save-employees");
Route::post('/update_emp/{id}', "ProfileController@update_employees")->name("update-employees");
Route::post('/save_account', "ProfileController@save_account")->name("save_account");
//contacts
Route::get('/profile/contacts','ProfileController@user_contacts')->name('my_contacts');
Route::delete('/profile/contacts/destroy/{id}','ProfileController@delete_contact');



Auth::routes(["register"=>false]);
Route::get('/login/reseller', 'Auth\LoginController@showResellerLoginForm');
Route::post('/login/reseller', 'Auth\LoginController@resellerLogin')->name("reseller.login");


Route::middleware(['allowguest'])->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::post("/register","HomeController@select_account")->name("account_select");
    Route::post('/subscribe', 'HomeController@subscribe')->name("subscribe");
    Route::get('/entrepreneurs','EntrepreneursController@index')->name("entrepreneurs");
    Route::post('/entrepreneurs','EntrepreneursController@store')->name("entrepreneurs.submit");
    //basic profile route or others
    Route::get('/profile/{id?}','ProfileController@index')->name('pro');
    //upgrade profile
    Route::get('/upgrade-front-profile/{id?}','ProfileController@upgrade_profile_front')->name('upgrade-front-profile');

    Route::get('/profile/{user_id?}/devices/{id?}','ProfileController@device_profile')->name('device_profile');
    //shorten url for redirecting device
    Route::get('/profile/{user_id}/D{id}','ProfileController@device_profile_shorten')->name('device_profile_shorten');
    //more shorten url for redirecting device
    Route::get('/pro/{user_id}/D{id}','ProfileController@device_profile_new_shorten')->name('device_profile_new_shorten');
    Route::post('/profile/{id}/meet','ProfileController@meet_email')->name("meet");
    Route::get('/vcards','ProfileController@vcards')->name('vcards');
    Route::post('/profile/register','ProfileController@register')->name('profile-register');
    Route::post('/upload-cover-pic/{id}','ProfileController@uploadCoverPic')->name('upload-cover-pic');
    Route::post('/upload-cover-video/{id}','ProfileController@uploadCoverVideo')->name('upload-cover-video');
    Route::post('/upload-slideshow/{id}','ProfileController@uploadCoverSlideshow')->name('upload-slideshow');
    Route::patch('/upload-embedded/{id}','ProfileController@updateEmbededCover')->name('upload-embedded');
    Route::post('/upload-profile-pic/{id}','ProfileController@uploadProfilePic')->name('upload-profile-pic');
    Route::view('/reseller','front.reseller')->name('reseller');
    Route::post('/reseller-submit', 'ResellerController@index')->name('reseller.submit');
    //Reseller Profile
    Route::get("/reseller/profile/{id}","ResellerController@profile")->name('reseller.profile');
    //nfc-android
    Route::get('/nfc-android-service', 'HomeController@nfc_android')->name('nfc-android');
    //nfc-business cards
    Route::get('/nfc-business-cards', 'HomeController@nfc_business_cards')->name('nfc-business-cards');
    //reseller-directory
    Route::get('/reseller-directory', 'ResellerDirectoryController@index')->name('reseller-directory');

});

Route::middleware(['customer'])->group(function () {
    Route::get('/edit-profile/{id}','ProfileController@editProfile')->name('edit-profile');
    Route::patch('/update-profile/{id}', 'ProfileController@updateProfile')->name('update-profile');
    Route::get('/changepassword/{id}','ProfileController@viewChangePassword')->name('changepassword');
    Route::put('/change-password/{id}', 'ProfileController@changePassword')->name('change-password');
});

Route::middleware('reseller')->group(function (){
    Route::get('/edit-reseller-profile','ResellerController@edit_reseller_profile')->name('edit-reseller-profile');
    Route::patch('/update-reseller-profile','ResellerController@update_reseller_profile')->name('update-reseller-profile');
    Route::post('/update-reseller-profile-pic','ResellerController@uploadProfilePic')->name('reseller.profile.pic');
});

Route::fallback(function(){
    return "404 not found";
});
