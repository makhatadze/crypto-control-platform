@extends('client.layout.main')

@section('head')

@endsection
@section('content')
    <div class="event_registration_form">
        <div class="head">Welcome Back</div>
        <form class="form_area" action="{{route('login')}}" method="post">
            <div class="input  @error('email') has-error @enderror">
                <p class='label'>Email</p>
                <input type="text" name="email" placeholder="example@email.com" />
                @error('email')
                <div id="email-error" class="help-block animated fadeInDown">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="input  @error('password') has-error @enderror">
                <p class='label'>Password</p>
                <input type="password" name="password" />
                @error('password')
                <div id="password-error" class="help-block animated fadeInDown">
                    {{$message}}
                </div>
                @enderror
            </div>
            @csrf
            <button class="register_btn" type="submit">Login</button>
        </form>
    </div>
@endsection



