@extends('templates/main')

@section('title', 'Employee')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <!-- Basic Inputs Validation start -->
    <div class="card">
      <div class="card-header">
        <h3>Edit employee</h3>
      </div>
      <div class="card-block">
        <form id="main" method="post" action="{{ url('employee/' . $employee->id_employee . '/edit') }}">
          @csrf
          @method('patch')
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name"  autocomplete="off" value="{{ $employee->name }}">
            </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gender" id="gender-1" value="Male" @if($employee->gender == 'Male') {{'checked'}} @endif> Male
                </label>
              </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" id="gender-2" value="Female" @if($employee->gender == 'Female') {{'checked'}} @endif> Female
                  </label>
                </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" id="phone" autocomplete="off" value="{{ $employee->phone }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="address" id="address" autocomplete="off" value="{{ $employee->address }}">
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