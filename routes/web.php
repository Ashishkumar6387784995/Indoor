<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\AboutUsController;

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
//     return view('home');
// });


Route::get('/', [HomeController::class, 'home']);

// about page
Route::get('/about-us', [AboutUsController::class, 'aboutUs']);
Route::get('/our-vision', [AboutUsController::class, 'ourVision']);

