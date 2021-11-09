<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeItem extends Model
{
    use HasFactory;

    public function warehouse() {
        return $this->hasMany(Warehouse::class);
    }
}
