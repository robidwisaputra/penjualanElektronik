@extends('templates/main')

@section('title', 'Review')

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
			<div class="card-block">
			  <div class="dt-responsive table-responsive">
			    <table id="base-style" class="table table-striped table-bordered nowrap">
			      <thead>
			        <tr>
			          <th>Name</th>
			          <th>Email</th>
			          <th>Feedback</th>
			          <th>Rating</th>
			          <th>Option</th>
			        </tr>
			      </thead>
			      <tbody>
			      	@foreach($feedbacks as $feedback)
			        <tr>
			          <td>{{ $feedback->customer_name }}</td>
			          <td>{{ $feedback->email }}</td>
			          <td>{{ $feedback->feedback }}</td>
			          <td>{{ $feedback->rating }}</td>
			          <td>
			          	<div class="icon-btn">
			          		<a href="{{ url('feedback/' . $feedback->id_feedback . '/edit') }}" class="btn btn-mat btn-sm btn-success"><i class="fa fa-pencil"></i></a>
										

										<form method="post" action="{{ url('feedback/' . $feedback->id_feedback . '/delete') }}" class="d-inline">
											@csrf
											@method('delete')
											<button type="submit" onclick="return confirm('Yakin?')" class="btn btn-mat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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