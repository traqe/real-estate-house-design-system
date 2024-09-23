@extends('layout')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/images/hero_1.jpg') }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-2">All Plans</h1>
            <p class="text-white">These are all the plans available for design and planning</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-black">
    <div class="container">

      <div class="row">
        @foreach ($plans as $plan)
        <div class="col-md-4 mb-5">
            <div class="media-38289">
              <a href="{{ route('each.plan', $plan->id) }}" class="d-block"><img src="{{ asset('storage/images/' . $plan->image_url) }}" alt="Image" class="img-fluid"></a>
              <div class="text">
                <div class="d-flex justify-content-between mb-3">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span> <span>{{ $plan->area }} Sq metres.</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>{{ $plan->bedrooms }}</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>{{ $plan->bathrooms }}</span></div>
                </div>
                @foreach ($plan_types as $type)
                    @if($type->id == $plan->plan_type)
                        <span class="home d-block small address d-flex align-items-center"> <span class="wrap-icon icon-home mr-3 text-primary"></span> <span>{{ $type->name }}</span></span>
                    @endif
                @endforeach
              </div>
            </div>
          </div>
        @endforeach
        <div class="col-12 mt-5 text-center pagination-39291">
          <span class="active">1</span>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
        </div>
      </div>
    </div>
  </div>
@endsection
