@extends('layout.left-menu')
@section('subhead')
    <title>User - {{$user->name}}</title>
@endsection

@section('wrapper')
    <div class="row">
        <div class="col-md-6">
            <div class="white-box">
                <h2 class="header-title">Set Wallet - {{$user->name}}</h2>

                <form class="form-horizontal" action="{{route('walletCreate', $user->id)}}" method="POST">

                    <div class="form-group @error('wallet') has-error @enderror">
                        <label class="col-md-2 control-label">Wallet</label>
                        <div class="col-md-10">
                            <input class="form-control" name="wallet" placeholder="Enter wallet address" type="text"
                                   value="{{old('wallet')}}">
                        </div>
                        <div class="col-md-2 control-label"></div>
                        @error('wallet')
                        <div class="col-md-10">
                            <div id="email-error" class="help-block animated fadeInDown">
                                {{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Status Wallet</label>
                        <div class="col-md-10">
                            <select name="status-wallet" class="form-control input">
                                <option selected value="0">Frozen</option>
                                <option value="1">Active</option>
                                <option value="2">Block</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group @error('total_balance') has-error @enderror">
                        <label class="col-md-2 control-label" for="example-email">Total Balance</label>
                        <div class="col-md-10">
                            <input name="total_balance" class="form-control" placeholder="Enter Total Balance"
                                   type="number" value="{{old('total_balance')}}">
                        </div>
                        <div class="col-md-2 control-label"></div>
                        @error('total_balance')
                        <div class="col-md-10">
                            <div id="email-error" class="help-block animated fadeInDown">
                                {{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group @error('available_balance') has-error @enderror">
                        <label class="col-md-2 control-label" for="example-email">Available Balance</label>
                        <div class="col-md-10">
                            <input name="available_balance" class="form-control" placeholder="Enter Available Balance"
                                   type="number" value="{{old('available_balance')}}">
                        </div>
                        @error('available_balance')
                        <div class="col-md-10">
                            <div id="email-error" class="help-block animated fadeInDown">
                                {{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>
                    @csrf
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-10 text-center">
                            <input type="submit" value="Set Wallet" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
