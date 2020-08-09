<?php


use Illuminate\Support\Facades\Route;



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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'customers','middleware' => 'auth'], function(){
    Route::get('/', 'CustomerController@index')->name('index');
    Route::get('/create', 'CustomerController@create')->name('create');
    Route::post('/', 'CustomerController@store')->name('store');
    Route::get('/{id}', 'CustomerController@edit')->name('edit');
    Route::put('/{id}/update', 'CustomerController@update')->name('update');
    Route::delete('/{id}', 'CustomerController@delete')->name('delete');
});

Auth::routes();
Route::get('/home', 'CustomerController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::resource('roles', 'RoleController');



Route::get('locale/{locale?}', array('as'=>'set-locale',
    'uses'=>'LanguageController@setLocale'));


