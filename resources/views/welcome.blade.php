

@extends('frontend.layout.master')
@section('content')

<!-- HOME -->
@include('frontend.layout.slider')
{{-- Step To take  Order --}}
@include('frontend.layout.steptoorder')
</div>
</div>
<!-- ABOUT -->
@include('frontend.layout.about')
<!-- NEWS -->
@include('frontend.layout.news')
<!-- GOOGLE MAP -->
@include('frontend.layout.map')

@endsection


