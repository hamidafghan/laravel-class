<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\UserController;

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


// public pages
Route::get('/',[PublicPageController::class, 'welcome'] );
Route::get('/about', [PublicPageController::class, 'about']);
Route::get('/contact-us', [PublicPageController::class, 'contactUs']);

// contact us form
Route::post('/contact-us', ContactUsController::class);

// users route
Route::resource('/users', UserController::class)->only(['index','show']);