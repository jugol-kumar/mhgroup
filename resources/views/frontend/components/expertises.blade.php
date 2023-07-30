
@if($homeAreas->count())
<section class="section-secondary custom-section-padding">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="font-weight-bold text-color-dark mb-3">- লেক আইল্যান্ড - ঢাকা</h2>
            </div>
        </div>
        <div class="row">
            @forelse($homeAreas as $item)
                <div class="col-lg-4 cur-pointer" onclick="showAreaItem({{ $item }})">
                    <div  class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                        <div class="feature-box custom-feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <img class="w-100 h-100 object-fit-cover" src="{{ '/storage/'.$item->thumbnail }}"  alt="">
                            </div>
                            <div class="feature-box-info ms-3">
                                <h4 class="font-weight-normal text-5">{{ $item->title }}</h4>
                                <p class="text-2 text-justify">{{ Str::limit($item->short_content, 100) }}  </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section>


    <!-- Modal -->
    <div class="modal fade modal-lg" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 id="title"></h2>
                    <p id="content"></p>
                    <p id="details"></p>
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    function showAreaItem(item){
        $("#myModal").modal("toggle");
        $("#title").text(item.title)
        $("#content").text(item.short_content)
        $("#details").html(item.content)
    }
</script>
