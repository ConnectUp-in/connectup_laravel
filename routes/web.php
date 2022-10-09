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

Route::middleware('sitemap')->group(function () {

    Route::get('/', function () {
        page('Home');
        return view('welcome');
    })->name('home');
    Route::get('/home', function () {
        page('Home');
        return view('home');
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
    Route::get('superpreneurs', [AppController::class, 'superpreneurs'])->name('superpreneurs');
    Route::get('events', [AppController::class, 'events'])->name('events');
    Route::get('onlyforonce', [AppController::class, 'onlyforonce']);

    Route::prefix('user')
        ->middleware('auth')
        ->group(function () {
            Route::get('/profile/info', [ProfileController::class, 'info'])->name('profile.info');
            Route::get('/profile/socials', [ProfileController::class, 'socials'])->name('profile.socials');
            Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
            Route::post('/profile/update/api', [ProfileController::class, 'apiupdate'])->name('api.profile.update');

            Route::post('/profile/update-cover-photo', [ProfileController::class, 'updateCoverPhoto'])->name('profile.update.cover');
            Route::get('/profile/refferals', [ProfileController::class, 'refferals'])->name('profile.refferals');
            Route::prefix('startup')->group(function () {
                Route::get('/manage', [StartupController::class, 'manage'])->name('startup.manage');
                Route::post('/create', [StartupController::class, 'create'])->name('startup.create');
                Route::get('/update/{id}/info', [StartupController::class, 'updateInfo'])->name('startup.update.info');
                Route::get('/update/{id}/socials', [StartupController::class, 'updateSocials'])->name('startup.update.socials');
                Route::post('/update/{id}', [StartupController::class, 'update'])->name('startup.update');
                Route::post('/update/{id}/cover', [StartupController::class, 'updateCover'])->name('startup.update.cover');
            });
        });

    Route::post('title', function () {
        return view('title');
    });

    Route::prefix('join')->group(function () {
        Route::get('member', [CommunityController::class, 'member'])->name('join.member');
        Route::get('mentor', [CommunityController::class, 'mentor'])->name('join.mentor');
        Route::post('member', [CommunityController::class, 'registerMember'])->name('register.member');
        Route::post('mentor', [CommunityController::class, 'registerMentor'])->name('register.mentor');
        Route::get('wa', function () {
            return redirect('https://chat.whatsapp.com/K9d7FNCF3w0GB0gvVBxmqc');
        });
    });

    Route::prefix('startup')->group(function () {
        Route::get('/{username}', [StartupController::class, 'startup'])->name('startup');
    });

    Route::prefix('event')->group(function () {
        Route::get('/{slug}', [EventController::class, 'event'])->name('event');
        Route::middleware('auth')->get('/{slug}/redirect', [EventController::class, 'eventredirect'])->name('event.redirect');
        Route::post('/register', [EventController::class, 'register'])->name('event.register');
        Route::get('/registrations/{id}', [EventController::class, 'registrations'])->name('event.registrations');
        Route::get('/registration/confirm/{id}', [EventController::class, 'registrationConfirm'])->name('event.registration.confirm');
        Route::get('/registration/sendticket/{id}', [EventController::class, 'registrationSendticket'])->name('event.registration.sendticket');
        Route::get('verify/{event_id}/{ticket_id}', [EventController::class, 'verify'])->name('event.verify');
    });

});

Route::get('/testmail', [HelperController::class, 'testmail']);
Route::get('/image', [HelperController::class, 'image']);
Route::view('viewmail', 'pdf.invoice');
Route::view('privacypolicy', 'others.privacypolicy')->name('privacypolicy');
Route::view('termsofservice', 'others.termsofservice')->name('termsofservice');

// Social Authentication Routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');
Route::get('auth/linkedin', [LinkedinController::class, 'linkedinRedirect'])->name('redirectToLinkedin');
Route::get('auth/linkedin/callback', [LinkedinController::class, 'linkedinCallback']);
Route::get('auth/github', [GitHubController::class, 'gitRedirect'])->name('redirectToGithub');
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('/sitemap', function () {
    return response()
        ->view('sitemap')
        ->header('Content-Type', 'application/xml');
});

Route::prefix('superadmin')->group(function () {
    Route::prefix('community')->group(function () {
        Route::get('members', [SuperAdminController::class, 'members'])->name('superadmin.community.members');
    });
    Route::prefix('views')->group(function () {
        Route::get('/', [SuperAdminController::class, 'views'])->name('superadmin.views');
    });
});
