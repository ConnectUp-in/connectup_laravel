<?php

namespace App\Models;

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
    ];

    public function getUserAttribute()
    {
        return User::where('id', $this->user_id)->select('id', 'name', 'username', 'profile_photo_path')->first();
    }
}
