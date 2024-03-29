<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/api/*',
        '/user/profile/update',
        '/user/profile/update/api',
        '/user/profile/update-cover-photo',
        '/user/startup/create',
        '/user/startup/update/*',
        '/event/register',
        '/join/*',
        '/post/*',
        '/user/*',
        'register',
        'superadmin/*',
        //
    ];
}
