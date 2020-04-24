@extends('templates/main')

@section('title', 'Category')

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
  			<a href="{{ route('add.category') }}" class="btn btn-mat btn-primary"><i class="icofont icofont-plus-square"></i>  Add</a>
  		</div>
			<div class="card-block">
			  <div class="dt-responsive table-responsive">
			    <table id="base-style" class="table table-striped table-bordered nowrap">
			      <thead>
			        <tr>
			          <th>Category</th>
			          <th>Option</th>
			        </tr>
			      </thead>
			      <tbody>
			      	@foreach($categories as $category)
			        <tr>
			          <td>{{ $category->category }}</td>
			          <td>
			          	<div class="icon-btn">
										<a href="{{ url('category/' . $category->id_category . '/edit') }}" class="btn btn-mat btn-sm btn-success"><i class="fa fa-pencil"></i></a>
										<form method="post" action="{{ url('category/' . $category->id_category . '/delete') }}" class="d-inline">
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