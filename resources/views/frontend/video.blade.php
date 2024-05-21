<div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Videos</h2>
                </div>
            </div>

            <div class="clearfix"></div>
          
    <div class="container social ">
    @forelse($data['_videos'] as $video)
        <div class="row justify-content-around">
            {{-- <div class="col-xl-5 col-12 social-item"> --}}
                <div class="video-thumb wow fadeInUp" data-wow-delay="0.2s">
                   <div class="col-md-6 col-sm-6 social-item" >

                    <video width="400" controls>
                        <source src="{{asset('videos/video/'.$video->video)}}" type="video/mp4">


                      </video>
                    {{-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcentralofficeofannfsu%2F&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="auto" height="500" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" scrolling="no" frameborder="0" allowfullscreen=""></iframe> --}}
                </div>

                {{-- <div class="col-md-6 col-sm-6 social-item">

                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcentralofficeofannfsu%2F&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="auto" height="500" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" scrolling="no" frameborder="0" allowfullscreen=""></iframe>
                </div> --}}
            </div>
            @empty
            @endforelse
        </div>
      </div><hr>
