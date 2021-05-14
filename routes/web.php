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
// Route::get('/', function () {
//     return view('welcome');
// });

// My routes
Route::get('/', 'App\Http\Controllers\BibleStudyController@index');

Route::get('/bible-study-request-form', 'App\Http\Controllers\BibleStudyController@create');

Route::post('/thank-you', 'App\Http\Controllers\BibleStudyController@store');

Route::get('/bible-study-requests', 'App\Http\Controllers\BibleStudyController@bsreq');