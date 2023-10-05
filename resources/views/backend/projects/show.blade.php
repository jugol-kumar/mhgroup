@extends('backend.app')

@push('css')
    <style>
        .project-images img{
            height:250px;
            width:100%;
            object-fit: cover;
            margin-bottom:1rem;
            background: #e9efef;
        }
        .featuredImages img{
            object-fit: cover;
        }


        .deleteFeaturedItem{
            display: none;
            align-items: center;
            justify-content: center;
            background: #00000066;
            width:100%;
            height:100%;
            transition: 3s all ease;
        }
        .featuredImages .img-card{
            overflow: hidden;
            padding: 0;
            transition: 3s all ease;
        }
        .featuredImages .img-card:hover .deleteFeaturedItem{
            display: flex;
        }


        .deleteFeaturedItem svg{
            color: white;
            width: 3rem;
            height: 3rem;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="card">
            <form action="{{ route('admin.project.updateImage', $project->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="card-body project-images">
                    <div class="row match-height">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Project Thumbnail</p>
                                    <img src="/storage/{{ $project->thumbnail }}" alt="">
                                    <input class="form-control" name="thumbnail" type="file" id="customFile1"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Project Thumbnail</p>
                                    <img src="/storage/{{ $project->image }}" alt="">
                                    <input class="form-control" name="image" type="file" id="customFile1"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Builders Logo</p>
                                    <img src="/storage/{{ $project->builders_logo }}" alt="">
                                    <input class="form-control" name="builders_logo" type="file" id="customFile1"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>

        <div class="mt-3 card featuredImages">
            <div class="card-body">
                    <h2 class="card-title">Project Featured Images</h2>
                    <div class="row match-height gap-2">
                        @foreach($project->featuredImages as $img)
                            <div class="col-md-3 img-card position-relative">
                                <img class="w-100 h-100 object-fit-cover" src="/storage/{{ $img->image }}" alt="">
                                <a href="javascript:void(0)" onclick="deleteData({{ $img->id }}, 'featured')" class="deleteFeaturedItem position-absolute">
                                    <i data-feather="trash"></i>
                                </a>
                            </div>

                            <form id="delete-form-featured{{ $img->id }}" method="POST" action="{{ route('admin.project.deleteFeaturedImage', $img->id) }}" style="display: none">
                                @csrf
                                @method('DELETE')
                            </form>
                        @endforeach
                        <div class="col-md-3">
                            <form id="saveFeaturedImage" action="{{ route('admin.project.updateFeaturedImage', $project->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method("put")
                                @include('backend.components.feviconLogo', ['name' => 'featuredImage'])
                            </form>
                        </div>
                    </div>
                <button onclick="submitFeaturedForm()" class="mt-3 btn btn-primary">Update Featured Images</button>
            </div>
        </div>


        <div class="mt-3 card featuredImages">
            <div class="card-body">
                <h2 class="card-title">Lifestyle Images</h2>
                <div class="row match-height gap-2">
                    @foreach($project->lifestyleImages as $img)
                        <div class="col-md-3 img-card position-relative">
                            <img class="w-100 h-100 object-fit-cover" src="/storage/{{ $img->image }}" alt="">
                            <a href="javascript:void(0)" onclick="deleteData({{ $img->id }}, 'lifestyle')" class="deleteFeaturedItem position-absolute">
                                <i data-feather="trash"></i>
                            </a>
                        </div>
                        <form id="delete-form-lifestyle{{ $img->id }}" method="POST" action="{{ route('admin.project.deleteLifestyleImage', $img->id) }}" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endforeach
                    <div class="col-md-3">
                        <form id="saveLifestyledImage" action="{{ route('admin.project.updateLifestyleImage', $project->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                            @include('backend.components.feviconLogo', ['name' => 'lifestyleImage'])
                        </form>
                    </div>
                </div>
                <button onclick="submitLifestyledForm()" class="mt-3 btn btn-primary">Update Featured Images</button>
            </div>
        </div>

        <div class="mt-3 card featuredImages">
            <div class="card-body">
                <h2 class="card-title">Floor Plan Images</h2>
                <div class="row match-height gap-2">
                    @foreach($project->planImages as $img)
                        <div class="col-md-3 img-card position-relative">
                            <img class="w-100 h-100 object-fit-cover" src="/storage/{{ $img->image }}" alt="">
                            <a href="javascript:void(0)" onclick="deleteData({{ $img->id }}, 'floor')" class="deleteFeaturedItem position-absolute">
                                <i data-feather="trash"></i>
                            </a>
                        </div>
                        <form id="delete-form-floor{{ $img->id }}" method="POST" action="{{ route('admin.project.deleteFloorImage', $img->id) }}" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endforeach
                    <div class="col-md-3">
                        <form id="submitFloorPlanForm" action="{{ route('admin.project.updateFLoorImage', $project->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                            @include('backend.components.feviconLogo', ['name' => 'floor_plan'])
                        </form>
                    </div>
                </div>
                <button onclick="submitFloorPlanForm()" class="mt-3 btn btn-primary">Update Featured Images</button>
            </div>
        </div>


    </div>
@endsection

@push('js')
    <script>
        const submitFeaturedForm = () => document.getElementById("saveFeaturedImage").submit();
        const submitLifestyledForm = () => document.getElementById("saveLifestyledImage").submit();
        const submitFloorPlanForm = () => document.getElementById("submitFloorPlanForm").submit();
    </script>
@endpush