@extends('templates.master')

@section('content')
<br />
<form method="POST" action="/product-category">
    @csrf
  <div class="form-group">
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Produto">
  </div>
  <div class="form-group">
    <input type="text" name="description" class="form-control" id="exampleFormControlInput2" placeholder="Descrição">
  </div>
  <div class="form-group">
    <input type="text" name="vendor" class="form-control" id="exampleFormControlInput3" placeholder="Fabricante">
  </div>
  <div class="form-group">
    <input type="text" name="brand" class="form-control" id="exampleFormControlInput4" placeholder="marca">
  </div>
  <div class="form-group">
    <div class="row">
        <div class="col-md-4">
            <label for="unit">Unidade de media
                <select name="unit" class="form-control" id="exampleFormControlInput4" placeholder="Unidade de medida.">
                    <option value="Kg">Kilograma</option>
                    <option value="g">Gramas</option>
                    <option value="Kg">Unidade</option>
                    <option value="Kg">Caixa</option>
                    <option value="Kg">Embalagem</option>
                    <option value="Kg">Litro</option>
                </select>
            </label>
        </div>
        <div class="col-md-4">
            @if(isset($productTypes))
                <div class="form-group">
                    <label for="unit">Tipos de produto
                        <select name="unit" class="form-control" id="exampleFormControlInput4" placeholder="Unidade de medida.">
                            @foreach($productTypes as $productType)
                                <option value="{{$productType->id}}">{{$productType->name}}</option>
                            @endForeach
                        </select>
                    </label>
                </div>
            @endIf
        </div>
        <div class="col-md-4">
            @if(isset($productCategories))
                <div class="form-group">
                    <label for="unit">Categoria do produto
                        <select name="unit" class="form-control" id="exampleFormControlInput4" placeholder="Unidade de medida.">
                            @foreach($productCategories as $productCategory)
                                <option value="{{$productCategory->id}}">{{$productCategory->name}}</option>
                            @endForeach
                        </select>
                    </label>
                </div>
            @endIf
        </div>
    </div>
  </div>

    <hr>


  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Salvar" />
</form>

@if(isset($productCategories))
<br>
<hr>
<br>
<br>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Gestão de categorias de produto</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">

                <tbody>
                    <tr class="odd">
                        <td class="sorting_1">Nome</td>
                        <td>Descrição</td>
                        <td>Acções</td>
                    </tr>
                    @foreach($productCategories as $productCategory)
                    <tr class="odd">
                        <td class="sorting_1">{{$productCategory->name}}</td>
                        <td>{{$productCategory->description}}</td>
                        <td>Acções</td>
                    </tr>
                    @endForeach
                    
                    </tbody>
            </table>
        </div>
    </div>

</div>
        </div>
    </div>
</div>
@endIf

@endSection

@section('cardTitle')
    Criar novo produto
@endSection