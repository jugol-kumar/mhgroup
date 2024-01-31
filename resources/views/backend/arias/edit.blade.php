@extends('backend.app')
@push('css')
    <style>
        .ql-container{
            height:300px !important;
        }
    </style>
@endpush
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Edit New Area</h1>
                        <p class="text-center">Added black white small size image for thumbnail</p>
                        @include('backend.components.validationerrors')
                        <form action="{{ route('admin.home-arias.update', $area->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('backend.components.feviconLogo', ['name' => 'thumbnail', 'bg_image' => $area?->thumbnail])

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Video Title</label>
                                <input type="text" name="title" class="form-control" @if($area?->title) value="{{ $area?->title }}" @else placeholder="e.g Area Title" @endif>
                            </div>

                            <div class="mt-2">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Short Content</label>
                                <textarea name="short_content" class="form-control" placeholder="e.g write 100 to 150 word details" rows="7">
                                    {{ $area->short_content ??  old('short_content')  }}
                                </textarea>
                            </div>



                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="full-container">Post Details</label>
                                <textarea name="content" class="summernote">
                                    {!!  $area->content ?? old('about')  !!}
                                </textarea>
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Update Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection