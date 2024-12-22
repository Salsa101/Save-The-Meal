<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'restaurant_address',
        'business_phone',
        'email_address',
        'website',
        'contact_name',
        'position',
        'contact_phone',
        'contact_email',
        'food_type',
        'surplus_food',
        'pickup_schedule',
        'checkbox1',
        'checkbox2',
    ];
}
