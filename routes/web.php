<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\RegistrationPageController;

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

//login
Route::get('/login', [LoginPageController::class, 'login'])->name('login');
Route::post('/login', [LoginPageController::class, 'loginsubmit'])->name('login');
Route::get('/logout',[LoginPageController::class,'logout'])->name('logout');
//login

//registration
Route::get('/registration', [RegistrationPageController::class, 'registration'])->name('registration');
Route::post('/registration', [RegistrationPageController::class, 'registrationsubmit'])->name('registration');
//registration

Route::get('/home', [HomePageController::class, 'home'])->name('home')->middleware('ValideUser');

//product
Route::get('/product',[ProductController::class, 'productCreate'])->name('productcre')->middleware('ValideUser');
Route::post('/product',[ProductController::class, 'productCreateSubmitted'])->name('productsub')->middleware('ValideUser');
Route::get('/productlist',[ProductController::class, 'productCreateSubmitted'])->name('productlist')->middleware('ValideUser');
//end product
Route::get('/ourteams', [HomePageController::class, 'ourteams'])->name('ourteams');
Route::get('/aboutus', [HomePageController::class, 'aboutus'])->name('aboutus');

//contact us
Route::get('/contactusus', [HomePageController::class, 'contactus'])->name('contactus');
Route::post('/contactusus', [HomePageController::class, 'contactussubmit'])->name('contactus');
//End contact us