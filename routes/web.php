<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\PackageController;
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

Route::get('register', function () {
    return view('register');
});
Route::get('aboutus', function () {
    return view('aboutus');
});




Route::get('childday', function () {
    return view('childday');
});

Route::get('nurseregister', function () {
    return view('nurseregister');
});
Route::get('nurse', function () {
    return view('nurse');
});

Route::get('nursedetails', function () {
    return view('nursedetails');
});

Route::get('login', function () {
    return view('login');
});
Route::get('service', function () {
    return view('service');
});
 Route::post('/upload/upload',[NurseController::class,'upload'])->name('upload');
Route::group(['middleware'=>"web"],function(){
    Route::post('/register/store',[UserController::class,'store'])->name('signup.store');
    Route::post('/login',[UserController::class,'login'])->name('login');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
   
    // Route::get('/nurse/{id}', [NurseController::class, 'getNurseId'])->name('image');
    Route::get('/nurse', [NurseController::class, 'getNurse'])->name('image');
    Route::post('/buypackage',[PackageController::class,'buyPackage'])->name('upload')->middleware('auth');
    Route::get('/nursedetails/{id}', [NurseController::class, 'getDetails'])->name('details')->middleware('auth');


});