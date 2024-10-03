@extends('layout')

@section('content')
<div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/images/hero_1.jpg') }})">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
                <h1 class="mb-2">About Us</h1>
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
        <div class="row align-items-stretch">
            <div class="col-lg-6">
            <div style="background-color: #7a1c27" class="h-100 p-5">
                <div class="row">
                <div class="col-md-6 text-center mb-4">
                    <div class="service-38201">
                    <span class="flaticon-calculator"></span>
                    <h3>Experience & Expertise</h3>
                    </div>
                </div>
                <div class="col-md-6 text-center mb-4">
                    <div class="service-38201">
                    <span class="flaticon-house-2"></span>
                    <h3>Customer-centric Approach</h3>
                    </div>
                </div>
                <br>
                <div class="col-md-6 text-center mb-4">
                    <div class="service-38201">
                    <span class="flaticon-house-1"></span>
                    <h3>Innovative & Sustainable Practises</h3>
                    </div>
                </div>
                <div class="col-md-6 text-center mb-4">
                    <div class="service-38201">
                    <span class="flaticon-key"></span>
                    <h3>Strong Safety & Quality Standards</h3>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-5 ml-auto">
            <h3 class="heading-29201">About Us</h3>

            <p class="mb-5">A reputable organisation for all your house design and planning.</p>

            <div class="service-39290 d-flex align-items-start mb-5">
                <div class="media-icon mr-4">
                <span class="flaticon-house-1"></span>
                </div>
                <div class="text">
                <h3>Mission</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo rem sit dolorem saepe ex voluptatum nam nulla et!</p>
                </div>
            </div>

            <div class="service-39290 d-flex align-items-start mb-5">
                <div class="media-icon  mr-4">
                <span class="flaticon-calculator"></span>
                </div>
                <div class="text">
                <h3>Vision</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo rem sit dolorem saepe ex voluptatum nam nulla et!</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
