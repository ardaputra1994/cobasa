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


Route::group(['middleware' => ['web']], function () {
	Route::get('siswa', 'SiswaController@index');
	Route::get('siswa/create', 'SiswaController@create');
	Route::get('siswa/{siswa}', 'SiswaController@show');
	Route::post('siswa', 'SiswaController@store');
	Route::get('/', 'PagesController@homepage');
	Route::get('about', 'PagesController@about');
	Route::get('siswa/{siswa}/edit', 'SiswaController@edit');
	Route::patch('siswa/{siswa}', 'SiswaController@update');
	Route::delete('siswa/{siswa}', 'SiswaController@destroy');


});





// Route::get('tesCollect', 'SiswaController@tesCollection');
// Route::get('date-mutator', 'SiswaController@dateMutator');

// Route::get('halaman_rahasia', [
// 	'as' => 'secret',
// 	'uses' => 'RahasiaController@halamaRahasia'
// ]);
// Route::get('showmesecret', 'RahasiaController@showMeSecret');





// Route::get('halaman_rahasia', function() {
// 	return 'Anda sedang melihat <strong>Melihat halaman secret oy oy</strong>';
// })->name('secret');

// Route::get('showsecretme', function() {
// 	return redirect()->route('secret');
// });

