<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_region',
        'amount_accommodations',
        'amount_bookings',
        'available_rooms',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
