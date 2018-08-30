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

Route::get('/', 'PagesController@homepage');
Route::get('about', 'PagesController@about');
Route::get('siswa', 'SiswaController@index');

Route::get('halaman_rahasia', [
	'as' => 'secret',
	'uses' => 'RahasiaController@halamaRahasia'
]);
Route::get('showmesecret', 'RahasiaController@showMeSecret');
Route::get('siswa/create', 'SiswaController@create');
Route::post('siswa', 'SiswaController@store');


// Route::get('halaman_rahasia', function() {
// 	return 'Anda sedang melihat <strong>Melihat halaman secret oy oy</strong>';
// })->name('secret');

// Route::get('showsecretme', function() {
// 	return redirect()->route('secret');
// });

