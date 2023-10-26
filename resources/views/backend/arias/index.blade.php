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
                        <h4 class="card-title">Arias</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject">Add Area</button>
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
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($areas as $key=> $area)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <img src="{{ '/storage/'.$area->thumbnail }}" alt="" width="120">
                                        </td>
                                        <td>
                                            {{ $area->title }}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a  class="dropdown-item"  href="{{ route('admin.home-arias.edit', $area->id) }}">
                                                        <i data-feather="edit" class="me-50" ></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a  class="dropdown-item"  href="javascript:void(0)" onclick="deleteData({{ $area->id }})">
                                                        <i data-feather="trash" class="me-50" ></i>
                                                        <span>Delete</span>
                                                    </a>

                                                    <form id="delete-form-{{ $area->id }}" method="POST" action="{{ route('admin.home-arias.destroy', $area->id) }}" style="display: none">
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
                            {!! $areas->links() !!}
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

                    <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add New Area</h1>
                    <p class="text-center">Added black white small size image for thumbnail</p>

                    <form action="{{ route('admin.home-arias.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        @include('backend.components.feviconLogo', ['name' => 'thumbnail'])

                        <div>
                            <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Area</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="e.g Area Title">
                        </div>

                        <div class="mt-2">
                            <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Short Content</label>
                            <textarea name="short_content" class="form-control" placeholder="e.g write 100 to 150 word details" rows="7">{{ old('short_content')  }}</textarea>
                        </div>

                        <div class="mt-1">
                            <label class="form-label fw-bolder font-size font-small-4 mb-50" for="full-container">Post Details</label>
                            <div id="full-container">
                                <div class="editor"></div>
                            </div>
                            <input type="hidden" id="post_details" name="content">
                        </div>


                        <button class="btn btn-primary mt-1" type="submit">Save Item</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection