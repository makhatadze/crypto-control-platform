@extends('layout.left-menu')
@section('subhead')
    <title>User - {{$user->name}}</title>
@endsection

@section('wrapper')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3><b>Full Name</b> <span> - {{$user->name}}</span></h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pull-left">
                            <h4>
                                Email - {{$user->email}}
                            </h4>
                            <h4>
                                Phone - {{$user->phone}}
                            </h4>
                            <h4>Status -
                                @if($user->status === 0)
                                    Pending
                                @elseif($user->status === 2)
                                    <span style="color: red">Block</span>
                                @else
                                    <span style="color: green">Activate</span>
                                @endif
                            </h4>
                            <h4>Verification -
                                @if($user->verify === 0)
                                    <span style="color: red">Not Verify</span>
                                @elseif($user->verify === 2)
                                    Pending
                                @else
                                    <span style="color: green">Verify</span>
                                @endif
                            </h4>


                        </div>
                    </div>
                    <div class="col-md-6">
                        @if($user->wallet)
                            <h4>
                                Wallet - {{$user->wallet->wallet}}
                            </h4>
                            <h4>
                                Total Balance - {{$user->wallet->total_balance !== null ? number_format($user->wallet->total_balance) : 0}} - BTC
                            </h4>
                            <h4>
                                Available Balance - {{$user->wallet->available_balance !== null ? number_format($user->wallet->available_balance) : 0}} - BTC
                            </h4>
                        @endif
                    </div>
                </div>
                @if($user->verify && $user->verifySuccess)
                    <hr>
                    <h3><b>Verification Information</b></h3>
                    <h4>
                        Full Name - {{$user->verifySuccess->name}}
                    </h4>
                    <h4>
                        Email - {{$user->verifySuccess->email}}
                    </h4>
                    <h4>
                        Address -
                        @switch($user->verifySuccess->address)
                            @case(1)
                            Utility bill (gas, water, electric)
                            @break
                            @case(2)
                            Telecom bill (internet or landline)
                            @break
                            @case(3)
                            Paper bank or credit card statement
                            @break
                            @case(4)
                            Original electronic bank or credit card statement in PDF
                        @endswitch
                    </h4>
                    @if($user->verifySuccess->files)
                        @foreach($user->verifySuccess->files()->get() as $key=> $file)
                            @if($key === 0 || $key === 3)
                                <div class="row">
                                    @endif
                                    <a href="{{url('storage/file/'.$user->verifySuccess->id. '/'.$file->name)}}"
                                       target="_blank">
                                        <div class="panel-wrap">
                                            <div class="col-md-4">
                                                <div class="panel panel-default">
                                                    @switch($file->type)
                                                        @case(\App\Models\File::FILE_WITH_SELFIE)
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">With Selfie</h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            <img style="height: 224px; width: 200px"
                                                                 src="{{url('storage/file/'.$user->verifySuccess->id. '/'.$file->name)}}">
                                                        </div>
                                                        @break
                                                        @case(\App\Models\File::FILE_DOCUMENT)
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">Document</h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            Click here and show
                                                        </div>
                                                        @break
                                                        @case(\App\Models\File::FILE_PASSPORT)
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">Passport</h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            <img style="height: 224px; width: 200px"
                                                                 src="{{url('storage/file/'.$user->verifySuccess->id. '/'.$file->name)}}">
                                                        </div>
                                                        @break
                                                        @case(\App\Models\File::FILE_DRIVING_BACK)
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">Driving Back</h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            <img style="height: 224px; width: 200px"
                                                                 src="{{url('storage/file/'.$user->verifySuccess->id. '/'.$file->name)}}">
                                                        </div>
                                                        @break
                                                        @case(\App\Models\File::FILE_DRIVING_FRONT)
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">Driving Front</h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            <img style="height: 224px; width: 200px"
                                                                 src="{{url('storage/file/'.$user->verifySuccess->id. '/'.$file->name)}}">
                                                        </div>
                                                        @break
                                                        @case(\App\Models\File::FILE_NATIONAL_BACK)
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">National Back</h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            <img style="height: 224px; width: 200px"
                                                                 src="{{url('storage/file/'.$user->verifySuccess->id. '/'.$file->name)}}">
                                                        </div>
                                                        @break
                                                        @case(\App\Models\File::FILE_NATIONAL_FRONT)
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">National Front</h3>
                                                        </div>
                                                        <div class="panel-body">
                                                            <img style="height: 224px; width: 200px"
                                                                 src="{{url('storage/file/'.$user->verifySuccess->id. '/'.$file->name)}}">
                                                        </div>
                                                    @endswitch

                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    @if($key === 2 || $key === 5)
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>

@endsection
