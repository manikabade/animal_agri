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

            <!-- @forelse($data['_items'] as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('item.detail', $item->id) }}">
                        <img src="{{asset('images/item/'.$item->image)}}" class="img-responsive" alt="" height="50px" width="500px">
                       
                        <div class="team-info">
                            <h3>{{$item->item_name}}</h3><br>
                            <p>{{$item->rupees}}</p>
                            <p>Quantity: {{$item->quantity}}</p>
                            <div class="team-contact-info">
                                <h5>{{$item->description}}</h5><br>
                               
                            </div>
                            
                        </div>
                        </a>
                    </div>

                </div>

                @empty
            @endforelse -->

        </div>
    </div>
</section>
@endsection
