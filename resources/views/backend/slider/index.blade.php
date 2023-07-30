@extends('backend.app')


@section('content')
    <div class="content-body">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-content-center justify-content-between">
                        <h4 class="card-title">Client Message</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject">Add Slider</button>
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
                                    <th>Description</th>
                                    <th>Button name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $key=> $slider)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <img src="{{ '/storage/'.$slider->bg_image }}" alt="" width="120">
                                        </td>
                                        <td>
                                            {{ $slider->title }}
                                        </td>
                                        <td>{{ $slider->descriptions }}</td>
                                        <td>{{ $slider->button_name }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a  class="dropdown-item"  href="{{ route('admin.slider.edit', $slider->id) }}">
                                                        <i data-feather="edit" class="me-50" ></i>
                                                        <span>Edit</span>
                                                    </a>

                                                    <a  class="dropdown-item"  href="javascript:void(0)" onclick="deleteData({{ $slider->id }})">
                                                        <i data-feather="trash" class="me-50" ></i>
                                                        <span>Delete</span>
                                                    </a>

                                                    <form id="delete-form-{{ $slider->id }}" method="POST" action="{{ route('admin.slider.destroy', $slider->id) }}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $sliders->links() !!}
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

                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Add New Slider</h1>
                        <p class="text-center">Added interactive slider image title and descriptions.</p>

                        <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @include('backend.components.feviconLogo', ['name' => 'bg_image'])


                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Slider Title</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g Slider Title">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Slider Description</label>
                                <input type="text" name="descriptions" class="form-control" placeholder="e.g Slider Descriptions">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Button Name</label>
                                <input type="text" name="button_name" class="form-control" placeholder="e.g Button name">
                            </div>

                            <button class="btn btn-primary mt-1" type="submit">Save Slider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection