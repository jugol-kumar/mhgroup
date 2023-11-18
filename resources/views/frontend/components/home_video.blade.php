
@forelse($videos as $video)
<div>
    <div class="video_frincybox">
        <a href="{{ $video->video_link }}" data-fancybox="video-gallery">
            <img alt="" class="w-100 h-100" src="{{  '/storage/'.$video->thumbnail }}">
            <div class="play_icon">
                <i class="fas fa-play-circle"></i>
            </div>
        </a>
    </div>

    <div class="video_content">
        <h1>{{ $video->title }}</h1>
        @if($video->button_name)
            <a class="button" href="{{ $video->link }}">{{ $video->button_name }}</a>
        @endif
    </div>
</div>
@empty
@endforelse

<div class="row">
    @forelse($halfVideos as $video)
        <div class="col-md-6 m-0 p-0 bg-black">
            <div class="video_frincybox">
                <a href="{{ $video->video_link }}" data-fancybox="video-gallery">
                    <img alt="" class="w-100 h-100" src="{{  '/storage/'.$video->thumbnail }}">
                    <div class="play_icon">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </a>
            </div>

            <div class="video_content">
                <h1>{{ $video->title }}</h1>
                @if($video->button_name)
                    <a class="button" href="{{ $video->link }}">{{ $video->button_name }}</a>
                @endif
            </div>
        </div>
    @empty
    @endforelse

</div>

{{--
<div class="my-2 bg-black">
    <div class="container py-5 video-section">
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                <iframe class="w-100" height="300" src="https://www.youtube.com/embed/iG5wgE-vuBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
                <iframe class="w-100" height="300" src="https://www.youtube.com/embed/iG5wgE-vuBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="3000">
                <iframe class="w-100" height="300" src="https://www.youtube.com/embed/iG5wgE-vuBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                <iframe class="w-100" height="300" src="https://www.youtube.com/embed/iG5wgE-vuBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
                <iframe class="w-100" height="300" src="https://www.youtube.com/embed/iG5wgE-vuBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="3000">
                <iframe class="w-100" height="300" src="https://www.youtube.com/embed/iG5wgE-vuBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
--}}

