<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dealers', function () {
    return view('pages.dealers');
})->name('dealers');

Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');


Route::post('/admin',[AuthController::class, "registerSave"])->name("registerDealear");
Route::get('/caradmin',[CarController::class, "cars"])->name("caradmin");
Route::get('/vehicles',[CarController::class, "dashboard"])->name("vehicles");
Route::post('/caradmin',[CarController::class, "storeCar"])->name("registerCaradmin");


Route::get('/targetcar/{id}',[CarController::class, "cardetial"])->name("cardetail");