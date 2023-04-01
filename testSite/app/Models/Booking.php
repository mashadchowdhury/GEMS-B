<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_accommodation',
        'name_group',
        'from_date',
        'to_date',
    ];

    // protected $dispatchesEvents = [
    //     'created' => BookingCreated::class,
    // ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
