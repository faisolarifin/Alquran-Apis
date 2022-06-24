<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AlquranController;
use App\Http\Controllers\Api\AlquranController_v2;

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
    return view('index');
});

Route::prefix('apis')->group(function() {
	Route::prefix('v1')->group(function() {
	    Route::get('surah', [AlquranController::class, 'showSurah']);
	    Route::get('surah/{id}', [AlquranController::class, 'showAyatBySurah']);
	    Route::get('juz', [AlquranController::class, 'showJuz']);
	    Route::get('juz/{id}', [AlquranController::class, 'showAyatByJuz']);
	});
	Route::prefix('v2')->group(function() {
	    Route::get('surah', [AlquranController_v2::class, 'showSurah']);
	    Route::get('surah/{id}', [AlquranController_v2::class, 'showAyatBySurah']);
	    Route::get('juz', [AlquranController_v2::class, 'showJuz']);
	    Route::get('juz/{id}', [AlquranController_v2::class, 'showAyatByJuz']);
	});
});
