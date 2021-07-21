<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\ServiceController;

use App\Http\Controllers\OrderController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('/country', CountryController::class);
Route::get('/country/delete/{id}', [CountryController::class , 'destroy'])->name('country.delete');
Route::get('/country/edit/{id}', [CountryController::class , 'edit'])->name('country.edit');
Route::resource('/city', CityController::class);
Route::resource('/area', AreaController::class);
Route::resource('/service', ServiceController::class);

Route::resource('/order', OrderController::class);
