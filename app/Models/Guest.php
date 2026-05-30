<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'id_type',
        'id_number',
        'id_document_front',
        'id_document_back',
        'check_in_date',
        'check_out_date',
        'room_number',
        'booking_reference',
        'special_requests',
        'internal_notes',
        'photo',
        'company_name',
        'gst_number',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
