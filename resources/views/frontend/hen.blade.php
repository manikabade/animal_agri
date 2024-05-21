@extends('frontend.layout.master')
@section('content')
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <!-- <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Items</h2>
                </div>
            </div> -->

            <div class="clearfix"></div>
           
<!-- CATEGORIES -->
@include('frontend.layout.categories')
            @forelse($data['_hens'] as $hen)
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('hen.detail', $hen->id) }}">
                        <img src="{{asset('images/hen/'.$hen->image)}}" class="img-responsive" alt="" height="50px" width="500px">
                       
                        <div class="team-info">
                            <h3>{{$hen->item_name}}</h3><br>
                            <p>{{$hen->rupees}}</p>
                            <p>Quantity: {{$hen->quantity}}</p>
                            <div class="team-contact-info">
                                <h5>{{$hen->description}}</h5><br>
                               
                            </div>
                            
                        </div>
                        </a>
                    </div>

                </div>
                @empty
            @endforelse

        </div>
    </div>
</section>
@endsection
