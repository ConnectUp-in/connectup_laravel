<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $casts = [
        'reasons' => 'array',
    ];

    public function getUserAttribute($value)
    {
        return User::where('id', $value)->first();
    }

}
