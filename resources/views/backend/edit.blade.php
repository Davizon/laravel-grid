@extends('plantilla')

@section('seccion')
<div class="row">
  <div class="col">
    <h1>Editar producto {{ $product->id }}</h1>
   </div>
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/expense_reports">Back</a>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <form action="/products/{{ $product->id }}/edit" method="POST">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          
          <div class="form-group">
            <label for="name">Nuevo Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Escribe un nombre">
            <input type="hidden" name="_method" value="PUT">
          </div>
          <div class="form-group">
            <label for="name">Nueva Descripcion:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Escribe una descripcion">
          </div>
          <div class="form-group">
            <label for="name">Nuevo isTrending:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Escribe un isTrending">
          </div>
          <div class="form-group">
            <label for="name">Nuevo Precio:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Escribe un precio">
          </div>
          <div class="form-group">
            <label for="name">Nueva URL:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Escribe la URL de la imagen">
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
@endsection
