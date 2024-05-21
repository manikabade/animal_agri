@extends('frontend.layout.master')
@section('content')
<section id="reg">
    <div class="container">
        <div class="row">
        <div class="col-md-9 col-sm-9">
                <!-- CONTACT FORM HERE -->
                <form id="reg-form" role="form" method="post" action="{{route('reg.store')}}">
                    @csrf
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                          <h2>Create your Agriculture Account</h2>
                           <h5>Already have an account? Then please<a href="{{route('log')}}">  login here</a>.</h5>
                       </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label for="contact_number">Contact Number</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>
                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection