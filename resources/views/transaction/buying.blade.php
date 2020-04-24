@extends('templates/main')

@section('content')
@if (session('status'))
  <div class="flash-data" data-flashdata="{{ session('status') }}"></div>
@endif
<form method="post" action="{{ route('buying.input') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" id="id_product">
  <input type="hidden" class="id_supplier" name="id_supplier">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h5>Supplier</h5>
      </div>
      <div class="card-block">
        <div class="form-group row">
          <div class="col-sm-12">
            <div class="input-group input-group-button">
              <input type="text" readonly="" name="supplier" class="form-control form-control-sm supplier @error('supplier') is-invalid @enderror " value="">
              <span class="input-group-addon btn btn-primary" id="basic-addon10" data-toggle="modal" data-target="#supplier-Modal">
                  <span class="">Choose</span>
              </span>
              @error('supplier')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-block">
          <h4 class=" d-inline">Total </h4><br><br>
          <div class="form-group row">
            <div class="col-sm-8">
              <input type="text" class="form-control" id="total" name="total" autocomplete="off">
            </div>
          </div>
          <button type="submit" class="btn btn-primary m-b-0 float-right" id="submit">Save</button>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h5>Product</h5>
      </div>
      <div class="card-block ml-4">
          @csrf           
        <div class="form-group row">
          <label for="id_category" class="col-sm-3 col-form-label">Category</label>
          <div class="col-sm-8">
            <select name="id_category" class="form-control">
              <option>Choose</option>
              @foreach($categories as $category)
              <option value="{{$category->id_category}}">{{$category->category}}</option>
              @endforeach
            </select>
            @error('id_category')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="name_product">Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control @error('name_product') is-invalid @enderror " id="name_product" name="name_product"  autocomplete="off"  value="{{ old('name_product') }}">
            @error('name_product')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="model">Model</label>
          <div class="col-sm-8">
            <input type="text" class="form-control @error('model') is-invalid @enderror " id="model" name="model"  autocomplete="off"  value="{{ old('model') }}">
            @error('model')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="guarantee">Guarantee</label>
          <div class="col-sm-8">
            <input type="text" class="form-control @error('guarantee') is-invalid @enderror " id="guarantee" name="guarantee" autocomplete="off"  value="{{ old('guarantee') }}">
            @error('guarantee')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="quantity">Quantity</label>
          <div class="col-sm-8">
            <input type="text" class="form-control @error('quantity') is-invalid @enderror " id="quantity" name="quantity"  autocomplete="off"  value="{{ old('quantity') }}">
            @error('quantity')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="image" class="col-sm-3 col-form-label">Image</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" name="image" id="image">
          </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Textarea</label>
            <div class="col-sm-8">
                <textarea rows="3" cols="3" class="form-control" name="description"></textarea>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<div class="row">
  <div class="col-sm-6">
    <!-- Basic Inputs Validation start -->
   
  </div>

<div class="modal fade" id="supplier-Modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Data Supplier</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="dt-responsive table-responsive">
          <table id="data-table" class="table table-striped table-bordered nowrap">
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($suppliers as $supplier)
              <tr>
                <td class="d-none">{{ $supplier->id_supplier}}</td>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->phone }}</td>
                <td>{{ $supplier->email }}</td>
                <td>{{ $supplier->address }}</td>
                <td>
                  <button type="button" class="btn btn-warning choose-supplier">Choose</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
@push('script')
<script>
$('.choose-supplier').click(function(){
  var id_supplier = $(this).closest('tr').find('td:eq(0)').text();
  var name_supplier = $(this).closest('tr').find('td:eq(1)').text();

$('.supplier').val(name_supplier);
$('.id_supplier').val(id_supplier);
$('#supplier-Modal').modal('hide');

});
</script>
@endpush