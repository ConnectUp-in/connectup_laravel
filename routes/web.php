<?php

namespace App\Http\Controllers;
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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::get('test', function(){
    return md5(uniqid('post_',true));
} );
Route::get('logout', function () {
    auth()->logout();
    return redirect('/login');
});


Route::get('feed', [AppController::class, 'feed'])->name('feed');
Route::get('post/{id}', [AppController::class, 'post'])->name('post');
Route::get('e/{username}', [ProfileController::class, 'user'])->name('user');

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/profile/info', [ProfileController::class, 'info'])->name('profile.info');
    Route::get('/profile/socials', [ProfileController::class, 'socials'])->name('profile.socials');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-cover-photo', [ProfileController::class, 'updateCoverPhoto'])->name('profile.update.cover');
});

Route::post('title', function(){
    return view('title');
});


Route::view('test', 'test');


// Social Authentication Routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');
Route::get('auth/linkedin', [LinkedinController::class, 'linkedinRedirect'])->name('redirectToLinkedin');
Route::get('auth/linkedin/callback', [LinkedinController::class, 'linkedinCallback']);
Route::get('auth/github', [GitHubController::class, 'gitRedirect'])->name('redirectToGithub');
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);