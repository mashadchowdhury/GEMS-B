<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
    ];

    // protected $dispatchesEvents = [
    //     'created' => BookingCreated::class,
    // ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
