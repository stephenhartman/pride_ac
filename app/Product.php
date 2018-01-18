<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function unit_size()
    {
        $this->hasOne(UnitSize::class);
    }

    public function seer_rating()
    {
        $this->hasOne(SeerRating::class);
    }

    public function brand()
    {
        $this->hasOne(Brand::class);
    }
}
