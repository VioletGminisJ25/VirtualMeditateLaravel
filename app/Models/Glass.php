<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Glass
 *
 * @property $id
 * @property $name
 * @property $quality
 * @property $experience
 * @property $tiers_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Tier $tier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Glass extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'quality', 'experience', 'tiers_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tier()
    {
        return $this->belongsTo(\App\Models\Tier::class, 'tiers_id', 'id');
    }
    
}
