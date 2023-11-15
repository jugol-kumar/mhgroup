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
                        <h4 class="card-title">Our Concerns</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject">Add File
                        </button>
                    </div>
                    <div class="card-body">
                        @include('backend.components.validationerrors')
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#_Id</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Web</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($concerns as $key => $con)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $con->concern_name }}</td>
                                        <td>{{ $con->short_name }}</td>
                                        <td>
                                            <a class="btn btn-icon btn-primary" href="{{ $con->link }}">
                                                <i data-feather="globe"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div style="width:100px;height:80px;">
                                                <img src="{{ '/storage/'.$con->image }}" style="object-fit:cover" class="w-100 h-100 object-fit-cover" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a class="text-warning" href="{{ route('admin.concern.edit', $con->id) }}">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <a class="text-danger" href="javascript:void(0)"
                                               onclick="deleteData({{ $con->id }})">
                                                <i data-feather="trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $con->id }}" method="POST"
                                                  action="{{ route('admin.concern.destroy', $con->id) }}"
                                                  style="display: none">
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
                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add New Concern</h1>
                        <form action="{{ route('admin.concern.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('backend.components.feviconLogo', ['name' => 'concern_image'])
                            <div class="col-12 mb-1">
                                <label for="concern_name">Concern Full Name</label>
                                <input type="text"
                                       id="concern_name"
                                       class="form-control"
                                       name="concern_name"
                                       placeholder="Name of your concern"
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="short_name">Concern Short Name (Show in menu bar)</label>
                                <input type="text"
                                       id="short_name"
                                       class="form-control"
                                       name="short_name"
                                       placeholder="Name of your concern"
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="link">Concern Website Link</label>
                                <input type="url"
                                       id="link"
                                       class="form-control"
                                       name="link"
                                       placeholder="Link of your concern"
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="address">Concern Address</label>
                                <input type="text"
                                       id="address"
                                       class="form-control"
                                       name="address"
                                       placeholder="Concern Address"
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="phone">Concern phone</label>
                                <input type="text"
                                       id="phone"
                                       class="form-control"
                                       name="phone"
                                       placeholder="Phone number of your concern"
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="email">Concern email</label>
                                <input type="email"
                                       id="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="Email id of your concern"
                                />
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="full-container">Post Details</label>
                                <div id="full-container">
                                    <div class="editor">
                                        {!! old('about') ?? '' !!}
                                    </div>
                                </div>
                                <input type="hidden" id="post_details" name="about" value="{{ old('about') ?? ''  }}">
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Save Concern</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection