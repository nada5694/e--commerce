<?php

/*----------------------------- Start Website Controllers usage -----------------------------*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

/*----------------------------- Start Dashboard Controllers usage -----------------------------*/
use App\Http\Controllers\Admin\DashboardHomeController;
use App\Http\Controllers\Admin\DashboardProductController;
use App\Http\Controllers\Admin\DashboardCategoryController;
use App\Http\Controllers\Admin\DashboardCartController;
use App\Http\Controllers\Admin\DashboardProfileController;
/*----------------------------- End Dashboard Controllers usage -----------------------------*/

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
Route::get('/checkout', [CartController::class, 'getCartItemsForCheckout'])->name('checkout');
Route::get('/shop', [ProductController::class, 'index'])->name('product');
/*------------------ End Website Routes ------------------ */

/*------------------ Start Forgot Password Route ------------------ */
Route::get('/Forget-Password', [ForgotPasswordController::class, 'index'])->name('forget-password');
/*------------------ End Forgot Password Route ------------------ */

/*------------------ Start Verification Route ------------------ */
Route::get('/Verification', [VerificationController::class, 'index'])->name('verification');
/*------------------ End Verification Route ------------------ */

/*------------------ Start Carts Route ------------------ */
Route::middleware(['auth', 'Only_customers'])->group(function () {
    Route::get('/Cart', [CartController::class, 'index'])->name('Cart');
    Route::delete('/cart/{id}', [CartController::class, 'destroy_for_cart'])->name('carts.destroy');
});
Route::group([
    'middleware' => ['only_customers_and_suppliers', 'Cart_already_logged_in_as_a_customer'] // more than one middleware for the one or more route
], function () {
    Route::get('/cart-guest', [CartController::class , 'cart_unregistered'])->name('cart-unregistered'); //will open a page that tells the guests to login for accessing the cart page (from the URL)
});
Route::post('/add_to_cart/{id}', [CartController::class, 'add_to_cart'])->name('add-to-cart');
Route::post('/update-cart-items-quantity/{id}', [CartController::class, 'update_cart_items_quantity']);
/*------------------ End Carts Route ------------------ */

/*------------------- Search Route -------------------- */
Route::get('/search' , [ProductController::class, 'search'])->name('search');
/*------------------ End Search Route ------------------ */

// --------------------- start dashboard routes --------------------- //

Route::group(['middleware'=>['auth', 'Dashboard']
],function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashboardHomeController::class, 'index'])->name('dashboard');
    });
});

