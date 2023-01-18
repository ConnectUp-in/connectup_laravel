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
    Route::view('links', 'links');

    Route::get('/', [AppController::class, 'home'])->name('home');
    Route::get('/home', function () {
        page('Home');
        return view('home');
    });

    Route::get('test', function () {
        return view('test');
    });
    Route::post('test', [HelperController::class, 'test'])->name('test');
    Route::get('logout', function () {
        auth()->logout();
        return redirect('/login');
    });

    Route::get('feed', [AppController::class, 'feed'])->name('feed');
    Route::get('e/{username}', [ProfileController::class, 'user'])->name('user');
    Route::get('redirect', [HelperController::class, 'redirect']);
    Route::get('startups', [AppController::class, 'startups'])->name('startups');
    Route::get('superpreneurs', [AppController::class, 'superpreneurs'])->name('superpreneurs');
    Route::get('events', [AppController::class, 'events'])->name('events');
    Route::get('blogs', [AppController::class, 'blogs'])->name('blogs');
    Route::get('onlyforonce', [AppController::class, 'onlyforonce']);

    Route::prefix('post')->group(function () {
        Route::get('/{id}', [PostController::class, 'post'])->name('post');
        Route::post('create', [PostController::class, 'create'])->name('post.create');
        Route::post('update', [PostController::class, 'update'])->name('post.update');
        Route::post('delete', [PostController::class, 'delete'])->name('post.delete');

    });
    Route::prefix('user')
        ->middleware('auth')
        ->group(function () {
            Route::get('/profile/info', [ProfileController::class, 'info'])->name('profile.info');
            Route::get('/profile/socials', [ProfileController::class, 'socials'])->name('profile.socials');
            Route::get('/profile/followers', [ProfileController::class, 'followers'])->name('profile.followers');
            Route::get('/profile/following', [ProfileController::class, 'following'])->name('profile.following');
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

            Route::post('follow', [ProfileController::class, 'follow'])->name('follow');
        });

    Route::post('title', function () {
        return view('title');
    });

    Route::prefix('join')->group(function () {
        Route::get('member', [CommunityController::class, 'member'])->name('join.member');
        Route::get('mentor', [CommunityController::class, 'mentor'])->name('join.mentor');
        Route::post('member', [CommunityController::class, 'registerMember'])->name('register.member');
        Route::post('mentor', [CommunityController::class, 'registerMentor'])->name('register.mentor');

        Route::redirect('team/design', 'https://forms.gle/4TFTJFzavqt8jH9z5', 301);
        Route::redirect('team/dev', 'https://forms.gle/qbYC4dxfx6MkMbZW7', 301);
        Route::redirect('team/dev/test', 'https://forms.gle/4DfY2EVHtJDdCxRg8', 301);
        Route::redirect('team/design/test', 'https://forms.gle/AhgT2tMzFkzzwMC29', 301);
        Route::redirect('team/operations', 'https://forms.gle/9UqAh9yyuwN2gfFZA', 301);
        Route::redirect('wa', 'https://chat.whatsapp.com/LjiYejqWEnVHGaPvQDzMLW', 301);
        Route::redirect('team', 'https://forms.gle/CUHvK4y6bgPcBm2LA', 301);
        Route::redirect('ecell', 'https://forms.gle/RKb1rwqkozA2d95y5', 301);
        Route::redirect('envoy', 'https://forms.gle/9zSJwTYEYSvTvtWK8', 301);
        Route::get('ecell2', [PartnerEcellController::class, 'render'])->name('partner.ecell');

    });

    Route::prefix('startup')->group(function () {
        Route::get('/{username}', [StartupController::class, 'startup'])->name('startup');
    });

    Route::prefix('event')->group(function () {
        Route::get('/{slug}', [EventController::class, 'event'])->name('event');
        Route::middleware('auth')->get('/{slug}/redirect', [EventController::class, 'eventredirect'])->name('event.redirect');
        Route::post('/register', [EventController::class, 'register'])->name('event.register');
        Route::get('/registration/confirm/{id}', [EventController::class, 'registrationConfirm'])->name('event.registration.confirm');
        Route::get('/registration/sendticket/{id}', [EventController::class, 'registrationSendticket'])->name('event.registration.sendticket');
        Route::get('verify/{event_id}/{ticket_id}', [EventController::class, 'verify'])->name('event.verify');
    });

    Route::prefix('blog')->group(function () {
        Route::get('/{slug}', [BlogController::class, 'blog'])->name('blog');
    });

});

Route::get('/testmail', [HelperController::class, 'testmail']);
Route::get('/image', [HelperController::class, 'image']);
Route::view('viewmail', 'emails.taponn.01');
Route::view('privacypolicy', 'others.privacypolicy')->name('privacypolicy');
Route::view('rishteyy/privacypolicy', 'others.rishteyypp')->name('rishteyypp');
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

    Route::get('/', [SuperAdminController::class, 'dashboard'])->name('superadmin');
    Route::get('dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');

    Route::prefix('community')->group(function () {
        Route::get('members', [SuperAdminController::class, 'members'])->name('superadmin.community.members');
        Route::get('allmembers', [SuperAdminController::class, 'allmembers'])->name('superadmin.community.allmembers');
        Route::get('founders', [SuperAdminController::class, 'founders'])->name('superadmin.community.founders');
    });
    Route::prefix('blog')->group(function () {
        Route::get('blogs', [SuperAdminController::class, 'blogs'])->name('superadmin.blogs');
        Route::get('edit/{id}', [SuperAdminController::class, 'editblog'])->name('superadmin.blog.edit');
        Route::get('add', [SuperAdminController::class, 'addblog'])->name('superadmin.blog.add');
        Route::post('update/{id}', [SuperAdminController::class, 'updateblog'])->name('superadmin.blog.update');
        Route::post('create', [SuperAdminController::class, 'createblog'])->name('superadmin.blog.create');
    });

    Route::prefix('event')->group(function () {
        Route::get('events', [SuperAdminController::class, 'events'])->name('superadmin.events');
        Route::get('/registrations/{id}', [EventController::class, 'registrations'])->name('superadmin.event.registrations');
        Route::get('/registrationstick/{id}', [EventController::class, 'registrationstick'])->name('superadmin.event.registrationstick');
        Route::get('/attendance/scan', [EventController::class, 'scan'])->name('event.attendance.scan');
        Route::post('/markattendance', [EventController::class, 'markattendance'])->name('event.markattendance');
        Route::get('edit/{id}', [SuperAdminController::class, 'editevent'])->name('superadmin.event.edit');
        Route::get('add', [SuperAdminController::class, 'addevent'])->name('superadmin.event.add');
        Route::post('update/{id}', [SuperAdminController::class, 'updateevent'])->name('superadmin.event.update');
        Route::post('create', [SuperAdminController::class, 'createevent'])->name('superadmin.event.create');
        Route::get('/attendance/{id}', [SuperAdminController::class, 'eventAttendance'])->name('superadmin.event.attendance');
        Route::get('info/{id}', [SuperAdminController::class, 'eventinfo'])->name('superadmin.event.info');
    });

    Route::prefix('views')->group(function () {
        Route::get('/', [SuperAdminController::class, 'views'])->name('superadmin.views');
    });
});

Route::prefix('mail')->group(function () {
    Route::get('teamjoin', [MailController::class, 'teamjoin'])->name('mail.teamjoin');

});
