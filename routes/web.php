<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

Route::get('/',[Clientcontroller::class, 'home']);
Route::get('/menu',[Clientcontroller::class, 'menu']);
Route::get('/about',[Clientcontroller::class, 'about']);
Route::get('/book',[Clientcontroller::class, 'book']);


Route::get('/redirects',[Clientcontroller::class, 'redirects']);

Route::put('/profile',[Clientcontroller::class, 'profileUpdate'])->name('profile.update');

Route::get('/users',[Admincontroller::class, 'user'])->name('users');
Route::get('/deleteuser/{id}',[Admincontroller::class, 'deleteuser']);

Route::get('/user/logout', [ClientController::class, 'UserLogout'])->name('user.logout');

//CATEGORIES
Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
Route::get('/addcategory', [CategoryController::class, 'addcategory'])->name('addcategory');
Route::post('/savecategory', [CategoryController::class, 'store'])->name('savecategory');
Route::get('/edit_category/{id}', [CategoryController::class, 'edit'])->name('edit_category');
Route::post('/update_category/{id}', [CategoryController::class, 'update'])->name('update_category');
Route::get('/delete_category/{id}', [CategoryController::class, 'delete'])->name('delete_category');


//PRODUCTS
Route::get('/products', [ProductController::class, 'product'])->name('products');
Route::get('/addproduct', [ProductController::class, 'addproduct'])->name('addproduct');
Route::post('/saveproduct', [ProductController::class, 'store'])->name('saveproduct');
Route::get('/edit_product/{id}', [ProductController::class, 'edit'])->name('edit_product');
Route::post('/update_product/{id}', [ProductController::class, 'update'])->name('update_product');
Route::get('/delete_product/{id}', [ProductController::class, 'delete'])->name('delete_product');
Route::get('/desactiver_product/{id}', [ProductController::class, 'desactiver'])->name('desactiver_product');
Route::get('/activer_product/{id}', [ProductController::class, 'activer'])->name('activer_product');
Route::get('/select_par_category/{category_name}',[ProductController::class, 'select_par_category']);


//CART
Route::get('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::group(['>middleware' => 'auth'],function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});
require __DIR__.'/auth.php';
