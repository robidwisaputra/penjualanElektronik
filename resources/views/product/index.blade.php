@extends('templates/main')

@section('title', 'Product')

@section('content')
  <div class="col-xl-12 col-md-12">
	@if (session('status'))
	<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="fa fa-times-circle-o"></i>
    </button>
    {{ session('status') }}
  </div>
	@endif
  	<div class="card">
  		<div class="card-header">
  			<a href="{{ route('add.product') }}" class="btn btn-mat btn-primary"><i class="icofont icofont-plus-square"></i>  Add</a>
  		</div>
			<div class="card-block">
			  <div class="dt-responsive table-responsive">
			    <table id="base-style" class="table table-striped table-bordered nowrap">
			      <thead>
			        <tr>
			          <th>Name</th>
			          <th>Model</th>
			          <th>Price</th>
			          <th>Stock</th>
			          <th>Option</th>
			        </tr>
			      </thead>
			      <tbody>
			      	@foreach($products as $product)
			        <tr>
			          <td>{{ $product->name }}</td>
			          <td>{{ $product->model }}</td>
			          <td>{{ $product->price }}</td>
			          <td>{{ $product->stock }}</td>
			          <td>
			          	<div class="icon-btn">
			          		<button type="button" class="btn btn-mat btn-sm btn-info"  data-toggle="modal" data-target="#detail-Modal"><i class="fa fa-info"></i></button>

										<a href="{{ url('product/' . $product->id_product . '/edit') }}" class="btn btn-mat btn-sm btn-success"><i class="fa fa-pencil"></i></a>

										<form method="post" action="{{ url('product/' . $product->id_product . '/delete') }}" class="d-inline">
											@csrf
											@method('delete')
											<button type="submit" onclick="confirm('Yakin?')" class="btn btn-mat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
										</form>
									</div>
			          </td>
			        </tr>
			       	@endforeach
			      </tbody>
			    </table>
				</div>
			</div>
		</div>
	</div>


<div class="modal fade" id="detail-Modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Product Detail</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
        <label><strong>Guarantee</strong></label><br>
        <label>1 Tahun</label><br>
        <label><strong>Image</strong></label><br>
        <div style="background-color:red; height: 200px; width: 200px">img</div><br>
				<h6><strong>Description</strong></h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

@endsection