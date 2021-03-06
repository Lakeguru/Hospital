@extends('layouts.adminauth')

@section('content')
    @include('AdminAuth.signupnavbar')
    <div class="page-header">
        <div class="page-header-image" style="background-image:url(assetss/images/login.jpg)"></div>
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card-plain">
                    <form class="form" method="post" action="/signup">
                        @csrf
                        <div class="header">
                            <div class="logo-container">
                                <img src="assets/images/logo.svg" alt="">a
                            </div>
                            <h5>Sign Up</h5>
                            <span>Register a new membership</span>
                        </div>
                        <div class="content">
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter User Name">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Enter Email">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                            </div>
                            <div class="input-group">
                                <input type="password" placeholder="Password" name="password" class="form-control" />
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                            </div>
                            <div class="input-group">
                                <input type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control" />
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input id="terms" type="checkbox">
                            <label for="terms">
                               Access for new User</a>
                            </label>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @include('AdminAuth.signupfooter')
@endsection
