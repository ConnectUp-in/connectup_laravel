<?php

namespace App\Models;

use App\Models\Startup;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    use HasFactory;
    protected $table = 'pageviews';

    protected $appends = [
        // 'profile_photo_url',
        'user',
        'profile',
    ];

    public function getUserAttribute()
    {
        return User::where('id', $this->user_id)->select('id', 'name', 'username', 'profile_photo_path')->first();
    }

    public function getProfileAttribute()
    {
        if ($this->page == 'user/{username}') {
            return User::where('id', $this->profile_id)->select('id', 'name', 'username', 'profile_photo_path')->first();
        } else if ($this->page == 'startup/{username}') {
            return Startup::where('id', $this->profile_id)->select('id', 'name', 'username', 'logo')->first();
        }
        return null;
    }
}
