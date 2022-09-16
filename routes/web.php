<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::group(['domain' => '{subdomain}.' . env('APP_URL')], function () {
    Route::get('/', [TestController::class, 'index'])->name('test.index');
});

Route::group(['domain' => env('APP_URL')], function () {
    Route::get('/', [TestController::class, 'index'])->name('test.index');
});


Route::post('store', [TestController::class, 'store'])->name('test.store');
Route::get('set-locale/{lang}', [TestController::class, 'setLocale'])->name('test.set-locale');
