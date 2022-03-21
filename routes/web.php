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
Route::view('/employee-relocation', 'employee-relocation');
Route::view('/pet-shipping-tips-preparing-your-international-travel', 'pet-shipping-tips-preparing-your-international-travel');
Route::view('/relocation-tips-tricks-household-goods', 'relocation-tips-tricks-household-goods');
Route::view('/moving-to-usa', 'relocation-to-usa');
Route::view('/moving-to-india', 'relocation-to-india');
Route::view('/moving-to-europe', 'relocation-to-europe');
Route::view('/moving-to-canada', 'relocation-to-canada');
Route::view('/moving-to-australia', 'relocation-to-australia');

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::post('/quotes', [ContactUsFormController::class, 'QuotesForm'])->name('contact.quote');
Route::post('/pet-shipping', [ContactUsFormController::class, 'PetForm'])->name('contact.pet');
Route::post('/', [ContactUsFormController::class, 'GetaquoteForm'])->name('contact.getquote');

//Route::view('/sitemap', 'sitemap')->header('Content-Type', 'application/xml');

Route::get('/sitemap', function()
{
   return Response::view('sitemap')->header('Content-Type', 'application/xml');
});
