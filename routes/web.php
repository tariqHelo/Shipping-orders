<?php

use Illuminate\Support\Facades\Route;

/// Admin Routes

use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\SpendingController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\ViolationController;


use App\Http\Controllers\Delegate\OrdersController;
use App\Http\Controllers\Delegate\HomeController;
use App\Http\Controllers\Delegate\SettingController;




// Front End Routes
use App\Http\Controllers\Front\ForBusinessController;
use App\Http\Controllers\Front\ForDriversController;
use App\Http\Controllers\Front\TrackPackageController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\UserLoginController;


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
Route::get('/dashboard/delegate', function () {
return view('layouts.delegate');
})->middleware(['auth'])->name('delegate');

/* Start Delegate Route */
Route::get('/delegate', function () {
return view('auth.login-delegate');
});


Route::resource('/orders', OrdersController::class);
Route::resource('/home', HomeController::class);
Route::resource('/settings', SettingController::class);
/* End Delegate Route */


require __DIR__.'/auth.php';


Route::get('/', function () {
return view('layouts.front');
});

/*Start FrontEnd Page */
Route::resource('/for_business', ForBusinessController::class);
Route::resource('/for_drivers', ForDriversController::class);
Route::resource('/TrackPackage', TrackPackageController::class);
Route::resource('/about', AboutUsController::class);
Route::resource('/Contact_Us', ContactUsController::class);
Route::resource('/user_login', UserLoginController::class);
Route::get('/get_civilize',[UserLoginController::class , 'get_civilize'])->name('get_civilize');
Route::get('/get_areas',[UserLoginController::class , 'get_areas'])->name('get_areas');

/* End Route FrontEnd Page */





Route::get('/dashboard', function () {
return view('layouts.admin');
})->middleware(['auth'])->name('dashboard');

/* Start Admin Route */
// Permissions
Route::resource('permissions', PermissionsController::class);
// Roles
Route::resource('roles', RolesController::class);
// Users
Route::resource('users', UsersController::class);
/* End Admin Route */

Route::resource('/country', CountryController::class);
Route::get('/country/delete/{id}', [CountryController::class , 'destroy'])->name('country.delete');
// Route::get('/country/edit/{id}', [CountryController::class , 'edit'])->name('country.edit');

Route::resource('/city', CityController::class);
Route::get('/city/delete/{id}', [CityController::class , 'destroy'])->name('city.delete');
// Route::get('/city/edit/{id}', [CityController::class , 'edit'])->name('city.edit');


Route::resource('/area', AreaController::class);
Route::get('/area/delete/{id}', [AreaController::class , 'destroy'])->name('area.delete');

Route::resource('/service', ServiceController::class);
Route::get('/service/delete/{id}', [ServiceController::class , 'destroy'])->name('service.delete');


Route::resource('/order', OrderController::class);
Route::resource('/price', PriceController::class);

Route::resource('/report', ReportController::class)->middleware(['auth']);

Route::resource('/violation', ViolationController::class);
Route::get('/violation/delete/{id}', [ViolationController::class , 'destroy'])->name('violation.delete');

Route::resource('/price', PriceController::class);
Route::get('/price/delete/{id}', [PriceController::class , 'destroy'])->name('price.delete');


Route::resource('/car', CarController::class);
Route::get('/car/delete/{id}', [CarController::class , 'destroy'])->name('car.delete');

Route::resource('/spending', SpendingController::class);
Route::get('/spending/delete/{id}', [SpendingController::class , 'destroy'])->name('spending.delete');

// Route::get('/price', [PriceController::class , 'index'])->name('places_index');
Route::post('/price/create',[PriceController::class , 'store'])->name('form_store');

Route::get('/get_cities',[PriceController::class , 'get_cities'])->name('get_cities');
Route::get('/get_districts',[PriceController::class , 'get_districts'])->name('get_districts');
