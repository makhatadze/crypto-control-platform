@extends('client.layout.main')

@section('head')

@endsection

@section('content')
    <div class="event_registration_form">
        <div class="head">EVENT REGISTERATION FORM</div>
        <div class="form_area">
            <div class="input">
                <p class='label'>Name</p>
                <input type="text" placeholder="First Name" />
                <input type="text" placeholder="Last Name" />
            </div>
            <div class="input">
                <p class='label'>Phone</p>
                <input type="text" placeholder="Phone Number" />
            </div>
            <div class="input">
                <p class='label'>Email</p>
                <input type="text" placeholder="example@email.com" />
            </div>
            <div class="input">
                <p class='label'>Password</p>
                <input type="password"/>
            </div>
            <div class="input">
                <p class='label'>Country</p>
                <input type="text" placeholder="Choose Country" />
            </div>
            <button class="register_btn" id='rg_btn_form'>REGISTER</button>
        </div>
    </div>
    <div class="popup_bg_form">
        <div class="popup_text"> Due to COVID situation within U.S. & high influx  of customers, SafeCrypto decide to temporary cease registration & verification of new customers. Thank you for you patience! SafeCrypto Team</div>
    </div>
@endsection



