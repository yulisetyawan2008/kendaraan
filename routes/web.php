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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/opd', 'OpdController@index');
Route::get('/opd/create', 'OpdController@create');
Route::post('/opd', 'OpdController@store');
Route::get('/opd/{id}', 'OpdController@show');
Route::get('/opd/{id}/edit', 'OpdController@edit');
Route::put('/opd/{id}', 'OpdController@update');
Route::delete('/opd/{id}', 'OpdController@destroy');

Route::get('/jabatan', 'JabatanController@index');
Route::get('/jabatan/create', 'JabatanController@create');
Route::post('/jabatan', 'JabatanController@store');
Route::get('/jabatan/{id}', 'JabatanController@show');
Route::get('/jabatan/{id}/edit', 'JabatanController@edit');
Route::put('/jabatan/{id}', 'JabatanController@update');
Route::delete('/jabatan/{id}', 'JabatanController@destroy');

Route::get('/kendaraan', 'KendaraanController@index');
Route::get('/kendaraan/create', 'KendaraanController@create');
Route::post('/addimage', 'KendaraanController@store')->name('addimage');
Route::get('/kendaraan/{id}', 'KendaraanController@show');
Route::get('/kendaraan/{id}/edit', 'KendaraanController@edit');
Route::put('/kendaraan/{id}', 'KendaraanController@update');
Route::delete('/kendaraan/{id}', 'KendaraanController@destroy');

Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/create', 'PegawaiController@create');
Route::post('/pegawai', 'PegawaiController@store');
Route::get('/pegawai/{id}', 'PegawaiController@show');
Route::get('/pegawai/{id}/edit', 'PegawaiController@edit');
Route::put('/pegawai/{id}', 'PegawaiController@update');
Route::delete('/pegawai/{id}', 'PegawaiController@destroy');

Route::resource('/categories', 'CategoryController');

Route::get('/question', 'QuestionController@index');
Route::get('/question/create', 'QuestionController@create');
Route::post('/question', 'QuestionController@store');
Route::get('/question/{id}', 'QuestionController@show');
Route::get('/question/{id}/edit', 'QuestionController@edit');
Route::put('/question/{id}', 'QuestionController@update');
Route::delete('/question/{id}', 'QuestionController@destroy');

Route::get('/answer/{question_id}', 'AnswerController@index')->name('indexjawaban'); // menampilkan form jawaban
Route::post('/answer/{question_id}', 'AnswerController@store'); // menyimpan jawaban

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rent', 'RentController@index');

Route::get('/pengguna', 'PenggunaController@index');
Route::get('/pengguna/create', 'PenggunaController@create');
