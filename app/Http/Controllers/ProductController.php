<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function index () {
        return view('product.index');
    }

    public function show($id) {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    public function create() {
        $productTypes = ProductType::all();
        $productCategories = ProductCategory::all();

        return view('product.create', compact('productTypes', 'productCategories'));
    }

    public function store(Request $request) {

    }

    public function update(Request $reqeust, $id) {

    }

    public function delete($id) {

    }

    public function softDelete($id) {

    }
}
