@extends('layout.left-menu')
@section('subhead')
    <title>User - verify</title>
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

    <div class="white-box">
        <div class="row" style="margin-left: 0">
            <form class="" action="{{route('changeVerification', $user->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="">Verification Status</label>
                        <select name="status" class="form-control input">
                            <option {{$user->verify === 1 ? 'selected' : ''}} value="1">Success</option>
                            <option {{ $user->verify === 0 ? 'selected' : ''}} value="0">Failed</option>
                            <option {{ $user->verify === 2 ? 'selected' : ''}} value="2">Pending</option>
                        </select>
                        <div class="form-group m-t-5 @error('liquidity') has-error @enderror">
                            <label class="">Liquidity check</label>
                                <input class="form-control" name="liquidity" placeholder="Enter Liquidity" type="text" value="{{$user->liquidity}}">
                        </div>
                        <br>
                        <input type="submit" value="Set Status" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
