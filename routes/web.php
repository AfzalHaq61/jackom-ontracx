<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegesterCreateController;
use App\Http\Controllers\Auth\RegesterStoreController;
use App\Http\Controllers\Structures\StructureIndexController;
use App\Http\Controllers\Structures\StructureCreateController;
use App\Http\Controllers\Structures\StructureStoreController;
use App\Http\Controllers\Structures\StructureEditController;
use App\Http\Controllers\Structures\StructureUpdateController;
use App\Http\Controllers\Structures\StructureDeleteController;
use App\Http\Controllers\Structures\StructureExportController;
use App\Http\Controllers\Structures\StructureDownloadController;
use App\Http\Controllers\MainPageController;

use App\Mail\Testmail;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;

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

// Main Page
Route::get('/', MainPageController::class);

// Authentication
Route::get('/register/create', RegesterCreateController::class)
    ->name('register.create');

Route::get('/register/store', RegesterStoreController::class)
    ->name('register.store');

// Login System
Route::get('/signin', function () {
    return Inertia::render('SignIn');
})->name('signin');

Route::get('/forgot-password', function () {
    return Inertia::render('ForgotPassword');
})->name('forgotpassword');

Route::get('/password-verification', function () {
    return Inertia::render('PasswordVerification');
})->name('passwordverification');

Route::get('/new-password', function () {
    return Inertia::render('NewPassword');
})->name('newpassword');

Route::get('/signup', function () {
    return Inertia::render('Signup');
})->name('signup');

// Home

Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/request', function () {
    return Inertia::render('Request');
})->name('request');

Route::get('/providers-profile', function () {
    return Inertia::render('ProvidersProfile');
})->name('providers-profile');

Route::get('/wallet', function () {
    return Inertia::render('Wallet');
})->name('wallet');

Route::get('/profile', function () {
    return Inertia::render('Profile');
})->name('profile');

Route::get('/chat', function () {
    return Inertia::render('Chat');
})->name('chat');

Route::get('/your-orders', function () {
    return Inertia::render('YourOrders');
})->name('your-orders');

Route::get('/sell-car', function () {
    return Inertia::render('SellCars');
})->name('sell-car');

Route::get('/all-services', function () {
    return Inertia::render('AllServices');
})->name('allServices');

// Requests

Route::get('/request-Service-1', function () {
    return Inertia::render('RequestService1');
})->name('requestService1');

Route::get('/request-Service-2', function () {
    return Inertia::render('RequestService2');
})->name('requestService2');

Route::get('/request-Service-3', function () {
    return Inertia::render('RequestService3');
})->name('requestService3');

Route::get('/request-Service-4,5', function () {
    return Inertia::render('RequestService4,5');
})->name('requestService4,5');

Route::get('/request-Service-6', function () {
    return Inertia::render('RequestService6');
})->name('requestService6');

Route::get('/request-Service-7', function () {
    return Inertia::render('RequestService7');
})->name('requestService7');

Route::get('/practice', function () {
    return Inertia::render('Practice');
})->name('practice');

// Provider

Route::get('/signup-provider', function () {
    return Inertia::render('ProviderSignup');
})->name('SignupProvider');

Route::get('/home-provider', function () {
    return Inertia::render('HomeProvider');
})->name('homeProvider');

Route::get('/request-details', function () {
    return Inertia::render('RequestDetails');
})->name('requestdetails');

Route::get('/send-offer', function () {
    return Inertia::render('SendOffer');
})->name('send-offer');

Route::get('/profile-provider', function () {
    return Inertia::render('ProfileProvider');
})->name('profile-provider');

Route::get('/profile-provider-other', function () {
    return Inertia::render('ProfileProviderOther');
})->name('profile-provider-other');

Route::get('/profile-provider-reviews', function () {
    return Inertia::render('ProfileProviderReviews');
})->name('profile-provider-reviews');

Route::get('/wrecked_cars_list', function () {
    return Inertia::render('WreckedCarsList');
})->name('wrecked_cars_list');

Route::get('/wrecked_cars_details', function () {
    return Inertia::render('WreckedCarsDetails');
})->name('wrecked_cars_details');

Route::get('/request-provider', function () {
    return Inertia::render('RequestProvider');
})->name('request-provider');

Route::get('/chat-provider', function () {
    return Inertia::render('ChatProvider');
})->name('chatProvider');

Route::get('/your-orders-provider', function () {
    return Inertia::render('YourOrdersProvider');
})->name('your-ordersProvider');

Route::get('/your-offers-provider', function () {
    return Inertia::render('YourOffersProvider');
})->name('your-ordersProvider');

Route::get('/wallet-provider', function () {
    return Inertia::render('WalletProvider');
})->name('wallet-provider');

// Seller

Route::get('/home-seller', function () {
    return Inertia::render('HomeSeller');
})->name('home-seller');

Route::get('/users', function () {
    return Inertia::render('Users');
})->name('users');

Route::get('/service-providers', function () {
    return Inertia::render('ServiceProviders');
})->name('service-providers');

Route::get('/profile-seller', function () {
    return Inertia::render('ProfileSeller');
})->name('profile-seller');

Route::get('/profile-seller-update', function () {
    return Inertia::render('ProfileSellerUpdate');
})->name('profile-seller-update');

Route::get('/profile-seller-reviews', function () {
    return Inertia::render('ProfileSellerReviews');
})->name('profile-seller-reviews');

Route::get('/orders-seller', function () {
    return Inertia::render('OrdersSeller');
})->name('orders-seller');

Route::get('/orders-seller-cancelled', function () {
    return Inertia::render('OrderSellerCancelled');
})->name('orders-seller-cancelled');

Route::get('/orders-seller-copmleted', function () {
    return Inertia::render('OrderSellerCompleted');
})->name('orders-seller-copmleted');

Route::get('/transactions', function () {
    return Inertia::render('Transactions');
})->name('transactions');
