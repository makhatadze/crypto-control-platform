<!-- header section start-->
<div class="header-section">

    <a class="toggle-btn"><i class="fa fa-bars"></i></a>


    <!--notification menu start -->
    <div class="menu-right">
        <ul class="notification-menu">
            <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/images/users/avatar-6.jpg" alt="" />
                    {{auth()->user()->name}}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                    <li> <a href="{{route('logout')}}"> <i class="fa fa-lock"></i> Logout </a> </li>
                </ul>
            </li>

        </ul>
    </div>
    <!--notification menu end -->

</div>
<!-- header section end-->