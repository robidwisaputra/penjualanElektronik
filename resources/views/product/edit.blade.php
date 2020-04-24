@extends('templates/main')

@section('title', 'Product')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <!-- Basic Inputs Validation start -->
    <div class="card">
      <div class="card-header">
        <h3>Edit Product</h3>
      </div>
      <div class="card-block">
        <form id="main" method="post" action="{{ url('product/' . $product->code_product . '/edit') }}" enctype="multipart/form-data">
          @csrf
          @method('patch')
          <div class="form-group row">
            <label for="id_category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
              <select name="id_category" class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id_category}}" {{ @$product->id_category == $category->id_category ? 'selected' : ''}} >{{$category->category}}</option>
                @endforeach
              </select>
              @error('id_category')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="id_brand" class="col-sm-2 col-form-label">Brand</label>
            <div class="col-sm-10">
              <select name="id_brand" class="form-control">
                @foreach($brands as $brand)
                <option value="{{$brand->id_brand}}" {{ @$product->id_brand == $brand->id_brand ? 'selected' : ''}} >{{$brand->brand}}</option>
                @endforeach
              </select>
              @error('id_brand')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="name"  autocomplete="off" value="{{ $product->name }}">
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="model" class="col-sm-2 col-form-label">Model</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('model') is-invalid @enderror " name="model" id="model"  autocomplete="off" value="{{ $product->model}}">
              @error('model')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="guarantee" class="col-sm-2 col-form-label">Guarantee</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('guarantee') is-invalid @enderror" name="guarantee" id="guarantee" autocomplete="off" value="{{ $product->guarantee }}">
                @error('guarantee')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" autocomplete="off" value="{{ $product->price }}">
                @error('price')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" id="stock" autocomplete="off" value="{{ $product->stock }}">
                @error('stock')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control @error('image') is-invalid @enderror " name="image" id="image"  autocomplete="off" value="{{ $product->image }}">
              @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('description') is-invalid @enderror " name="description" id="description"  autocomplete="off" value="{{ $product->description }}">
              @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2"></label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary m-b-0">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection