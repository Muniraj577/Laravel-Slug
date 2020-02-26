<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','HomeController@home')->name('home');
Route::get('/posts-index', 'PostController@index')->name('posts.index');
Route::get('/posts-create', 'PostController@create')->name('posts.create');
Route::post('/posts-store', 'PostController@store')->name('posts.store');
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');
Route::get('students-index', 'StudentController@index')->name('students.index');
Route::get('students-trash-list', 'StudentController@trashStudent')->name('students.trash');
Route::get('students-create', 'StudentController@create')->name('students.create');
Route::post('students-store', 'StudentController@store')->name('students.store');
Route::get('students-delete/{id}', 'StudentController@delete')->name('students.delete');
Route::get('students-restore/{id}', 'StudentController@restore')->name('students.restore');
Route::get('students-restore-all', 'StudentController@restoreall')->name('students.restore-all');
Route::get('students-delete-permanently/{id}', 'StudentController@permanentDelete')->name('students.permanentDelete');
Route::get('delete-all-students-permanently', 'StudentController@deleteAllPermanently')->name('students.deleteAllPermanently');
