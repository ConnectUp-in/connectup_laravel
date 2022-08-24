<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
// import response
// use Illuminate\Http\Response;

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
    page('Home');
    return view('welcome');
});

Route::get('test', function () {
    return md5(uniqid('post_', true));
});
Route::get('logout', function () {
    auth()->logout();
    return redirect('/login');
});

Route::get('feed', [AppController::class, 'feed'])->name('feed');
Route::get('post/{id}', [PostController::class, 'post'])->name('post');
Route::get('e/{username}', [ProfileController::class, 'user'])->name('user');
Route::get('redirect', [HelperController::class, 'redirect']);
Route::get('startups', [AppController::class, 'startups'])->name('startups');

Route::prefix('user')
    ->middleware('auth')
    ->group(function () {
        Route::get('/profile/info', [ProfileController::class, 'info'])->name(
            'profile.info'
        );
        Route::get('/profile/socials', [
            ProfileController::class,
            'socials',
        ])->name('profile.socials');
        Route::post('/profile/update', [
            ProfileController::class,
            'update',
        ])->name('profile.update');
        Route::post('/profile/update-cover-photo', [
            ProfileController::class,
            'updateCoverPhoto',
        ])->name('profile.update.cover');
        Route::get('/profile/refferals', [
            ProfileController::class,
            'refferals',
        ])->name('profile.refferals');

        Route::prefix('startup')->group(function () {
            Route::get('/manage', [StartupController::class, 'manage'])->name(
                'startup.manage'
            );

            Route::post('/create', [StartupController::class, 'create'])->name(
                'startup.create'
            );
        });
    });

Route::post('title', function () {
    return view('title');
});

Route::get('/testmail', [HelperController::class, 'testmail']);
Route::view('viewmail', 'emails.test');

// Social Authentication Routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name(
    'redirectToGoogle'
);
Route::get('auth/google/callback', [
    GoogleController::class,
    'handleGoogleCallback',
])->name('handleGoogleCallback');
Route::get('auth/linkedin', [
    LinkedinController::class,
    'linkedinRedirect',
])->name('redirectToLinkedin');
Route::get('auth/linkedin/callback', [
    LinkedinController::class,
    'linkedinCallback',
]);
Route::get('auth/github', [GitHubController::class, 'gitRedirect'])->name(
    'redirectToGithub'
);
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);

Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('/sitemap', function () {
    return response()
        ->view('sitemap')
        ->header('Content-Type', 'application/xml');
});

Route::prefix('join')->group(function () {
    // Redicrect to https://chat.whatsapp.com/K9d7FNCF3w0GB0gvVBxmqc
    Route::get('/wa', function () {
        return redirect('https://chat.whatsapp.com/K9d7FNCF3w0GB0gvVBxmqc');
    });
});

Route::prefix('startup')->group(function () {
    Route::get('/{username}', [StartupController::class, 'startup'])->name(
        'startup'
    );
});