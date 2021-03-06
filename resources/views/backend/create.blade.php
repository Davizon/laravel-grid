@extends('layouts.app')

@section('content')
 <div class="container">
 <div class="row">
    <div class="col">
      <h1>Nuevo Producto</h1>
     </div>
    </div>

    <div class="row">
      <div class="col">
        <a class="btn btn-secondary" href="/products">Back</a>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <form action="/products" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Nombre:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Escribe un nombre" value="{{ old('name') }}">
            </div>
            <div class="form-group">
              <label for="title">Descripcion:</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Escribe una descripcion" value="{{ old('description') }}">
            </div>
            <div class="form-group">
                <label for="isTrending">La Secion de Trending Home:</label>
                <select class="form-control" id="isTrending" name="isTrending">
                    <option value="0">Si</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="categoryIsHome">Categoria De la Pagina de Home:</label>
                <select class="form-control" id="categoryIsHome" name="categoryIsHome">
                    <option value="0">Si</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Categoria:</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Escribe la url de la imagen" value="{{ old('image') }}">
            </div>
            <div class="form-group">
              <label for="title">Precio:</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Escribe el precio" value="{{ old('price') }}">
            </div>
            <div class="form-group">
              <label for="title">Image:</label>
              <input type="text" class="form-control" id="image" name="image" placeholder="Escribe la url de la imagen" value="{{ old('image') }}">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
