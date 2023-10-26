@extends('backend.app')

@section('content')
    <div class="content-body">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-content-center justify-content-between">
                        <h4 class="card-title">Gallery</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject">Add File</button>
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
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $key => $img)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $img->title }}</td>
                                        <td>
                                            <div style="width:100px;height:80px;">
                                                <img src="{{ '/storage/'.$img->thumb }}" class="w-100 h-100"  alt="">
                                            </div>
                                        </td>
                                        <td>
                                            @if($img->type == 'image')
                                                <span class="badge bg-success">Image File</span>
                                            @else
                                                <span class="badge bg-warning">Video File</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="text-warning" href="{{ route('admin.gallery.edit', $img->id) }}">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <a  class="text-danger"  href="javascript:void(0)" onclick="deleteData({{ $img->id }})">
                                                <i data-feather="trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $img->id }}" method="POST" action="{{ route('admin.gallery.destroy', $img->id) }}" style="display: none">
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

                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add New Gallery Image</h1>

                        <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('backend.components.feviconLogo', ['name' => 'image'])

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">File Type</label>
                                <select name="type" class="form-control form-select" onchange="setVideo(this)">
                                    <option  disabled> ~~ Select File Type ~~</option>
                                    <option value="image" selected>Image File</option>
                                    <option value="video">Video File</option>
                                </select>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g Title">
                            </div>

                            <div class="mt-1 d-none" id="videoLink">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Video Link</label>
                                <input type="text" name="video_link" class="form-control" placeholder="youtube video link">
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Save Item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function setVideo(event){
            if (event.value === 'video'){
                $("#videoLink").removeClass('d-none');
            }else{
                $("#videoLink").addClass('d-none');
            }
        }
    </script>
@endpush