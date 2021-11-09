<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WarehouseType;

class WarehouseTypeController extends Controller
{
    public function index() {
        $warehouseTypes = WarehouseType::all();

        return view('warehouse.index', $warehouseTypes == null? ['warehouseTypes'=>null] : compact($warehouseTypes));
    }

    public function show($id) {
        $warehouseType = WarehouseType::find($id);
        return view('warehouse.show', $warehouseType == null? ['warehouseType'=>null] : compact($warehouseType));
    }

    public function create() {
        $warehouseTypes = WarehouseType::all();
        return view('warehouse.create', compact($warehouseTypes));
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
        ]);

        try{
            $warehouseType = WarehouseType::create(['name'=> $request->name]);
            return back();
        } catch(Exception $e) {
            dd($e);
        }
        
    }

    public function update(Request $request) {

    }

    public function delete($id) {

    }

    public function softDelete($id) {

    }
}