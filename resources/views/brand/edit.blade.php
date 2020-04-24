@extends('templates/main')

@section('title', 'Brand')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <!-- Basic Inputs Validation start -->
    <div class="card">
      <div class="card-header">
        <h3>Edit Brand</h3>
      </div>
      <div class="card-block">
        <form id="main" method="post" action="{{ url('brand/' . $brand->id_brand . '/edit') }}">
          @csrf
          @method('patch')
          <div class="form-group row">
            <label for="brand" class="col-sm-2 col-form-label">brand</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="brand" id="brand"  autocomplete="off" value="{{ $brand->brand }}">
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