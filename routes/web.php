<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurlController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/curl-form', function () {
    return view('curl_form');
})->name('curlForm');

Route::post('/post-new-data', [CurlController::class, 'postNewData'])->name('postNewData');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/input', [CurlController::class, 'showInputForm'])->name('showInputForm');
Route::post('/send-api-request', [CurlController::class, 'sendApiRequest'])->name('sendApiRequest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
