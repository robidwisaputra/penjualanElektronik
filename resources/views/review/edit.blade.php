@extends('templates/main')

@section('title', 'Review')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <!-- Basic Inputs Validation start -->
    <div class="card">
      <div class="card-header">
        <h3>Edit review</h3>
      </div>
      <div class="card-block">
        <form id="main" method="post" action="{{ url('review/' . $review->id_review . '/edit') }}">
          @csrf
          @method('patch')
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email"  autocomplete="off" value="{{ $review->email }}">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-8">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" autocomplete="off" value="{{ $review->phone }}">
                @error('phone')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" autocomplete="off" value="{{ $review->name }}">
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ulasan</label>
            <div class="col-sm-8">
                <textarea rows="4" cols="5" class="form-control @error('review') is-invalid @enderror" name="review">{{ $review->review }}</textarea>
                @error('review')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Saran</label>
            <div class="col-sm-8">
                <textarea rows="4" cols="5" class="form-control @error('feedback') is-invalid @enderror" name="feedback">{{ $review->feedback }}</textarea>
                @error('feedback')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2"></label>
            <div class="col-sm-8">
              <button type="submit" class="btn btn-primary m-b-0">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection