@extends('frontend.app')
@section('content')
    <div id="ourstory" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); background-size: cover; background-position: center;">
        <div class="main-content text-white"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            <h1 data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="500"
                class="display-3 text-capitalize shadow-text shadow-text">About us</h1>
            <p class="text-justify text-white"
               data-appear-animation="fadeInLeftShorterPlus"
               data-appear-animation-delay="800" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto blanditiis debitis in magni odit, praesentium quia quis reiciendis velit? Aut distinctio ea, explicabo minima mollitia nihil officia perspiciatis repudiandae similique. Magnam quod, sunt? Amet consequatur culpa deserunt enim ipsa laborum neque, nihil non officia quam quisquam repellendus soluta vero voluptates voluptatibus. Alias illum impedit ipsam laboriosam placeat quasi quisquam rem. Impedit iure iusto libero voluptate. Aspernatur assumenda aut eligendi explicabo harum illum ipsum, magnam molestias quasi quibusdam reprehenderit sequi! Atque doloremque exercitationem id in, inventore ipsam nemo pariatur quia quo repellendus sed, sint. Aliquid consectetur deserunt perferendis possimus rem rerum. Adipisci amet asperiores aut beatae commodi consectetur, dicta ea enim et excepturi exercitationem expedita hic illo impedit laboriosam magnam minima molestiae nesciunt nihil placeat, qui quod recusandae repudiandae sint unde ut voluptatum! Animi asperiores atque cumque dolore eius fugit, illo illum laborum nemo neque quisquam, reiciendis suscipit veritatis voluptatem?</p>
            <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="1100">this is my name hrere</h4>
        </div>
    </div>
    <div id="aspiration&vision" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-2.avif); background-size: cover; background-position: center;">
        <div class="main-content text-white"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            <p class="text-justify text-white"
               data-appear-animation="fadeInLeftShorterPlus"
               data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto blanditiis debitis in magni odit, praesentium quia quis reiciendis velit? Aut distinctio ea, explicabo minima mollitia nihil officia perspiciatis repudiandae similique. Magnam quod, sunt? Amet consequatur culpa deserunt enim ipsa laborum neque, nihil non officia quam quisquam repellendus soluta vero voluptates voluptatibus. Alias illum impedit ipsam laboriosam placeat quasi quisquam rem. Impedit iure iusto libero voluptate. Aspernatur assumenda aut eligendi explicabo harum illum ipsum, magnam molestias quasi quibusdam reprehenderit sequi! Atque doloremque exercitationem id in, inventore ipsam nemo pariatur quia quo repellendus sed, sint. Aliquid consectetur deserunt perferendis possimus rem rerum. Adipisci amet asperiores aut beatae commodi consectetur, dicta ea enim et excepturi exercitationem expedita hic illo impedit laboriosam magnam minima molestiae nesciunt nihil placeat, qui quod recusandae repudiandae sint unde ut voluptatum! Animi asperiores atque cumque dolore eius fugit, illo illum laborum nemo neque quisquam, reiciendis suscipit veritatis voluptatem?</p>
            <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="800">this is my name hrere</h4>
        </div>
    </div>

    <div id="management" class="our-team">
        <div class="container position-relative">
            <div class="row">
                @for($i = 1; $i<=3; $i++)
                    <div class="col-md-4 mt-4"
                         data-appear-animation="fadeInLeftShorterPlus"
                         data-appear-animation-delay="{{ $i }}00">
                    <div class="card single-user-card">
                        <div class="card-img-top">
                            <img class="card-img-top" src="{{ asset('assets/frontend') }}/img/testimunial/testimunial.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h1>User Name</h1>
                            <h5>User DEG</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eum magni neque odio optio perferendis!</p>
                            <a href="">read more</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <div id="strenth" class="members bg-black">
        <div class="container position-relative">
            <h1 class="display-2 shadow-text"
                data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="500">Senior Management</h1>
            <div class="row match-height position-relative pt-5">
                @for($i = 1; $i<=4; $i++)
                    <div class="col-md-3 mt-4"
                         data-appear-animation="fadeInLeftShorterPlus"
                         data-appear-animation-delay="{{ $i }}00">
                        <div class="card border-0">
                            <div class="card-img-top">
                                <img class="card-img-top" src="{{ asset('assets/frontend') }}/img/banners/banner-1.avif" height="200" style="object-fit: cover" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h1 class="mb-0 text-black fw-bold">User Name</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, veritatis.</p>
                            </div>
                            <div class="card-footer bg-black">
                                <a href="">manage</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>



    <div class="our-gallery">
        <h1 class="display-2 shadow-text">Our Team</h1>
        <img src="{{ asset('assets/frontend') }}/img/team/teams.avif" class="w-100" alt="">
    </div>


    <div class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-1.avif); background-size: cover; background-position: center;">
        <div class="main-content text-white">
            <h1 class="display-2 shadow-text"
                data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="500">Chairman Message</h1>
            <p class="text-justify text-white"
               data-appear-animation="fadeInLeftShorterPlus"
               data-appear-animation-delay="800">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto blanditiis debitis in magni odit, praesentium quia quis reiciendis velit? Aut distinctio ea, explicabo minima mollitia nihil officia perspiciatis repudiandae similique. Magnam quod, sunt? Amet consequatur culpa deserunt enim ipsa laborum neque, nihil non officia quam quisquam repellendus soluta vero voluptates voluptatibus. Alias illum impedit ipsam laboriosam placeat quasi quisquam rem. Impedit iure iusto libero voluptate. Aspernatur assumenda aut eligendi explicabo harum illum ipsum, magnam molestias quasi quibusdam reprehenderit sequi! Atque doloremque exercitationem id in, inventore ipsam nemo pariatur quia quo repellendus sed, sint. Aliquid consectetur deserunt perferendis possimus rem rerum. Adipisci amet asperiores aut beatae commodi consectetur, dicta ea enim et excepturi exercitationem expedita hic illo impedit laboriosam magnam minima molestiae nesciunt nihil placeat, qui quod recusandae repudiandae sint unde ut voluptatum! Animi asperiores atque cumque dolore eius fugit, illo illum laborum nemo neque quisquam, reiciendis suscipit veritatis voluptatem?</p>
            <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="1100">this is my name hrere</h4>
        </div>
    </div>


    <div id="qpolicy" class="about-section" style="background-image: url({{ asset('assets/frontend') }}/img/banners/banner-2.avif); background-size: cover; background-position: center;">
        <div class="main-content text-white"
             data-appear-animation="fadeInLeftShorterPlus"
             data-appear-animation-delay="300">
            <p class="text-justify text-white"
               data-appear-animation="fadeInLeftShorterPlus"
               data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto blanditiis debitis in magni odit, praesentium quia quis reiciendis velit? Aut distinctio ea, explicabo minima mollitia nihil officia perspiciatis repudiandae similique. Magnam quod, sunt? Amet consequatur culpa deserunt enim ipsa laborum neque, nihil non officia quam quisquam repellendus soluta vero voluptates voluptatibus. Alias illum impedit ipsam laboriosam placeat quasi quisquam rem. Impedit iure iusto libero voluptate. Aspernatur assumenda aut eligendi explicabo harum illum ipsum, magnam molestias quasi quibusdam reprehenderit sequi! Atque doloremque exercitationem id in, inventore ipsam nemo pariatur quia quo repellendus sed, sint. Aliquid consectetur deserunt perferendis possimus rem rerum. Adipisci amet asperiores aut beatae commodi consectetur, dicta ea enim et excepturi exercitationem expedita hic illo impedit laboriosam magnam minima molestiae nesciunt nihil placeat, qui quod recusandae repudiandae sint unde ut voluptatum! Animi asperiores atque cumque dolore eius fugit, illo illum laborum nemo neque quisquam, reiciendis suscipit veritatis voluptatem?</p>
            <h4 class="header-before text-white d-flex align-items-end justify-content-center text-capitalize"
                data-appear-animation="fadeInLeftShorterPlus"
                data-appear-animation-delay="800">this is my name hrere</h4>
        </div>
    </div>
@endsection
