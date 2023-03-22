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

    public function __construct(array $attributes = [])
    {
        $attributes['ESS_support'] = $attributes['ESS_support'] ?? false;
        $attributes['restaurant_available'] = $attributes['restaurant_available'] ?? false;
        $attributes['pets_allowed'] = $attributes['pets_allowed'] ?? false;
        $attributes['accessibility_available'] = $attributes['accessibility_available'] ?? false;
        $attributes['accessibility_wheelchair'] = $attributes['accessibility_wheelchair'] ?? false;
        $attributes['accessibility_walker'] = $attributes['accessibility_walker'] ?? false;

        parent::__construct($attributes);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
