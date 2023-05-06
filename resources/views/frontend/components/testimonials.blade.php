<style>
    .testimonial img{
        height: 120px !important;
        width: 120px !important;
        object-fit: cover;
        border: 1px solid red;
        padding: 5px;
    }
</style>

<section class="custom-section-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-color-dark">- Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0"
                     data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                    @for($i = 1; $i<=5; $i++)
                        <div class="row testimonial">
                        <div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
                            <img src="{{ asset('assets/frontend') }}/img/testimunial/testimunial.png"
                                 alt class="img-fluid custom-rounded-image" />
                        </div>
                        <div class="col-12 col-sm-12 col-lg-10">
                            <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                <blockquote class="pb-2">
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                </blockquote>
                                <div class="testimonial-author float-start">
                                    <p>
                                        <strong>
                                            {{ fake()->name()  }}
                                        </strong>
                                        <span class="text-color-primary">
                                            {{ fake()->company()  }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
</section>
