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

Route::get('/', function () {
    return view('pages.homepage');
});                           

Route::get('about', function() {
	return view('pages.about');
}); 

// Route::get('halaman_rahasia', ['as' => 'secret', function() {
// 	return 'Anda sedang melihat <strong>Halaman Secret</strong>';
// }]);

Route::get('halaman_rahasia', function() {
	return 'Anda sedang melihat <strong>Melihat halaman secret oy oy</strong>';
})->name('secret');

Route::get('showsecretme', function() {
	return redirect()->route('secret');
});

Route::get('siswa', function() {
	$siswa = ['Ronaldo', 'James', 'Ancelloti', 'Navas'];
	return view('siswa.index', compact('siswa'));
});