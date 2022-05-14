<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StundeController;
use App\Http\Controllers\GebuchtController;
use App\Models\Gebucht;

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


//easy Routes
Route::get('/', [HomeController::class, 'showHomePage']);
Route::get('/tutors/{id}', [HomeController::class, 'showNachhilfeNehmenPage']);
Route::get('/tutoring', [HomeController::class, 'showNachhilfeGebenPage']);
Route::get('/register', [HomeController::class, 'showRegistrierenPage']);
Route::get('/login', [HomeController::class, 'showAnmeldenPage']);
Route::get('/fs', [HomeController::class, 'flushSession']);

//Add middleware
Route::get('/account', [UserController::class, 'ShowAccountPage']);
Route::get('/updateAccount', [UserController::class, 'ShowUpdatePage']);

//Add middleware
Route::post('/addlesson', [StundeController::class, 'Registertutoring']);

//Middleware is contructer of controller
Route::get('booklesson/{id}', [GebuchtController::class, 'BookLesson']);

//Login and Register
Route::post('/registeringuser', [UserController::class, 'RegisterUser']);
Route::post('/logginginuser', [UserController::class, 'LoginUser']);