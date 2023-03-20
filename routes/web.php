<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;

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

Route::get('/landingpage', [LandingController::class, 'index'])->name('index');
Route::get('/login/landingpage', [LoginController::class, 'showloginform'])->name('login');
Route::post('/logintolandingpage', [LoginController::class, 'login'])->name('loginngab');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Export Import

Route::get('export/produk', [ProductController::class, 'export'])->name('exportproduk');


Route::get('/', [LandingController::class, 'indexguest'])->name('guest');


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/admin', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
		Route::get('users', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('transaction', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		// Route::get('items', ['as' => 'pages.items', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		// Route::get('product', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('history', ['as' => 'pages.history', 'uses' => 'App\Http\Controllers\PageController@history']);
});
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});




//User

Route::get('users/admin', [UsersController::class, 'index'])->name('showproduct')->name('useradmin');






// produk


Route::get('produk', [ProductController::class, 'index'])->name('showproduct');

Route::get('produk/create', [ProductController::class, 'create'])->name('createproduk');

Route::post('produk/create', [ProductController::class, 'store'])->name('storeproduk');

Route::get('produk/update/{id}', [ProductController::class, 'edit'])->name('editproduk');

Route::patch('produk/update/{id}', [ProductController::class, 'update'])->name('updateproduk');

Route::delete('produk/delete/{id}', [ProductController::class, 'destroy'])->name('deleteproduk');

Route::get('produk/detail/{id}', [ProductController::class, 'show'])->name('showproduk');

// item

Route::get('items', [ItemController::class, 'index'])->name('showitem');

Route::get('item/create', [ItemController::class, 'create'])->name('createitem');

Route::post('item/create', [ItemController::class, 'store'])->name('storeitem');

Route::get('item/update/{id}', [ItemController::class, 'edit'])->name('edititem');

Route::patch('item/update/{id}', [ItemController::class, 'update'])->name('updateitem');


Route::delete('item/delete/{id}', [ItemController::class, 'destroy'])->name('deleteitem');

//checkout

Route::get('/checkout/{id}', [CheckoutController::class, 'show']);


Route::get('auth/{provider}', [LoginController::class, 
'redirectToProvider']);
Route::get('oauth/{provider}/callback', [LoginController::class, 
'handleProviderCallback']);
