<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search/college/{query}', [SearchController::class, 'college']);

Route::get('/getposts', [PostController::class, 'getposts'])->name('getposts');

Route::get('/isavailable/username', [ProfileController::class, 'isavailableusername'])->name('isavailable.username');
Route::get('/isavailable/startupusername', [StartupController::class, 'isavailableusername'])->name('isavailable.startupusername');
Route::get('/isavailable/email', [ProfileController::class, 'isavailableemail'])->name('isavailable.email');
// Route::post('/profile/update', [ProfileController::class, 'apiupdate'])->name('api.profile.update');
