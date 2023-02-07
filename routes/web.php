<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demacontroller;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;
use App\Models\Customer;
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

Route::get('/', [Demacontroller::class, 'home']);
Route::get('/about', [Demacontroller::class, 'about']);
Route::get('/courses', SingleActionController::class);
Route::resource('photo', PhotoController::class);
Route::get('/customer', [RegistrationController::class, 'index']);
Route::get('/customer/view', [RegistrationController::class, 'view']);
Route::post('/customer', [RegistrationController::class, 'register']);
Route::get('/customer/delete/{id}', [RegistrationController::class, 'delete']);
Route::get('/customer/edit/{id}', [RegistrationController::class, 'edit']);
Route::post('/customer/update/{id}', [RegistrationController::class, 'update']);

Route::get("/upload", [UploadController::class, 'upload']);
Route::post("/upload", [UploadController::class, 'file']);

// Route::get('/customer', function () {
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers);
// });