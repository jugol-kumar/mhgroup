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
                        <form action="{{ route('admin.homeitems.update', $homeItem?->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            @include('backend.components.feviconLogo', ['name' => 'itemImage', 'bg_image' => $homeItem?->image])
                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Slider Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $homeItem?->title }}" placeholder="e.g Slider Title">
                            </div>
                            <button class="btn btn-primary mt-1" type="submit">Update Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection