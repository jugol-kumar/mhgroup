<section id="consceltant" class="pt-5 pb-10r bg-black consceltant overflow-hidden d-none d-lg-block">
    <div class="container mt-10r">
        <div class="row align-items-center justify-content-center row-border position-relative">
            <div class="col-5 p-0" data-aos="fade-down" data-aos-duration="1000">
                <div class="d-flex text-white align-items-baseline">
                    <i data-feather="chevron-right"></i>
                    <p class="text-white" data-aos="fade-up" data-aos-duration="1000">{{  $item[0]?->title ?? 'Item - 0' }}</p>
                </div>
                <img src="{{ $items[0]?->image ? '/storage/'.$items[0]?->image : asset('assets/frontend/images/building-image2.jpg') }}" class="image-1" style="width:852px; height: 325px;" alt="">
            </div>
            <div class="col-5 p-0" data-aos="fade-down-left" data-aos-duration="1000">
                <div class="d-flex text-white ms-3 align-items-baseline">
                    <p class="text-white" data-aos="fade-up" data-aos-duration="1000">{{ $item[1]?->title ?? 'Item - 1' }}</p>
                    <i data-feather="chevron-left"></i>
                </div>
                <img src="{{ $items[1]?->image ? '/storage/'.$items[1]?->image :  asset('assets/frontend/images/building%20image1.jpg') }}" class="image-2" style="width:852px; height: 325px;"  alt="">
            </div>
            <div class="col-5 p-0" data-aos="fade-up-right" data-aos-duration="1000">
                <img src="{{ $items[2]?->image ? '/storage/'.$items[2]?->image :  asset('assets/frontend/images/building%20image1.jpg') }}" class="image-3"  style="width:852px; height: 325px;" alt="">
                <div class="d-flex text-white ms-3 mt-3 align-items-baseline">
                    <i data-feather="chevron-right"></i>
                    <p class="text-white" data-aos="fade-up" data-aos-duration="1000">{{ $items[2]?->title ?? 'Item - 2' }}</p>
                </div>
            </div>
            <div class="col-5 p-0" data-aos="fade-up-left" data-aos-duration="1000">
                <img src="{{ $items[3]?->image ? '/storage/'.$items[3]?->image :  asset('assets/frontend/images/building-image2.jpg') }}" class="image-4" style="width:852px; height: 325px;" alt="">
                <div class="d-flex text-white ms-3 mt-3 align-items-baseline">
                    <p class="text-white" data-aos="fade-up" data-aos-duration="1000">{{ $items[3]?->title ?? 'Item - 4' }}</p>
                    <i data-feather="chevron-left"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="consceltant" class="pt-5 pb-10r bg-black consceltant overflow-hidden d-block d-lg-none">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0 bg-black">
                        <img src="{{ $items[0]?->image ? '/storage/'.$items[0]?->image : asset('assets/frontend/images/building-image2.jpg') }}" class="w-100 h-100" alt="">
                        <p class="text-white" data-aos="fade-up" data-aos-duration="1000">{{  $item[0]?->title ?? 'Item - 0' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0 bg-black">
                        <img src="{{ $items[1]?->image ? '/storage/'.$items[1]?->image :  asset('assets/frontend/images/building%20image1.jpg') }}" class="w-100 h-100"   alt="">
                        <p class="text-white" data-aos="fade-up" data-aos-duration="1000">{{ $item[1]?->title ?? 'Item - 1' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0 bg-black">
                        <img src="{{ $items[2]?->image ? '/storage/'.$items[2]?->image :  asset('assets/frontend/images/building%20image1.jpg') }}" class="h-100 w-100"  alt="">
                        <p class="text-white" data-aos="fade-up" data-aos-duration="1000">{{ $items[2]?->title ?? 'Item - 2' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0 bg-black">
                        <img src="{{ $items[3]?->image ? '/storage/'.$items[3]?->image :  asset('assets/frontend/images/building-image2.jpg') }}" class="w-100 h-100" style="width:852px; height: 325px;" alt="">
                        <p class="text-white" data-aos="fade-up" data-aos-duration="1000">{{ $items[3]?->title ?? 'Item - 4' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>