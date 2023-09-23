@extends('backend.app')
@push('css')
    <style>
        .ql-container{
            height:300px !important;
        }
    </style>
@endpush

@section('content')
    <div class="content-body">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-content-center justify-content-between">
                        <h4 class="card-title">News & Events</h4>
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
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                @forelse($videos as $key=> $video)
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
                                @endforelse--}}
                                </tbody>
                            </table>
                           {{-- {!! $videos->links() !!}--}}
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

                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add New Post</h1>
                        <p class="text-center">Added black white overlay 1500*500 size image for thumbnail</p>

                        <form action="{{ route('admin.home-videos.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @include('backend.components.feviconLogo', ['name' => 'thumbnail'])

                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g Slider Title">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="full-container">Post Details</label>
                                <div id="full-container">
                                    <div class="editor"></div>
                                </div>
                                <input type="hidden" id="post_details" name="post_details">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Post Status</label>
                                <select name="status" class="form-control form-select">
                                    <option  disabled> ~~ Select Post Status ~~</option>
                                    <option value="published" selected>Published</option>
                                    <option value="unpublished">Unpublished</option>
                                </select>
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Save Slider</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>


@endsection