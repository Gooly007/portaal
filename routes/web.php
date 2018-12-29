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

/* Route::get('/', function () {
    return view('welcome');
});
 */
 Route::get('/', function () {
    return view('home/index');
});
Route::get('/minor', function () {
    return view('home/minor');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bureaus', 'BureausController@index')->name('bureaus');
Route::post('/bureaus', 'BureausController@store')->name('bureaus');
Route::get('/bureaus/{id}', 'BureausController@show')->name('bureaus');
Route::patch('/bureaus/{id}', 'BureausController@update')->name('bureaus');
Route::get('/bureaus/{id}/delete', 'BureausController@destroy')->name('bureaus');

// Admin Portal
Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);

Route::get('dashboard', 'AdminController@index')->name('dashboard');

// Route::prefix('admin')->group(function () {
    // Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    // Route::get('register', 'AdminController@create')->name('admin.register');
    // Route::post('register', 'AdminController@store')->name('admin.register.store');
    // Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
    // Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    // Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');
// });
