<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppartmentPhoto extends Model
{
    protected $fillable = ['appartment_id', 'photo', 'order'];
}
