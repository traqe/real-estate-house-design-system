@extends('layout')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/images/hero_1.jpg') }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-2">House Design & Planning</h1>
            <p class="text-center mb-5"><span class="home small address d-flex align-items-center justify-content-center"> <span class="wrap-icon icon-home mr-3 text-primary"></span> <span>Design your house using metrics such as:</span></span></p>
              <div class="d-flex media-38289 justify-content-around mb-5">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span> <span>square metres</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>bedrooms</span></div>
                <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>bathrooms</span></div>
              </div>
            <p><a style="background-color: #7a1c27; border: 0" href="{{ route('plans.index') }}" class="btn btn-primary text-white px-4 py-3">Available Plans</a></p>
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

  <div class="site-section block-14 bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <h3 class="heading-29201 text-center text-black">Latest Designs</h3>
          <p class="mb-5 text-white">Here are the latest house designs, get a quote from us</p>
        </div>
      </div>


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

        </div>
      </div>

    </div>


    </div>
  </div>
  <div class="site-section block-14 bg-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <h3 class="heading-29201 text-center text-black">Available Designs</h3>
          <p><em>(click category to view available plans)</em></p>
          <p class="mb-5 text-white">Here are the latest house designs, get a quote from us</p>
        </div>
      </div>

      <div class="container">

        <div class="faq">
            <div class="question">Cottage Plans</div>
            <div class="answer">
                <div class="row">

                    @foreach ($plans_available as $plan)
                    @if($plan->plan_type == 1)
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
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
        <div class="faq">
            <div class="question">Low Budget Plans</div>
            <div class="answer">
                <div class="row">

                    @foreach ($plans_available as $plan)
                    @if($plan->plan_type == 2)
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
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
        <div class="faq">
            <div class="question">Medium Budget Plans</div>
            <div class="answer">
                <div class="row">

                    @foreach ($plans_available as $plan)
                    @if($plan->plan_type == 3)
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
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
        <div class="faq">
            <div class="question">High Budget Plans</div>
            <div class="answer">
                <div class="row">

                    @foreach ($plans_available as $plan)
                    @if($plan->plan_type == 4)
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
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
        <div class="faq">
            <div class="question">Double Story Plans</div>
            <div class="answer">
                <div class="row">

                    @foreach ($plans_available as $plan)
                    @if($plan->plan_type == 5)
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
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
      </div>

    </div>


    </div>
  </div>
  <div style="text-align: center;" class="mb-5">
    <a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn btn-primary text-white">Request For Quotation</a>
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
            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>
            <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <select class="form-control mb-3" name="plan_id" id="plan_id" required>
                @foreach ($plans as $plan_option)
                <option value="{{ $plan->id }}">{{ $plan->area }} sq mtr - {{ $plan->bedrooms }} beds -  {{ $plan->bathrooms }} baths</option>
                @endforeach
            </select>
            <textarea class="form-control mb-3" name="description" id="plan_description" placeholder="description" cols="52" rows="3"></textarea>
         </div>
         <div class="modal-footer">
         <button type="submit" style="color: white" type="button" class="btn btn-primary">Submit</button>
         </div>
        </form>
      </div>
    </div>
  </div>
  {{-- <div class="site-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center">
          <h3 class="heading-29201 text-center">Our Agents</h3>

          <p class="mb-5">Perspiciatis quidem, harum provident, repellat sint officia quos fugit tempora id deleniti.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="person-29381">
            <div class="media-39912">
              <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <h3><a href="#">Josh Long</a></h3>
            <span class="meta d-block mb-4">4 Properties</span>
            <div class="social-32913">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="person-29381">
            <div class="media-39912">
              <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <h3><a href="#">Melinda David</a></h3>
            <span class="meta d-block mb-4">10 Properties</span>
            <div class="social-32913">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="person-29381">
            <div class="media-39912">
              <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <h3><a href="#">Jessica Soft</a></h3>
            <span class="meta d-block mb-4">18 Properties</span>
            <div class="social-32913">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section bg-primary">
    <div class="container block-13">
      <div class="nonloop-block-13 owl-carousel">
        <div class="testimonial-38920 d-flex align-items-start">
          <div class="pic mr-4"><img src="{{ asset('assets/images/person_1.jpg') }}" alt=""></div>
          <div>
            <span class="meta">Business Man</span>
            <h3 class="mb-4">Josh Long</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic quos nihil nulla veritatis!</p>
            <div class="mt-4">
              <span class="icon-star text-white"></span>
              <span class="icon-star text-white"></span>
              <span class="icon-star text-white"></span>
              <span class="icon-star text-white"></span>
            </div>
          </div>
        </div>

        <div class="testimonial-38920 d-flex align-items-start">
          <div class="pic mr-4"><img src="{{ asset('assets/images/person_2.jpg') }}" alt=""></div>
          <div>
            <span class="meta">Business Woman</span>
            <h3 class="mb-4">Jean Doe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic quos nihil nulla veritatis!</p>
            <div class="mt-4">
              <span class="icon-star text-white"></span>
              <span class="icon-star text-white"></span>
              <span class="icon-star text-white"></span>
              <span class="icon-star text-white"></span>
            </div>
          </div>
        </div>

        <div class="testimonial-38920 d-flex align-items-start">
          <div class="pic mr-4"><img src="{{ asset('assets/images/person_3.jpg') }}" alt=""></div>
          <div>
            <span class="meta">Business Woman</span>
            <h3 class="mb-4">Jean Doe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic quos nihil nulla veritatis!</p>
            <div class="mt-4">
              <span class="icon-star text-white"></span>
              <span class="icon-star text-white"></span>
              <span class="icon-star text-white"></span>
              <span class="icon-star text-white"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section bg-light">
    <div class="container">

      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center">
          <h3 class="heading-29201 text-center">Blog Posts</h3>

          <p class="mb-5">Perspiciatis quidem, harum provident, repellat sint officia quos fugit tempora id deleniti.</p>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html">
              <img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image"
               class="img-fluid">
            </a>
            <div class="post-entry-1-contents">

              <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
              <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html">
              <img src="{{ asset('assets/images/img_2.jpg') }}" alt="Image"
               class="img-fluid">
            </a>
            <div class="post-entry-1-contents">

              <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
              <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html">
              <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image"
               class="img-fluid">
            </a>
            <div class="post-entry-1-contents">

              <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
              <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div> --}}
@endsection
