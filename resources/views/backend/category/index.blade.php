@extends('backend.app')
@section('content')
    <div class="content-body">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-content-center justify-content-between">
                        <h4 class="card-title">Client Message</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject">Add Image</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row match-height">
        @foreach($category as $cat)
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body d-flex flex-column align-content-center justify-content-center">
                        <h2 class="text-capitalize">{{ $cat->title }}</h2>
                        <a  class="btn btn-danger"  href="javascript:void(0)" onclick="deleteData({{ $cat->id }})">
                            <i data-feather="trash" class="me-50" ></i>
                            <span>Delete</span>
                        </a>

                        <form id="delete-form-{{ $cat->id }}" method="POST" action="{{ route('admin.category.destroy', $cat->id) }}" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <div class="modal fade" id="shareProject" tabindex="-1" aria-labelledby="shareProjectTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-4">

                    <div class="modal-body px-sm-5 mx-50 pb-4">

                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add Category</h1>

                        <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Category Name</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g Iamge Title">
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Save Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection