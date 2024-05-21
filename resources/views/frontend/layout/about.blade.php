<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">About AGRI</h2>
                </div>
            </div>
            <div class="clearfix"></div>
            @forelse($data['_aboutus'] as $aboutuses)
            <div class="col-md-5 col-sm-6">
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                    <!-- <img src="{{asset('front/images/2.jpg')}}" height="250px" width="100%"> -->
                    <img src="{{asset('images/aboutus')}}/{{$aboutuses->image}}" class="img-responsive" alt="">
                    </div>
                </div>
          

                <div class="col-md-7 col-sm-6">
                   <div class="about-inform">
                    <h4 class="wow fadeInUp" data-wow-delay="0.6s"></h4>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                       <h5>{{$aboutuses->description}}    
                    </h5>
                    </div>
                </div>
                @empty
            @endforelse
            </div>
        </div>
</section>

<hr>
