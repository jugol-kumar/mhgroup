@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Edit Project Category</h1>

                        @include('backend.components.validationerrors')
                        <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Category Title</label>
                                <input type="text" name="title" class="form-control" @if($category?->title) value="{{ $category?->title }}" @else placeholder="e.g Category Title" @endif>
                            </div>
                            <button class="btn btn-primary mt-1" type="submit">Update Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection