@extends('templates.master')

@section('content')
<br />
<form method="POST" action="/product-category">
    @csrf
  <div class="form-group">
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Ex.: Produto acabado">
  </div>
  <div class="form-group">
    <input type="text" name="description" class="form-control" id="exampleFormControlInput2" placeholder="Ex.: alguma descrição">
  </div>
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
    Criar nova categoria de produto
@endSection