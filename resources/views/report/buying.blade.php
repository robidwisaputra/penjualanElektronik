@extends('templates/main')

@section('header')
<div class="card">
	<div class="card-block front-icon-breadcrumb row align-items-end">
    <div class="breadcrumb-header col">
      <div class="big-icon">
          <i class="icofont icofont-tasks"></i>
      </div>
      <div class="d-inline-block">
          <h5>Selling</h5>
          <span>The total selling are {{$totalBuying}}</span>
      </div>
    </div>
    <div class="col">
      <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><label>Report</label>
            </li>
            <li class="breadcrumb-item"><label>Buying</label>
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
  			<button type="button" class="btn btn-mat btn-info" data-toggle="modal" data-target="#export-Modal"><i class="icofont icofont-upload"></i> Export</button>
  		</div>
			<div class="card-block">
			  <div class="dt-responsive table-responsive">
			    <table id="data-table" class="table table-striped table-bordered table-hover nowrap">
			      <thead class="table-inverse">
			        <tr>
			        	<th><i class="icofont icofont-calendar"></i> Date</th>
			          <th><i class="icofont icofont-user"></i> Employee</th>
			          <th><i class="icofont icofont-building-alt"></i> Supplier</th>
                <th><i class="icofont icofont-bag"></i> Product</th>
                <th><i class="icofont icofont-calculator-alt-2"></i> Quantity</th>
                <th><i class="icofont icofont-money"></i> Total</th>
			        </tr>
			      </thead>
			      <tbody>
			      	@foreach($buying as $row)
			        <tr>
			          <td>{{ $row->date }}</td>
			          <td>{{ $row->employee->name}}</td>
			          <td>{{ $row->supplier->name }}</td>
                <td>{{ $row->product->name }}</td>
                <td>{{ $row->quantity }}</td>
                <td>{{ $row->total }}</td>
			        </tr>
						@endforeach
			      </tbody>
			    </table>
				</div>
			</div>
		</div>
	</div>

<div class="modal fade" id="export-Modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title  mx-auto">Export Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-5 ml-4">
        		<a href="{{route('buying.excel')}}" class="btn btn-success"><i class="icofont icofont-spreadsheet"></i> Excel</a>
        	</div>
        	
        	<div class="col-sm-5">
  	      	<button class="btn btn-warning"><i class="icofont icofont-print"></i> PDF </button>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection