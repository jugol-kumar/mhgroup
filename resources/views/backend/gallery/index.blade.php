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
                        <p class="card-text">

                        </p>
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
                                @foreach($images as $key => $img)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $img->title }}</td>
                                        <td>
                                            <img src="{{ '/storage/'.$img->image }}" width="120" alt="">
                                        </td>
                                        <td>
                                            @include('backend.components.delteItem', ['id' => $img->id, 'route' => route('admin.gallery.destroy', $img->id)])
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

                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add New Gallery Image</h1>

                        <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('backend.components.feviconLogo', ['name' => 'image'])

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Employee Name</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g Iamge Title">
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Save Employee</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection