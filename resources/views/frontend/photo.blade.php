@extends('frontend.layout.master')
@section('content')
<section id="gallery" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Photos</h2>
                </div>
            </div>
            <div class="clearfix"></div>
    <!-- -----photo----- -->
      <div class="container-fluid photo">
        <div class="row justify-content-center">
            @forelse($data['_photos'] as $photo)
            <div class="col-lg-3 col-sm-5 photo-item">
                <div class="row">
                    <div class="col-12">
                        <div class="photo-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('images/photo')}}/{{$photo->image}}" class="img-responsive" alt="" width="100%" height="200px">
                    </div>
                </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
      </div>
      <!-------Photo------->
        </div>
    </div>  
        </section>
@endsection

