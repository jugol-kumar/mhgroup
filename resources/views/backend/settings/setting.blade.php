@extends('backend.app')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Website Setting</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <section class="app-dashboard">
                    <div class="card">
                        <div class="card-body border-bottom">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Settings</h4>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="nav flex-column nav-pills me-3 border text-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link active" id="v-pills-profile-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-profile"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-profile"
                                                        aria-selected="false">Profile</button>
                                                <button class="nav-link" id="v-pills-socials-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-socials"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-socials"
                                                        aria-selected="false">Social Links</button>
                                                <!--           <button class="nav-link"
                                                        id="v-pills-sms_api-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-sms_api"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-sms_api"
                                                        aria-selected="false">API Setup</button>
                                                <Link class="nav-link" :href="`${this.$page.props.ADMIN_URL}/admin-profile`">Profile Settings</Link>
            -->
                                                <!--
                                                <button class="nav-link"
                                                        id="v-pills-shipping_api-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-shipping"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-shipping"
                                                        aria-selected="false">Shipping Setup</button>
            -->
                                                <!--                                    <button class="nav-link"
                                                                                            id="v-pills-menu_api-tab"
                                                                                            data-bs-toggle="pill"
                                                                                            data-bs-target="#v-pills-menu"
                                                                                            type="button" role="tab"
                                                                                            aria-controls="v-pills-menu"
                                                                                            aria-selected="false">Menu Setup</button>-->
                                                <button class="nav-link"
                                                        id="v-pills-messages-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-messages"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-messages"
                                                        aria-selected="false">Apprience</button>

{{--
                                                <button class="nav-link"
                                                        id="v-pills-smtp-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-smtp"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-smtp"
                                                        aria-selected="false">SMTP Setup</button>--}}
                                                <button class="nav-link"
                                                        id="v-pills-map-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-map"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-map"
                                                        aria-selected="false">Google Map Setup</button>

                                                <button class="nav-link"
                                                        id="v-pills-video-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-video"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-video"
                                                        aria-selected="false">Video Content</button>

                                                <button class="nav-link"
                                                        id="v-pills-footer-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-footer"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-footer"
                                                        aria-selected="false">Footer Content</button>

                                                <button class="nav-link"
                                                        id="v-pills-admin_profile-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-admin_profile"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-admin_profile"
                                                        aria-selected="false">Admin Profile</button>

                                                <button class="nav-link"
                                                        id="v-pills-front_setup-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-front_setup"
                                                        type="button" role="tab"
                                                        aria-controls="v-pills-front_setup"
                                                        aria-selected="false">Font Setup</button>

<!--                                    <a :href="`${this.$page.props.auth.ADMIN_URL}/home-page-settings`" class="nav-link">Home Setting</a>-->
{{--                                                <a href="#" class="nav-link">Footer Setting</a>--}}
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="card">
                                                        <h2>App Profile</h2>
                                                        <div class="card-body">
                                                            <form class="form form-vertical" method="post" action="{{ route('admin.settings') }}">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <input type="hidden" name="types[]" value="app_name">
                                                                        <input  type="text" class="form-control mb-1" name="app_name" @if(get_setting('app_name')) value="{{ get_setting('app_name') }}" @else placeholder="App Name" @endif />
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <input type="hidden" name="types[]" value="address">
                                                                        <input  type="text" name="address" class="form-control mb-1" @if(get_setting('address')) value="{{ get_setting('address') }}" @else placeholder="Address" @endif/>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <input type="hidden" name="types[]" value="email">
                                                                        <input type="email" class="form-control mb-1" name="email" @if(get_setting('email')) value="{{ get_setting('email') }}" @else placeholder="example@yourdomain.com" @endif/>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <input type="hidden" name="types[]" value="phone">
                                                                        <input type="text" class="form-control mb-1" name="phone" @if(get_setting('phone')) value="{{ get_setting('phone') }}" @else placeholder="+8801*-******" @endif/>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <input type="hidden" name="types[]" value="phone_second">
                                                                        <input type="text" class="form-control mb-1" name="phone_second" @if(get_setting('phone_second')) value="{{ get_setting('phone_second') }}" @else placeholder="+8801*-******" @endif/>
                                                                    </div>


                                                                    <div class="col-12">
                                                                        <input type="hidden" name="types[]" value="about">
                                                                        <textarea rows="5"  type="text" name="about" class="form-control mb-1" @if(!get_setting('about')) placeholder="App Descriptions" @endif>{{ get_setting('about') ?? null }}</textarea>
                                                                    </div>

                                                                    <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                        <button class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-socials" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="card">
                                                        <h2>Social Media Setup</h2>
                                                        <div class="card-body">
                                                            <form class="form form-vertical" method="post" action="{{ route('admin.settings') }}">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-12 mb-1">
                                                                        <input type="hidden" name="types[]" value="facebook_profile">
                                                                        <input type="url" class="form-control" name="facebook_profile" @if(get_setting('facebook_profile')) value="{{ get_setting('facebook_profile') }}" @else  placeholder="fb.com/me" @endif />
                                                                    </div>

                                                                    <div class="col-12 mb-1">
                                                                        <input type="hidden" name="types[]" value="google_drive">
                                                                        <input type="url" class="form-control" name="google_drive" @if(get_setting('google_drive')) value="{{ get_setting('google_drive') }}" @else  placeholder="drive.google.com/me" @endif />
                                                                    </div>

                                                                    <div class="col-12 mb-1">
                                                                        <input type="hidden" name="types[]" value="youtube">
                                                                        <input type="url" class="form-control" name="youtube" @if(get_setting('youtube')) value="{{ get_setting('youtube') }}" @else placeholder="chanel.youtube.com/my-changel" @endif/>
                                                                    </div>


                                                                    <div class="col-12 mb-1">
                                                                        <input type="hidden" name="types[]" value="linkedin_profile">
                                                                        <input type="url" class="form-control" name="linkedin_profile" @if(get_setting('linkedin_profile')) value="{{ get_setting('linkedin_profile') }}" @else  placeholder="linkedin.com/me" @endif/>
                                                                    </div>


                                                                    <div class="col-12 mb-1">
                                                                        <input type="hidden" name="types[]" value="twitter_profile">
                                                                        <input type="url" class="form-control" name="twitter_profile" @if(get_setting('twitter_profile')) value="{{ get_setting('twitter_profile') }}" @else   placeholder="twitter.com/me" @endif/>
                                                                    </div>

                                                                    <div class="col-12 mb-1">
                                                                        <input type="hidden" name="types[]" value="instagram_profile">
                                                                        <input type="url" class="form-control" name="instagram_profile" @if(get_setting('instagram_profile')) value="{{ get_setting('instagram_profile') }}" @else   placeholder="instagram.com/me" @endif/>
                                                                    </div>


                                                                    <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                        <button class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="card">
                                                        <h2>Appearances Setup</h2>
                                                        <div class="card-body">
                                                            <form class="form form-vertical" action="{{ route('admin.settings') }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row mb-2">
                                                                    <div class="col">
                                                                        <input type="hidden" name="types[]" value="apprience">
                                                                        <label for="selectOption">Select Header Theme</label>
                                                                        <select class="form-control" name="apprience" id="selectOption">
                                                                            <option disabled>~~ Select Header Style ~~</option>
                                                                            <option value="true" {{ get_setting('apprience') == 'true' ? 'selected' : '' }}>Transparent</option>
                                                                            <option value="false" {{ get_setting('apprience') == 'false' ? 'selected' : '' }}>Background White</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col">
                                                                        <input type="hidden" name="types[]" value="slider_overlay">
                                                                        <label for="selectOption">Slider Overlay Setup</label>
                                                                        <select class="form-control" name="slider_overlay" id="selectOption">
                                                                            <option disabled>~~ Select Header Style ~~</option>
                                                                            <option value="true" {{ get_setting('slider_overlay') == 'true' ? 'selected' : '' }}>Overlay</option>
                                                                            <option value="false" {{ get_setting('slider_overlay') == 'false' ? 'selected' : '' }}>Transparent</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <input type="hidden" name="types[]" value="header_logo">
                                                                    <div class="col">
                                                                        {{ get_setting('header_logo') }}
                                                                        <p>Header Logo (82 * 100) px</p>
                                                                        @include('backend.components.feviconLogo', ['name' => 'header_logo', 'bg_image' => get_setting('header_logo')])
                                                                    </div>
                                                                    <div class="col">
                                                                        <input type="hidden" name="types[]" value="favicon">
                                                                        <p>Favicon Logo (16 * 16) px</p>
                                                                        @include('backend.components.feviconLogo', ['name' => 'favicon', 'bg_image' => get_setting('favicon')])
                                                                    </div>
                                                                    <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-menu" role="tabpanel" aria-labelledby="v-pills-menu">
                                                    <div class="card">
                                                        <h2>SMS API Credentials</h2>
                                                        <div class="card-body">
                                                            <form class="form form-vertical" @submit.prevent="updateBuisnessSetting()">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="row">
                                                                            data repeat

                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <h2 class="card-title">User Manual</h2>
                                                                        <table class="table table-bordered table-striped">
                                                                            <tbody>
                                                                            <tr>
                                                                                <th>Type</th>
                                                                                <th>Value</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Products</td>
                                                                                <td>/product/single-product/PRODUCT_SLUG</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Categories</td>
                                                                                <td>/products?category=CATEGORY_SLUG</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Brands</td>
                                                                                <td>/products?brand=BRAND_SLUG</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Pages</td>
                                                                                <td>/pages/PAGE_SLUG</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                    <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                        <button v-if="!isLoding" type="submit" disabled class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                            <div class="spinner-border text-white me-1"  role="status"></div>
                                                                            <span>Submit</span>
                                                                        </button>
                                                                        <button class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-map" role="tabpanel" aria-labelledby="v-pills-map">
                                                    <div class="card">
                                                        <h2>Google Map Setup</h2>
                                                        <form method="post" action="{{ route('admin.settings') }}" class="form form-vertical">
                                                            @csrf
                                                            <div>
                                                                <label for="">Address 1</label>
                                                                <input type="hidden" name="types[]" value="address_1">
                                                                <input type="text" class="form-control" name="address_1"  @if(get_setting('address_1')) value="{{ get_setting('address_1') }}" @else   placeholder="e.g first address ifrem" @endif/>
                                                            </div>

                                                            <div class="mt-1">
                                                                <label for="">Address 2</label>
                                                                <input type="hidden" name="types[]" value="address_2">
                                                                <input type="text" class="form-control" name="address_2"  @if(get_setting('address_2')) value="{{ get_setting('address_2') }}" @else   placeholder="e.g second address ifrem" @endif/>
                                                            </div>


                                                            <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                <button class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                    Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-video" role="tabpanel" aria-labelledby="v-pills-video">
                                                    <div class="card">
                                                        <h2>Home Video Content</h2>
                                                        <form method="post" action="{{ route('admin.settings') }}" class="form form-vertical">
                                                            @csrf
                                                            <div>
                                                                <input type="hidden" name="types[]" value="home_video_content">
                                                                <input type="text" class="form-control" name="home_video_content"  @if(get_setting('home_video_content')) value="{{ get_setting('home_video_content') }}" @else   placeholder="e.g As you like" @endif/>
                                                            </div>

                                                            <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                <button class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                    Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-footer" role="tabpanel" aria-labelledby="v-pills-footer">
                                                    <div class="card">
                                                        <h2>Footer Content</h2>
                                                        <form method="post" action="{{ route('admin.settings') }}" class="form form-vertical">
                                                            @csrf
                                                            <div>
                                                                <input type="hidden" name="types[]" value="footer_content">
                                                                <input type="text" class="form-control" name="footer_content"
                                                                       @if(get_setting('footer_content')) value="{{ get_setting('footer_content') }}" @else
                                                                       placeholder="e.g &copy; all right rechiverd" @endif/>
                                                            </div>

                                                            <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                <button class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                    Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-admin_profile" role="tabpanel" aria-labelledby="v-pills-admin_profile">
                                                    <div class="card">
                                                        <h2>Admin Profile</h2>
                                                        <form method="post" action="{{ route('admin.update_profile') }}" class="form form-vertical">
                                                            @csrf
                                                            <div>
                                                                <div class="col">
                                                                    <label for="">User Name</label>
                                                                    <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}"/>
                                                                </div>
                                                                <div class="col mt-1">
                                                                    <label for="">Email</label>
                                                                    <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}"/>
                                                                </div>
                                                                <div class="col mt-1">
                                                                    <label for="">Password</label>
                                                                    <input type="password" class="form-control" name="password" placeholder="e.g want to change then type new password!"/>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                <button class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                    Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-front_setup" role="tabpanel" aria-labelledby="v-pills-front_setup">
                                                    <div class="card">
                                                        <h2>Font Style Setup</h2>
                                                        <form method="post" action="{{ route('admin.settings') }}" class="form form-vertical">
                                                            @csrf
                                                            <div>
                                                                <div class="col">
                                                                    <label for="">Import url</label>
                                                                    <input type="hidden" name="types[]" value="font_url">
                                                                    <input type="text" class="form-control" name="font_url" @if(get_setting('font_url')) value="{{ get_setting('font_url')  }}" @else placeholder="e.g @import font url" @endif/>
                                                                </div>

                                                                <div class="col mt-1">
                                                                    <label for="">Font Family</label>
                                                                    <input type="hidden" name="types[]" value="font_family">
                                                                    <input type="text" class="form-control" name="font_family" @if(get_setting('font_family')) value="{{ get_setting('font_family')  }}" @else placeholder="e.g font family" @endif/>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                    Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection