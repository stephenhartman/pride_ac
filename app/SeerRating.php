<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeerRating extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
