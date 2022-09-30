<?php

use App\Http\Controllers\admin\AttributesController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\ProductsController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::prefix('admin-panel-management')->name('admin.')->group(function(){

    Route::resource('/blogs', BlogController::class);
    Route::resource('/news', BlogController::class);
    Route::resource('/attributes' , AttributesController::class);
    Route::resource('/categories' , CategoriesController::class);
    Route::resource('/products' , ProductsController::class);

});

Route::post('/uploadImage' , [BlogController::class , 'getImage']);

Route::get('/', function () {
    return view('home.pages.index');

});

Route::get('/services', function () {
    return view('home.pages.services');

});

Route::get('/products', function () {
    $categories = Category::where('is_active' , '=' , 1)->get();
    $products = Product::where('is_active' , '=' , 1)->with('category')->get();
    return view('home.pages.products' , compact('categories' , 'products'));

});

Route::get('/products-expand/{product}', function (Product $product) {
    $images = $product->images()->get();
    $productAttr = $product->attributes()->with('attribute')->get();
    return view('home.pages.products-expand' , compact('product' , 'images' , 'productAttr'));

})->name('showProduct');

Route::get('/blog', function () {
    return view('home.pages.blog');

});

Route::get('/blog-post', function () {
    return view('home.pages.blog-post');

});

Route::get('/about-us', function () {
    return view('home.pages.about-us');

});

Route::get('/contact-us', function () {
    return view('home.pages.contact-us');

});

