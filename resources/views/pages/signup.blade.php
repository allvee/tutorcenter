@extends('layouts.app')
@section('content')

        <!-- Page Content-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="log-content">
                    <div class="col-md-12">
                        <h2>Join Now</h2>
                    </div>
                    <form class="login-form" action="" method="post" data-reactid="">
                        <div class="form-group col-md-12">
                            <!-- <label for="signupname" class="text-muted">Full Name</label> -->
                            <input id="signupname" type="text" placeholder="First Name" class="form-control" required="required" autocomplete="off">
                        </div>
                        <div class="form-group col-md-12">
                            <!-- <label for="signupname" class="text-muted">Phone Number</label> -->
                            <input id="signupname" type="Number" placeholder="Phone Number" class="form-control" required="required" autocomplete="off">
                        </div>
                        <div class="form-group col-md-12">
                            <!-- <label for="signupemail" class="text-muted">Email</label> -->
                            <input id="signupemail" type="email" placeholder="Enter Your Email" class="form-control" required="required" autocomplete="off">
                        </div>
                        <div class="form-group col-md-12">
                            <!-- <label for="signinpass" class="text-muted">Password</label> -->
                            <input id="signinpass" type="Password" placeholder="Password" class="form-control" required="required" autocomplete="off">
                        </div>
                        <div class="form-group col-md-12">
                            <!-- <label for="signinpassc" class="text-muted">Re-Enter Password</label> -->
                            <input id="signinpassc" type="Password" placeholder="Re-Enter Password" class="form-control" required="required" autocomplete="off">
                        </div>
                        <div class="form-group col-md-12">
                            <input id="signinpassc" type="text" placeholder="Institute Name" class="form-control" required="required" autocomplete="off">
                        </div>
                        <div class="form-group col-md-12">
                            <select class="form-control" id="sel1">
                                <option value="">Student/Teacher</option>
                                <option value="">Teacher</option>
                                <option value="">Student</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <select class="form-control" id="sel1">
                                <option value="">Male/Female</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>
                        <div class="square-blue form-group col-md-12">
                            <label class="ui-checkbox">
                                <input name="checkbox1" type="checkbox" value="option1">
                                <span><strong>I agree to the </strong><a href="#">Terms of Use</a> </span>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn  btn-primary btn_custom">Join Now</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</header>

@endsection