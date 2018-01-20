<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unitSize()
    {
        return $this->belongsTo(UnitSize::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seerRating()
    {
        return $this->belongsTo(SeerRating::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Build a static where query that can be reused in views,
     * aka used more than once without the query concatentating each call.
     *
     * @param $query Builder
     * @param $column string column name
     * @param $id int to compare
     * @return mixed
     */
    public function scopeOfStaticType($query, $column, $id)
    {
        return $query = self::where($column, $id);
    }

    /**
     * Build a where query that will accept multiple scopes, each
     * scope is concatenated to the last called scope.
     *
     * @param $query Builder
     * @param $column string column name
     * @param $id int to compare
     * @return mixed
     */
    public function scopeOfType($query, $column, $id)
    {
        return $query->where($column, $id);
    }
}
