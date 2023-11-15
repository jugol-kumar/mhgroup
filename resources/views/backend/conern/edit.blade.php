@extends('backend.app')
<style>
    .ql-container{
        height:300px !important;
    }
</style>

@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2>Update Concern</h2>
                        @include('backend.components.validationerrors')

                        <form action="{{ route('admin.concern.update', $concern->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('backend.components.feviconLogo', ['name' => 'concern_image', 'bg_image' => $concern->image])
                            <div class="col-12 mb-1">
                                <label for="concern_name">Concern Full Name</label>
                                <input type="text"
                                       id="concern_name"
                                       class="form-control"
                                       name="concern_name"
                                       @if($concern?->concern_name) value="{{ $concern?->concern_name }}" @else placeholder="e.g Concern Name" @endif
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="short_name">Concern Short Name (Show in menu bar)</label>
                                <input type="text"
                                       id="short_name"
                                       class="form-control"
                                       name="short_name"
                                       @if($concern?->short_name) value="{{ $concern?->short_name }}" @else placeholder="e.g Concern Short Name" @endif
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="link">Concern Website Link</label>
                                <input type="url"
                                       id="link"
                                       class="form-control"
                                       name="link"
                                       @if($concern?->link) value="{{ $concern?->link }}" @else placeholder="Link of your concern" @endif
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="address">Concern Address</label>
                                <input type="text"
                                       id="address"
                                       class="form-control"
                                       name="address"
                                       @if($concern?->link) value="{{ $concern?->link }}" @else placeholder="Link of your concern" @endif
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="phone">Concern phone</label>
                                <input type="text"
                                       id="phone"
                                       class="form-control"
                                       name="phone"
                                       @if($concern?->phone) value="{{ $concern?->phone }}" @else placeholder="Phone number of your concern" @endif
                                />
                            </div>
                            <div class="col-12 mb-1">
                                <label for="email">Concern email</label>
                                <input type="email"
                                       id="email"
                                       class="form-control"
                                       name="email"
                                       @if($concern?->email) value="{{ $concern?->email }}" @else placeholder="Email id of your concern" @endif
                                />
                            </div>

                            <div class="mt-1">
                                <label class="form-label fw-bolder font-size font-small-4 mb-50" for="full-container">Post Details</label>
                                <div id="full-container">
                                    <div class="editor">
                                        {!! $concern->about ?? '' !!}
                                    </div>
                                </div>
                                <input type="hidden" id="post_details" name="about" value="{{ $concern->about ?? ''  }}">
                            </div>
                            <button class="btn btn-primary mt-1" type="submit">Update Concern</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

