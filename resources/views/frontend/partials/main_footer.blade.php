<section class="section section-text-light section-background m-0" style="background: url('{{ asset('assets/frontend') }}/img/demos/business-consulting/contact/contact-background.jpg'); background-size: cover;">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="font-weight-bold">- Contact Us</h2>
                <p class="custom-opacity-font">
                    {{ get_setting('about') }}
                </p>
                <div class="row">
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Call Us</h4>
                        <a href="tel:+1234567890" class="text-decoration-none" target="_blank" title="Call Us">
                            <span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
                                <span class="info text-5">
                                    <span href="tel:{{ get_setting('phone') }}" class="action-info"> {{ get_setting('phone') }}</span>
                                </span>
                            </span>
                        </a>
                        <a href="tel:+1234567890" class="text-decoration-none" target="_blank" title="Call Us">
                            <span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
                                <span class="info text-5">
                                    <span href="tel:{{ get_setting('phone_second') }}" class="action-info"> {{ get_setting('phone_second') }}</span>
                                </span>
                            </span>
                        </a>
                    </div>

                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Our Location</h4>
                        <p class="custom-opacity-font">
                            {{ get_setting('address') }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Mail Us</h4>
                        <a href="mail: {{ get_setting('email') }}" class="text-decoration-none" target="_blank" title="Mail Us">
                            <span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
                                <span class="info text-5">
                                    <span class="__cf_email__" >
                                        <a class="text-white fs-5" href="mailto:info@mhgroup.com.bd" > {{ get_setting('email') }}</a>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Social Media</h4>
                        <ul class="social-icons social-icons-clean custom-social-icons-style-1 mt-2 custom-opacity-font">
                            @if(get_setting('facebook_profile'))
                                <li class="social-icons-facebook">
                                    <a href="{{ get_setting('facebook_profile') }}" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            @endif
                            @if(get_setting('twitter_profile'))
                                <li class="social-icons-twitter">
                                    <a href="{{ get_setting('twitter_profile') }}" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            @endif
                            @if(get_setting('instagram_profile'))
                                <li class="social-icons-instagram">
                                    <a href="{{get_setting('instagram_profile') }}" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            @endif
                            @if(get_setting('youtube'))
                                <li class="social-icons-instagram text-danger">
                                    <a href="{{ get_setting('youtube') }}" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            @endif
                            @if(get_setting('instagram_profile'))
                                <li class="social-icons-linkedin">
                                    <a href="{{ get_setting('instagram_profile') }}" target="_blank" title="Linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 custom-sm-margin-top">
                <h2 class="font-weight-bold">- Write Us</h2>
                <form action="{{ route('message.create') }}" method="POST" class="custom-contact-form-style-1 form-errors-light" >
                    @csrf
                    @if(Session::has('message'))
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> {{ Session::get('message') }}
                    </div>
                    @endif
                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <i class="icon-user icons text-color-primary"></i>
                                <input type="text" value="" data-msg-required="Please enter your name."
                                       maxlength="100" class="form-control" name="name"
                                       placeholder="Name*" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <i class="icon-envelope icons text-color-primary"></i>
                                <input type="email" value=""
                                       data-msg-required="Please enter your email address."
                                       data-msg-email="Please enter a valid email address."
                                       maxlength="100" class="form-control" name="email" placeholder="Email*" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <i class="icon-bubble icons text-color-primary"></i>
                                <textarea maxlength="5000" data-msg-required="Please enter your message."
                                          rows="10" class="form-control" name="message" placeholder="Message*" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="Submit Now"
                                   class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase"
                                   data-loading-text="Loading...">
                            </input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
