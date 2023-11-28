@extends('backend.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-1 text-black" id="shareProjectTitle">Edit Employee</h1>
                        @include('backend.components.validationerrors')
                        <form action="{{ route('admin.employees.update', $employee->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('backend.components.feviconLogo', ['name' => 'profile', 'bg_image' => $employee?->image])


                            <div>
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Employee Name</label>
                                <input type="text" name="name" class="form-control"  @if($employee?->name) value="{{ $employee?->name }}" @else placeholder="e.g Employee Name" @endif>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Employee Designation</label>
                                <input type="text" name="designation" class="form-control" @if($employee?->designation) value="{{ $employee?->designation }}" @else placeholder="e.g designation" @endif>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Employee Description</label>
                                <textarea type="text" rows="5" name="descriptions" class="form-control" placeholder="e.g About Employee"> @if($employee?->about) {{ $employee?->about }} @endif</textarea>
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="addMemberSelect">Employee Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="" selected disabled> Selected Employee Type</option>
                                    <option value="junior" {{ $employee->type == 'junior' ? 'selected' : '' }}>Top Management</option>
                                    <option value="senior" {{ $employee->type == 'senior' ? 'selected' : '' }}>Senior Management</option>
                                </select>
                            </div>


                            <button class="btn btn-primary mt-1" type="submit">Update Employee</button>
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