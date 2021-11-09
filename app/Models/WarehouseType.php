<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function warehouse() {
        return $this->hasMany(Warehouse::class);
    }
}
