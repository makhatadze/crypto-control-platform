@extends('layout.left-menu')
@section('subhead')
    <title>Deposit</title>
@endsection
@section('wrapper')
    <div class="col-md-6">
        <div class="white-box" style="border-radius: 10px">
            <form class="" action="{{route('setWallet', $user->id)}}" method="POST">
                @csrf
                <h2 class="header-title">Deposit</h2>
                <h4>STEP 1/2</h4>

                <div class="form-group @error('fullName') has-error @enderror">
                    <input class="form-control" name="fullName" placeholder="Full name" type="text">
                    @error('fullName')
                    <div id="email-error" class="help-block animated fadeInDown">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <h4>Card Information</h4>

                <div class="form-group @error('card_number') has-error @enderror">
                    <input class="form-control" name="card_number" placeholder="1234 5678 1234 5678" type="number">
                    @error('card_number')
                    <div id="email-error" class="help-block animated fadeInDown">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group @error('address') has-error @enderror">
                    <input class="form-control" name="address" placeholder="Address" type="text">
                    @error('address')
                    <div id="email-error" class="help-block animated fadeInDown">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group" style="display:flex;">
                    <div class="form-group @error('date_expiry') has-error @enderror" style="margin-right: 10px">
                        <input class="form-control" name="date_expiry" placeholder="12/23"
                               type="text">
                        @error('date_expiry')
                        <div id="email-error" class="help-block animated fadeInDown">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group @error('ccv') has-error @enderror" style="margin-right: 10px">
                        <input class="form-control" name="ccv" placeholder="CCV" type="text">
                        @error('ccv')
                        <div id="email-error" class="help-block animated fadeInDown">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group @error('zip') has-error @enderror" style="margin-right: 10px">
                        <input class="form-control" name="zip" placeholder="ZIP" type="text">
                        @error('zip')
                        <div id="email-error" class="help-block animated fadeInDown">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <button type="submit" value="Update Wallet" class="btn btn-primary">Update Wallet</button>
                    </div>
                </div>
            </form>
        </div>
        {{--        <div class="form-group">--}}
        {{--            <div class="col-md-2"></div>--}}
        {{--            <div class="col-md-10 text-center">--}}
        {{--                <input type="submit" value="Set Wallet" class="btn btn-primary">--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
    </div>
@endsection
