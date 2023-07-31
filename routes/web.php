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

Route::get('/','App\Http\Controllers\LoginController@index')->name('/');
Route::post('/login','App\Http\Controllers\LoginController@login')->name('login');
Route::post('/logout','App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/regis','App\Http\Controllers\RegisterController@index')->name('regis');
Route::post('/SimpanRegis','App\Http\Controllers\RegisterController@store')->name('SimpanRegis');

Route::get('/Home', function () {
    return view('Home.welcome');
})->middleware('auth');

//lagu
Route::get('/datalagu','App\Http\Controllers\LaguController@index')->name('datalagu')->middleware('auth');
Route::get('/tambahlagu','App\Http\Controllers\LaguController@create')->name('tambahlagu')->middleware('auth');
Route::post('/simpanlagu','App\Http\Controllers\LaguController@store')->name('simpanlagu');
Route::get('/editlagu/{id}','App\Http\Controllers\LaguController@edit')->name('editlagu')->middleware('auth');
Route::post('/updatelagu/{id}','App\Http\Controllers\LaguController@update')->name('updatelagu');
Route::get('/hapuslagu/{id}','App\Http\Controllers\LaguController@destroy')->name('hapuslagu');

//album
Route::get('/dataalbum','App\Http\Controllers\AlbumController@index')->name('dataalbum')->middleware('auth');
Route::get('/detailalbum/{id}','App\Http\Controllers\AlbumController@detailalbum')->name('detailalbum')->middleware('auth');
Route::get('/tambahalbum','App\Http\Controllers\AlbumController@create')->name('tambahalbum')->middleware('auth');
Route::post('/simpanalbum','App\Http\Controllers\AlbumController@store')->name('simpanalbum');
Route::get('/edit/{id}','App\Http\Controllers\AlbumController@edit')->name('edit')->middleware('auth');
Route::post('/updatealbum/{id}','App\Http\Controllers\AlbumController@update')->name('updatealbum');
Route::get('/hapusalbum/{id}','App\Http\Controllers\AlbumController@destroy')->name('hapusalbum');


//Playlist
Route::get('/dataplaylist','App\Http\Controllers\PlaylistController@index')->name('dataplaylist')->middleware('auth');
Route::get('/detailplaylist/{id}','App\Http\Controllers\PlaylistController@detailplaylist')->name('detailplaylist')->middleware('auth');
Route::get('/tambahplaylist','App\Http\Controllers\PlaylistController@create')->name('tambahplaylist')->middleware('auth');
Route::post('/simpanplaylist','App\Http\Controllers\PlaylistController@store')->name('simpanplaylist');
Route::get('/hapusplaylist/{id}','App\Http\Controllers\PlaylistController@destroy')->name('hapusplaylist');

//playlistItem
Route::get('/playlistitem/{id}','App\Http\Controllers\PlaylistItemController@index')->name('playlistitem')->middleware('auth');
Route::post('/simpanitem','App\Http\Controllers\PlaylistItemController@store')->name('simpanitem');
