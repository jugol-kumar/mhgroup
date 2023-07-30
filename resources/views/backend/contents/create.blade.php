@extends('backend.app')


@section('content')
    <div class="content-body">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="row match-height">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h2>About Section</h2>
                                <form action="{{ route('admin.settings') }}" method="post" class="mt-5" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 mb-1">
                                        <input type="hidden" name="types[]" value="about_section">
                                        <input type="text" class="form-control" name="about_section[section_title]"
                                            @if(json_decode(get_setting('about_section'))?->section_title)
                                                value="{{ json_decode(get_setting('about_section'))?->section_title }}"
                                            @else
                                                placeholder="e.g About Title"
                                            @endif
                                        />
                                    </div>
                                    <div class="col-12 mb-1">
                                        <textarea rows="8" class="form-control" name="about_section[section_description]" placeholder="section description">@if(json_decode(get_setting('about_section'))?->section_description){{json_decode(get_setting('about_section'))?->section_description}}@endif</textarea>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <input type="text" class="form-control" name="about_section[footer_text]"
                                               @if(json_decode(get_setting('about_section'))?->footer_text)
                                               value="{{ json_decode(get_setting('about_section'))?->footer_text }}"
                                               @else
                                               placeholder="e.g About Title"
                                                @endif/>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save Section</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h2>Aspiration & Vision</h2>
                                <form action="{{ route('admin.settings') }}" method="post" class="mt-5" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 mb-1">
                                        <input type="hidden" name="types[]" value="aspiration_vision">
                                        <input type="text" class="form-control" name="aspiration_vision[section_title]"
                                           @if(json_decode(get_setting('aspiration_vision'))?->section_title)
                                                value="{{ json_decode(get_setting('aspiration_vision'))?->section_title }}"
                                           @else
                                                placeholder="e.g About Title"
                                            @endif/>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <textarea rows="8" class="form-control" name="aspiration_vision[section_description]" placeholder="section description">@if(json_decode(get_setting('aspiration_vision'))?->section_description){{json_decode(get_setting('aspiration_vision'))?->section_description}}@endif</textarea>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <input type="text" class="form-control" name="aspiration_vision[footer_text]" placeholder="footer text"
                                           @if(json_decode(get_setting('aspiration_vision'))?->footer_text)
                                                value="{{ json_decode(get_setting('aspiration_vision'))?->footer_text }}"
                                           @else
                                                placeholder="e.g About Title"
                                           @endif/>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save Section</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h2>Chairman Message</h2>
                                <form action="{{ route('admin.settings') }}" method="post" class="mt-5" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 mb-1">
                                        <input type="hidden" name="types[]" value="chairman_message">
                                        <input type="text" class="form-control" name="chairman_message[section_title]" placeholder="section title"
                                           @if(json_decode(get_setting('chairman_message'))?->section_title)
                                                value="{{ json_decode(get_setting('chairman_message'))?->section_title }}"
                                           @else
                                                placeholder="e.g About Title"
                                           @endif/>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <textarea rows="8" class="form-control" name="chairman_message[section_description]"  placeholder="section description">@if(json_decode(get_setting('chairman_message'))?->section_description){{json_decode(get_setting('chairman_message'))?->section_description}}@endif</textarea>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <input type="text" class="form-control" name="chairman_message[footer_text]" placeholder="footer text"
                                           @if(json_decode(get_setting('chairman_message'))?->footer_text)
                                                value="{{ json_decode(get_setting('chairman_message'))?->footer_text }}"
                                           @else
                                                placeholder="e.g About Title"
                                           @endif/>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save Section</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h2>Quick Policy</h2>
                                <form action="{{ route('admin.settings') }}" method="post" class="mt-5" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 mb-1">
                                        <input type="hidden" name="types[]" value="quick_policy">
                                        <input type="text" class="form-control" name="quick_policy[section_title]" placeholder="section title"
                                           @if(json_decode(get_setting('quick_policy'))?->section_title)
                                                value="{{ json_decode(get_setting('quick_policy'))?->section_title }}"
                                           @else
                                                placeholder="e.g About Title"
                                           @endif/>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <textarea rows="8" class="form-control" name="quick_policy[section_description]" placeholder="section description">@if(json_decode(get_setting('quick_policy'))?->section_description){{json_decode(get_setting('quick_policy'))?->section_description}}@endif</textarea>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <input type="text" class="form-control" name="quick_policy[footer_text]" placeholder="footer text"
                                           @if(json_decode(get_setting('quick_policy'))?->footer_text)
                                                value="{{ json_decode(get_setting('quick_policy'))?->footer_text }}"
                                           @else
                                                placeholder="e.g About Title"
                                           @endif/>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save Section</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

