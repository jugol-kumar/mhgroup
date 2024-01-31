@extends('backend.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Edit Home Item</h1>
                        @include('backend.components.validationerrors')
                        <form action="{{ route('admin.post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('backend.components.feviconLogo', ['name' => 'thumbnail', 'bg_image' => $post->image])

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Title</label>
                                <input type="text" name="title" class="form-control" @if( $post->title) value="{{ $post->title }}" @else placeholder="e.g Event & News Title" @endif>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="full-container">Post Details</label>
                                <textarea name="post_details" class="summernote">{!! $post->details  ?? old('details') !!}</textarea>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Post Status</label>
                                <select name="status" class="form-control form-select">
                                    <option  disabled> ~~ Select Post Status ~~</option>
                                    <option value="published" {{ $post->status == 'published' ? 'selected' : ''}}>Published</option>
                                    <option value="unpublished" {{ $post->status == 'unpublished' ? 'selected' : ''}}>Unpublished</option>
                                </select>
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection