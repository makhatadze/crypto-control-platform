@extends('layout.left-menu')
@section('subhead')
    <title>User - {{$verification->name}}</title>
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
            <form class="" action="{{route('editVerify', $verification->id)}}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="">Verification Status</label>
                        <select name="status" class="form-control input">
                            <option {{$verification->status === 1 ? 'selected' : ''}} value="1">Success</option>
                            <option {{$verification->status === 0 ? 'selected' : ''}} value="0">Failed</option>
                        </select>
                        <br>
                        <input type="submit" value="Set Status" class="btn btn-primary">
                    </div>
                </div>
                {{--        <div class="form-group">--}}
                {{--            <div class="col-md-10">--}}
                {{--                <input type="submit" value="Set Status" class="btn btn-primary">--}}
                {{--            </div>--}}
                {{--        </div>--}}
            </form>
        </div>


        <div style="border-bottom: 1px solid grey;margin-left: 16px;width:400px">
            <div class="panel panel-color  panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">User Info</h3>
                </div>
                <div class="panel-body">
                    <p><strong>Name:</strong> {{$verification->name}}</p>
                    <p><strong>Email:</strong> {{$verification->email}}</p>
                    <p><strong>Address:</strong>
                        @switch($verification->address)
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
                    </p>
                    <p>
                        <strong>Status:</strong> {{$verification->status === 1 ? 'Success' : ($verification->status === 0?'Failed':'Pending')}}
                    </p>
                </div>
            </div>
        </div>
        <br>

        <div class="panel-wrap">
            @if($verification->filePassport)
                <div class="col-md-4">
                    <div class="panel panel-color  panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Passport Image</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="/storage/file/{{$verification->filePassport->fileable_id}}/{{$verification->filePassport->name}}"
                                   target="_blank">
                                    <img
                                        src="/storage/file/{{$verification->filePassport->fileable_id}}/{{$verification->filePassport->name}}"/>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            @if($verification->fileDrivingBack)
                <div class="col-md-4">
                    <div class="panel panel-color  panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Driving Image Back</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="/storage/file/{{$verification->fileDrivingBack->fileable_id}}/{{$verification->fileDrivingBack->name}}"
                                   target="_blank">
                                    <img
                                        src="/storage/file/{{$verification->fileDrivingBack->fileable_id}}/{{$verification->fileDrivingBack->name}}"/>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif


            @if($verification->fileDrivingFront)
                <div class="col-md-4">
                    <div class="panel panel-color  panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Driving Image Front</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="/storage/file/{{$verification->fileDrivingFront->fileable_id}}/{{$verification->fileDrivingFront->name}}"
                                   target="_blank">
                                    <img
                                        src="/storage/file/{{$verification->fileDrivingFront->fileable_id}}/{{$verification->fileDrivingFront->name}}"/>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            @if($verification->fileNationalFront)
                <div class="col-md-4">
                    <div class="panel panel-color  panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">National ID Front</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="/storage/file/{{$verification->fileNationalFront->fileable_id}}/{{$verification->fileNationalFront->name}}"
                                   target="_blank">
                                    <img
                                        src="/storage/file/{{$verification->fileNationalFront->fileable_id}}/{{$verification->fileNationalFront->name}}"/>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            @if($verification->fileNationalBack)
                <div class="col-md-4">
                    <div class="panel panel-color  panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">National ID Back</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="/storage/file/{{$verification->fileNationalBack->fileable_id}}/{{$verification->fileNationalBack->name}}"
                                   target="_blank">
                                    <img
                                        src="/storage/file/{{$verification->fileNationalBack->fileable_id}}/{{$verification->fileNationalBack->name}}"/>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            @if($verification->fileWithSelfie)
                <div class="col-md-4">
                    <div class="panel panel-color  panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Selfie Image</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="/storage/file/{{$verification->fileWithSelfie->fileable_id}}/{{$verification->fileWithSelfie->name}}"
                                   target="_blank">
                                    <img
                                        src="/storage/file/{{$verification->fileWithSelfie->fileable_id}}/{{$verification->fileWithSelfie->name}}"/>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            @if($verification->fileDocument)
                <div class="col-md-4">
                    <div class="panel panel-color  panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Document</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="{{url('storage/file/'.$verification->fileDocument->fileable_id. '/'.$verification->fileDocument->name)}}"
                                   target="_blank"> Click here and show</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection
