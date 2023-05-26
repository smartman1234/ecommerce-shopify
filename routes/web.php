<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignInController;
use App\Http\Controllers\MakeUpProduct;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminOrderController;
use App\Models\Product;

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
Route::get('/mascara',  [MakeUpProduct::class, 'mascara']);
Route::get('/eyeliner', [MakeUpProduct::class, 'eyeliner']);
Route::get('/eyeshadows', [MakeUpProduct::class, 'eyeshadow']);

// Skincare Product
Route::get('/skincare',  [MakeUpProduct::class, 'skincare']);
Route::get('/serums', [MakeUpProduct::class, 'serum']);
Route::get('/masks', [MakeUpProduct::class, 'mask']);
Route::get('/cleansers', [MakeUpProduct::class, 'cleanser']);

// Body Product
Route::get('/body',  [MakeUpProduct::class, 'body']);
Route::get('/scrubs',  [MakeUpProduct::class, 'scrub']);
Route::get('/oils',  [MakeUpProduct::class, 'oil']);
Route::get('/lotions',  [MakeUpProduct::class, 'lotion']);

// Face Product
Route::get('/face',  [MakeUpProduct::class, 'face']);
Route::get('/highlighter',  [MakeUpProduct::class, 'highlighter']);
Route::get('/concealer',  [MakeUpProduct::class, 'concealer']);
Route::get('/blush',  [MakeUpProduct::class, 'blush']);
Route::get('/foundation',  [MakeUpProduct::class, 'foundation']);
Route::get('/brushes',  [MakeUpProduct::class, 'brush']);

// Lip Product
Route::get('/lips', [MakeUpProduct::class, 'lips']);
Route::get('/lipPencils', [MakeUpProduct::class, 'lipPencils']);
Route::get('/lipSticks', [MakeUpProduct::class, 'lipSticks']);
Route::get('/lipTints', [MakeUpProduct::class, 'lipTints']);
Route::get('/lipSets', [MakeUpProduct::class, 'lipSets']);

// Cart Routes 
Route::get('/cart', [CartController::class, 'show']);
Route::get('/add-to-cart/{productID}', [CartController::class, 'AddToCart']);
Route::get('/update-cart', [CartController::class, 'UpdateCart']);
Route::get('/remove-cart', [CartController::class, 'RemoveCart']);

// Checkout
Route::post('checkout',  [CheckoutController::class, 'getData']);
Route::view('/checkout',"checkout");

// Sale
Route::get('/Sale', [MakeUpProduct::class, 'sale']);

// Admin
Route::get('/addProduct', function () {
    return view('AddProduct');
});
Route::post('/addProduct', [ProductController::class, 'store']);

Route::get('/productTable', [MakeUpProduct::class, 'productTable']);
Route::get('/ProductView', [ProductController::class, 'show']);

Route::post('/editProduct/{productId}', [ProductController::class, 'update']);
Route::get('/deleteProduct/{productId}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/editProduct/{productId}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/update/{productId}', [ProductController::class, 'update'])->name('product.update');
Route::get('/productInfo/{id}', function ($id) {
    $product = Product::where('productID', $id)->get();
    $product = $product->toArray();
    $data = compact('product');
    return view("ProductView")->with($data);
});


Route::get('/orders', function () {
    return view('OrdersTable');
});
Route::get('/orders', [AdminOrderController::class, 'orderTable']); 
