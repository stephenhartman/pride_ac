<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'price', 'description', 'seer_rating_id', 'unit_size_id', 'brand_id',
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

    public function scopeOfStaticType($query, $column, $id)
    {
        return $query = self::where($column, $id);
    }

    public function scopeOfType($query, $column, $id)
    {
        return $query->where($column, $id);
    }
}
