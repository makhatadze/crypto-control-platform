@extends('layout.left-menu')
@section('subhead')
    <title>My Wallet</title>
@endsection

@section('wrapper')

    <div class="row">
        <div class="col-md-8">
            <div class="white-box" style="line-break: anywhere">
                <h4 class="header-title">Wallet Address</h4>
                <h2>bc1qtkpd267ylnutg7jujw5qetje82mplu5tjrpn43</h2>
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
                            <h3>205,813<span>$</span> </h3>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pricing-table">

                        <div class="pricing-header">
                            <h2>Available Balance</h2>
                            <h3>205,813<span>$</span> </h3>
                        </div>

                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
@endsection
