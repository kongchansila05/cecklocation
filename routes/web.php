<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocationController;

use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\CommunesController;
use App\Http\Controllers\VillageController;


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
Auth::routes();
Route::get('/', function () {
    return view('auth/login');
});
Route::middleware(['auth'])->group(function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::group(['middleware' => ['role:owner']], function () {
Route::view('/404-page','admin.404-page')->name('404-page');
Route::view('/blank-page','admin.blank-page')->name('blank-page');
Route::view('/buttons','admin.buttons')->name('buttons');
Route::view('/cards','admin.cards')->name('cards');
Route::view('/utilities-colors','admin.utilities-color')->name('utilities-colors');
Route::view('/utilities-borders','admin.utilities-border')->name('utilities-borders');
Route::view('/utilities-animations','admin.utilities-animation')->name('utilities-animations');
Route::view('/utilities-other','admin.utilities-other')->name('utilities-other');
Route::view('/chart','admin.chart')->name('chart');
Route::view('/tables','admin.tables')->name('tables');
Route::view('/404-page','admin.404-page')->name('404-page');
});

// ________________________________________People_________________________________________________________
Route::group(['middleware' => ['role:admin|owner|staff|general_manager']], function () {

    Route::get('/user', [UserController::class,'user'])->name('user');
    Route::post('/user/create', [UserController::class, 'user_create']);
    Route::post('/user/update', [UserController::class, 'user_update']);
    Route::get('/user/{id}/question', [UserController::class, 'user_question']);
    Route::get('/user/{id}/destroy', [UserController::class, 'user_destroy']);

    Route::get('/location', [LocationController::class,'index'])->name('location');

    Route::get('/province', [ProvinceController::class,'index'])->name('province');
    Route::get('/district', [DistrictController::class,'index'])->name('district');
    Route::get('/communes', [CommunesController::class,'index'])->name('communes');

    Route::get('/village', [VillageController::class,'index'])->name('village');
    Route::get('/village/create', [VillageController::class, 'create']);
    Route::post('/village/store', [VillageController::class,'store'])->name('/village/store');
    Route::get('/village/{id}/edit', [VillageController::class, 'edit']);
    Route::post('/village/{id}/update', [VillageController::class, 'update']);
    Route::get('/village/{id}/view', [VillageController::class, 'show']);
    Route::get('/village/{id}/question', [VillageController::class, 'question']);
    Route::get('/village/{id}/destroy', [VillageController::class, 'destroy']);

    Route::get('/communes', [CommunesController::class,'index'])->name('communes');
    Route::get('/communes/create', [CommunesController::class, 'create']);
    Route::post('/communes/store', [CommunesController::class,'store'])->name('/communes/store');
    Route::get('/communes/{id}/edit', [CommunesController::class, 'edit']);
    Route::post('/communes/{id}/update', [CommunesController::class, 'update']);
    Route::get('/communes/{id}/view', [CommunesController::class, 'show']);
    Route::get('/communes/{id}/question', [CommunesController::class, 'question']);
    Route::get('/communes/{id}/destroy', [CommunesController::class, 'destroy']);
    });
});

