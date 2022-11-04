<?php

namespace App\Models;

use App\Models\Startup;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
        'attachments' => 'array',
        'tags' => 'array',
    ];

    protected $fillable = [
        'title',
        'type',
        'content',
        'creator',
        'creator_type',
        'category',
        'attachments',
        'slug',
        'tags',
        'readtime',
        'image',
        'active',
        'suspended',
    ];
    protected $appends = [
        'user',
    ];
    public $incrementing = false;

    public function getUserAttribute()
    {
        if ($this->creator_type == 'e') {
            return User::where('id', $this->creator)->select('id', 'name', 'username', 'profile_photo_path')->first();
        } elseif ($this->creator_type == 's') {
            return Startup::where('id', $this->creator)->select('id', 'name', 'username', 'logo')->first();
        }
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($event) {
            if (!$event->id) {
                $event->id = Str::uuid();
            }
        });
    }
}
