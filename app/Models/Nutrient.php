<?php

namespace App\Models;

use App\Constants\TablesName;
use Illuminate\Database\Eloquent\Model;

class Nutrient extends Model
{
    protected $table = TablesName::NUTRIENTS;
    protected $guarded = [];
}
