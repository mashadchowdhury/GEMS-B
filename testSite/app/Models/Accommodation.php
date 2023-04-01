<?php
 
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_accommodation',
        'address',
        'email_accommodation',
        'room_type',
        'number_of_rooms',
        'number_of_beds',
        'ESS_support',
        'restaurant_available',
        'pets_allowed',
        'accessibility_available',
        'accessibility_wheelchair',
        'accessibility_walker',
        'name_region',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
