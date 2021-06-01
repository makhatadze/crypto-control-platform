@extends('client.layout.base')

@section('body')
    <body>
    <!-- Start preloader -->
    <!-- <div id="preloader" style="display background-color: #121d33;"></div> -->
    <!-- End preloader -->

    <!-- Top scroll -->
    <div class="top-scroll transition fixed">
        <a href="#banner" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    </div>
    <!-- Top scroll End -->

    <!-- header begin -->
    @include('client.layout.components.header')
    <!-- header end -->

    @yield('content')

    <!-- footer begin -->
    @include('client.layout.components.footer')
    <!-- footer end -->


    <!-- BEGIN: JS Assets-->
    <script src="{{asset('client/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('client/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('client/js/snap.svg-min.js')}}"></script>
    <script src="{{asset('client/js/jquery.listtopie.min.js')}}"></script>
    <script src="{{asset('client/js/animation.js')}}"></script>
    <script src="{{asset('client/js/custom.js')}}"></script>
    <script src="{{asset('client/js/popup.js')}}"></script>
    <!-- END: JS Assets-->
    </body>
@endsection
