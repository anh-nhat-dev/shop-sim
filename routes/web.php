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

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/sim-so-{sim}', 'Frontend\HomeController@detail')->name('detail');
Route::get('/sim-theo-mang-{sim}', 'Frontend\HomeController@simNetwork')->name('sim.network');
Route::get('/the-loai-{sim}', 'Frontend\HomeController@simCategory')->name('sim.category');

Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group([
    'prefix' => 'login',
    'as' => 'login',
    'middleware' => ['checklogout']
],function(){
    Route::get('/', 'LoginController@index');
    Route::post('/', 'LoginController@login');
});

Route::group([
    'prefix' => 'quan-ly',
    'as' => 'admin.',
    'namespace' => 'Backend',
    'middleware' => ['checklogin']
], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('users', 'UserController');
    Route::resource('nha-mang', 'NetworkController');
    Route::resource('the-loai-sim', 'CategoriesController');
    Route::resource('sims', 'SimController');
    Route::resource('pages', 'PageController');
});
