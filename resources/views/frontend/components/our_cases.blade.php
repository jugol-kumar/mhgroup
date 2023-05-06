<section class="section-secondary custom-section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-color-dark mb-3">- Our Cases</h2>
            </div>
        </div>
    </div>
    <div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 custom-dots-style-1 custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 6, 'loop': false, 'dots': true, 'nav': false}">
        @for($i=1; $i<=15; $i++)
            <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                    <span class="thumb-info-wrapper m-0">
                        <img src="{{ asset('assets/frontend') }}/img/cases/gallery.avif" class="img-fluid" alt="">
                    </span>
                    <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                        <span class="custom-thumb-info-title">
                            <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Finance - {{ $i }}</span>
                            <span class="custom-thumb-info-desc font-weight-light">Here Details</span>
                        </span>
                        <span class="custom-arrow"></span>
                    </span>
                </span>
            </a>
        @endfor
    </div>
</section>
