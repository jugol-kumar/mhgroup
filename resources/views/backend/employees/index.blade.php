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
                                        <th>name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $key=> $emp)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <img src="{{ '/storage/'.$emp->image }}" alt="" width="120">
                                        </td>
                                        <td>
                                            {{ $emp->name }}
                                        </td>
                                        <td>{{ Str::limit($emp->about, 80) }}</td>
                                        <td>
                                            <span class="badge {{  $emp->type == 'junior' ? 'badge-light-primary' : 'badge-light-info'}}">
                                                {{ $emp->type }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Show</span>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0)" onclick="deleteData({{ $emp->id }})">
                                                        <i data-feather="trash" class="me-50" ></i>
                                                        <span>Delete</span>
                                                    </a>

                                                    <form id="delete-form-{{ $emp->id }}" method="POST" action="{{ route('admin.slider.destroy', $emp->id) }}" style="display: none">
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
                            {!! $employees->links() !!}
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

                        <form action="{{ route('admin.employees.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @include('backend.components.feviconLogo', ['name' => 'profile'])


                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Employee Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g Slider Title">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Employee Designation</label>
                                <input type="text" name="designation" class="form-control" placeholder="e.g designation">
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Employee Description</label>
                                <textarea type="text" rows="5" name="descriptions" class="form-control" placeholder="e.g Slider Descriptions"></textarea>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Employee Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="" selected disabled> Selected Employee Type</option>
                                    <option value="junior">Junior</option>
                                    <option value="senior">Senior</option>
                                </select>
                            </div>


                            <button class="btn btn-primary mt-1" type="submit">Save Employee</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection