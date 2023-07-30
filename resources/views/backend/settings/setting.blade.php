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
                <div class="alert alert-primary" role="alert">
                    <div class="alert-body">
                        <strong>Info:</strong> Please check the&nbsp;<a class="text-primary" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-layout-full.html" target="_blank">Layout full documentation</a>&nbsp; for more details.
                    </div>
                </div>


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

                                                                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
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
                                                                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
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
                                                                <div class="row">
                                                                    <input type="hidden" name="types[]" value="header_logo">
                                                                    <div class="col">
                                                                        @include('backend.components.feviconLogo', ['name' => 'header_logo', 'bgImage' => get_setting('header_logo')])
                                                                    </div>
                                                                    <div class="col">
                                                                        <input type="hidden" name="types[]" value="favicon">
                                                                        @include('backend.components.feviconLogo', ['name' => 'favicon', 'bgImage' => get_setting('favicon')])
                                                                    </div>
                                                                    <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                            Submit
                                                                        </button>
                                                                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-shipping" role="tabpanel" aria-labelledby="v-pills-shipping_api-tab">
                                                    <div class="card">
                                                        <h2>Shipping Setting</h2>
                                                        <div class="card-body d-flex justify-content-around">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <form class="form form-vertical" @submit.prevent="updateBuisnessSetting()">
                                                                        <div class="row">
                                                                            <div class="">
                                                                                <label class="label card-text">Shipping Config</label>
                                                                                <select v-model="createForm.shippingType" @change="shiConfig" class="form-control form-select">
                                                                                    <option value="null" disabled>Select Sipping Type</option>
                                                                                    <option value="f">Free Shipping</option>
                                                                                    <option value="p">Product Wish</option>
                                                                                    <!--                                                                        <option value="c">City Wise</option>-->
                                                                                </select>
                                                                            </div>

                                                                            <div class="d-flex align-items-center mt-1" v-if="shippingStatus === 'p'">
                                                                                <input type="text" class="form-control" v-model="createForm.inSizeDhaka" placeholder="Inside Dhaka" style="border-radius: 5px 0 0 5px;">
                                                                                <input type="text" class="form-control" v-model="createForm.outSizeDhaka" placeholder="Outside Dhaka" style="border-left: 0;border-radius: 0 5px 5px 0;">
                                                                            </div>


                                                                            <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                                <button v-if="!isLoding" type="submit" disabled class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                                    <div class="spinner-border text-white me-1"  role="status"></div>
                                                                                    <span>Submit</span>
                                                                                </button>
                                                                                <button v-else class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                                    Submit
                                                                                </button>

                                                                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="col">
                                                                    <label>Options Work</label>
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item">
                                                                            1. Product Wise Shipping Cost calulation: Shipping cost is calculate by addition of each product shipping cost.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            2. Flat Rate Shipping Cost calulation: How many products a customer purchase, doesn't matter. Shipping cost is fixed.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            3. Seller Wise Flat Shipping Cost calulation: Fixed rate for each seller. If customers purchase 2 product from two seller shipping cost is calculated by addition of each seller flat shipping cost.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            4. Area Wise Flat Shipping Cost calulation: Fixed rate for each area. If customers purchase multiple products from one seller shipping cost is calculated by the customer shipping area. To configure area wise shipping cost go to Shipping Cities.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-home_cats" role="tabpanel" aria-labelledby="v-pills-home_cats">
                                                    <div class="card">
                                                        <h2>Add Some Categories</h2>
                                                        <div class="card-body">
                                                            about here
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
                                                                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="tab-pane fade" id="v-pills-smtp" role="tabpanel" aria-labelledby="v-pills-smtp">
                                                    <div class="card">
                                                        <h2>SMTP Setup</h2>
                                                        <form class="form form-vertical" @submit.prevent="updateMailSetup()">
                                                            <div class="row">
                                                                <div class="col-12 mb-1">
                                                                    <label>Mail Driver</label>
                                                                    <vSelect :options="smtpMillers"
                                                                             v-model="mailSetup.mailDriver" label="name"
                                                                             :reduce="item =>item.name"
                                                                             class="text-capitalize"
                                                                             placeholder="e.g Mail Driver">
                                                                    </vSelect>
                                                                </div>

                                                                <div class="col-12 mb-1">
                                                                    <label>Mail Host</label>
                                                                    <input type="text" class="form-control" v-model="mailSetup.mailHost" placeholder="e.g Mail Host" />
                                                                </div>

                                                                <div class="col-12 mb-1">
                                                                    <label>Mail Port</label>
                                                                    <input type="text" class="form-control" v-model="mailSetup.mailPort" placeholder="e.g Mail Port" />
                                                                </div>


                                                                <div class="col-12 mb-1">
                                                                    <label>Username</label>
                                                                    <input type="text" class="form-control" v-model="mailSetup.username" placeholder="e.g Username" />
                                                                </div>


                                                                <div class="col-12 mb-1">
                                                                    <label>Password</label>
                                                                    <input type="text" class="form-control" v-model="mailSetup.password" placeholder="e.g Password" />
                                                                </div>

                                                                <div class="col-12 mb-1">
                                                                    <label>From Email</label>
                                                                    <input type="text" class="form-control" v-model="mailSetup.fromEmail" placeholder="e.g Form Email" />
                                                                </div>

                                                                <div class="col-12 mb-1">
                                                                    <label>From Name</label>
                                                                    <input type="text" class="form-control" v-model="mailSetup.fromName" placeholder="e.g Form Name" />
                                                                </div>

                                                                <div class="col-12 mb-1">
                                                                    <label>Encryption</label>
                                                                    <select class="form-control" v-model="mailSetup.encryption">
                                                                        <option disabled selected value="">Select Mail Encryption</option>
                                                                        <option value="null">NULL</option>
                                                                        <option value="tls">TLS</option>
                                                                        <option value="ssl">SSL</option>
                                                                    </select>
                                                                </div>


                                                                <div class="col-12 mt-2 d-inline-flex align-item-center">
                                                                    <button v-if="!isLoding" type="submit" disabled class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                        <div class="spinner-border text-white me-1"  role="status"></div>
                                                                        <span>Submit</span>
                                                                    </button>

                                                                    <button v-else class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                        Submit
                                                                    </button>
                                                                    <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                                                </div>
                                                            </div>
                                                        </form>
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
                                                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
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
                                                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
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