@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
  <div class="col">
    <h1>Editar producto {{ $product->id }}</h1>
   </div>
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/products">Back</a>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <form action="/products/{{ $product->id }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" placeholder="Escribe un nombre">
          </div>
          <div class="form-group">
            <label for="description">Descripcion:</label>
            <input value="{{$product->description}}" type="text" class="form-control" id="description" name="description" placeholder="Escribe una descripcion">
          </div>
          <div class="form-group">
            <label for="isTrending">isTrending:</label>
              <select class="form-control" id="isTrending" name="isTrending">
                  <option value="0">Si</option>
                  <option value="1">No</option>
              </select>
          </div>
          <div class="form-group">
              <label for="isCategoryHome">Categoria De la Pagina de Home:</label>
              <select class="form-control" id="isCategoryHome" name="isCategoryHome">
                  <option value="0">Si</option>
                  <option value="1">No</option>
              </select>
          </div>
          <div class="form-group">
              <label for="title">Categoria:</label>
              <input type="text" class="form-control" id="category" name="category" placeholder="Escribe la url de la imagen" value="{{$category->name}}">
          </div>
          <div class="form-group">
            <label for="price">Precio:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}" placeholder="Escribe un precio">
          </div>
          <div class="form-group">
            <label for="image">Image URL:</label>
            <input type="text" class="form-control" id="image" name="image" value="{{$product->image}}" placeholder="Escribe la URL de la imagen">
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
