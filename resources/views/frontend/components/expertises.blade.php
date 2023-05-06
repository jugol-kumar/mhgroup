
<section class="section-secondary custom-section-padding">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="font-weight-bold text-color-dark mb-3">- Expertises</h2>
            </div>
        </div>
        <div class="row">
            @for($i=1; $i<= 6; $i++)
                <div class="col-lg-4">
                <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box custom-feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <img src="{{ asset('assets/frontend') }}/img/expertises/eques.avif" alt="">
                        </div>
                        <div class="feature-box-info ms-3">
                            <h4 class="font-weight-normal text-5">Corporate Finance - {{ $i }}</h4>
                            <p class="text-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
                        </div>
                    </div>
                </a>
            </div>
            @endfor
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-3" href="demo-business-consulting-expertise.html" title="View All">View All</a>
            </div>
        </div>
    </div>
</section>
