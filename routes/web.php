<?php

use App\Http\Controllers\PageController;
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

Route::get('/home',[PageController::class, 'getIndex']);
Route::get('category',[PageController::class, 'getCategory']);
Route::get('/detail',[PageController::class, 'getDetail']);
Route::get('/contact',[PageController::class, 'getContact']);
Route::get('/about',[PageController::class, 'getAbout']);