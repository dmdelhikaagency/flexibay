<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'property_id',
        'room_type',
        'title',
        'capacity',
        'price',
        'total_inventory',
        'featured_room_image',
    ];
}
