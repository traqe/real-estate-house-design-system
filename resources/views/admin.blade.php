@extends('layout')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/images/hero_1.jpg') }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-2">Add A New House Plan</h1>
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
  <div class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row justify-content-center text-center">
      <div class="col-7 text-center mb-5">
        <h2>New Plan</h2>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-8 mb-5" >
          <form action="{{ route('admin_plan') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <div class="col-md-6 mb-4 mb-lg-0">
                <input type="text" class="form-control" name="area" placeholder="Area (square metres sqm2)" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="bedrooms" placeholder="Number of bedrooms" required>
              </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="bathrooms" placeholder="Number of bathrooms" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="garages" placeholder="Number of garages" required>
                </div>
            </div>

            <div class="form group row mb-3 col-md-8">
                <label for="exampleFormControlSelect1" class="form-label">Plan Type</label>
                <select class="form-select form-control" name="plan_type" id="exampleFormControlSelect1">
                    <option value="{{ $plan_types[0]->id }}" selected>{{ $plan_types[0]->name }}</option>
                    @foreach($plan_types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <textarea class="form-control" placeholder="Description of Plan" name="description" id="" cols="50" rows="6" required></textarea>

            <br>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="imageUpload">Select an image:</label>
                <br>
                <input type="file" id="image" name="image" accept="image/*">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <div class="col-md-6 mr-auto">
                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Add Plan">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 ml-auto">
          <div class="bg-white p-3 p-md-5">
            <h3 class="text-black mb-4"> Add New Plan</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block mb-3">
                <span style="color: #000080">Here you can add a new plan/design in your category of choice</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
