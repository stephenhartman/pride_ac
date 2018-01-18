<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeerRating extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
