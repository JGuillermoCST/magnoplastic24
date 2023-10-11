<?php

use App\Http\Controllers\ProductsController;
use App\Mail\Buy;
use App\Mail\Contact;
use App\Mail\Sell;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

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

// MAIN SITE ROUTES

Route::get('/', [ProductsController::class, 'siteIndex']);

Route::get('/productos', [ProductsController::class, 'index']);
Route::get('/productos/buscar', [ProductsController::class, 'search']);
Route::get('/productos/detalles/{id}', [ProductsController::class, 'show']);

Route::get('/cotizar', [ProductsController::class, 'siteBudget']);
Route::get('/vender', [ProductsController::class, 'siteSell']);

// CONTACT FORMS

Route::get('/mail/contact', function() { return redirect('/'); });
Route::post('/mail/contact', function(Request $r) {
    Mail::to('info@magnoplastic.com')->send(new Contact($r['name'], $r['phone'], $r['comments']));
    return redirect('/');
});

Route::get('/mail/buy', function() { return redirect('/cotizar'); });
Route::post('/mail/buy', function(Request $r) {
    Mail::to('info@magnoplastic.com')->send(new Buy($r['name'], $r['phone'], $r['products'], $r['comments']));
    return redirect('/cotizar');
});

Route::get('/mail/sell', function() { return redirect('/vender'); });
Route::post('/mail/sell', function(Request $r) {
    Mail::to('info@magnoplastic.com')->send(new Sell($r['name'], $r['phone'],$r['products'], $r['comments']));
    return redirect('/vender');

    // return (new Sell($r['name'], $r['phone'], $r['products'], $r['comments']))->render();
});

// LANGUAJE SETTING, APPLIES ON EVERY PART OF THE SITE

Route::get('/local/{locale}', function ($locale) {
    session()->put('locale', $locale);

    return Redirect::back();
});
