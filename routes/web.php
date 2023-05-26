<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignInController;
use App\Http\Controllers\MakeUpProduct;
use App\Http\Controllers\InformationController;

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



// Admin
Route::get('/login', function () {

    if (isset($errorStatus)) {

        return view("Login")->with($errorStatus);
    }
   return view('Login');
});

Route::post('/login', [SignInController::class, 'signin']);


Route::get('/adminHomePage', function () {
    return view('AdminHomePage');
});


// Homepage
Route::get('/homepage', [MakeUpProduct::class, 'homepage']);

// Contact
Route::get('/AboutUs', [InformationController::class, 'aboutus']);
Route::get('/contactUs', [InformationController::class, 'contactus']);
Route::get('/privacyPolicy', function () {
    return view('PrivacyPolicy');
});

// Eye Product
Route::get('/eyes',  [MakeUpProduct::class, 'eyes']);