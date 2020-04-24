@extends('templates/main')

@section('title', 'Brand')

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
  			<a href="{{ route('add.brand') }}" class="btn btn-mat btn-primary"><i class="icofont icofont-plus-square"></i>  Add</a>
  		</div>
			<div class="card-block">
			  <div class="dt-responsive table-responsive">
			    <table id="base-style" class="table table-striped table-bordered nowrap">
			      <thead>
			        <tr>
			          <th>Brand</th>
			          <th>Option</th>
			        </tr>
			      </thead>
			      <tbody>
			      	@foreach($brands as $brand)
			        <tr>
			          <td>{{ $brand->brand }}</td>
			          <td>
			          	<div class="icon-btn">
										<a href="{{ url('brand/' . $brand->id_brand . '/edit') }}" class="btn btn-mat btn-sm btn-success"><i class="fa fa-pencil"></i></a>
										<form method="post" action="{{ url('brand/' . $brand->id_brand . '/delete') }}" class="d-inline">
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
@endsection