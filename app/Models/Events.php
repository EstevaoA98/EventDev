<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['title', 'description', 'location', 'private'];
}
