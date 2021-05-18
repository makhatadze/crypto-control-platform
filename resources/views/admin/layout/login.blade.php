@extends('.admin.layout.base')

@section('body')
    <body class="sticky-header">
    @yield('content')
    <!-- BEGIN: JS Assets-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- END: JS Assets-->
    @yield('script')
    </body>
@endsection