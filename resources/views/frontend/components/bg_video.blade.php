<div class="banner">
    <div class="videocontainer">
        <video class="videoembed" autoplay muted loop>
            <source src="{{ asset('assets/frontend/video/video.mp4') }}" type="video/mp4">
        </video>

        <div class="banner-title">
            <h1> {{ get_setting('home_video_content') ?? "You can place a title over the video like this..." }}</h1>
        </div>

    </div>
</div>
<style>
    .banner {
        position: relative;
        padding-bottom: 56.2%;
        width: 100%;
        overflow: hidden;
    }

    .videoembed {
        position: absolute;
        top: 0;
        /*z-index: -99; */
        width: 100%;
        height: 100%;
        background: #333;
    }

    /* If you want to include the title... */
    .banner-title {
        position: absolute;
        width: 100%;
        bottom: 0;
        background: rgba(0,0,0,0.5);
        padding: 20px 40px;
        text-align: center;
        box-sizing:border-box;
    }

    .banner-title h1 {
        color: #fff;
        font-size: 1.2rem;
        font-family: Arial, sans-serif;
        font-weight: normal;
    }
    /* small calption - optional */
    .caption {
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-style:italic;
    }
</style>