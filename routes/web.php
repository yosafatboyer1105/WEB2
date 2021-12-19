<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;


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

// route single page (user)
Route::get('landing',[Controller::class, 'mainView'])-> name('main_view');

Route::get('about',[Controller::class, 'aboutView'])-> name('about_view');

Route::get('checkout',[App\Http\Controllers\CheckoutController::class, 'checkoutView'])->name('checkout_view');

Route::get('shirt',[App\Http\Controllers\ShirtsController::class, 'shirtView'])->name('shirts_view');

Route::get('shoes',[App\Http\Controllers\ShoesController::class, 'shoesView'])->name('shoes_view');

Route::get('longsleeve',[App\Http\Controllers\LongsleeveController::class, 'longsleeveView'])->name('longsleeve_view');

Route::get('totebags',[App\Http\Controllers\TotebagsController::class, 'totebagsView'])->name('totebags_view');

Route::get('pants',[App\Http\Controllers\PantsController::class, 'pantsView'])->name('pants_view');


// route login & redirect
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

Route::get('redirect', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);

// route admin side
Route::get('dasbor',[App\Http\Controllers\AdminController::class, 'dashboardView'])->name('dashboard_view');

Route::get('addproduct',[App\Http\Controllers\AdminController::class, 'addProductView'])->name('addproduct_view');

Route::post('uploadproduct',[App\Http\Controllers\AdminController::class, 'uploadProduckt'])->name('uploadproduct');
