<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
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



//easy Routes
Route::get('/', [HomeController::class, 'showHomePage']);
Route::get('/tutors/{id}', [HomeController::class, 'showNachhilfeNehmenPage']);
Route::get('/tutor/{id}', [HomeController::class, 'showTutorPage']);
Route::get('/register', [HomeController::class, 'showRegistrierenPage']);
Route::get('/login', [HomeController::class, 'showAnmeldenPage'])->name('login');
Route::get('/fs', [UserController::class, 'flushSession']);


Route::get('/account', [UserController::class, 'ShowAccountPage'])->middleware('auth');
Route::get('/updateAccount', [UserController::class, 'ShowUpdatePage'])->middleware('auth');
Route::get('/tutoring', [StundeController::class, 'showNachhilfeGebenPage']);
Route::post('/addlesson', [StundeController::class, 'Registertutoring']);



//Add middleware


//Middleware is contructer of controller
Route::get('booklesson/{id}', [GebuchtController::class, 'BookLesson']);

//Login and Register
Route::post('/registeringuser', [UserController::class, 'RegisterUser']);
Route::post('/logginginuser', [UserController::class, 'LoginUser']);
