@extends('layouts.app')
@section('content')

        <!-- Page Content-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="log-content">
                    <div class="center">
                        <img alt="" src="img/user.png" class="img-circle">
                        <h4>User Login!</h4>
                    </div>
                    <form class="login-form" action="" method="post" data-reactid="">
                        <div class="form-group col-md-12">
                            <label for="signinuser" class="text-muted">Username</label>
                            <input id="signinuser" type="email" placeholder="Enter Username or Email id" class="form-control" required="required" autocomplete="off">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="signinpass" class="text-muted">Password</label>
                            <input id="signinpass" type="Password" placeholder="Password" class="form-control" required="required" autocomplete="off">
                        </div>
                        <div class="square-blue form-group col-md-12">
                            <label class="ui-checkbox">
                                <input name="checkbox1" type="checkbox" value="option1">
                                <span> <strong> Remember Me </strong> </span>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn  btn-primary btn_custom">Sign In</button>
                            <p>Not a member?<a href="/signup"> Join Now</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</header>

@endsection