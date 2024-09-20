@extends('layout')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/images/hero_1.jpg') }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-2">Feedback & Suggestions</h1>
            <p class="text-white">We value accountability & responsibility. If you have anything share you are free to do</p>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row justify-content-center text-center">
      <div class="col-7 text-center mb-5">
        <h2>Feedback & Suggestions</h2>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-8 mb-5" >
          <form action="#" method="post">
            <div class="form-group row">
              <div class="col-md-6 mb-4 mb-lg-0">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Email address">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 mr-auto">
                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Feedback">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
