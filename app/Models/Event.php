<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;
    // title, slug, type, content, image, r_dates, e_dates, location, attachments, active, event_link, suspended, creator, creator_type, interests, tags, required_fields, additional_fields , created_at, updated_at

    protected $fillable = [
        'title',
        'slug',
        'type',
        'content',
        'image',
        'r_dates',
        'e_dates',
        'location',
        'attachments',
        'active',
        'suspended',
        'creator',
        'creator_type',
        'interests',
        'tags',
        'required_fields',
        'additional_fields',
    ];

    protected $casts = [
        'id' => 'string',
        'r_dates' => 'array',
        'e_dates' => 'array',
        'attachments' => 'array',
        'interests' => 'array',
        'tags' => 'array',
        'required_fields' => 'array',
        'additional_fields' => 'array',
    ];
// If id is not present while creating a new user, then generate a random id.
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
