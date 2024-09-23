<!doctype html>
<html lang="en">

  <head>
    <title>Vakai - Real Estate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="/">Vakai</a>
              </div>
            </div>

            <div class="col-9  text-right">


              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-white"></span></a></span>



              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                  <li><a href="#" class="nav-link">Shop</a></li>
                  <li class="{{ request()->routeIs('plans.index') || request()->routeIs('plans.show') ? 'active' : '' }} nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="plansDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Plans
                    </a>
                    <div class="dropdown-menu" aria-labelledby="plansDropdown">
                      <a class="dropdown-item" href="{{ route('plans.index') }}">All Plans</a>
                      @foreach ($plan_types as $type)
                      <a class="dropdown-item" href="{{ route('plans.show', $type->id) }}">{{ $type->name }}</a>
                      @endforeach

                    </div>
                  </li>
                  <!--<li><a href="agents.html" class="nav-link">Agents</a></li>
                  <li><a href="property.html" class="nav-link">Property</a></li>
                  <li><a href="about.html" class="nav-link">About</a></li>
                  <li><a href="blog.html" class="nav-link">Blog</a></li>-->
                  <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                  <li class="{{ request()->routeIs('feedback') ? 'active' : '' }}"><a href="{{ route('feedback') }}" class="nav-link">Feedback & Suggestions</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>

      </header>

    {{-- content here --}}
    @yield('content')

{{-- footer --}}
<footer style="padding-bottom: 15px;" class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-white h5 mb-3">Address</h5>
          <p>address</p>
          <h5 class="text-white h5 mb-3">Phone</h5>
          <p>phone</p>
          <h5 class="text-white h5 mb-3">Email</h5>
          <p>address</p>
        </div>
        <div class="col-md-3 ml-auto">
          <h3 class="text-white h5 mb-3">Useful Links</h3>
          <ul class="list-unstyled menu-arrow">
            <li><a href="/">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="{{ route('plans.index') }}">Plans</a></li>
            <li><a href="{{ route('feedback') }}">Feedback & Suggestions</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li><a href="{{ route('admin.login') }}">Admin</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="text-white h5 mb-3">About</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolores deserunt, obcaecati fuga quo. Autem explicabo sapiente, maiores.</p>
        </div>
      </div>
      <div class="row mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-3">
            <p style="text-align: center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright Vakai &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a href="https://contessasoft.co.zw" target="_blank" >Contessasoft Pvt</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
          </div>
        </div>

      </div>
    </div>
  </footer>

  </div>

  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.0.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>

  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>

