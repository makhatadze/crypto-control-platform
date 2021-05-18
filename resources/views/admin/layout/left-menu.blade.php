@extends('admin.layout.main')

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
            <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="assets/images/logo-icon.png" alt=""></a>
        </div>
        <!--logo-->

        <div class="left-side-inner">
            <!--Sidebar nav-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list"><a href="index.html"><i class="icon-home"></i> <span>Dashboard</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="index.html"> Dashboard 1</a></li>
                        <li><a href="dashboard2.html"> Dashboard 2</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-layers"></i> <span>UI Elements</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="ui-buttons.html"> Buttons</a></li>
                        <li><a href="ui-panels.html"> Panels</a></li>
                        <li><a href="ui-sweet-alert.html">Sweet alert</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-alert-notification.html">Alert &amp; notification</a></li>
                        <li><a href="ui-checkbox-radio.html">Checkbox-radios</a></li>
                        <li><a href="ui-range-slider.html">Range slider</a></li>
                        <li><a href="ui-modals-tooltip.html">Modals Tooltip</a></li>
                        <li><a href="typography.html">Typography</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-grid"></i> <span>Tables</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="table-static.html"> Basic Table</a></li>
                        <li><a href="table-responsive.html">Responsive Table</a></li>
                        <li><a href="table-datatable.html">Data Tables</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-envelope-open"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="inbox.html"> Inbox</a></li>
                        <li><a href="compose.html"> Compose Mail</a></li>
                        <li><a href="message-view.html"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list nav-active"><a href="#"><i class="icon-loop"></i> <span>Forms</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="form-basic.html"> Form Layouts</a></li>
                        <li><a href="form-element.html"> Form Components</a></li>
                        <li class="active"><a href="form-wizard.html"> Form Wizards</a></li>
                        <li><a href="form-pickers.html"> Form Pickers</a></li>
                        <li><a href="form-validation.html"> Form Validation</a></li>
                        <li><a href="image-crop.html">Image Crop</a></li>
                        <li><a href="form-xeditable.html">X-editable</a></li>
                        <li><a href="form-editors.html">Editors</a></li>
                        <li><a href="form-upload.html">File Dropzone</a></li>
                    </ul>
                </li>


                <li class="menu-list"><a href="#"><i class="icon-film"></i> <span>Icons</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="icon-font-awesome.html"> Fontawesome</a></li>
                        <li><a href="icon-simple-lineicon.html">Simple Line Icon</a></li>
                        <li><a href="icon-themify.html">Themify Icons</a></li>
                        <li><a href="icon-material-design.html">Material Design Icons</a></li>
                        <li><a href="icon-ion.html">Ions Icon </a></li>
                    </ul>
                </li>


                <li><a href="calendar.html"><i class="icon-note"></i> <span>Calendar</span></a></li>
                <li><a href="widget.html"><i class="icon-wrench"></i> <span>Widget</span></a></li>

                <li class="menu-list"><a href="#"><i class="icon-pie-chart"></i> <span>Charts</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="flot-chart.html"> Flot Charts</a></li>
                        <li><a href="morris-chart.html"> Morris Charts</a></li>
                        <li><a href="chart-js.html"> Chartjs</a></li>
                        <li><a href="chart-sparkline.html"> Chart Sparkline</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-location-pin"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google-map.html"> Google Map</a></li>
                        <li><a href="vector-map.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-folder"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="faq.html"> FAQ</a></li>
                        <li><a href="profile.html"> Profile</a></li>
                        <li><a href="invoice.html"> Invoice</a></li>
                        <li><a href="timeline.html"> Timeline</a></li>
                        <li><a href="email-template.html"> Email Template</a></li>
                        <li><a href="pricing-table.html"> Pricing Table</a></li>
                        <li><a href="search-result.html"> Search Result</a></li>
                        <li><a href="error-400.html"> 400 Error</a></li>
                        <li><a href="error-403.html"> 403 Error</a></li>
                        <li><a href="error-404.html"> 404 Error</a></li>
                        <li><a href="error-500.html"> 500 Error</a></li>
                        <li><a href="error-503.html"> 503 Error</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-lock"></i> <span>Login</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="login.html"> Login </a></li>
                        <li><a href="forgot-password.html"> Forgot Password </a></li>
                        <li><a href="registration.html"> Registration </a></li>
                        <li><a href="locked.html"> Lockscreen </a></li>
                    </ul>
                </li>

            </ul>
            <!--End sidebar nav-->

        </div>
    </div>
    <!--End left side menu-->

    <!-- main content start-->
    <div class="main-content">
    @include('admin.layout.components.header')
        <!--body wrapper start-->
        <div class="wrapper">
            @include('admin.layout.components.breadcrumb')
            @yield('wrapper')
        </div>
        <!-- End Wrapper-->
        @include('admin.layout.components.footer')
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

