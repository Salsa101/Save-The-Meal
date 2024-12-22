<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    protected $fillable = [
        'contact_name',
        'business_phone',
        'email_address',
        'restaurant_address',
        'food_type',
        'quantity_food',
        'delivery_method',
        'courier_name',
        'tracking_number',
    ];
}
