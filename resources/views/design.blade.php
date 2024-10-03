@extends('layout')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/images/hero_1.jpg') }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-2">Design & Construction</h1>
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

  <div class="site-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <div class="design-image">
                <img style="height: 300px; width: auto;" src="{{ asset('assets/images/design.jpeg') }}" alt="design_image">
            </div>
            <div>
                <p class="mt-5"><a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn btn-primary text-white">Get A Quote</a></p>
            </div>
        </div>
        <div style="text-align: justify" class="p-5 col-md-6">
            <p>
                At Vakai Zimbabwe, we excel in crafting custom house plans and designs tailored to your unique needs and preferences. Our design process begins with an in-depth consultation to understand your vision and requirements. We then develop initial concepts and 3D models, allowing you to visualize your future home in detail. Our team ensures that every design is practical, sustainable, and aesthetically pleasing, reflecting your personality and lifestyle.
            <br>
                During the construction phase, we meticulously plan and manage every aspect of the project. From site preparation to the final touches, our skilled craftsmen and contractors use high-quality materials and the latest techniques to bring your dream home to life. Regular inspections and quality control checks ensure that the construction meets our high standards and complies with all regulations. We are committed to delivering a home that exceeds your expectations, on time and within budget.
            </p>
        </div>
      </div>
    </div>
  </div>
  <!--modal-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get Design & Construction Quotation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('postDesign') }}" method="post">
         @csrf
         <h5></h5>
         <div class="modal-body p-4">
            <input type="text" name="plan_id" value="design" hidden>
            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>
            <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <textarea class="form-control mb-3" name="description" id="description_textarea" cols="52" placeholder="description" rows="5"></textarea>
         </div>
         <div class="modal-footer">
         <button type="submit" style="color: white" type="button" class="btn btn-primary">Submit</button>
         </div>
        </form>
      </div>
    </div>
  </div>
  {{-- end modal --}}
@endsection
