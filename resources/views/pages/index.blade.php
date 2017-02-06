@extends('layouts.app')
@section('content')

        <!-- Page Content-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1 style="color: #fff;">Hire the right tutor today!</h1>
                        <a href="/favor" class="btn btn-outline btn-xl page-scroll">Hire a tutor (It's <span class="free">Free!</span>)</a>
                        <h5 class=""><span style="color: #fff;">Want to become a Tutor?</span>
                            <a href="/signup" style="color: #0fe8d2;font-weight: bold;">Join Now</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                <img src="img/demo-screen-1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="download" class="download bg-primary text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="section-heading">Stop waiting. Get the right tutor today.</h2>
                <p>Our app is available on any mobile device! Download now to get started!</p>
                <div class="badges">
                    <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
                    <!-- <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features" class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>How it works for students / parents</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                <img src="img/demo-screen-1.jpg" class="img-responsive" alt=""> </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-screen-smartphone text-primary"></i>
                                <h3>Post your Tutor requirements</h3>
                                <p class="text-muted">Post your Tutor requirements. Our system will analyze it and find tutor whose expertise will strongly match your demand.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-camera text-primary"></i>
                                <h3>Get the maximum 5 best tutor CVs</h3>
                                <p class="text-muted">You'll receive the 5 best CV's in your INBOX and EMAIL according to your Tutor requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-present text-primary"></i>
                                <h3>Select the best one and Start Learning</h3>
                                <p class="text-muted">Choose the best one among the 5 CV's. Offer the selected Tutor for few trial classes before taking the regular classes. Give us your feedback and start Learning.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <img src="img/login.jpg" alt="Log in" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="tutor_panel" class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>How it works for tutors</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-screen-smartphone text-primary"></i>
                                <h3>Create a free Account</h3>
                                <p class="text-muted">Make your profile in minutes. Add your preferred locations, classes/courses, expected salary and more.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-camera text-primary"></i>
                                <h3>Get free tutoring job alerts</h3>
                                <p class="text-muted">You'll receive the 5 best CV's in your INBOX and EMAIL according to your Tutor requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-present text-primary"></i>
                                <h3>Select the best one and Start Learning</h3>
                                <p class="text-muted">Choose the best one among the 5 CV's. Offer the selected Tutor for few trial classes before taking the regular classes. Give us your feedback and start Learning.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <img src="img/create_acc.jpg" alt="create_acc" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                <img src="img/demo-screen-1.jpg" class="img-responsive" alt=""> </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="cta-content">
        <div class="container">
            <h2>Stop waiting.<br>Get the right tutor today.</h2>
            <a href="#contact" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section id="contact" class="contact">
    <div class="container">
        <h2>We <i class="fa fa-heart"></i> new friends!</h2>
        <ul class="list-inline list-social">
            <li class="social-twitter">
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="social-facebook">
                <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="social-google-plus">
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
        </ul>
    </div>
</section>

@endsection