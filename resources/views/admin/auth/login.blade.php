@extends('admin.layout.login')

@section('head')
    <link rel="stylesheet" href="{{ asset('../assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets/css/responsive.css') }}" />

    <title>Login - Crypto Admin</title>
@endsection

@section('content')
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="login-wrapper">
                    <div class="login-inner">

                        <div class="logo">
                            <img src="assets/images/logo-dark.png"  alt="logo"/>
                        </div>

                        <h2 class="header-title text-center">Login</h2>

                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Username" >
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Password" >
                            </div>

                            <div class="form-group">
                                <div class="pull-left">
                                    <div class="checkbox primary">
                                        <input  id="checkbox-2" type="checkbox">
                                        <label for="checkbox-2">Remember me</label>
                                    </div>
                                </div>

                                <div class="pull-right">
                                    <a href="reset-password.html" class="a-link">
                                        <i class="fa fa-unlock-alt"></i> Forgot password?
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-block" >
                            </div>

                            <div class="form-group text-center">
                                Don't have an account?  <a href="registration.html">Sign Up </a>
                            </div>

                        </form>

                        <div class="copy-text">
                            <p class="m-0">2017 &copy; Meter admin</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection