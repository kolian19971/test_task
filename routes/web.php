<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
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


Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {

    //admin index page
    Route::get('/', [AdminController::class, 'index']);

    //upload regions
    Route::post('/upload/regions', [AdminController::class, 'importRegions']);

    //upload offices
    Route::post('/upload/offices', [AdminController::class, 'importOffices']);

    //clear database
    Route::post('/clear/database', [AdminController::class, 'clearDatabase']);

});

//auth routes
Auth::routes();

//home index page
Route::get('/', [HomeController::class, 'index']);

//search autocomplete
Route::post('/get/autocomplete/hints', [HomeController::class, 'getAutocompleteHints']);

//search offices
Route::post('/get/offices', [HomeController::class, 'getOffices']);
