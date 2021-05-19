@extends('layout.left-menu')
@section('subhead')
    <title>User - {{$user->name}}</title>
@endsection

@section('wrapper')
    <div class="row">
        <div class="col-md-6">
            <div class="white-box">
                <h2 class="header-title">Set Wallet - {{$user->name}}</h2>

                <form class="form-horizontal" action="{{route('setWallet', $user->id)}}" method="POST" >

                    <div class="form-group">
                        <label class="col-md-2 control-label">Status</label>
                        <div class="col-md-10">
                            <select name="status" class="form-control input">
                                <option {{$user->status === '1' ? 'selected' : ''}} value="1">Active</option>
                                <option {{$user->status === '2' ? 'selected' : ''}} value="2">Block</option>
                                <option {{$user->status === '0' ? 'selected' : ''}} value="2">Pending</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Wallet</label>
                        <div class="col-md-10">
                            <input class="form-control" name="wallet" placeholder="Enter wallet address" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="example-email">Total Balance</label>
                        <div class="col-md-10">
                            <input name="total_balance" class="form-control" placeholder="Enter Total Balance"
                                   type="number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="example-email">Available Balance</label>
                        <div class="col-md-10">
                            <input name="available_balance" class="form-control" placeholder="Enter Available Balance"
                                   type="number">
                        </div>
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
