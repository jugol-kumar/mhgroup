@extends('backend.app')
@section('content')
    <div class="container">
        <form action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row match-height">
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
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Project Name</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="e.g Project Title">
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Project Location</label>
                                <input type="text" name="location" class="form-control" value="{{ old('location') }}" placeholder="e.g Gulshan">
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Apartment Size</label>
                                <input type="text" name="apartment_size" class="form-control" value="{{ old('apartment_size') }}" placeholder="e.g 2045-2124 sft">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">At A Glance</h2>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect"> Land Area</label>
                                <input type="text" name="land_area	" class="form-control" value="{{ old('land_area') }}" placeholder="e.g 8.93 Shotok">
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">No. of Floors</label>
                                <input type="text" name="number_floors	" class="form-control" value="{{ old('number_floors') }}" placeholder="e.g G + 14">
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Apartment/Floor</label>
                                <input type="text" name="number_apartment" class="form-control" value="{{ old('number_floors') }}" placeholder="e.g 3">
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Bedroom</label>
                                <input type="text" name="bedroom" class="form-control" value="{{ old('number_floors') }}" placeholder="e.g 4">
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Bathroom</label>
                                <input type="text" name="bathroom" class="form-control" value="{{ old('number_floors') }}" placeholder="e.g 3">
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Launch Date</label>
                                <input type="text" name="launch_date" class="form-control" value="{{ old('launch_date') }}" placeholder="e.g 12/08/**">
                            </div>
                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Collection</label>
                                <input type="text" name="collection" class="form-control" value="{{ old('collection') }}" placeholder="e.g Luxury">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Project Preview</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('backend.components.feviconLogo', ['name' => 'thumbnail'])
                                </div>
                                <div class="col-md-6">
                                    @include('backend.components.feviconLogo', ['name' => 'image'])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Project Preview</h2>

                            <div class="mt-1">
                                <label for="customFile1" class="form-label fw-bolder font-size font-small-4 mb-50">Features Images</label>
                                <input class="form-control" type="file" id="customFile1" multiple/>
                            </div>

                            <div class="mt-1">
                                <label for="customFile1" class="form-label fw-bolder font-size font-small-4 mb-50">Lifestyle Images</label>
                                <input class="form-control" type="file" id="customFile1" multiple/>
                            </div>

                            <div class="mt-1">
                                <label for="customFile1" class="form-label fw-bolder font-size font-small-4 mb-50">Floor Plans</label>
                                <input class="form-control" type="file" id="customFile1" multiple/>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Full Address</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="e.g Plot : 105, Road : 9/A , Dhanmondi.">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" >Map Location</label>
                                <input type="text" name="map_location" class="form-control" value="{{ old('collection') }}" placeholder="e.g embedded iframe location from google map">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-lg btn-primary py-2">Save Project</button>
                            <button class="btn btn-lg btn-danger py-2">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection