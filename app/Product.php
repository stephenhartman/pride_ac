<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function unit_size()
    {
        return $this->belongsTo(UnitSize::class);
    }

    public function seer_rating()
    {
        return $this->belongsTo(SeerRating::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
