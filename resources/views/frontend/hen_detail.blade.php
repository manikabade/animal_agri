@extends('frontend.layout.master')
@section('content')
<section id="items-detail" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Item Detail</h2>
                </div>
            </div>
            <div class="clearfix"></div>
              <div class="col-md-5 col-sm-6">
                   <div class="news-sidebar">
                        <div class="news-author">
                            <img src="{{asset('images/hen/'.$hen->image)}}" class="img-responsive" alt="" height="200px" width="500px">
                        </div>
                   </div>
              </div>
              <div class="col-md-7 col-sm-6">
                   <!-- NEWS THUMB -->
                   <div class="news-detail-thumb">
                       <h3>Description About The Item</h3>
                        <h5>{{$hen->description}}</h5><br>
                   </div>
                   </div>
              </div>



         </div>
    </div><br><br><br>
</section>

@endsection
