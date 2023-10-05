@extends('backend.app')
@section('content')
    <div class="container">
        <form action="{{ route('admin.project.update', $project?->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="row">
                @include('backend.components.validationerrors')
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Project Details</h2>
                            <div class="mb-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Project Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="" selected disabled>Select Project Category</option>
                                    @foreach($categories as $key => $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $project?->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Project Name</label>
                                <input type="text" name="title" class="form-control" @if($project?->title) value="{{ old('title') ?? $project?->title }}" @else placeholder="e.g Project Title" @endif>
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Project Location</label>
                                <input type="text" name="location" class="form-control" @if($project?->location) value="{{ old('location') ?? $project?->location }}" @else placeholder="e.g Gulshan" @endif>
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Apartment Size</label>
                                <input type="text" name="apartment_size" class="form-control" @if($project?->apartment_size) value="{{ old('apartment_size') ?? $project?->apartment_size }}" @else placeholder="e.g 2045-2124 sft" @endif>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">At A Glance</h2>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect"> Land Area</label>
                                <input type="text" name="land_area" class="form-control" @if($project?->land_area) value="{{ old('land_area') ?? $project?->land_area }}" @else placeholder="e.g 8.93 Shotok" @endif>
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">No. of Floors</label>
                                <input type="text" name="number_floors" class="form-control" @if($project?->number_floors) value="{{ old('number_floors') ?? $project?->number_floors }}" @else placeholder="e.g G + 14" @endif>
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Apartment/Floor</label>
                                <input type="text" name="number_apartment" class="form-control" @if($project?->number_apartment) value="{{ old('number_apartment') ?? $project?->number_apartment}}" @else placeholder="e.g 3" @endif>
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Bedroom</label>
                                <input type="text" name="bedroom" class="form-control" @if($project?->bedroom) value="{{ old('bedroom') ?? $project?->bedroom}}" @else placeholder="e.g 4" @endif>
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Bathroom</label>
                                <input type="text" name="bathroom" class="form-control" @if($project?->bathroom) value="{{ old('bathroom') ?? $project?->bathroom }}" @else placeholder="e.g 3" @endif>
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Launch Date</label>
                                <input type="date" name="launch_date" class="form-control" @if($project?->launch_date) value="{{ old('launch_date') ?? $project?->launch_date }}" @else placeholder="e.g 12/08/**" @endif>
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Collection</label>
                                <input type="text" name="collection" class="form-control" @if($project?->collection) value="{{ old('collection') ?? $project?->collection }}" @else placeholder="e.g Luxury" @endif>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Full Address</label>
                                <input type="text" name="address" class="form-control" @if($project?->address) value="{{ old('address') ?? $project?->address }}" @else placeholder="e.g Plot : 105, Road : 9/A , Dhanmondi." @endif>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" >Map Location</label>
                                <input type="text" name="map_location" class="form-control"  @if($project?->map_location) value="{{ old('map_location') ?? $project?->map_location}}" @else placeholder="e.g embedded iframe location from google map" @endif>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Builders Information</h2>
                            <div class="mt-1">
                                <label for="builders" class="form-label fw-bolder font-size font-small-4 mb-50" >About builders</label>
                                <textarea class="form-control form-text" name="about_builders" id="builders" rows="7" @if(empty($project?->about_builders)) placeholder="e.g about constructions builders" @endif>{{ old("about_builders") ?? $project?->about_builders }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-lg btn-primary py-2">Update Project</button>
                            <a href="{{ route('admin.project.index') }}" class="btn btn-lg btn-danger py-2">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection