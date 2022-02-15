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

Route::view('/about', 'about');
Route::view('/quotes', 'quotes');
Route::view('/pet-shipping', 'pet-shipping');
Route::view('/contact', 'contact');

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::post('/quotes', [ContactUsFormController::class, 'QuotesForm'])->name('contact.quote');
