<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="index.html" class="navbar-brand" href="#"><img src="{{asset('front/images/goat.png')}}" alt="" height="40px" width="100%"></a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
{{--                @php--}}
{{--                $url =env('APP_URL')--}}
{{--                @endphp--}}
                <li><a href="{{request()->is('/')?"#top":$_url."#top"}}" class="smoothScroll">Home</a></li>
                <li><a href="{{request()->is('/')?"#about":$_url."#about"}}" class="smoothScroll">About Us</a></li>
                <!-- <li><a href="{{request()->is('/')?"#gallery":$_url."#gallery"}}" class="smoothScroll">Gallery</a></li> -->
                <!-- <li><a href="{{request()->is('/')?"#team":$_url."#team"}}"class="smoothScroll">Items</a></li> -->
                <li ><a href={{route('photo')}}>Gallery</a></li>
                <li><a href="{{route('item')}}"class="smoothScroll">Items</a></li>
                <li><a href="{{request()->is('/')?"#news":$_url."#news"}}" class="smoothScroll">News</a></li>
                <li><a href="{{request()->is('/')?"#google-map":$_url."#google-map"}}" class="smoothScroll">Contact</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li ><a href={{route('log')}}>Log In</a></li>  
                <li><a href={{route('reg')}}>Register</a></li>  
             
               
               
            </ul>
        </div>

    </div>
</section>
