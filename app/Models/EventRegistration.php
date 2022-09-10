<?php

namespace App\Models;

use App\Models\EventRegistration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

function getUniqueTicketID($id, $event_id)
{
    $registration = EventRegistration::where('event_id', $event_id)
        ->where('ticket_id', $id)
        ->first();
    if ($registration) {
        $id = hexdec(uniqid());
        return getUniqueTicketID($id, $event_id);
    } else {
        return $id;
    }

}
class EventRegistration extends Model
{
    use HasFactory;

    // Cast the required_fields and additional_fields to json
    protected $casts = [
        'required_fields' => 'json',
        'additional_fields' => 'json',
    ];

    // On creation of ticket_id, generate a random string
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $id = hexdec(uniqid());
            $model->ticket_id = getUniqueTicketID($id, $model->event_id);
        });
    }
}
