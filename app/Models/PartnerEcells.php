<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerEcells extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'society',
        'college',
        'url',
        'state',
        'city',
        'linkein',
        'instagram',
        'activeyears',
        'role',
        'wanumber',
        'replinkedin',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
