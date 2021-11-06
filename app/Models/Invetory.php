<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invetory extends Model
{
    use HasFactory;


    public function warehouse () {
        return $this->hasMany(Warehouse::class);
    } 

    public function product () {
        return $this->hasMany(Produts::class);
    }
}
