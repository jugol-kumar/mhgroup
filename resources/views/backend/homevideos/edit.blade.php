@extends('backend.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add Home Item</h1>
                        <p class="text-center">Added interactive 4 items image and title for home page.</p>
                        @include('backend.components.validationerrors')
                        <form action="{{ route('admin.home-videos.update', $video->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('backend.components.feviconLogo', ['name' => 'thumbnail', 'bg_image' => $video?->thumbnail])

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Video Title</label>
                                <input type="text" name="title" class="form-control" @if($video?->title) value="{{ $video?->title }}" @else placeholder="e.g Slider Title" @endif>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Button Name</label>
                                <input type="text" name="button_name" class="form-control" @if($video?->button_name) value="{{ $video?->button_name }}" @else placeholder="e.g button title" @endif>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Button Link</label>
                                <input type="text" name="link" class="form-control" value="{{ $video?->link }}">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Video Link</label>
                                <input type="text" name="video_link" class="form-control" @if($video->video_link) value="{{ $video->video_link }}" @else placeholder="youtube video link" @endif>
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Update Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection