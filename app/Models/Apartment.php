<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = ['name', 'status', 'date_blocked', 'dimension', 'rooms','description', 'price', 'price_per_meter', 'level', 'pdf'];
}
