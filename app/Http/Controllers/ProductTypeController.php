<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    public function index() {
        $produtTypes = ProductType::all();

        return view('productType.index', compact('productTypes'));
    }

    public function create() {
        $productTypes = ProductType::all();
        return view('productType.create', compact('productTypes'));
    }

    public function store(Request $request) {
         $this->validate($request, [
             'name' => 'required'
         ]);
         $description = isset($request->description)? ['description' => $request->description] : ['description' => 'sem descrição'];
         $data = array_merge(['name' => $request->name], $description);
         try{
            $productType = ProductType::create($data);

            return back();
         }catch(Exception $e) {
            dd($e);
         }

    }

    public function update() {

    }

    public function show() {

    }

    public function delete() {

    }

    public function softDelete() {

    }
}
