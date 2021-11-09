<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    public $fillable = ['name', 'description'];

    public function products () {
        return $this->hasMany(Products::class);
    }
}
