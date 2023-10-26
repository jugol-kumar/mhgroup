@extends('backend.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Gallery Item</h1>
                        @include('backend.components.validationerrors')

                        <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                            @include('backend.components.feviconLogo', ['name' => 'image', 'bg_image' => $gallery?->thumb])

        {{--                    <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">File Type</label>
                                <select name="type" class="form-control form-select" onchange="setVideo(this)">
                                    <option  disabled> ~~ Select File Type ~~</option>
                                    <option value="image" {{ $gallery->type == 'image' ? 'selected' : ''}}>Image File</option>
                                    <option value="video" {{ $gallery->type == 'video' ? 'selected' : ''}}>Video File</option>
                                </select>
                            </div>
        --}}

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Title</label>
                                <input type="text" name="title" class="form-control" @if($gallery->title) value="{{ $gallery->title }}" @else placeholder="e.g Title" @endif>
                            </div>

                            @if($gallery->video)
                            <div class="mt-1" id="videoLink">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Video Link</label>
                                <input type="text" name="video_link" class="form-control" @if($gallery->video) value="{{ $gallery->video }}" @else placeholder="youtube video link" @endif>
                            </div>
                            @endif

                            <button class="btn btn-primary mt-1" type="submit">Update Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection