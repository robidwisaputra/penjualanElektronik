@extends('templates/main')

@section('title', 'service')

@section('content')
<div class="row">
  <div class="col-sm-12">
      <!-- Review service card start -->
      <div class="card">
        <div class="card-header">
          <h5>Review Our service</h5>
        </div>
          @if (session('status'))
          <div class="flash-data" data-flashdata="{{ session('status') }}"></div>
          @endif
        <div class="card-block">
            <div class="j-wrapper j-wrapper-640">
              <form action="{{route('feedback.input')}}" method="post" class="j-pro" id="j-pro" novalidate="">
                @csrf
                <div class="j-content">
                    <!-- start name -->
                    <div class="j-unit">
                      <label class="j-label">Name</label>
                      <div class="j-input">
                        <label class="j-icon-right" for="customer_name">
                            <i class="icofont icofont-user"></i>
                        </label>
                        <input type="text" id="customer_name" name="customer_name" placeholder="e.g. John Doe" class="@error('customer_name') is-invalid @enderror" value="{{$feedback->customer_name}}">
                        @error('customer_name')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <!-- end name -->
                    <!-- start email-->
                    <div class="j-unit">
                      <label class="j-label">Email</label>
                      <div class="j-input">
                        <label class="j-icon-right" for="email">
                            <i class="icofont icofont-envelope"></i>
                        </label>
                        <input type="email" placeholder="email@domain.com" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{$feedback->email}}">
                        @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <!-- end email -->
                    <!-- start message -->
                    <div class="j-unit">
                        <label class="j-label">Review message</label>
                        <div class="j-input">
                            <textarea placeholder="message..." spellcheck="false" name="feedback"></textarea>
                        </div>
                    </div>
                  
                    <!-- end message -->
                    <div class="j-divider j-gap-bottom-25"></div>
                    <!-- start ratings -->
                    <div class="j-unit">
                      <div class="j-rating-group">
                        <label class="j-label">Service quality</label>
                        <div class="j-ratings">
                          <input id="5q" type="radio" name="rating" value="5">
                          <label for="5q">
                            <i class="icofont icofont-star"></i>
                          </label>
                          <input id="4q" type="radio" name="rating" value="4">
                          <label for="4q">
                            <i class="icofont icofont-star"></i>
                          </label>
                          <input id="3q" type="radio" name="rating" value="3">
                          <label for="3q">
                            <i class="icofont icofont-star"></i>
                          </label>
                          <input id="2q" type="radio" name="rating" value="2">
                          <label for="2q">
                            <i class="icofont icofont-star"></i>
                          </label>
                          <input id="1q" type="radio" name="rating" value="1" checked="">
                          <label for="1q">
                            <i class="icofont icofont-star"></i>
                          </label>
                        </div>
                      </div>
                    </div>
                    <!-- end ratings -->
                <!-- start response from server -->
                <div class="j-response"></div>
                <!-- end response from server -->
                </div>
                 <!-- end /.content -->
                <div class="j-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
                <!-- end /.footer -->
              </form>
            </div>
        </div>
      </div>
      <!-- Review Product card end -->
  </div>
</div>