@extends('backend.app')
@section('content')
    <div class="content-body">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-content-center justify-content-between">
                        <h4 class="card-title">Client Message</h4>
                        <a class="btn btn-primary" href="{{ route('admin.project.create') }}">Add Project</a>
                    </div>
                    <div class="card-body">
                        @include('backend.components.validationerrors')
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#_Id</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $key => $project)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $project->title }}</td>
                                            <td>{{ $project->category?->title }}</td>
                                            <td>
                                                <img src="{{ '/storage/'.$project->thumbnail }}" width="50" alt="">
                                            </td>
                                            <td>
                                                <a class="text-primary" href="{{ route('admin.project.show', $project->id) }}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                                <a class="text-warning" href="{{ route('admin.project.edit', $project->id) }}">
                                                    <i data-feather="edit"></i>
                                                </a>
                                                <a  class="text-danger"  href="javascript:void(0)" onclick="deleteData({{ $project->id }})">
                                                    <i data-feather="trash"></i>
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

@endsection