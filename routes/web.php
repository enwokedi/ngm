<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome\WelcomeController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\BikesalesController;
use App\Http\Controllers\Home\RentalsController;
use App\Http\Controllers\Home\ServicesController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');

    Route::get('/about', 'AboutMethod')->name('about.page');
    Route::get('/contact', 'ContactMethod')->name('contact.page');
});

// Sales Routes
Route::controller(BikesalesController::class)->group(function () {
    Route::get('/sale-motorcycles', 'ForSale')->name('sale-motorcycles');
    Route::get('/accident-management-services', 'AccidentClaim')->name('road-traffic-accidents');
});

// Rentals Routes
Route::controller(RentalsController::class)->group(function () {
    Route::get('/rentals-motorcycle', 'RentBike')->name('rentals-motorcycle');
    Route::get('/rentals-honda-pcx-125', 'DemoDetails')->name('rental-details');
    Route::get('/rentals-information', 'RentInformation')->name('rental-information');
});

// Services Routes
Route::controller(ServicesController::class)->group(function () {
    Route::get('/services', 'GetServices')->name('services');
    Route::get('/service-repairs', 'Repairs')->name('service-repairs');
    Route::get('/service-motorcycle', 'ServiceBike')->name('service-motorcycle');
    Route::get('/service-mot', 'ServiceMot')->name('service-mot');
});

// Shop Routes
Route::controller(ShopController::class)->group(function () {
    Route::get('/product-types', 'ProductTypes')->name('product-types');
    Route::get('/product-accessories', 'Accessories')->name('product-accessories');
    Route::get('/product-accessories-handlebar-accessories', 'HandlebarAccessories')->name('handlebar-accessories');
    Route::get('/gps-tracker', 'GpsTracker')->name('gps-tracker');
    Route::get('/spare-parts', 'SpareParts')->name('spare-parts');
});

// Category Routes
Route::controller(CategoriesController::class)->group(function () {
    Route::get('/product-types/accessories/{category_id}', 'getOxfordProducts')->name('categories.oxford-products');
    Route::get('/product-types/accessories/{category_id}/{brand}', 'getHelmets')->name('categories.helmets');
});

// Contact All Routes 
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'Contact')->name('contact.me');
    Route::post('/store/message', 'StoreMessage')->name('store.message');
    Route::get('/contact/message', 'ContactMessage')->name('contact.message');
    Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');
});

// Administration Routes
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth'])->name('administration');

// Customer Dashboards Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('das
hboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
