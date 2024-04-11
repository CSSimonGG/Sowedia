<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;

/** 
 * Redirects
 */
Route::redirect('/', '/nl/home'); // Redirect / to Dutch home page
Route::redirect('/nl', '/nl/home'); // Redirect /nl to Dutch home page
Route::redirect('/en', '/en/home'); // Redirect /en to English home page

/**
 * Routes
 */

// Home page
Route::get('/{locale}/home', [HomeController::class, 'index']);
Route::redirect('/home', '/nl/home'); // Redirect /home to Dutch home page

// About page
Route::get('/{locale}/about', [AboutController::class, 'index']);
Route::redirect('/about', '/nl/about'); // Redirect /about to Dutch about page

// Contact page
Route::get('/{locale}/contact', [ContactController::class, 'index']);
Route::redirect('/contact', '/nl/contact'); // Redirect /contact to Dutch contact page

// Reviews page
Route::get('/{locale}/reviews', [ReviewsController::class, 'index']);
Route::redirect('/reviews', '/nl/reviews'); // Redirect /reviews to Dutch reviews page

// Terms page
Route::get('/{locale}/terms-and-conditions', [TermsController::class, 'index']);
Route::redirect('/terms-and-conditions', '/nl/terms-and-conditions'); // Redirect /terms-and-conditions to Dutch terms and conditions page

// Privacy page
Route::get('/{locale}/privacy', [PrivacyController::class, 'index']);
Route::redirect('/privacy', '/nl/privacy'); // Redirect /privacy to Dutch privacy page

/**
 * Services
 */

// Services page
Route::get('/{locale}/services', [ServicesController::class, 'index']);
Route::redirect('/services', '/nl/services'); // Redirect services to Dutch services page

// Web development page
Route::get('/{locale}/services/web-development', [ServicesController::class, 'web']);
Route::redirect('/services/web-development', '/nl/services/web-development'); // Redirect /services/web-development to Dutch services/web-development page

// Design page
Route::get('/{locale}/services/webshops', [ServicesController::class, 'webshops']);
Route::redirect('/services/webshops', '/nl/services/webshops'); // Redirect /services/webshops to Dutch services/webshops page

// Social media page
Route::get('/{locale}/services/social-media-management', [ServicesController::class, 'socialmedia']);
Route::redirect('/services/social-media-management', '/nl/services/social-media-management'); // Redirect /services/social-media to Dutch services/social-media page

// Design page
Route::get('/{locale}/services/design', [ServicesController::class, 'design']);
Route::redirect('/services/design', '/nl/services/design'); // Redirect /services/design to Dutch services/design page

// Hosting page
Route::get('/{locale}/services/hosting', [ServicesController::class, 'hosting']);
Route::redirect('/services/hosting', '/nl/services/hosting'); // Redirect /services/hosting to Dutch services/hosting page

/**
 * Projects
 */

// Portfolio page
Route::get('/{locale}/portfolio', [PortfolioController::class, 'index']);
Route::redirect('/portfolio', '/nl/portfolio'); // Redirect /portfolio to Dutch portfolio page

// Sowedia page
Route::get('/{locale}/portfolio/sowedia', [PortfolioController::class, 'sowedia']);
Route::redirect('/portfolio/sowedia', '/nl/portfolio/sowedia'); // Redirect /portfolio/sowedia to Dutch portfolio/sowedia page

// Telecombinatie page
Route::get('/{locale}/portfolio/telecombinatie', [PortfolioController::class, 'telecombinatie']);
Route::redirect('/portfolio/telecombinatie', '/nl/portfolio/telecombinatie'); // Redirect /portfolio/telecombinatie to Dutch portfolio/telecombinatie page

// CSR Summa College page
Route::get('/{locale}/portfolio/csr-summa-college', [PortfolioController::class, 'summa']);
Route::redirect('/portfolio/csr-summa-college', '/nl/portfolio/csr-summa-college'); // Redirect /portfolio/csr-summa-college to Dutch portfolio/csr-summa-college page

// Mailing
// Route::get('/contact/mail', function() {
//     Mail::to('satmdeklerk@gmail.com')->send(new ContactMail());
// });

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');