@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('../assets/plugins/jquery-steps/css/jquery.steps.css') }}"/>
    <link rel="stylesheet" href="{{ asset('../assets/css/icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('../assets/css/responsive.css') }}"/>

    @yield('subhead')
@endsection

@section('content')
    <!--Start left side Menu-->
    <div class="left-side sticky-left-side">

        <!--logo-->
        <div class="logo">
            <a href="/"><img src="/favicon.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="/"><img src="/favicon.png" alt=""></a>
        </div>
        <!--logo-->

        <div class="left-side-inner">
            @user()
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="{{route('myWalletIndex')}}"><i class="icon-wallet"></i> <span>My Wallet</span></a></li>
            </ul>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="{{route('verifyIndex')}}"><i class="icon-check"></i> <span>Verification</span></a></li>
            </ul>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="{{route('depositIndex')}}"><i class="icon-login"></i> <span>Deposit</span></a></li>
            </ul>
            @if(auth()->user()->verify === 1)
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="{{route('withdrawalIndex')}}"><i class="icon-logout"></i> <span>Withdraw</span></a></li>
                </ul>
            @endif
            @enduser
            @role('admin')
            <!--Sidebar nav-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="{{route('userIndex')}}"><i class="icon-people"></i> <span>Users</span></a></li>
            </ul>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="{{route('adminVerifyIndex')}}"><i class="icon-check"></i> <span>Verification</span></a></li>
            </ul>
            <!--End sidebar nav-->
            @endrole
        </div>
    </div>
    <!--End left side menu-->

    <!-- main content start-->
    <div class="main-content">
    @include('layout.components.header')
        <!--body wrapper start-->
        <div class="wrapper">
            @include('layout.components.breadcrumb')
            @yield('wrapper')
        </div>
        <!-- End Wrapper-->
        @include('layout.components.footer')
    </div>
    <!--End main content -->

    <!-- BEGIN: JS Assets-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>


    <script src="{{asset('assets/pages/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-steps/js/jquery.steps.min.js')}}"></script>


    <script>
        $("#example-basic").steps({
            headerTag: "h3",
            bodyTag: "section",

            autoFocus: true
        });
        //steps with form
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                alert("Submitted!");
            }
        });
    </script>
    <!-- END: JS Assets-->
@endsection

