@extends('templates/main')

@section('header')
<div class="card">
	<div class="card-block front-icon-breadcrumb row align-items-end">
    <div class="breadcrumb-header col">
      <div class="big-icon">
          <i class="icofont icofont-people"></i>
      </div>
      <div class="d-inline-block">
          <h5>Logging</h5>
          <span>Total semua logging adalah {{$totalloggings}}</span>
      </div>
    </div>
    <div class="col">
      <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><label>Other</label>
            </li>
            <li class="breadcrumb-item"><label>loggings</label>
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
			<div class="card-block">
			  <div class="dt-responsive table-responsive">
			    <table id="data-table" class="table table-striped table-bordered table-hover">
			      <thead class="table-inverse">
			        <tr>
			          <th><i class="icofont icofont-user"></i> Aksi</th>
			          <th><i class="icofont icofont-clock"></i>  Waktu</th>
			        </tr>
			      </thead>
			      <tbody>
			      	@foreach($loggings as $logging)
			        <tr>
			          <td>{{ $logging['statement'] }}</td>
			          <td>{{ $logging['time'] }}</td>
			        </tr>
			        <div class="modal" id="modalDelete{{$logging->id_logging}}" tabindex="-1" role="dialog">
							<div class="modal-dialog bounceIn animated modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-body mx-auto">
										<h4 class="">Delete this data?</h4><br>
										<form method="post" action="{{ url('logging/' . $logging->id_logging . '/delete') }}" class="d-inline">
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