@extends('templates.main')

@section('header')
<div class="card">
	<div class="card-block front-icon-breadcrumb row align-items-end">
    <div class="breadcrumb-header col">
      <div class="big-icon">
          <i class="icofont icofont-home"></i>
      </div>
      <div class="d-inline-block">
          <h5>Home</h5>
          <span>Welcome</span>
      </div>
    </div>
    <div class="col">
      <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="row">
	<!-- visitors  start -->
  <div class="col-sm-3">
    <a href="{{url('product')}}">
      <div class="card bg-c-blue text-white widget-visitor-card">
          <div class="card-block-small text-center">
              <h2>{{$product}}</h2>
              <h6>Products</h6>
              <i class="feather icon-package"></i>
          </div>
      </div>
    </a>
  </div>
  <div class="col-sm-3">
    <a href="{{url('member')}}">
      <div class="card bg-c-pink text-white widget-visitor-card">
          <div class="card-block-small text-center">
              <h2>{{$member}}</h2>
              <h6>Members</h6>
              <i class="feather icon-users"></i>
          </div>
      </div>
    </a>
  </div>
  <div class="col-sm-3">
    <a href="{{url('buying')}}">
      <div class="card bg-c-green text-white widget-visitor-card">
          <div class="card-block-small text-center">
              <h2>5</h2>
              <h6>Buying</h6>
              <i class="feather icon-shopping-cart"></i>
          </div>
      </div>
    </a>
  </div>
  <div class="col-sm-3">
    <a href="{{url('selling')}}">
      <div class="card bg-c-yellow text-white widget-visitor-card">
          <div class="card-block-small text-center">
              <h2>{{$selling}}</h2>
              <h6>Selling</h6>
              <i class="feather icon-credit-card"></i>
          </div>
      </div>
    </a>
  </div>
  <!-- visitors  end -->
</div>
@endsection
