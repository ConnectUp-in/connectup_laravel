<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    use HasFactory;

    // Cast the required_fields and additional_fields to json
    protected $casts = [
        'required_fields' => 'json',
        'additional_fields' => 'json',
    ];
}
