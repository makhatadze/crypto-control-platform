@extends('layout.left-menu')
@section('subhead')
    <title>User - {{$user->name}}</title>
@endsection

@section('wrapper')
    <div class="row">
        @include('layout.components.alert')
        <div class="col-md-6">
            <div class="white-box">
                <h2 class="header-title">{{$user->name}} - Status</h2>

                <form class="form-horizontal" action="{{route('userStatus', [$user->id])}}" method="POST">

                    <div class="form-group">
                        <label class="col-md-2 control-label">User Status</label>
                        <div class="col-md-10">
                            <select name="status" class="form-control input">
                                <option {{$user->status === 1 ? 'selected' : ''}} value="1">Active</option>
                                <option {{$user->status === 2 ? 'selected' : ''}} value="2">Block</option>
                            </select>
                        </div>
                    </div>

                    @csrf
                    <div class="form-group m-t-10">
                        <div class="col-md-2"></div>
                        <div class="col-md-10 text-center">
                            <input type="submit" value="Change Status" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
