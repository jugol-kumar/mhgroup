@extends('backend.app')


@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2>Chairman Message</h2>
                        <form action="{{ route('admin.settings') }}" method="post" class="mt-5" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="types[]" value="concern_image">
                            @include('backend.components.feviconLogo', ['name' => 'concern_image', 'bg_image' => get_setting('concern_image') ?? ''])
                            <div class="col-12 mb-1">
                                <input type="hidden" name="types[]" value="concern_message">
                                <input type="text" class="form-control" name="concern_message[section_title]" placeholder="section title"
                                       @if(json_decode(get_setting('concern_message'))?->section_title)
                                       value="{{ json_decode(get_setting('concern_message'))?->section_title }}"
                                       @else
                                       placeholder="e.g About Title"
                                        @endif/>
                            </div>
                            <div class="col-12 mb-1">
                                <textarea rows="8" class="form-control" name="concern_message[section_description]"  placeholder="section description">@if(json_decode(get_setting('concern_message'))?->section_description){{json_decode(get_setting('concern_message'))?->section_description}}@endif</textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Save Section</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

