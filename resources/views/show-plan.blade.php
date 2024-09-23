@extends('layout')

@section('content')
<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/images/hero_2.jpg') }})">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <br>
              <h1 class="mb-2">{{ $plan_type->name }}</h1>
              <p class="text-center mb-5"><span class="small address d-flex align-items-center justify-content-center"> <span class="icon-fullscreen mr-3 text-primary"></span> <span>{{ $plan->area }} Sq Meters</span></span></p>
                <div class="d-flex media-38289 justify-content-around mb-5">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>{{ $plan->bedrooms }}</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>{{ $plan->bathrooms }}</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-car"></span> <span>{{ $plan->garages }}</span></div>
                </div>
              <p>
            @if(session('success'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="img-years">
              <img src="{{ asset('storage/images/' . $plan->image_url) }}" alt="House Image" class="img-fluid">
            </div>
          </div>
          <div class="each-plan col-lg-5 ml-auto pl-lg-5 text-center">
            <h3 class="text-center mb-4">{{ $plan_type->name }}</h3>
            <span class="wrap-icon icon-fullscreen"></span>
            <p>{{ $plan->area }} - square metres</p>
            <span class="wrap-icon icon-bed"></span>
            <p>{{ $plan->bedrooms }} - bedrooms</p>
            <span class="wrap-icon icon-bath"></span>
            <p>{{ $plan->bathrooms }} - bathrooms</p>
            <span class="wrap-icon icon-car"></span>
            <p>{{ $plan->garages }} - garages</p>
            <p class="mt-5"><a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn btn-primary text-white">Get A Quote</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get Quote for plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('postQuote') }}" method="post">
         @csrf
         <h5></h5>
         <div class="modal-body p-4">
            <input type="text" name="plan_id" value="{{ $plan->id }}" hidden>
            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>
            <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
         </div>
         <div class="modal-footer">
         <button type="submit" style="color: white" type="button" class="btn btn-primary">Submit</button>
         </div>
        </form>
      </div>
    </div>
  </div>
@endsection
