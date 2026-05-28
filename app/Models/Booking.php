<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Guest;

class Booking extends Model
{
    //
    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}
