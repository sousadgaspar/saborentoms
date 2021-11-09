<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index() {
        return view('productCategory.index');
    }

    public function create() {
        return view('productCategory.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required'
        ]);

        try{
            $productCategory = ProductCategory::create([
                'name' => $request->name,
                'description' => $request->description
            ]);

            return back();

        }catch(Exception $e) {
            dd($e->getMessage());
        }
    }

    public function show($id) {
        $productCategory = ProductCategory::find($id);
        return view('productCategory.show', compact('productCategory'));
    }

    public function update($id) {

    }

    public function delete() {

    }

    public function softDelete() {

    }
}
