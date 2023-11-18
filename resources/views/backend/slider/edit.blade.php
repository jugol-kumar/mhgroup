@extends('backend.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Edit Slider Item</h1>
                        <p class="text-center">Added or edit interactive slider image title and descriptions.</p>
                        @include('backend.components.validationerrors')

                        <form action="{{ route('admin.slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('backend.components.feviconLogo', ['name' => 'bg_image', 'bg_image' => $slider->bg_image])

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Slider Title</label>
                                <input type="text" name="title" class="form-control" @if($slider?->title) value="{{ $slider?->title }}" @else placeholder="e.g Slider Title" @endif>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Slider Description</label>
                                <input type="text" name="descriptions" class="form-control" @if($slider?->descriptions) value="{{ $slider?->descriptions }}" @else placeholder="e.g Slider Descriptions" @endif>
                            </div>

{{--                            <div class="mt-1">--}}
{{--                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Button Name</label>--}}
{{--                                <input type="text" name="button_name" class="form-control" @if($slider?->button_name) value="{{ $slider?->button_name }}" @else placeholder="e.g Button name" @endif>--}}
{{--                            </div>--}}

                            <button class="btn btn-primary mt-1" type="submit">Update Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection