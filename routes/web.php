<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginCreateController;
use App\Http\Controllers\Auth\LoginStoreController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\Provider\ProviderRegesterCreateController;
use App\Http\Controllers\Auth\Provider\ProviderRegesterStoreController;
use App\Http\Controllers\Auth\RegesterCreateController;
use App\Http\Controllers\Auth\RegesterStoreController;
use App\Http\Controllers\Auth\User\UserForgotPasswordCreateController;
use App\Http\Controllers\Auth\User\UserForgotPasswordStoreController;
use App\Http\Controllers\Auth\User\UserResetPasswordCreateController;
use App\Http\Controllers\Auth\User\UserResetPasswordStoreController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\Provider\ProviderDetailController;
use App\Http\Controllers\Provider\ProviderOfferController;
use App\Http\Controllers\Provider\ProviderRequestController;
use App\Http\Controllers\Request\RequestServiceFourFiveCreateController;
use App\Http\Controllers\Request\RequestServiceFourFiveStoreController;
use App\Http\Controllers\Request\RequestServiceOneCreateController;
use App\Http\Controllers\Request\RequestServiceOneStoreController;
use App\Http\Controllers\Request\RequestServiceSellCarsCreateController;
use App\Http\Controllers\Request\RequestServiceSellCarsStoreController;
use App\Http\Controllers\Request\RequestServiceSixCreateController;
use App\Http\Controllers\Request\RequestServiceSixStoreController;
use App\Http\Controllers\Request\RequestServiceThreeCreateController;
use App\Http\Controllers\Request\RequestServiceThreeStoreController;
use App\Http\Controllers\Request\RequestServiceTwoCreateController;
use App\Http\Controllers\Request\RequestServiceTwoStoreController;
use App\Http\Controllers\User\Chat\Messege\UserChatMessegeCreateController;
use App\Http\Controllers\User\Chat\Messege\UserChatMessegeStoreController;
use App\Http\Controllers\User\Order\UserOrderStoreController;
use App\Http\Controllers\User\Profile\UserProfileEditController as ProfileUserProfileEditController;
use App\Http\Controllers\User\Profile\UserProfileUpdateController as ProfileUserProfileUpdateController;
use App\Http\Controllers\User\UserRequestController;
use App\Http\Controllers\User\UserRequestIndexController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get('/', MainPageController::class)
    ->name('main.page');

// User Authentication
Route::get('/register/create', RegesterCreateController::class)
    ->name('register.create');

Route::post('/register/store', RegesterStoreController::class)
    ->name('register.store');

Route::get('/login/create', LoginCreateController::class)
    ->name('login.create');

Route::post('/login/store', LoginStoreController::class)
    ->name('login.store');

Route::get('/forgot-password/create', UserForgotPasswordCreateController::class)
    ->name('forgot-password.request');

Route::post('/forgot-password/store', UserForgotPasswordStoreController::class)
    ->name('forgot-password.email');

Route::get('/reset-password/{token}', UserResetPasswordCreateController::class)
    ->name('password.reset');

Route::post('reset-password', UserResetPasswordStoreController::class)
    ->name('password.update');

Route::get('/logout', LogoutController::class)
    ->middleware('auth')
    ->name('logout');

// Provider Authentication
Route::get('/provider/register/create', ProviderRegesterCreateController::class)
    ->name('provider.register.create');

Route::post('/provider/register/store', ProviderRegesterStoreController::class)
    ->name('provider.register.store');

Route::get('/login/create', LoginCreateController::class)
    ->name('login.create');

Route::post('/login/store', LoginStoreController::class)
    ->name('login.store');

Route::get('/logout', LogoutController::class)
    ->name('logout');

Route::get('/terms&conditions', function () {
    return Inertia::render('Terms&Conditions');
})->name('terms&conditions');

Route::group(['middleware' => ['auth', 'verified']], function () {

    // User Routes

    Route::prefix('/user')->group(function () {

        Route::get('/home', UserHomeController::class)
            ->name('user.home');

        Route::get('/all-services', UserAllServicesController::class)
            ->name('user.all-services');

        Route::get('/request/index', UserRequestIndexController::class)
            ->name('user.request.index');

        Route::get('/request/{request:id}', UserRequestController::class)
            ->name('user.request');

        Route::get('/order', UserOrderController::class)
            ->name('user.order');

        Route::get('/order/{offer:uuid}/store', UserOrderStoreController::class)
            ->name('user.order.store');

        Route::get('/chat', UserChatController::class)
            ->name('user.chat');

        Route::get('/chat/store', UserChatStoreController::class)
            ->name('user.chat.store');

        Route::get('/chat/messege/{chat:id}/create', UserChatMessegeCreateController::class)
            ->name('user.chat.messege.create');
        
        Route::post('/chat/messege/{chat:id}/store', UserChatMessegeStoreController::class)
            ->name('user.chat.messege.store');

        Route::get('/wallet', UserWalletController::class)
            ->name('user.wallet');

        Route::get('/profile/edit', ProfileUserProfileEditController::class)
            ->name('user.profile.edit');

        Route::put('/profile/{user:uuid}/update', ProfileUserProfileUpdateController::class)
            ->name('user.profile.update');
    });

    // User Request Services

    Route::prefix('user/request-service')->group(function () {
        Route::get('/one/create', RequestServiceOneCreateController::class)
            ->name('user.request-service.one.create');
        Route::post('/one/store', RequestServiceOneStoreController::class)
            ->name('user.request-service.one.store');

        Route::get('/two/create', RequestServiceTwoCreateController::class)
            ->name('user.request-service.two.create');
        Route::post('/two/store', RequestServiceTwoStoreController::class)
            ->name('user.request-service.two.store');

        Route::get('/three/create', RequestServiceThreeCreateController::class)
            ->name('user.request-service.three.create');
        Route::post('/three/store', RequestServiceThreeStoreController::class)
            ->name('user.request-service.three.store');

        Route::get('/four-five/create', RequestServiceFourFiveCreateController::class)
            ->name('user.request-service.four-five.create');
        Route::post('/four-five/store', RequestServiceFourFiveStoreController::class)
            ->name('user.request-service.four-five.store');

        Route::get('/six/create', RequestServiceSixCreateController::class)
            ->name('user.request-service.six.create');
        Route::post('/six/store', RequestServiceSixStoreController::class)
            ->name('user.request-service.six.store');

        Route::get('/sell-car/create', RequestServiceSellCarsCreateController::class)
            ->name('user.request-service.sell-car.create');
        Route::post('/sell-car/store', RequestServiceSellCarsStoreController::class)
            ->name('user.request-service.sell-car.store');
    });

    // Provider Routes

    Route::prefix('/provider')->group(function () {
        // Provider Requests
        Route::prefix('/request')->group(function () {

            Route::get('/', ProviderRequestController::class)
                ->name('provider.request');
            Route::get('/{request:uuid}/details', ProviderDetailController::class)
                ->name('provider.request.details');
        });
        // Provider Offers
        Route::prefix('/offer')->group(function () {
            Route::get('/', ProviderOfferController::class)
                ->name('provider.offer');

            Route::get('/{request:uuid}/create', SendOfferCreateController::class)
                ->name('provider.offer.create');

            Route::post('/store', SendOfferStoreController::class)
                ->name('provider.offer.store');
        });
    });

    Route::get('/signup-provider', function () {
        return Inertia::render('ProviderSignup');
    })->name('SignupProvider');

    Route::get('/provider/home', function () {
        return Inertia::render('ProviderHome');
    })->name('provider.home');

    Route::get('/providers-profile', function () {
        return Inertia::render('ProvidersProfile');
    })->name('providers-profile');

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

    Route::get('/chat-provider', function () {
        return Inertia::render('ChatProvider');
    })->name('chatProvider');

    Route::get('/your-orders-provider', function () {
        return Inertia::render('YourOrdersProvider');
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
});

Route::get('/fileupload', function () {
    return Inertia::render('FileUpload');
})->name('fileupload');

Route::get('/upload', FileUploadController::class)
    ->name('upload');

Route::get('/chat', [ChatsController::class, 'index']);
Route::get('/messages', [ChatsController::class, 'fetchMessages']);
Route::post('/messages', [ChatsController::class, 'sendMessage']);

Route::post('/test', [ChatsController::class, 'test']);
Route::get('/test/create', [ChatsController::class, 'testCreate']);
