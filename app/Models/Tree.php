<?php

namespace App\Models;

use App\Constants\TablesName;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tree extends Model
{
    protected $guarded = [];
    protected $table = TablesName::TREES;

    public function treeCategory(): HasOne
    {
        return $this->hasOne(TreeCategory::class, 'id', 'type_id');
    }
    public function humidity(): HasOne
    {
        return $this->hasOne(Humidity::class, 'id', 'humidity_id');
    }
    public function temperature(): HasOne
    {
        return $this->hasOne(Temperature::class, 'id', 'temperature_id');
    }
    public function salinity(): HasOne
    {
        return $this->hasOne(Salinity::class, 'id', 'salinity_id');
    }
    public function ph(): HasOne
    {
        return $this->hasOne(Ph::class, 'id', 'ph_id');
    }


    public function nutrients(): BelongsToMany
    {
        return $this->belongsToMany(
            Nutrient::class,
            TablesName::TREE_NUTRIENTS,
            'tree_id',
            'nutrient_id',
            'id',
            'id'
        );
    }
}
