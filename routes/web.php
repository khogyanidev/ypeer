<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/user', [IndexController::class, 'abc']);
Route::get('/accounts', [IndexController::class, 'myaccounts']);

Route::get('/members', [MemberController::class, 'index']);


Route::post('/create', [MemberController::class, 'store']);
