<header class="transition fixed">
    <div class="container">
        <div class="row flex-align">
            <div class="col-lg-4 col-md-3 col-8">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="/client/images/logo.png" width="250px" class="transition" alt="SafeCrypto"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-4 text-right">
                <div class="menu-toggle">
                    <span></span>
                </div>
                <div class="menu">
                    <ul class="d-inline-block">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('aboutUs')}}">About Us</a></li>
                        <li><a href="{{route('roadMap')}}">Roadmap</a></li>
                        <li><a href="{{route('contact')}}">Contacts</a></li>
                        @if(!auth()->user())
                        <li><a href="{{route('signUp')}}">Sign Up</a></li>
                        @else
                            <li><a href="{{route('myPortal')}}">My Portal</a></li>
                            <li><a href="{{route('logout')}}">log out</a></li>
                        @endif
                    </ul>
                    @if(!auth()->user())
                        <div class="signin d-inline-block">
                            <a href="{{route('signIn')}}" class="btn">Sign in</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>