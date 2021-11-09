@extends('templates.master')

@section('content')

<h1>Show all warehouse types</h1>

@if(isset($warehouseType))
    @foreach($warehouseType as $warehouse)
        <p>{{$warehouse}}</p>
    @endForeach
@endIf

@endSection