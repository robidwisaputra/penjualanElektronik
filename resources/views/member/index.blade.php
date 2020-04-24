@extends('templates/main')

@section('header')
<div class="card">
	<div class="card-block front-icon-breadcrumb row align-items-end">
    <div class="breadcrumb-header col">
      <div class="big-icon">
          <i class="icofont icofont-people"></i>
      </div>
      <div class="d-inline-block">
          <h5>Members</h5>
          <span>The total members are {{$totalmembers}}</span>
      </div>
    </div>
    <div class="col">
      <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><label>Master</label>
            </li>
            <li class="breadcrumb-item"><label>Members</label>
            </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
  <div class="col-xl-12 col-md-12">
	@if (session('status'))
	<div class="flash-data" data-flashdata="{{ session('status') }}"></div>
	@endif
  	<div class="card">
  		<div class="card-header">
  			<a href="{{ route('add.member') }}" class="btn btn-mat btn-info"><i class="icofont icofont-plus-square"></i>  Add</a>
  		</div>
			<div class="card-block">
			  <div class="dt-responsive table-responsive">
			    <table id="data-table" class="table table-striped table-bordered table-hover">
			      <thead class="table-inverse">
			        <tr>
			          <th><i class="icofont icofont-user"></i> Name</th>
			          <th><i class="icofont icofont-users-alt-4"></i>  Gender</th>
			          <th><i class="icofont icofont-home"></i> Address</th>
			          <th><i class="icofont icofont-phone"></i> Phone</th>
			          <th><i class="icofont icofont-email"></i> Email</th>
			          <th><i class="icofont icofont-options"></i> Action</th>
			        </tr>
			      </thead>
			      <tbody>
			      	@foreach($members as $member)
			        <tr>
			          <td>{{ $member->name }}</td>
			          <td>{{ $member->gender}}</td>
			          <td>{{ $member->address }}</td>
			          <td>{{ $member->phone }}</td>
			          <td>{{ $member->email }}</td>
			          <td>
			          	<div class="icon-btn">
			          		<span data-toggle="tooltip" data-placement="top" title="Edit">
											<a href="{{ url('member/' . $member->id_member . '/edit') }}" class="btn btn-mat btn-sm btn-success waves-effect"><i class="fa fa-pencil"></i></a>
										</span>
										<span  data-toggle="tooltip" data-placement="top" title="Delete">
										<button type="button" class="btn btn-mat btn-sm btn-danger waves-effect" data-toggle="modal" data-target="#modalDelete{{$member->id_member}}"><i class="fa fa-trash"></i></button>
										</span>
									</div>
			          </td>
			        </tr>
			        <div class="modal" id="modalDelete{{$member->id_member}}" tabindex="-1" role="dialog">
							<div class="modal-dialog bounceIn animated modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-body mx-auto">
										<h4 class="">Delete this data?</h4><br>
										<form method="post" action="{{ url('member/' . $member->id_member . '/delete') }}" class="d-inline">
											@csrf
											@method('delete')
											<button type="sumbit" class="btn btn-danger waves-effect">Confirm</button>
										</form>
										<button type="button" class="btn btn-success waves-effect " data-dismiss="modal">Cancel</button>
									</div>
								</div>
							</div>
						</div>
						@endforeach
			      </tbody>
			    </table>
				</div>
			</div>
		</div>
	</div>
@endsection