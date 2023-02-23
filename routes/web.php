<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\GeneralSettingsController;
use App\Http\Controllers\backend\HeadController;
use App\Http\Controllers\SessionYearController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middlware' => 'auth','prefix'=>'admin'], function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('sessionYear', SessionYearController::class);


    Route::prefix('heads')->group(function(){
        Route::get('list', [HeadController::class, 'index'])->name('admin.head.list');
        Route::get('create', [HeadController::class, 'create'])->name('admin.head.create');
        Route::post('create', [HeadController::class, 'store'])->name('admin.head.store');
    });

    Route::group(["prefix"=> "generalSetting"],function(){
        Route::get('/general', [GeneralSettingsController::class, 'general'])->name('admin.generalSetting.general');
        Route::post('/store', [GeneralSettingsController::class, 'store'])->name('admin.generalSetting.store');

    });
});
