<?php

use Illuminate\Support\Facades\Route;
use App\Model\User;

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

Auth::routes();
$id = Auth::id();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/session/create', [App\Http\Controllers\SessionController::class, 'create']);
Route::post('/session', [App\Http\Controllers\SessionController::class, 'store']);
Route::get('/session/$id', [App\Http\Controllers\SessionController::class, 'show']);

// Route::get('/session/create', [App\Http\Controllers\SessionController::class, 'create']);

