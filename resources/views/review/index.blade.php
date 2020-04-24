@extends('templates/main')

@section('header')
<div class="card">
	<div class="card-block front-icon-breadcrumb row align-items-end">
    <div class="breadcrumb-header col">
      <div class="big-icon">
          <i class="icofont icofont-people"></i>
      </div>
      <div class="d-inline-block">
          <h5>Ulasan</h5>
          <span>Total semua ulasan adalah {{$totalreviews}}</span>
      </div>
    </div>
    <div class="col">
      <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><label>Other</label>
            </li>
            <li class="breadcrumb-item"><label>Reviews</label>
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
			          <th><i class="icofont icofont-email"></i> Email</th>
			          <th><i class="icofont icofont-phone"></i>  No Hp</th>
			          <th><i class="icofont icofont-user"></i> Nama</th>
			          <th><i class="icofont icofont-phone"></i> Isi Keluhan</th>
			          <th><i class="icofont icofont-calendar"></i> Tanggal</th>
			          <th><i class="icofont icofont-phone"></i> Saran</th>
			          <th><i class="icofont icofont-options"></i> Aksi</th>
			        </tr>
			      </thead>
			      <tbody>
			      	@foreach($reviews as $review)
			        <tr>
			          <td>{{ $review['email'] }}</td>
			          <td>{{ $review['phone'] }}</td>
			          <td>{{ $review['name'] }}</td>
			          <td>{{ $review['review'] }}</td>
			          <td>{{ $review['date'] }}</td>
			          <td>{{ $review['feedback'] }}</td>
			          <td>
			          	<div class="icon-btn">
			          		<span data-toggle="tooltip" data-placement="top" title="Edit">
											<a href="{{ url('review/' . $review->id_review . '/edit') }}" class="btn btn-mat btn-sm btn-success waves-effect"><i class="fa fa-pencil"></i></a>
										</span>
										<span  data-toggle="tooltip" data-placement="top" title="Delete">
										<button type="button" class="btn btn-mat btn-sm btn-danger waves-effect" data-toggle="modal" data-target="#modalDelete{{$review->id_review}}"><i class="fa fa-trash"></i></button>
										</span>
									</div>
			          </td>
			        </tr>
			        <div class="modal" id="modalDelete{{$review->id_review}}" tabindex="-1" role="dialog">
							<div class="modal-dialog bounceIn animated modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-body mx-auto">
										<h4 class="">Delete this data?</h4><br>
										<form method="post" action="{{ url('review/' . $review->id_review . '/delete') }}" class="d-inline">
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