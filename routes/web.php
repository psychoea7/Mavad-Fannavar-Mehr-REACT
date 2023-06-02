<?php

use App\Http\Controllers\admin\AttributesController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\CollabAdminController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ContactUsController;
use App\Models\Attribute;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
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


Route::prefix('admin-panel-management')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function () {
        // $visitChart = DB::table('visits')->select('time' , DB::raw('count(*) as total'))->groupBy('time')->limit(7)->get();
        $response = Http::get('http://api.codebazan.ir/arz/?type=arz');
        $get = json_decode($response->collect());
        $dollar = $get->Result[0];

        $gold_api = Http::get('http://api.codebazan.ir/arz/?type=tala');
        $get_gold = json_decode($gold_api->collect());
        $gold = $get_gold->Result[0];
        // dd($dollar);
        // dd($visitChart);
        return view('admin.index' , compact('dollar' , 'gold'));
    })->name('adminIndex');
    Route::resource('/blogs', BlogController::class);
    Route::resource('/users' , UserController::class);
});

Route::get('/login-form', [LoginController::class, 'sendForm'])->name('auth');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/uploadImage', [BlogController::class, 'getImage']);

Route::get('/', function () {
    // visit(request()->ip() , Carbon::now()->toDateString());
    // $products = Product::latest()->limit(4)->with('attributes')->get();
    // $blogs = Blog::latest()->limit(4)->get();
    return view('home.pages.index', compact('blogs', 'products'));

})->name('home.pages.index');

Route::get('/services', function () {
    return view('home.pages.services');
})->name('home.pages.services');

Route::get('/products', function () {
    $categories = Category::where('is_active', '=', 1)->get();
    $products = Product::where('is_active', '=', 1)->with('category')->get();
    $attributes = Attribute::with('products')->get();
    return view('home.pages.products', compact('categories', 'products', 'attributes'));
})->name('product');

Route::get('/products-expand/{product}', function (Product $product) {
    $images = $product->images()->get();
    return view('home.pages.products-expand', compact('product', 'images'));
})->name('showProduct');

Route::get('/blog', function () {
    $blogs = Blog::all();
    return view('home.pages.blog', compact('blogs'));
})->name('home.pages.blog');

Route::get('/blog-post/{blog}', function (Blog $blog) {
    return view('home.pages.blog-post', compact('blog'));
})->name('blogContent');

Route::get('/about-us', function () {
    return view('home.pages.about-us');
})->name('home.pages.about-us');

Route::get('/contact-us', function () {
    return view('home.pages.contact-us');
})->name('home.pages.contact-us');

Route::get('/collab', function () {
    return view('home.pages.collab');
})->name('home.pages.collab');

Route::get('/english', function () {
    return view('home.pages.english');
})->name('home.pages.english');


Route::post('/saveCollab', [ContactUsController::class, 'store'])->name('collab');
Route::get('/test' , function(){
    auth()->logout();
});
// Route::get('/test', [ProductsController::class, 'test']);
