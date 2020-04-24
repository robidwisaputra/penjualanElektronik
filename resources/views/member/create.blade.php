@extends('templates/main')

@section('title', 'Member')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <!-- Basic Inputs Validation start -->
    <div class="card">
    	<div class="card-header">
        <h3>Add Member</h3>
      </div>
      <div class="card-block">
        <form id="main" method="post" action="{{ url('member/add') }}">
        	@csrf
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="name"  autocomplete="off" value="{{ old('name') }}">
              @error('name')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
            </div>
						
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <label class="form-check-label">
					      	<input class="form-check-input" type="radio" name="gender" id="gender-1" value="Male" checked="checked"> Male
					      </label>
              </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
										<input class="form-check-input" type="radio" name="gender" id="gender-2" value="Female"> Female
									</label>
                </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" autocomplete="off" value="{{ old('address') }}">
                @error('address')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" autocomplete="off" value="{{ old('phone') }}">
                @error('phone')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autocomplete="off" value="{{ old('email') }}">
                @error('email')
                	<div class="invalid-feedback">{{ $message }}</div>
            		@enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2"></label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary m-b-0">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection