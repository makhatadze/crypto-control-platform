@extends('layout.auth')
@section('head')
    <link rel="stylesheet" href="{{ asset('../assets/css/icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('../assets/css/responsive.css') }}"/>

    <title>Register - Cryptcon</title>
@endsection

@section('content')
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="login-wrapper">
                    <div class="login-inner">

                        <div class="logo">
                            <img src="/assets/images/logo-dark.png" alt="logo"/>
                        </div>

                        <h2 class="header-title text-center">Sign Up</h2>

                        <form method="POST" action="{{route('register')}}">
                            <div class="form-group @error('name') has-error @enderror">
                                <input type="text" class="form-control" name="name" placeholder="Full Name">
                                @error('name')
                                <div id="name-error" class="help-block animated fadeInDown">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group @error('phone') has-error @enderror">
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                @error('phone')
                                <div id="phone-error" class="help-block animated fadeInDown">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group @error('email') has-error @enderror">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                                @error('email')
                                <div id="email-error" class="help-block animated fadeInDown">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group @error('password') has-error @enderror">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                @error('password')
                                <div id="password-error" class="help-block animated fadeInDown">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="pull-left">
                                    <div class="checkbox primary">

                                    </div>
                                </div>

                            </div>
                            @csrf
                            <div class="form-group">
                                <input type="submit" value="Sign Up" class="btn btn-primary btn-block" >
                            </div>
                            <div class="form-group text-center">
                                Already have an account?  <a href="{{route('loginView')}}">Sign In </a>
                            </div>
                        </form>

                        <div class="copy-text">
                            <p class="m-0">2021 &copy; Insite International</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection