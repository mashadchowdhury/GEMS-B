<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_group',
        'booked',
        'name_accommodation',
        'name_primary_contact',
        'telephone_primary_contact',
        'email_primary_contact',
        'name_secondary_contact',
        'telephone_secondary_contact',
        'email_secondary_contact',
        'is_ESS_group',
        'group_count',
        'adult_count',
        'children_count',
        'pet_count',
        'need_accessibility',
    ];
    public function __construct(array $attributes = [])
    {
        $attributes['is_ESS_group'] = $attributes['is_ESS_group'] ?? false;
        $attributes['need_accessibility'] = $attributes['need_accessibility'] ?? false;
        $attributes['booked'] = $attributes['booked '] ?? false;

        parent::__construct($attributes);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
