<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsfeed extends Model
{
    protected $fillable = ['title', 'content', 'photo', 'publication_date', 'publication_date_stop'];
}
