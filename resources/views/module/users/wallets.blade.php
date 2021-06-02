@extends('layout.left-menu')
@section('subhead')
    <title>User - {{$user->name}}</title>
@endsection

@section('wrapper')
    <style>
        .panel-wrap img {
            float: left;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
    <div class="row">
        @include('layout.components.alert')
    </div>

    <div class="white-box">
        <div class="panel-wrap">

            <div class="col-md-12">
                <div class="p-b-10">
                    <a href="{{route('walletCreate',$user->id)}}" class="btn btn-success ">Add Wallet</a>
                </div>
            </div>

        </div>
        <div class="panel-wrap">
            @if($user->wallets)
                @foreach($user->wallets as $key => $wallet)
                    <div class="col-md-4">
                        <div class="panel panel-color  panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Wallet - 1</h3>
                            </div>
                            <div class="panel-body">
                                Wallet: {{$wallet->wallet}}
                                <br>
                                <br>
                                Status:
                                @if($user->wallet->status === 0)
                                    Frozen
                                @elseif($user->wallet->status === 1)
                                    Active
                                @else
                                    Blocked
                                @endif
                                <br>
                                <br>
                                Total Balance: {{$wallet->total_balance}}
                                <br>
                                <br>
                                Available Balance: {{$wallet->available_balance}}
                            </div>
                            <a href="{{route('editWallet',[$user->id,$wallet->id])}}" class="btn btn-info m-b-5 m-l-5">Edit</a>
                            <a href="" class="btn btn-warning m-b-5 m-l-5">Change Currency</a>
                            <a href="{{route('deleteWallet',[$user->id, $wallet->id])}}"
                               onclick="return confirm('Are you sure?')" class="btn btn-danger m-b-5 m-l-5">Delete</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
