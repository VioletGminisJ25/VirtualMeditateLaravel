<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tier
 *
 * @property $id
 * @property $name
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Glass[] $glasses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tier extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glasses()
    {
        return $this->hasMany(\App\Models\Glass::class, 'id', 'tiers_id');
    }
    
}
