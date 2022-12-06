<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'create'])->name('user.create');
Route::post('/', [UserController::class, 'store'])->name('user.store');

// Route::get('/view', [UserController::class, 'view'])->name('user.view');
Route::get('/list', [UserController::class, 'list'])->name('user.list');
