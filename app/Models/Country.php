<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * Get all of the posts for the country.
    */
    public function posts()
    {
        return $this->hasManyThrough('App\Post','App\User');
    }
}
