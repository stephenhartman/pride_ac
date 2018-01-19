<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'model', 'price', 'description', 'seer_rating_id', 'unit_size_id', 'brand_id'
    ];

    public function unitSize()
    {
        return $this->belongsTo(UnitSize::class);
    }

    public function seerRating()
    {
        return $this->belongsTo(SeerRating::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeRating($query, $id)
    {
        return $query = self::where('seer_rating_id', $id);
    }

    public function scopeSpecificBrand($query, $id)
    {
        return $query = self::where('brand_id', $id);
    }
}
