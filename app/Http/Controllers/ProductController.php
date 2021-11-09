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
        $products = Product::all();

        return view('product.create', compact('productTypes', 'productCategories', 'products'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'vendor' => 'required',
            'brand' => 'required',
            'unit' => 'required'
        ]);


        try{
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->vendor = $request->vendor;
            $product->brand = $request->brand;
            $product->unit = $request->unit;
            $product->product_type_id = $request->productType;
            $product->product_category_id = $request->productCategory;

            $product->save();

            return back();

        } catch(Exception $e) {
            dd($e);
        }
    }

    public function update(Request $reqeust, $id) {

    }

    public function delete($id) {

    }

    public function softDelete($id) {

    }
}
