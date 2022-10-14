<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group([], function () {    //group function for "home" route (same route name "home")
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------ Website Routes ------------------ */

Route::get('/elements', [ElementsController::class, 'index'])->name('elements');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::get('/Cart', [CartController::class, 'index'])->name('Cart');
Route::get('/checkout', [CartController::class, 'getCartItemsForCheckout'])->name('checkout');
Route::get('/shop', [ProductController::class, 'index'])->name('product');

/*------------------ End Website Routes ------------------ */

/*------------------ Forgot Password Route ------------------ */
Route::get('/Forget-Password', [ForgotPasswordController::class, 'index'])->name('forget-password');
/*------------------ End Forgot Password Route ------------------ */

/*------------------ Verification Route ------------------ */
Route::get('/Verification', [VerificationController::class, 'index'])->name('verification');

/*------------------ Carts Route ------------------ */
Route::get('/addCart/{id}', [CartController::class, 'addCart']);


