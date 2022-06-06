<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

// website.com/admin/ 

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index') 
            ->name('dashboard');

        Route::resource('village', 'VillageController');
        Route::resource('article', 'ArticleController');
        Route::resource('village_page', 'VillagePageController');
        Route::resource('profile_gallery', 'ProfileGalleryController');
        Route::resource('product', 'ProductController');
        Route::resource('culinary', 'CulinaryController');
        Route::resource('tour', 'TourController');
        Route::resource('tour_gallery', 'TourGalleryController');

    });

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/profile/{slug}', [App\Http\Controllers\ProfileController::class, 'index'])
    ->name('profile');

Route::get('/kuliner', [App\Http\Controllers\CulinaryController::class, 'index'])
    ->name('kuliner');

Route::get('/produklokal', [App\Http\Controllers\ProductFrontController::class, 'index'])
    ->name('produklokal');

Route::get('/wisata', [App\Http\Controllers\TourController::class, 'index'])
->name('wisata');

Route::get('/detailwisata/{slug}', [App\Http\Controllers\TourDetailController::class, 'index'])
    ->name('detailwisata');

Route::get('/daftar-artikel', [App\Http\Controllers\ListArticleController::class, 'index'])
->name('daftar-artikel');

Route::get('/artikel/{slug}', [App\Http\Controllers\ArticleController::class, 'index'])
    ->name('artikel');

Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

Auth::routes(['verify' => true]);
