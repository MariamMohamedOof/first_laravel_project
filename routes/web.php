<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/register",[authController::class,"register"]);

Route::post("/postregister",[authController::class,"postregister"]);
 
Route::get("/login",[authController::class,"login"])->name('login');

Route::match(['get','post'],"/postlogin",[authController::class,"postlogin"]);

Route::get("/logout",[authController::class,"logout"])->name('logout');

Route::get("/home",[homeController::class,"index"]);




?>
