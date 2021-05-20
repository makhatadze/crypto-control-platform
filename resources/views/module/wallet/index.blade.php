@extends('layout.left-menu')
@section('subhead')
    <title>My Wallet</title>
@endsection
@section('wrapper')

    <div class="row">
        <div class="col-md-8">
            <div class="white-box" style="line-break: anywhere">
                <h4 class="header-title">Wallet Address</h4>
                <h2>{{$user->wallet->wallet}}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-4">
                    <div class="pricing-table">

                        <div class="pricing-header">
                            <h2>Total Balance</h2>
                            <h3>{{number_format($user->wallet->total_balance)}}<span>$</span> </h3>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pricing-table">

                        <div class="pricing-header">
                            <h2>Available Balance</h2>
                            <h3>{{number_format($user->wallet->available_balance)}}<span>$</span> </h3>
                        </div>

                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
@endsection
