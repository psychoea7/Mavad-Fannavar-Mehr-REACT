<?php

use App\Http\Controllers\admin\BlogController;
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

});


Route::get('/', function () {
    return view('home.pages.index');
    
});

Route::get('/services', function () {
    return view('home.pages.services');
    
});

Route::get('/products', function () {
    return view('home.pages.products');
    
});

Route::get('/products-expand', function () {
    return view('home.pages.products-expand');
    
});

Route::get('/blog', function () {
    return view('home.pages.blog');
    
});

