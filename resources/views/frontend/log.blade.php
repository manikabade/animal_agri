@extends('frontend.layout.master')
@section('content')
<section id="log">
 <div class="container">
    <div class="row">
        <!-- <div class="col-md-6 col-sm-6"> -->
        <div class="col-md-9 col-sm-9">
                <!-- CONTACT FORM HERE -->
                <form id="reg-form" role="form" method="post" action="{{route('log.store')}}">
                    @csrf
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                          <h2>Welcome to Agriculture! Please Login</h2>
                           <h5>New Member? Then please <a href="{{route('reg')}}">  Register here</a>.</h5>
                       </div>

                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
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
