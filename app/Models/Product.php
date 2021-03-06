<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['name', 'description', 'vendor', 'brand', 'unit', 'product_type_id', 'product_category_id'];

    public function warehouseType() {
        return $this->belongsTo(WarehouseType::class);
    }

    public function warehouse() {
        return $this->belongsTo(Warehouse::class);
    }

    public function produtType() {
        return $this->belongsTo(ProductType::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}