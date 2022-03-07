<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

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
    return view('home');
});

Route::get('clear-config', function() {
    Artisan::call('config:clear');
    return "config cleared!";
});

Route::get('cache-config', function() {
    Artisan::call('config:cache');
    return "config setting updated!";
});

Route::view('/about', 'about');
Route::view('/quotes', 'quotes');
Route::view('/pet-shipping', 'pet-shipping');
Route::view('/contact', 'contact');
Route::view('/pet-relocation', 'pet-relocation');
Route::view('/household-relocation', 'household-good-relocation');

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::post('/quotes', [ContactUsFormController::class, 'QuotesForm'])->name('contact.quote');
