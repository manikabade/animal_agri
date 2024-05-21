
<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.head')
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

@include('sweetalert::alert')

<!-- PRE LOADER -->
{{--<section class="preloader">--}}
{{--    <div class="spinner">--}}

{{--        <span class="spinner-rotate"></span>--}}

{{--    </div>--}}
{{--</section>--}}


<!-- HEADER -->
@include('frontend.layout.header')

<!-- MENU -->
@include('frontend.layout.nav')

@yield('content')


        </div>
    </div>

</div>
<!-- FOOTER -->
@include('frontend.layout.footer')

<!-- SCRIPTS -->
@include('frontend.layout.script')
</body>
</html>