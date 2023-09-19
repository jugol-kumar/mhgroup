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

                        <form action="{{ route('admin.project.update', $project->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('backend.components.feviconLogo', ['name' => 'image', 'bg_image' => $project->image])

                            <div class="mb-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Project Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="" selected disabled>Select Project Category</option>
                                    @foreach($categories as $key => $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $project->category_id ? 'selected' : ''}}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Project Name</label>
                                <input type="text" name="title" class="form-control" @if($project->title) value="{{ $project->title }}" @else placeholder="e.g Project Title" @endif>
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Project Location</label>
                                <input type="text" name="location" class="form-control" @if($project->location) value="{{ $project->location }}" @else placeholder="e.g Project Location" @endif>
                            </div>
                            <button class="btn btn-primary mt-1" type="submit">Update Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection