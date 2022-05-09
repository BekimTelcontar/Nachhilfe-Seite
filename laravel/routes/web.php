<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\StundeController;
use App\Http\Controllers\GebuchtController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [StundeController::class, 'showHomePage']);
Route::get('/nachhilfenehmen/{id}', [StundeController::class, 'showNachhilfeNehmenPage']);
Route::get('/registrieren', [UserController::class, 'showRegistrierenPage']);
Route::get('/anmelden', [UserController::class, 'showAnmeldenPage']);
Route::get('/account', [UserController::class, 'ShowAccountPage']);
Route::get('/updateAccount', [UserController::class, 'ShowUpdatePage']);

Route::post('/NutzerRegistrieren', [UserController::class, 'RegisterUser']);
Route::post('/NutzerAnmelden', [UserController::class, 'LoginUser']);







Route::get('/fs', [UserController::class, 'flushSession']);
