@extends('layout')

@section('content')

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/images/hero_1.jpg') }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-2">Get In Touch</h1>
            <p class="text-white">Wish to know more about us or request our service? Kindly contact us</p>
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
        <h2>Contact Us</h2>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-8 mb-5" >
          <form action="{{ route('postContact') }}" method="post">
            @csrf
            <div class="form-group row">
              <div class="col-md-6 mb-4 mb-lg-0">
                <input type="text" name="first" class="form-control" placeholder="First name">
              </div>
              <div class="col-md-6">
                <input type="text" name="last" class="form-control" placeholder="Last name">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <input type="text" name="email" class="form-control" placeholder="Email address">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 mr-auto">
                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 ml-auto">
          <div class="bg-white p-3 p-md-5">
            <h3 class="text-black mb-4">Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block mb-3">
                <span class="d-block text-black">Address:</span>
                <span>34 Street Name, City Name Here, United States</span></li>
              <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
              <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
