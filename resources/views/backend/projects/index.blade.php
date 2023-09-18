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
                    <div class="card-body">
                        @include('backend.components.validationerrors')
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#_Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $key => $project)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $project->title }}</td>
                                            <td>
                                                <img src="{{ '/storage/'.$project->image }}" width="50" alt="">
                                            </td>
                                            <td>
                                                <a  class="btn btn-danger"  href="javascript:void(0)" onclick="deleteData({{ $project->id }})">
                                                    <i data-feather="trash" class="me-50" ></i>
                                                    <span>Delete</span>
                                                </a>

                                                <form id="delete-form-{{ $project->id }}" method="POST" action="{{ route('admin.project.destroy', $project->id) }}" style="display: none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="shareProject" tabindex="-1" aria-labelledby="shareProjectTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-4">

                    <div class="modal-body px-sm-5 mx-50 pb-4">

                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add New Project Image</h1>

                        <form action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('backend.components.feviconLogo', ['name' => 'image'])

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
                                <input type="text" name="location" class="form-control" value="{{ old('location') }}" placeholder="e.g Project Location">
                            </div>


                            <button class="btn btn-primary mt-1" type="submit">Save Project</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection