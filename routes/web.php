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
})->name('/');

Auth::routes(['register' => false]);
Route::post('login/', 'Auth\LoginController@login')->name('tologin');
Route::get('/home', 'HomeController@index')->name('home');

// Admin Routes
Route::get('admin/', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
// Route::get('admin/pengabdian', 'PengabdianController@index')->name('admin.pengabdian')->middleware('is_admin');
Route::resource('admin/pengabdian','PengabdianController')->middleware('is_admin');
Route::get('/sertifikat', function () {
    return view('sertifikat');
});