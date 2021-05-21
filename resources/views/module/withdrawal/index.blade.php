@extends('layout.left-menu')
@section('subhead')
    <title>Withdrawal</title>
@endsection
@section('wrapper')
    <div class="row">
        @include('layout.components.alert')

        <div class="col-md-6">
            <div class="white-box" style="border-radius: 10px">
                <form class="" action="{{route('withdrawalIndex')}}" method="POST">
                    @csrf
                    <h2 class="header-title">Withdrawal</h2>
                    <h5>Amount</h5>

                    <div class="form-group @error('amount') has-error @enderror">
                        <input class="form-control" name="amount" placeholder="Amount" type="text">
                        @error('amount')
                        <div id="email-error" class="help-block animated fadeInDown">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Withdrawal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
