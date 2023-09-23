@extends('backend.app')


@section('content')
    <div class="content-body">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-content-center justify-content-between">
                        <h4 class="card-title">Home Videos</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject">Add Video</button>
                    </div>
                    <div class="card-body">
                        @include('backend.components.validationerrors')
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#_Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Video Link</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($videos as $key=> $video)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <img src="{{ '/storage/'.$video->thumbnail }}" alt="" width="120">
                                        </td>
                                        <td>
                                            {{ $video->title }}
                                        </td>
                                        <td>{{ $video->video_link }}</td>
                                        <td>
                                            <span class="badge {{ $video?->type == 'full' ? 'bg-success' : 'bg-primary' }}">{{ $video?->type == 'full' ? 'Full Page' : 'Half Page' }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a  class="dropdown-item"  href="{{ route('admin.home-videos.edit', $video->id) }}">
                                                        <i data-feather="edit" class="me-50" ></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a  class="dropdown-item"  href="javascript:void(0)" onclick="deleteData({{ $video->id }})">
                                                        <i data-feather="trash" class="me-50" ></i>
                                                        <span>Delete</span>
                                                    </a>

                                                    <form id="delete-form-{{ $video->id }}" method="POST" action="{{ route('admin.home-videos.destroy', $video->id) }}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <h2>No videos Found...</h2>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $videos->links() !!}
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

                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add New Video</h1>
                        <p class="text-center">Added black white overlay 1500*500 size image for thumbnail</p>

                        <form action="{{ route('admin.home-videos.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @include('backend.components.feviconLogo', ['name' => 'thumbnail'])

                            {{--<textarea name="content" id="editor" rows="12"></textarea>--}}

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Video Title</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g Slider Title">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Button Name</label>
                                <input type="text" name="button_name" class="form-control" placeholder="e.g button title">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Button Link</label>
                                <input type="text" name="btn_link" class="form-control" value="#">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Video Link</label>
                                <input type="text" name="video_link" class="form-control" placeholder="youtube video link">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Video Type</label>
                                <select name="type" class="form-control form-select">
                                    <option selected disabled> ~~ Select Video Type ~~</option>
                                    <option value="full">Full page video</option>
                                    <option value="half">Half page video</option>
                                </select>
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Save Slider</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>


@endsection